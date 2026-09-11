<?php

namespace Botble\Blog\Exporters;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Blog\Models\Post;
use Botble\Blog\Supports\PostFormat;
use Botble\DataSynchronize\Exporter\ExportColumn;
use Botble\DataSynchronize\Exporter\ExportCounter;
use Botble\DataSynchronize\Exporter\Exporter;
use Botble\Media\Facades\RvMedia;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class PostExporter extends Exporter
{
    // AMATULLAH_SEO_SYNC_V1
    protected ?int $limit = null;

    protected ?string $status = null;

    protected ?bool $isFeatured = null;

    protected ?string $startDate = null;

    protected ?string $endDate = null;

    protected ?int $categoryId = null;

    public function setLimit(?int $limit): static
    {
        $this->limit = $limit;

        return $this;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function setIsFeatured(?bool $isFeatured): static
    {
        $this->isFeatured = $isFeatured;

        return $this;
    }

    public function setDateRange(?string $startDate, ?string $endDate): static
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;

        return $this;
    }

    public function setCategoryId(?int $categoryId): static
    {
        $this->categoryId = $categoryId;

        return $this;
    }
    public function getLabel(): string
    {
        return trans('plugins/blog::posts.posts');
    }

    public function columns(): array
    {
        return [
            ExportColumn::make('name'),
            ExportColumn::make('description'),
            ExportColumn::make('content'),
            ExportColumn::make('is_featured')
                ->boolean(),
            ExportColumn::make('format_type')
                ->dropdown(array_keys(PostFormat::getPostFormats(true))),
            ExportColumn::make('image'),
            ExportColumn::make('views'),
            ExportColumn::make('slug'),
            ExportColumn::make('url')
                ->label('URL'),
            ExportColumn::make('status')
                ->dropdown(BaseStatusEnum::values()),
            ExportColumn::make('categories'),
            ExportColumn::make('tags'),
            ExportColumn::make('seo_title')->label('SEO Title'),
            ExportColumn::make('seo_description')->label('SEO Description'),
            ExportColumn::make('seo_image')->label('SEO Image'),
            ExportColumn::make('seo_index')->label('SEO Index'),
        ];
    }

    protected function applyFilters(Builder $query): void
    {
        if ($this->status) {
            $query->where('status', $this->status);
        }

        if ($this->isFeatured !== null) {
            $query->where('is_featured', $this->isFeatured);
        }

        if ($this->startDate) {
            $query->whereDate('created_at', '>=', Carbon::parse($this->startDate));
        }

        if ($this->endDate) {
            $query->whereDate('created_at', '<=', Carbon::parse($this->endDate));
        }

        if ($this->categoryId) {
            $query->whereHas('categories', function ($q): void {
                $q->where('categories.id', $this->categoryId);
            });
        }

        if ($this->limit) {
            $query->latest()->limit($this->limit);
        } else {
            $query->oldest();
        }
    }

    public function counters(): array
    {
        $query = Post::query();

        $this->applyFilters($query);

        return [
            ExportCounter::make()
                ->label(trans('plugins/blog::posts.export.total'))
                ->value($query->count()),
        ];
    }

    public function hasDataToExport(): bool
    {
        return Post::query()->exists();
    }

    public function collection(): Collection
    {
        $query = Post::query()
            ->with(['categories', 'tags', 'slugable']);

        $this->applyFilters($query);

        /** @var Collection<int, Post> $posts */
        $posts = $query->get();

        return $posts
            ->transform(fn (Post $post) => [
                ...$post->toArray(),
                'slug' => $post->slugable->key,
                'url' => $post->url,
                'image' => RvMedia::getImageUrl($post->image),
                'categories' => $post->categories->pluck('name')->implode(', '),
                'tags' => $post->tags->pluck('name')->implode(', '),
                'seo_title' => is_array($seo = $post->getMetaData('seo_meta', true)) ? ($seo['seo_title'] ?? '') : '',
                'seo_description' => is_array($seo) ? ($seo['seo_description'] ?? '') : '',
                'seo_image' => is_array($seo) ? ($seo['seo_image'] ?? '') : '',
                'seo_index' => is_array($seo) ? ($seo['index'] ?? 'index') : 'index',
            ]);
    }

    protected function getView(): string
    {
        return 'plugins/blog::posts.export';
    }
}
