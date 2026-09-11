
<div
    class="compare-picker"
    data-bb-toggle="compare-picker"
    data-search-url="<?php echo e(route('public.compare.search-products')); ?>"
    data-add-by-url="<?php echo e(route('public.compare.add-by-url')); ?>"
    data-loading-text="<?php echo e(trans('plugins/ecommerce::products.compare.picker_loading')); ?>"
    data-empty-text="<?php echo e(trans('plugins/ecommerce::products.compare.picker_empty')); ?>"
    aria-hidden="true"
>
    <div class="compare-picker-backdrop" data-bb-toggle="compare-picker-close" aria-hidden="true"></div>

    <div
        class="compare-picker-dialog"
        role="dialog"
        aria-modal="true"
        aria-labelledby="compare-picker-title"
        tabindex="-1"
    >
        <header class="compare-picker-head">
            <h2 id="compare-picker-title" class="compare-picker-title">
                <?php echo e(trans('plugins/ecommerce::products.compare.picker_title')); ?>

            </h2>
            <button
                type="button"
                class="compare-picker-close"
                data-bb-toggle="compare-picker-close"
                aria-label="<?php echo e(trans('plugins/ecommerce::ecommerce.close') ?? 'Close'); ?>"
            >
                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-x'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
            </button>
        </header>

        <div class="compare-picker-search">
            <input
                type="search"
                class="compare-picker-search-input"
                data-bb-toggle="compare-picker-search"
                placeholder="<?php echo e(trans('plugins/ecommerce::products.compare.picker_search_placeholder')); ?>"
                aria-label="<?php echo e(trans('plugins/ecommerce::products.compare.picker_search_placeholder')); ?>"
                autocomplete="off"
            >
            <span class="compare-picker-search-icon" aria-hidden="true">
                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-search'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
            </span>
        </div>

        <div class="compare-picker-body" data-bb-toggle="compare-picker-body">
            <div class="compare-picker-grid" data-bb-toggle="compare-picker-grid"></div>

            <div class="compare-picker-status" data-bb-toggle="compare-picker-status" aria-live="polite"></div>

            <button
                type="button"
                class="compare-picker-load-more"
                data-bb-toggle="compare-picker-load-more"
                hidden
            >
                <?php echo e(trans('plugins/ecommerce::products.compare.load_more')); ?>

            </button>
        </div>

        <footer class="compare-picker-foot">
            <details class="compare-picker-url">
                <summary class="compare-picker-url-summary">
                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-link'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
                    <?php echo e(trans('plugins/ecommerce::products.compare.paste_url_alt')); ?>

                </summary>
                <form
                    class="compare-picker-url-form mt-2"
                    data-bb-toggle="compare-picker-url-form"
                    action="<?php echo e(route('public.compare.add-by-url')); ?>"
                    method="POST"
                >
                    <?php echo csrf_field(); ?>
                    <div class="input-group">
                        <input
                            type="url"
                            name="url"
                            class="form-control"
                            placeholder="<?php echo e(trans('plugins/ecommerce::products.compare.paste_url_placeholder')); ?>"
                            required
                            maxlength="2048"
                            autocomplete="off"
                        >
                        <button type="submit" class="btn btn-primary">
                            <?php echo e(trans('plugins/ecommerce::products.compare.add_button')); ?>

                        </button>
                    </div>
                </form>
            </details>
        </footer>
    </div>

    
    <template data-bb-toggle="compare-picker-card-template">
        <article class="compare-picker-card">
            <a class="compare-picker-card-thumb" href="#" tabindex="-1">
                <img alt="" loading="lazy">
            </a>
            <h3 class="compare-picker-card-title">
                <a href="#"></a>
            </h3>
            <div class="compare-picker-card-prices">
                <span class="compare-picker-card-price"></span>
                <span class="compare-picker-card-price-old"></span>
            </div>
            <button
                type="button"
                class="compare-picker-card-select btn btn-primary"
                data-bb-toggle="compare-picker-select"
            >
                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-plus'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
                <?php echo e(trans('plugins/ecommerce::products.compare.choose_to_compare')); ?>

            </button>
        </article>
    </template>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/includes/compare-picker-modal.blade.php ENDPATH**/ ?>