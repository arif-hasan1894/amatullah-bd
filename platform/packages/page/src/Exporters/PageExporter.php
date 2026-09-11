<?php

namespace Botble\Page\Exporters;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\DataSynchronize\Exporter\ExportColumn;
use Botble\DataSynchronize\Exporter\ExportCounter;
use Botble\DataSynchronize\Exporter\Exporter;
use Botble\Media\Facades\RvMedia;
use Botble\Page\Models\Page;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class PageExporter extends Exporter
{
    // AMATULLAH_SEO_SYNC_V1
    protected ?int $limit = null;

    protected ?string $status = null;

    protected ?string $template = null;

    protected ?string $startDate = null;

    protected ?string $endDate = null;

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

    public function setTemplate(?string $template): static
    {
        $this->template = $template;

        return $this;
    }

    public function setDateRange(?string $startDate, ?string $endDate): static
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;

        return $this;
    }

    public function getLabel(): string
    {
        return trans('packages/page::pages.pages');
    }

    public function columns(): array
    {
        return [
            ExportColumn::make('name'),
            ExportColumn::make('description'),
            ExportColumn::make('content'),
            ExportColumn::make('image'),
            ExportColumn::make('template'),
            ExportColumn::make('slug'),
            ExportColumn::make('url')
                ->label('URL'),
            ExportColumn::make('status')
                ->dropdown(BaseStatusEnum::values()),
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

        if ($this->template) {
            $query->where('template', $this->template);
        }

        if ($this->startDate) {
            $query->whereDate('created_at', '>=', Carbon::parse($this->startDate));
        }

        if ($this->endDate) {
            $query->whereDate('created_at', '<=', Carbon::parse($this->endDate));
        }

        if ($this->limit) {
            $query->latest()->limit($this->limit);
        } else {
            $query->oldest();
        }
    }

    public function counters(): array
    {
        $query = Page::query();

        $this->applyFilters($query);

        return [
            ExportCounter::make()
                ->label(trans('packages/page::pages.export.total'))
                ->value($query->count()),
        ];
    }

    public function hasDataToExport(): bool
    {
        return Page::query()->exists();
    }

    public function collection(): Collection
    {
        $query = Page::query()
            ->with(['slugable']);

        $this->applyFilters($query);

        /** @var Collection<int, Page> $pages */
        $pages = $query->get();

        return $pages
            ->transform(fn (Page $page) => [
                ...$page->toArray(),
                'slug' => $page->slugable?->key,
                'url' => $page->url,
                'image' => RvMedia::getImageUrl($page->image),
                'seo_title' => is_array($seo = $page->getMetaData('seo_meta', true)) ? ($seo['seo_title'] ?? '') : '',
                'seo_description' => is_array($seo) ? ($seo['seo_description'] ?? '') : '',
                'seo_image' => is_array($seo) ? ($seo['seo_image'] ?? '') : '',
                'seo_index' => is_array($seo) ? ($seo['index'] ?? 'index') : 'index',
            ]);
    }

    protected function getView(): string
    {
        return 'packages/page::pages.export';
    }
}
