<?php echo $__env->make('core/base::layouts.' . AdminAppearance::getCurrentLayout() . '.partials.aside', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<header
    class="navbar navbar-expand-md d-none d-lg-flex d-print-none"
    data-bs-theme="dark"
>
    <div class="<?php echo e(AdminAppearance::getContainerWidth()); ?>">
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbar-menu"
            aria-controls="navbar-menu"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="flex-row navbar-nav">
            <div class="d-flex align-items-center me-3">
                <?php echo $__env->make('core/base::global-search.navbar-input', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
        </div>

        <div class="flex-row navbar-nav order-md-last">
            <?php if(BaseHelper::getAdminPrefix() != ''): ?>
                <div class="d-flex align-items-center me-3">
                    <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::button','data' => ['tag' => 'a','href' => url('/'),'icon' => 'ti ti-world','target' => '_blank']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'a','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url('/')),'icon' => 'ti ti-world','target' => '_blank']); ?>
                        <?php echo e(trans('core/base::layouts.view_website')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $attributes = $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $component = $__componentOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
                </div>
            <?php endif; ?>
            <div class="d-none d-md-flex me-2">
                <?php echo $__env->make('core/base::layouts.partials.theme-toggle', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                <?php if(auth()->guard()->check()): ?>
                    <?php echo apply_filters(BASE_FILTER_TOP_HEADER_LAYOUT, null); ?>

                <?php endif; ?>
            </div>

            <?php echo $__env->make('core/base::layouts.partials.user-menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
        <div
            class="collapse navbar-collapse"
            id="navbar-menu"
        ></div>
    </div>
</header>
<?php /**PATH /var/www/dev.amatullah.bd/platform/core/base/resources/views/layouts/vertical/partials/navbar.blade.php ENDPATH**/ ?>