<?php if($reference): ?>
    <?php
        $wrapperClass = apply_filters('ecommerce_cart_bundle_badge_wrapper_class', 'cart-bundle-badge mt-2');
        $badgeClass = apply_filters('ecommerce_cart_bundle_badge_class', 'badge');
    ?>
    <div class="<?php echo e($wrapperClass); ?>">
        <span
            class="<?php echo e($badgeClass); ?>"
            style="background: #2fb344; color: #ffffff; display: inline-flex; align-items: center; max-width: 100%; font-size: 12px; font-weight: 500; padding: 4px 8px; border-radius: 4px; line-height: 1.4;"
            title="<?php echo e(trans('plugins/ecommerce::products.up_sale.bundle_discount_with', ['product' => $referenceProduct?->name ?? $reference])); ?>"
        >
            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-discount-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'width: 14px; height: 14px; flex-shrink: 0;','class' => 'me-1']); ?>
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
            <span style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                <?php echo e(trans('plugins/ecommerce::products.up_sale.bundle_with', ['product' => Str::limit($referenceProduct?->name ?? $reference, 25)])); ?>

            </span>
        </span>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/includes/cart-bundle-badge.blade.php ENDPATH**/ ?>