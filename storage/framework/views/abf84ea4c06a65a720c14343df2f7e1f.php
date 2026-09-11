<?php
    $title = $title ?? trans('plugins/ecommerce::ecommerce.your_cart_is_empty');
    $description = $description ?? trans('plugins/ecommerce::review.explore_and_add_items_to_get_started');
    $route = $route ?? route('public.products');
    $label = $label ?? trans('plugins/ecommerce::review.start_shopping');
    // Optional Tabler icon name (e.g. 'ti ti-arrows-left-right'); themes
    // can style .bb-empty-state-icon to render this above the heading.
    $icon = $icon ?? null;
?>

<div class="text-center pt-50 bb-empty-state">
    <?php if($icon): ?>
        <div class="bb-empty-state-icon mb-4">
            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        </div>
    <?php endif; ?>
    <h3 class="mb-3"><?php echo BaseHelper::clean($title); ?></h3>
    <p class="mb-3"><?php echo BaseHelper::clean($description); ?></p>
    <a href="<?php echo e($route); ?>" class="btn btn-outline-primary"><?php echo BaseHelper::clean($label); ?></a>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/includes/empty-state.blade.php ENDPATH**/ ?>