<?php

namespace Botble\LanguageAdvanced\Exporters;

use Botble\Base\Supports\Language as LanguageSupport;
use Botble\DataSynchronize\Exporter\ExportColumn;
use Botble\DataSynchronize\Exporter\ExportCounter;
use Botble\DataSynchronize\Exporter\Exporter;
use Botble\Blog\Models\Post;
use Botble\Page\Models\Page;
use Botble\Ecommerce\Models\ProductCategory;
use Botble\Ecommerce\Models\Product;
use Botble\Media\Facades\RvMedia;
use Botble\Language\Facades\Language;
use Botble\LanguageAdvanced\Supports\LanguageAdvancedManager;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ModelTranslationExporter extends Exporter
{
    protected string $modelClass;

    public function __construct(?string $modelClass = null)
    {
        $modelClass = $modelClass ?: request()->input('class');

        abort_unless(
            is_string($modelClass) && LanguageAdvancedManager::isSupported($modelClass),
            404
        );

        $this->modelClass = $modelClass;
    }

    public function getLabel(): string
    {
        $modelName = class_basename($this->modelClass);

        return trans('plugins/language-advanced::language-advanced.export_model_translations', ['model' => $modelName]);
    }

    public function columns(): array
    {
        $columns = [
            ExportColumn::make('id')->label('ID'),
            ExportColumn::make('name')->label('Name'),
        ];
        $defaultLanguage = Language::getDefaultLanguage(['lang_code'])?->lang_code;
        $supportedLocales = Language::getSupportedLocales();
        $translatableColumns = LanguageAdvancedManager::getTranslatableColumns($this->modelClass);
        $translationTable = $this->modelClass::query()->getModel()->getTable() . '_translations';
        foreach ($supportedLocales as $properties) {
            if ($properties['lang_code'] == $defaultLanguage) {
                continue;
            }
            $locale = strtolower($properties['lang_code']);
            foreach ($translatableColumns as $column) {
                if (Schema::hasColumn($translationTable, $column)) {
                    $columns[] = ExportColumn::make("{$column}_({$locale})")
                        ->label(Str::title(str_replace('_', ' ', $column)) . " ({$locale})");
                }
            }
            if (in_array($this->modelClass, [Post::class, Page::class, ProductCategory::class, Product::class], true)) {
                $columns[] = ExportColumn::make("seo_title_({$locale})")->label("SEO Title ({$locale})");
                $columns[] = ExportColumn::make("seo_description_({$locale})")->label("SEO Description ({$locale})");
                $columns[] = ExportColumn::make("seo_image_({$locale})")->label("SEO Image ({$locale})");
                $columns[] = ExportColumn::make("seo_index_({$locale})")->label("SEO Index ({$locale})");
            }
        }
        return $columns;
    }

    public function counters(): array
    {
        return [
            ExportCounter::make()
                ->label(trans('plugins/language-advanced::language-advanced.export.total'))
                ->value($this->modelClass::query()->count()),
        ];
    }

    public function hasDataToExport(): bool
    {
        return $this->modelClass::query()->exists();
    }

    public function collection(): Collection
    {
        $items = $this->modelClass::query()->with(['slugable'])->get();
        $result = collect();
        $defaultLanguage = Language::getDefaultLanguage(['lang_code'])?->lang_code;
        $supportedLocales = Language::getSupportedLocales();
        $translatableColumns = LanguageAdvancedManager::getTranslatableColumns($this->modelClass);
        foreach ($items as $item) {
            $data = ['id' => $item->id, 'name' => $item->name];
            $translations = $item->translations;
            foreach ($supportedLocales as $properties) {
                if ($properties['lang_code'] == $defaultLanguage) {
                    continue;
                }
                $langCode = $properties['lang_code'];
                $locale = strtolower($langCode);
                $translation = $translations->where('lang_code', $langCode)->first();
                foreach ($translatableColumns as $column) {
                    $data["{$column}_({$locale})"] = (string) $translation?->{$column};
                }
                if (in_array($this->modelClass, [Post::class, Page::class, ProductCategory::class, Product::class], true)) {
                    $seo = $this->translatedSeo($item, $langCode);
                    $data["seo_title_({$locale})"] = $seo['seo_title'] ?? '';
                    $data["seo_description_({$locale})"] = $seo['seo_description'] ?? '';
                    $data["seo_image_({$locale})"] = isset($seo['seo_image']) ? RvMedia::getImageUrl($seo['seo_image']) : '';
                    $data["seo_index_({$locale})"] = $seo['index'] ?? 'index';
                }
            }
            $result->push($data);
        }
        return $result;
    }

    protected function translatedSeo(Model $post, string $locale): array
    {
        $request = request(); $had = $request->query->has('ref_lang'); $old = $request->query('ref_lang');
        $request->query->set('ref_lang', $locale); LanguageAdvancedManager::clearLocaleCache();
        try { $meta = $post->getMetaData('seo_meta', true); return is_array($meta) ? $meta : []; }
        finally { if ($had) { $request->query->set('ref_lang', $old); } else { $request->query->remove('ref_lang'); } LanguageAdvancedManager::clearLocaleCache(); }
    }
    public static function make(?string $modelClass = null): static
    {
        return app(static::class, ['modelClass' => $modelClass]);
    }

    public function getUrl(): string
    {
        return url()->current() . '?class=' . $this->modelClass;
    }
}
