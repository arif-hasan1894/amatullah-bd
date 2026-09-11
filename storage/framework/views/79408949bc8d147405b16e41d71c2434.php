<style>
    .change-date-range {
        position: absolute;
        top: -52px;
        right: 80px;
    }

    .change-date-range .btn {
        padding: 5px 10px;
        border-radius: 0 !important;
    }
</style>
<div class="col-12">
    <div class="btn-group change-date-range">
        <a
            class="btn btn-sm btn-secondary"
            data-bs-toggle="dropdown"
            href="javascript:;"
            aria-expanded="false"
        >
            <i
                class="fa fa-filter"
                aria-hidden="true"
            ></i>
            <span><?php echo e($defaultRange); ?></span>
            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-caret-down'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        </a>
        <ul class="dropdown-menu float-end">
            <li>
                <a href="<?php echo e(route('ecommerce.report.revenue', ['filter' => 'date'])); ?>">
                    <?php echo e(trans('plugins/ecommerce::reports.today')); ?>

                </a>
            </li>
            <li>
                <a href="<?php echo e(route('ecommerce.report.revenue', ['filter' => 'week'])); ?>">
                    <?php echo e(trans('plugins/ecommerce::reports.this_week')); ?>

                </a>
            </li>
            <li>
                <a href="<?php echo e(route('ecommerce.report.revenue', ['filter' => 'month'])); ?>">
                    <?php echo e(trans('plugins/ecommerce::reports.this_month')); ?>

                </a>
            </li>
            <li>
                <a href="<?php echo e(route('ecommerce.report.revenue', ['filter' => 'year'])); ?>">
                    <?php echo e(trans('plugins/ecommerce::reports.this_year')); ?>

                </a>
            </li>
        </ul>
    </div>
    <?php if(!empty($chartTime)): ?>
        <?php echo $chartTime->renderChart(); ?>

    <?php else: ?>
        <?php echo $__env->make('core/dashboard::partials.no-data', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/reports/partials/revenue.blade.php ENDPATH**/ ?>