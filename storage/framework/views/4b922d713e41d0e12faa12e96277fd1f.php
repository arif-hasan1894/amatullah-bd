<?php if($data instanceof Illuminate\Pagination\LengthAwarePaginator && $data->withQueryString()): ?>
    <div class="number_record">
        <input
            type="number"
            class="numb"
            value="<?php echo e($limit); ?>"
            step="5"
            min="5"
            max="<?php echo e($data->total()); ?>"
        >
        <div class="btn_grey btn_change_paginate btn_up"></div>
        <div class="btn_grey btn_change_paginate btn_down"></div>
    </div>

    <div class="pagination d-flex align-items-center m-0 ms-auto">
        <?php
            $info = $data->total() > 0 ? ($data->currentPage() - 1) * $limit + 1 : 0;
            $info .= '- ' . ($limit < $data->total() ? $data->currentPage() * $limit : $data->total()) . ' ';
            $info .= trans('core/base::tables.in') . ' ' . $data->total() . ' ' . trans('core/base::tables.records');
        ?>
        <p class="m-0 me-2 text-muted"><?php echo e($info); ?></p>
        <li class="page-item">
            <a
                class="page-link page_previous <?php if($data->onFirstPage()): ?> disabled <?php endif; ?>"
                href="<?php echo e($data->previousPageUrl()); ?>"
            >
                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-chevron-left'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        </li>
        <li class="page-item">
            <a
                class="page-link page_next <?php if(!$data->hasMorePages()): ?> disabled <?php endif; ?>"
                href="<?php echo e($data->nextPageUrl()); ?>"
            >
                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-chevron-right'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        </li>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/core/dashboard/resources/views/partials/paginate.blade.php ENDPATH**/ ?>