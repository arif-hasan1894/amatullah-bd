<?php if(EcommerceHelper::isEnabledSupportDigitalProducts() && EcommerceHelper::countDigitalProducts($products) > 0): ?>
    <div class="digital-product-notice">
        <h5 class="digital-product-notice-title"><?php echo e(trans('plugins/ecommerce::order.digital_product_checkout.title')); ?></h5>

        <div class="digital-product-notice-card">
            <div class="d-flex align-items-start gap-3">
                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-cloud-download'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'fs-3 digital-product-notice-icon']); ?>
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
                <div>
                    <p class="mb-2">
                        <?php echo e(trans('plugins/ecommerce::order.digital_product_checkout.message')); ?>

                    </p>
                    <?php
                        $customerEmail = $sessionCheckoutData['email'] ?? auth('customer')->user()?->email;
                    ?>
                    <?php if($customerEmail): ?>
                        <p class="mb-0 text-muted">
                            <strong><?php echo e(__('Email')); ?>:</strong> <?php echo e($customerEmail); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/orders/partials/digital-product-checkout-notice.blade.php ENDPATH**/ ?>