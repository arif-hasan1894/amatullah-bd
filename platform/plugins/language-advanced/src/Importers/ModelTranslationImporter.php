<?php

namespace Botble\LanguageAdvanced\Importers;

use Botble\DataSynchronize\Contracts\Importer\WithMapping;
use Botble\DataSynchronize\Importer\ImportColumn;
use Botble\DataSynchronize\Importer\Importer;
use Botble\Base\Facades\MetaBox;
use Botble\Blog\Models\Post;
use Botble\Page\Models\Page;
use Botble\Ecommerce\Models\ProductCategory;
use Botble\Ecommerce\Models\Product;
use Botble\Media\Facades\RvMedia;
use Botble\Language\Facades\Language as LanguageFacade;
use Botble\LanguageAdvanced\Supports\LanguageAdvancedManager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ModelTranslationImporter extends Importer implements WithMapping
{
    protected string $modelClass;
    protected bool $updateExistingTranslations = false;

    public function __construct(?string $modelClass = null)
    {
        $modelClass = $modelClass ?: request()->input('class');

        abort_unless(
            is_string($modelClass) && LanguageAdvancedManager::isSupported($modelClass),
            404
        );

        $this->modelClass = $modelClass;
    }

    public function setUpdateExistingTranslations(bool $updateExisting): self
    {
        $this->updateExistingTranslations = $updateExisting;

        return $this;
    }

    public function isForModel(string $modelClass): bool
    {
        return $this->modelClass === $modelClass;
    }

    public function chunkSize(): int
    {
        return 100;
    }

    public function getLabel(): string
    {
        $modelName = class_basename($this->modelClass);

        return trans('plugins/language-advanced::language-advanced.import_model_translations', ['model' => $modelName]);
    }

    public function columns(): array
    {
        $columns = [
            ImportColumn::make('id')
                ->label('ID')
                ->rules(['required', 'integer'], trans('plugins/language-advanced::language-advanced.import.rules.id')),
            ImportColumn::make('name')
                ->label('Name')
                ->rules(['required', 'string', 'max:255'], trans('plugins/language-advanced::language-advanced.import.rules.name')),
        ];

        $defaultLanguage = LanguageFacade::getDefaultLanguage(['lang_code'])?->lang_code;
        $supportedLocales = LanguageFacade::getSupportedLocales();
        $translatableColumns = LanguageAdvancedManager::getTranslatableColumns($this->modelClass);

        foreach ($supportedLocales as $properties) {
            if ($properties['lang_code'] != $defaultLanguage) {
                $langCode = strtolower($properties['lang_code']);

                foreach ($translatableColumns as $column) {
                    if (! Schema::hasColumn($this->modelClass::query()->getModel()->getTable() . '_translations', $column)) {
                        continue;
                    }

                    $maxLength = $column === 'content' ? 300000 : ($column === 'description' ? 65535 : 300000);

                    $columns[] = ImportColumn::make("{$column}_({$langCode})")
                        ->label(Str::title($column) . ' (' . $langCode . ')')
                        ->rules(
                            ['nullable', 'string', 'max:' . $maxLength],
                            trans('plugins/language-advanced::language-advanced.import.rules.' . $column, ['max' => $maxLength])
                        );
                }
            }
        }

        // AMATULLAH_POST_TRANSLATION_SEO_COLUMNS_V1
        if (in_array($this->modelClass, [Post::class, Page::class, ProductCategory::class, Product::class], true)) {
            foreach ($supportedLocales as $properties) {
                if ($properties['lang_code'] != $defaultLanguage) {
                    $langCode = strtolower($properties['lang_code']);
                    $columns[] = ImportColumn::make("seo_title_({$langCode})")->label("SEO Title ({$langCode})")->rules(['nullable', 'string', 'max:250']);
                    $columns[] = ImportColumn::make("seo_description_({$langCode})")->label("SEO Description ({$langCode})")->rules(['nullable', 'string', 'max:500']);
                    $columns[] = ImportColumn::make("seo_image_({$langCode})")->label("SEO Image ({$langCode})")->rules(['nullable', 'string', 'max:2048']);
                    $columns[] = ImportColumn::make("seo_index_({$langCode})")->label("SEO Index ({$langCode})")->rules(['nullable', 'string', 'in:index,noindex,REMOVE']);
                }
            }
        }
        return $columns;
    }

    public function getValidateUrl(): string
    {
        return route('tools.data-synchronize.import.translations.validate', ['type' => 'model', 'class' => $this->modelClass]);
    }

    public function getImportUrl(): string
    {
        return route('tools.data-synchronize.import.translations.store', ['type' => 'model', 'class' => $this->modelClass]);
    }

    public function getDownloadExampleUrl(): ?string
    {
        return route('tools.data-synchronize.import.translations.download-example', ['type' => 'model' , 'class' => $this->modelClass]);
    }

    public function getExportUrl(): ?string
    {
        return Auth::user()->hasPermission('translations.export')
            ? route('tools.data-synchronize.export.translations.store', ['type' => 'model', 'class' => $this->modelClass])
            : null;
    }

    public function map(mixed $row): array
    {
        return $row;
    }

    public function examples(): array
    {
        $defaultLanguage = LanguageFacade::getDefaultLanguage(['lang_code'])?->lang_code;
        $supportedLocales = LanguageFacade::getSupportedLocales();
        $translatableColumns = LanguageAdvancedManager::getTranslatableColumns($this->modelClass);

        $tableName = app($this->modelClass)->getTable();
        $translationTable = $tableName . '_translations';
        $foreignKey = $tableName . '_id';

        $items = $this->modelClass::query()
            ->take(5)
            ->get()
            ->map(function (Model $item) use ($defaultLanguage, $supportedLocales, $translatableColumns, $foreignKey, $translationTable) {
                $data = [
                    'id' => $item->id,
                    'name' => $item->name,
                ];

                foreach ($supportedLocales as $locale) {
                    if ($locale['lang_code'] != $defaultLanguage) {
                        $langCode = $locale['lang_code'];
                        $translation = DB::table($translationTable)
                            ->where($foreignKey, $item->id)
                            ->where('lang_code', $langCode)
                            ->first();

                        foreach ($translatableColumns as $column) {
                            $data[$column . '_' . $langCode] = $translation->{$column} ?? '';
                        }
                    }
                }

                return $data;
            });

        if ($items->isNotEmpty()) {
            return $items->all();
        }

        // Example data if no items exist
        $examples = [
            [
                'id' => 1,
                'name' => 'Example Item 1',
            ],
            [
                'id' => 2,
                'name' => 'Example Item 2',
            ],
            [
                'id' => 3,
                'name' => 'Example Item 3',
            ],
        ];

        foreach ($supportedLocales as $locale) {
            if ($locale['lang_code'] != $defaultLanguage) {
                $langCode = $locale['lang_code'];

                foreach ($examples as &$example) {
                    foreach ($translatableColumns as $column) {
                        $example[$column . '_(' . $langCode . ')'] = '';
                    }
                }
            }
        }

        return $examples;
    }

    public function handle(array $data): int
    {
        $count = 0;
        $defaultLanguage = LanguageFacade::getDefaultLanguage(['lang_code'])?->lang_code;
        $supportedLocales = LanguageFacade::getSupportedLocales();
        $translatableColumns = LanguageAdvancedManager::getTranslatableColumns($this->modelClass);

        $tableName = app($this->modelClass)->getTable();
        $translationTable = $tableName . '_translations';
        $foreignKey = $tableName . '_id';

        foreach ($data as $row) {
            $itemId = $row['id'];
            $item = $this->modelClass::query()->find($itemId);

            if (! $item) {
                continue;
            }

            foreach ($supportedLocales as $locale) {
                if ($locale['lang_code'] != $defaultLanguage) {
                    $langCode = $locale['lang_code'];

                    $translationData = [
                        'lang_code' => $langCode,
                        $foreignKey => $itemId,
                    ];

                    if ($this->updateExistingTranslations && ! DB::table($translationTable)
                        ->where('lang_code', $langCode)
                        ->where($foreignKey, $itemId)
                        ->exists()) {
                        continue;
                    }

                    foreach ($translatableColumns as $column) {
                        $columnKey = $column . '_(' . strtolower($langCode) . ')';
                        if (isset($row[$columnKey])) {
                            $translationData[$column] = $row[$columnKey];
                        }
                    }

                    // Only update if we have at least one translatable column with data
                    if (count($translationData) > 2) {
                        DB::table($translationTable)
                            ->updateOrInsert(
                                [
                                    'lang_code' => $langCode,
                                    $foreignKey => $itemId,
                                ],
                                $translationData
                            );

                        $count++;
                    }
                    // AMATULLAH_POST_TRANSLATION_SEO_SAVE_V1
                    if (in_array($this->modelClass, [Post::class, Page::class, ProductCategory::class, Product::class], true) && $this->saveTranslatedSeo($item, $row, $langCode)) {
                        if (count($translationData) <= 2) {
                            $count++;
                        }
                    }
                }
            }
        }

        return $count;
    }

    protected function saveTranslatedSeo(Model $post, array $row, string $langCode): bool
    {
        $suffix = strtolower($langCode);
        $keys = ['seo_title', 'seo_description', 'seo_image', 'seo_index'];
        $provided = false;
        foreach ($keys as $key) {
            if (array_key_exists("{$key}_({$suffix})", $row)) { $provided = true; break; }
        }
        if (! $provided) { return false; }
        return $this->withTranslationLocale($langCode, function () use ($post, $row, $suffix): bool {
            $meta = $post->getMetaData('seo_meta', true);
            $meta = is_array($meta) ? $meta : [];
            foreach (['seo_title', 'seo_description'] as $key) {
                $value = trim((string) ($row["{$key}_({$suffix})"] ?? ''));
                if (strcasecmp($value, 'REMOVE') === 0) { unset($meta[$key]); }
                elseif ($value !== '') { $meta[$key] = $value; }
            }
            $image = trim((string) ($row["seo_image_({$suffix})"] ?? ''));
            if (strcasecmp($image, 'REMOVE') === 0) { unset($meta['seo_image']); }
            elseif ($image !== '') {
                $image = str_replace(RvMedia::getUploadURL() . '/', '', $image);
                if (Str::startsWith($image, ['http://', 'https://'])) {
                    $result = RvMedia::uploadFromUrl($image, 0, $post instanceof Page ? 'seo-images/pages' : ($post instanceof ProductCategory ? 'seo-images/product-categories' : ($post instanceof Product ? 'seo-images/products' : 'seo-images/posts')));
                    if (! $result['error']) { $image = $result['data']->url; }
                }
                $meta['seo_image'] = $image;
            }
            $index = strtolower(trim((string) ($row["seo_index_({$suffix})"] ?? '')));
            if ($index === 'noindex') { $meta['index'] = 'noindex'; }
            elseif ($index === 'index' || $index === 'remove') { unset($meta['index']); }
            $meta = array_filter($meta, static fn ($v) => $v !== null && $v !== '');
            if ($meta) { MetaBox::saveMetaBoxData($post, 'seo_meta', $meta); }
            else { MetaBox::deleteMetaData($post, 'seo_meta'); }
            return true;
        });
    }
    protected function withTranslationLocale(string $langCode, callable $callback): mixed
    {
        $request = request(); $had = $request->query->has('ref_lang'); $old = $request->query('ref_lang');
        $request->query->set('ref_lang', $langCode); LanguageAdvancedManager::clearLocaleCache();
        try { return $callback(); }
        finally { if ($had) { $request->query->set('ref_lang', $old); } else { $request->query->remove('ref_lang'); } LanguageAdvancedManager::clearLocaleCache(); }
    }
    public static function make(?string $modelClass = null): static
    {
        return app(static::class, ['modelClass' => $modelClass]);
    }
}
