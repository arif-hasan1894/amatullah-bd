<?php

namespace Botble\Page\Importers;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Facades\MetaBox;
use Botble\DataSynchronize\Importer\ImportColumn;
use Botble\DataSynchronize\Importer\Importer;
use Botble\Media\Facades\RvMedia;
use Botble\Page\Models\Page;
use Botble\Slug\Facades\SlugHelper;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PageImporter extends Importer
{
    protected bool $updateExisting = false;
    // AMATULLAH_SEO_SYNC_V1
    public function setUpdateExisting(bool $updateExisting): self
    {
        $this->updateExisting = $updateExisting;

        return $this;
    }

    public function chunkSize(): int
    {
        return 50;
    }

    public function getImportExtraFieldsView(): ?string
    {
        return 'packages/page::pages.partials.page-import-extra-fields';
    }

    public function getLabel(): string
    {
        return trans('packages/page::pages.pages');
    }

    public function columns(): array
    {
        return [
            ImportColumn::make('name')
                ->rules(['required', 'string', 'max:120'], trans('packages/page::pages.import.rules.nullable_string_max', ['attribute' => 'Name', 'max' => 120])),
            ImportColumn::make('slug')
                ->rules(['nullable', 'string', 'max:250'], trans('packages/page::pages.import.rules.nullable_string_max', ['attribute' => 'Slug', 'max' => 250])),
            ImportColumn::make('description')
                ->rules(['nullable', 'string', 'max:400'], trans('packages/page::pages.import.rules.nullable_string_max', ['attribute' => 'Description', 'max' => 400])),
            ImportColumn::make('content')
                ->rules(['nullable', 'string', 'max:300000'], trans('packages/page::pages.import.rules.nullable_string_max', ['attribute' => 'Content', 'max' => '300,000'])),
            ImportColumn::make('image')
                ->rules(['nullable', 'string'], trans('packages/page::pages.import.rules.nullable_string', ['attribute' => 'Image'])),
            ImportColumn::make('template')
                ->rules(['nullable', 'string', 'max:60'], trans('packages/page::pages.import.rules.nullable_string_max', ['attribute' => 'Template', 'max' => 60])),
            ImportColumn::make('status')
                ->rules([Rule::in(BaseStatusEnum::values())], trans('packages/page::pages.import.rules.in', ['attribute' => 'Status', 'values' => implode(', ', BaseStatusEnum::values())])),
            ImportColumn::make('seo_title')->label('SEO Title')->rules(['nullable', 'string', 'max:250']),
            ImportColumn::make('seo_description')->label('SEO Description')->rules(['nullable', 'string', 'max:500']),
            ImportColumn::make('seo_image')->label('SEO Image')->rules(['nullable', 'string', 'max:2048']),
            ImportColumn::make('seo_index')->label('SEO Index')->rules(['nullable', Rule::in(['index', 'noindex'])]),
        ];
    }

    public function examples(): array
    {
        $pages = Page::query()
            ->take(3)
            ->with(['slugable'])
            ->get()
            ->map(function (Page $page) { // @phpstan-ignore-line
                return [
                    ...$page->toArray(),
                    'slug' => $page->slugable?->key,
                    'description' => Str::limit($page->description, 50),
                    'content' => Str::limit($page->content),
                    'image' => RvMedia::getImageUrl($page->image),
                ];
            });

        if ($pages->isNotEmpty()) {
            return $pages->all();
        }

        return [
            [
                'name' => 'About Us',
                'slug' => 'about-us',
                'description' => 'Learn more about our company, our mission, and our team.',
                'content' => 'Welcome to our company. We are dedicated to providing the best service to our customers.',
                'image' => 'https://via.placeholder.com/600x400',
                'template' => 'default',
                'status' => BaseStatusEnum::PUBLISHED,
                'seo_title' => 'SEO title',
                'seo_description' => 'SEO meta description',
                'seo_image' => 'https://example.com/seo-image.jpg',
                'seo_index' => 'index',
            ],
            [
                'name' => 'Contact',
                'slug' => 'contact',
                'description' => 'Get in touch with us for any inquiries or support.',
                'content' => 'Feel free to reach out to us via email or phone. We are here to help.',
                'image' => 'https://via.placeholder.com/600x400',
                'template' => 'default',
                'status' => BaseStatusEnum::PUBLISHED,
            ],
            [
                'name' => 'Terms of Service',
                'slug' => 'terms-of-service',
                'description' => 'Read our terms and conditions before using our services.',
                'content' => 'By using our services, you agree to the following terms and conditions.',
                'image' => '',
                'template' => 'default',
                'status' => BaseStatusEnum::DRAFT,
            ],
        ];
    }

    public function getValidateUrl(): string
    {
        return route('tools.data-synchronize.import.pages.validate');
    }

    public function getImportUrl(): string
    {
        return route('tools.data-synchronize.import.pages.store');
    }

    public function getDownloadExampleUrl(): ?string
    {
        return route('tools.data-synchronize.import.pages.download-example');
    }

    public function getExportUrl(): ?string
    {
        return Auth::user()->hasPermission('pages.export')
            ? route('tools.data-synchronize.export.pages.store')
            : null;
    }

    public function handle(array $data): int
    {
        $count = 0;

        foreach ($data as $row) {
            $seoRow = [
                'seo_title' => Arr::pull($row, 'seo_title'),
                'seo_description' => Arr::pull($row, 'seo_description'),
                'seo_image' => Arr::pull($row, 'seo_image'),
                'seo_index' => Arr::pull($row, 'seo_index'),
            ];
            $slug = Arr::pull($row, 'slug');
            $name = Arr::pull($row, 'name');
            $page = null;

            if ($slug) {
                $slugModel = SlugHelper::getSlug($slug, SlugHelper::getPrefix(Page::class), Page::class);
                if ($slugModel) {
                    $page = Page::query()->find($slugModel->reference_id);
                }
            }

            if (! $page) {
                $page = Page::query()->where('name', $name)->first();
            }

            if ($this->updateExisting && ! $page) {
                continue;
            }

            $created = ! $page;
            $page ??= new Page();
            $page->fill([
                ...$row,
                'name' => $name,
                'image' => $this->resolveMediaImage($row['image'] ?? null, 'pages'),
                'user_id' => $page->user_id ?: Auth::id(),
            ]);
            $page->save();

            if ($slug) {
                SlugHelper::createSlug($page, $slug);
            } elseif ($created) {
                SlugHelper::createSlug($page);
            }

            $this->saveImportedSeoMeta($page, $seoRow);
            $count++;
        }

        return $count;
    }

    protected function saveImportedSeoMeta(\Illuminate\Database\Eloquent\Model $model, array $row): void
    {
        $meta = $model->getMetaData('seo_meta', true);
        $meta = is_array($meta) ? $meta : [];
        foreach (['seo_title', 'seo_description'] as $key) {
            $value = trim((string) ($row[$key] ?? ''));
            if (strcasecmp($value, 'REMOVE') === 0) { unset($meta[$key]); }
            elseif ($value !== '') { $meta[$key] = $value; }
        }
        $image = trim((string) ($row['seo_image'] ?? ''));
        if (strcasecmp($image, 'REMOVE') === 0) { unset($meta['seo_image']); }
        elseif ($image !== '') {
            $image = str_replace(RvMedia::getUploadURL() . '/', '', $image);
            if (Str::startsWith($image, ['http://', 'https://'])) {
                $result = RvMedia::uploadFromUrl($image, 0, 'seo-images/pages');
                if (! $result['error']) { $image = $result['data']->url; }
            }
            $meta['seo_image'] = $image;
        }
        $index = strtolower(trim((string) ($row['seo_index'] ?? '')));
        if ($index === 'noindex') { $meta['index'] = 'noindex'; }
        elseif ($index === 'index') { unset($meta['index']); }
        $meta = array_filter($meta, static fn ($v) => $v !== null && $v !== '');
        if ($meta) { MetaBox::saveMetaBoxData($model, 'seo_meta', $meta); }
        else { MetaBox::deleteMetaData($model, 'seo_meta'); }
    }

}
