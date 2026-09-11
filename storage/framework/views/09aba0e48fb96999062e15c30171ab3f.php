<?php
    $isConfigurable = $product->has_variation;
?>

<div class="card bb-product-item">
    <a title="<?php echo e($product->name); ?>" href="<?php echo e($product->url); ?>">
        <div class="wrapper">
            <div class="image">
                <?php echo RvMedia::image($product->image, $product->name, 'product-thumb', attributes: ['class' => 'card-img-top']); ?>

            </div>
        </div>
        <div class="card-body">
            <div class="card-title product-name fw-bold mb-3" >
                <a class="text-black" title="<?php echo e($product->name); ?>" href="<?php echo e($product->url); ?>"><?php echo e($product->name); ?></a>
            </div>

            <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-price'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <?php if(EcommerceHelper::isReviewEnabled() && (!EcommerceHelper::hideRatingWhenNoReviews() || $product->reviews_count > 0)): ?>
                <?php echo $__env->make(EcommerceHelper::viewPath('includes.rating'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endif; ?>

            <div class="product-add-cart-btn-large-wrapper">
                <?php if(EcommerceHelper::isCartEnabled()): ?>
                    <button
                        type="button"
                        class="btn btn-primary bb-btn-product-actions-icon"
                        <?php if($isConfigurable): ?>
                            data-url="<?php echo e(route('public.ajax.quick-shop', $product->slug)); ?>"
                        <?php echo EcommerceHelper::jsAttributes('quick-shop', $product); ?>

                        <?php else: ?>
                            data-url="<?php echo e(route('public.cart.add-to-cart')); ?>"
                            data-id="<?php echo e($product->original_product->id); ?>"
                            <?php echo EcommerceHelper::jsAttributes('add-to-cart', $product); ?>

                        <?php endif; ?>
                    >
                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-shopping-cart'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                        <span class="tp-product-tooltip tp-product-tooltip-right">
                            <?php if($isConfigurable): ?>
                                <?php echo e(trans('plugins/ecommerce::ecommerce.select_options')); ?>

                            <?php else: ?>
                                <?php echo e(trans('plugins/ecommerce::ecommerce.add_to_cart')); ?>

                            <?php endif; ?>
                </span>
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </a>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/includes/product-item.blade.php ENDPATH**/ ?>