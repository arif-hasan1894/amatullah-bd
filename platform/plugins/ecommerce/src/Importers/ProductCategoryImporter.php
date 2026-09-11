<?php

namespace Botble\Ecommerce\Importers;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Facades\MetaBox;
use Botble\DataSynchronize\Contracts\Importer\WithMapping;
use Botble\DataSynchronize\Importer\ImportColumn;
use Botble\DataSynchronize\Importer\Importer;
use Botble\Ecommerce\Models\ProductCategory;
use Botble\Media\Facades\RvMedia;
use Botble\Slug\Facades\SlugHelper;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProductCategoryImporter extends Importer implements WithMapping
{
    protected bool $updateExisting = false;
    // AMATULLAH_SEO_SYNC_V1
    public function setUpdateExisting(bool $updateExisting): self
    {
        $this->updateExisting = $updateExisting;

        return $this;
    }

    public function getLabel(): string
    {
        return trans('plugins/ecommerce::product-categories.name');
    }

    public function chunkSize(): int
    {
        return 1000;
    }

    public function getValidateUrl(): string
    {
        return route('tools.data-synchronize.import.product-categories.validate');
    }

    public function getImportUrl(): string
    {
        return route('tools.data-synchronize.import.product-categories.store');
    }

    public function getDownloadExampleUrl(): ?string
    {
        return route('tools.data-synchronize.import.product-categories.download-example');
    }

    public function getExportUrl(): ?string
    {
        return Auth::user()->hasPermission('product-categories.export')
            ? route('tools.data-synchronize.export.product-categories.store')
            : null;
    }

    public function columns(): array
    {
        return [
            ImportColumn::make('name')->rules(['required', 'string', 'max:250']),
            ImportColumn::make('slug')->rules(['nullable', 'string', 'max:250']),
            ImportColumn::make('parent')->rules(['nullable', 'string', 'max:250']),
            ImportColumn::make('description')->rules(['nullable', 'string', 'max:100000']),
            ImportColumn::make('status')->rules([Rule::in(BaseStatusEnum::values())]),
            ImportColumn::make('order')->rules(['nullable', 'integer', 'min:0', 'max:10000']),
            ImportColumn::make('image')->rules(['nullable', 'string', 'max:255']),
            ImportColumn::make('is_featured')
                ->rules(['sometimes', 'boolean'])
                ->boolean(),
            ImportColumn::make('icon')->rules(['nullable', 'string', 'max:50']),
            ImportColumn::make('icon_image')->rules(['nullable', 'string', 'max:255']),
            ImportColumn::make('seo_title')->label('SEO Title')->rules(['nullable', 'string', 'max:250']),
            ImportColumn::make('seo_description')->label('SEO Description')->rules(['nullable', 'string', 'max:500']),
            ImportColumn::make('seo_image')->label('SEO Image')->rules(['nullable', 'string', 'max:2048']),
            ImportColumn::make('seo_index')->label('SEO Index')->rules(['nullable', Rule::in(['index', 'noindex'])]),
        ];
    }

    public function examples(): array
    {
        return [
            [
                'name' => 'Electronics',
                'slug' => 'electronics',
                'parent' => null,
                'description' => 'All kinds of electronic items including gadgets, home appliances, and more.',
                'status' => 'published',
                'order' => 1,
                'image' => 'electronics.jpg',
                'is_featured' => true,
                'icon' => null,
                'icon_image' => 'electronics-icon.png',
                'seo_title' => 'SEO title',
                'seo_description' => 'SEO meta description',
                'seo_image' => 'https://example.com/seo-image.jpg',
                'seo_index' => 'index',
            ],
            [
                'name' => 'Books',
                'slug' => 'books',
                'parent' => null,
                'description' => 'Wide variety of books across different genres and languages.',
                'status' => 'draft',
                'order' => 2,
                'image' => 'books.jpg',
                'is_featured' => false,
                'icon' => 'ti ti-book',
                'icon_image' => null,
            ],
            [
                'name' => 'Clothing',
                'slug' => 'clothing',
                'parent' => null,
                'description' => 'Fashionable and comfortable clothing for men, women, and children.',
                'status' => 'published',
                'order' => 3,
                'image' => 'clothing.jpg',
                'is_featured' => true,
                'icon' => null,
                'icon_image' => 'clothing-icon.png',
            ],
            [
                'name' => 'Home & Kitchen',
                'slug' => 'home-kitchen',
                'parent' => null,
                'description' => 'Essentials for your home and kitchen needs.',
                'status' => 'published',
                'order' => 4,
                'image' => 'home-kitchen.jpg',
                'is_featured' => false,
                'icon' => null,
                'icon_image' => 'home-kitchen-icon.png',
            ],
            [
                'name' => 'Sports & Outdoors',
                'slug' => 'sports-outdoors',
                'parent' => null,
                'description' => 'Equipment and gear for sports and outdoor activities.',
                'status' => 'draft',
                'order' => 5,
                'image' => 'sports-outdoors.jpg',
                'is_featured' => true,
                'icon' => 'ti ti-motorbike',
                'icon_image' => null,
            ],
        ];
    }

    public function handle(array $data): int
    {
        $total = 0;

        foreach ($data as $row) {
            $slug = Arr::pull($row, 'slug');

            $seoRow = [
                'seo_title' => Arr::pull($row, 'seo_title'),
                'seo_description' => Arr::pull(
                    $row,
                    'seo_description'
                ),
                'seo_image' => Arr::pull($row, 'seo_image'),
                'seo_index' => Arr::pull($row, 'seo_index'),
            ];

            $parentName = Arr::pull($row, 'parent');

            $row['parent_id'] = $parentName
                ? (
                    ProductCategory::query()
                        ->where('name', $parentName)
                        ->value('id') ?: 0
                )
                : 0;

            $category = null;

            if ($slug) {
                $slugModel = SlugHelper::getSlug(
                    $slug,
                    SlugHelper::getPrefix(
                        ProductCategory::class
                    ),
                    ProductCategory::class
                );

                if ($slugModel) {
                    $category = ProductCategory::query()
                        ->find($slugModel->reference_id);
                }
            }

            if (! $category) {
                $category = ProductCategory::query()
                    ->where('name', $row['name'])
                    ->first();
            }

            if ($this->updateExisting && ! $category) {
                continue;
            }

            $isNewCategory = ! $category;

            if (! $category) {
                $category = new ProductCategory();
            }

            $category->fill($row);
            $category->save();

            if ($slug) {
                SlugHelper::createSlug($category, $slug);
            } elseif ($isNewCategory) {
                SlugHelper::createSlug($category);
            }

            $this->saveImportedSeoMeta(
                $category,
                $seoRow
            );

            $total++;
        }

        return $total;
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
                $result = RvMedia::uploadFromUrl($image, 0, 'seo-images/product-categories');
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

    public function map(mixed $row): array
    {
        return [
            ...$row,
            'order' => Arr::get($row, 'order') ?: 0,
        ];
    }
}
