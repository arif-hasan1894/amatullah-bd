<li
    class="dd-item dd3-item <?php if($row->reference_id > 0): ?> post-item <?php endif; ?>"
    data-menu-item="<?php echo e(Js::encode(
        Arr::only(apply_filters('menu_nodes_item_data', $row)->toArray(), [
            'id',
            'menu_id',
            'parent_id',
            'reference_id',
            'reference_type',
            'url',
            'icon_font',
            'title',
            'css_class',
            'target',
            'has_child',
            'position',
        ]),
    )); ?>"
>
    <div class="dd-handle dd3-handle"></div>
    <div class="dd3-content d-flex justify-content-between">
        <label class="menu-item-select">
            <input
                type="checkbox"
                class="form-check-input"
                aria-label="<?php echo e($row->title); ?>"
                data-menu-node-select
            >
        </label>
        <div
            data-update="title"
            class="fw-medium text-truncate pe-4"
            title="<?php echo e($row->title); ?>"
        ><?php echo e($row->title); ?></div>
        <div class="text-end me-5 text-nowrap">
            <?php echo e(Arr::last(explode('\\', (string) $row->reference_type)) ?: trans('packages/menu::menu.custom_link')); ?>

        </div>
        <a
            class="show-item-details"
            href="#"
        >
            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-chevron-down'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
    </div>
    <div class="item-details">
        <?php echo Botble\Menu\Forms\MenuNodeForm::createFromModel($row)->renderForm([], false, true, false); ?>

        <div class="text-end mt-2">
            <a
                class="btn btn-danger btn-remove btn-sm"
                href="#"
            ><?php echo e(trans('packages/menu::menu.remove')); ?></a>
            <a
                class="btn btn-primary btn-cancel btn-sm"
                href="#"
            ><?php echo e(trans('packages/menu::menu.cancel')); ?></a>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php if($row->has_child): ?>
        <?php echo Menu::generateMenu([
            'menu' => $menu,
            'menu_nodes' => $row->child,
            'view' => 'packages/menu::partials.menu',
            'theme' => false,
            'active' => false,
        ]); ?>

    <?php endif; ?>
</li>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/menu/resources/views/partials/node.blade.php ENDPATH**/ ?>