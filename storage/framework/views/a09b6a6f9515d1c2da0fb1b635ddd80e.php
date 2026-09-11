<?php
    if (! EcommerceHelper::isReviewEnabled()) {
        return;
    }

    $selectedRating = (int) request()->query('rating');
?>

<div class="bb-product-filter">
    <h4 class="bb-product-filter-title"><?php echo e(trans('plugins/ecommerce::products.rating')); ?></h4>

    <div class="bb-product-filter-content">
        <ul class="bb-product-filter-items filter-checkbox">
            <?php for($value = 5; $value >= 1; $value--): ?>
                <li class="bb-product-filter-item">
                    <input id="filter-rating-<?php echo e($value); ?>" type="radio" name="rating" value="<?php echo e($value); ?>" data-action="apply-filter" <?php if($selectedRating === $value): echo 'checked'; endif; ?> />
                    <label for="filter-rating-<?php echo e($value); ?>">
                        <?php for($star = 1; $star <= 5; $star++): ?>
                            <?php if($star <= $value): ?>
                                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-star-filled'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                            <?php else: ?>
                                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-star'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                            <?php endif; ?>
                        <?php endfor; ?>
                        <span><?php echo e($value > 1 ? trans('plugins/ecommerce::products.stars_and_up', ['count' => $value]) : trans('plugins/ecommerce::products.star_and_up', ['count' => $value])); ?></span>
                    </label>
                </li>
            <?php endfor; ?>
        </ul>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/includes/filters/rating.blade.php ENDPATH**/ ?>