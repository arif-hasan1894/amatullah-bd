<?php
    $orders = $order;

    if ($orders instanceof \Illuminate\Support\Collection) {
        $order = $orders->where('is_finished', true)->first();

        if (! $order) {
            $order = $orders->first();
        }
    }

    $userInfo = null;
    if ($order->address && $order->address->id) {
        $userInfo = $order->address;
    } elseif ($order->user && $order->user->id) {
        $userInfo = $order->user;
    }

    $hasShippingInfo = !empty($isShowShipping) && $order->shipping_method->getValue();
    $hasPaymentInfo = is_plugin_active('payment') && $order->payment && $order->payment->id;
?>

<div class="customer-info-card">
    <h3 class="card-section-title"><?php echo e(trans('plugins/ecommerce::order.customer_information')); ?></h3>

    <div class="info-grid">
        <?php if($userInfo): ?>
            <div class="info-block">
                <h4 class="info-block-title"><?php echo e(trans('plugins/ecommerce::order.contact_information')); ?></h4>
                <div class="info-block-content">
                    <?php if($userInfo->email): ?>
                        <p class="info-item">
                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-mail'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'info-icon']); ?>
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
                            <span><?php echo e($userInfo->email); ?></span>
                        </p>
                    <?php endif; ?>
                    <?php if($userInfo->phone): ?>
                        <p class="info-item">
                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-phone'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'info-icon']); ?>
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
                            <span><?php echo e($userInfo->phone); ?></span>
                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <?php if($order->full_address || ($userInfo->name && !in_array('address', EcommerceHelper::getHiddenFieldsAtCheckout()))): ?>
                <div class="info-block">
                    <h4 class="info-block-title"><?php echo e($hasShippingInfo ? trans('plugins/ecommerce::order.checkout.shipping_address') : trans('plugins/ecommerce::order.customer_details')); ?></h4>
                    <div class="info-block-content">
                        <?php if($userInfo->name): ?>
                            <p class="info-item"><?php echo e($userInfo->name); ?></p>
                        <?php endif; ?>
                        <?php if($order->full_address && !in_array('address', EcommerceHelper::getHiddenFieldsAtCheckout())): ?>
                            <p class="info-item address-text"><?php echo e($order->full_address); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <?php if($hasShippingInfo): ?>
            <div class="info-block">
                <h4 class="info-block-title"><?php echo e(trans('plugins/ecommerce::shipping.shipping_method')); ?></h4>
                <div class="info-block-content">
                    <p class="info-item">
                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-truck'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'info-icon']); ?>
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
                        <span><?php echo e($order->shipping_method_name); ?></span>
                    </p>
                    <?php if((float) $order->shipping_amount): ?>
                        <p class="info-item-secondary"><?php echo e(format_price($order->shipping_amount)); ?></p>
                    <?php else: ?>
                        <p class="info-item-secondary shipping-free"><?php echo e(trans('plugins/ecommerce::ecommerce.free')); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if($hasPaymentInfo): ?>
            <div class="info-block">
                <h4 class="info-block-title"><?php echo e(trans('plugins/ecommerce::order.payment_method')); ?></h4>
                <div class="info-block-content">
                    <p class="info-item">
                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-credit-card'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'info-icon']); ?>
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
                        <span><?php echo e($order->payment->payment_channel->displayName()); ?></span>
                    </p>
                    <p class="info-item payment-status">
                        <span class="status-badge status-<?php echo e($order->payment->status->getValue()); ?>">
                            <?php echo e($order->payment->status->label()); ?>

                        </span>
                    </p>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <?php if($hasPaymentInfo): ?>
        <?php if(
            setting('payment_bank_transfer_display_bank_info_at_the_checkout_success_page', false) &&
            ($bankInfo = OrderHelper::getOrderBankInfo($orders))
        ): ?>
            <div class="payment-info-full-width bank-info-block">
                <?php echo $bankInfo; ?>

            </div>
        <?php else: ?>
            <div class="payment-info-full-width">
                <?php echo $__env->make('plugins/ecommerce::orders.partials.payment-proof-upload', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <?php echo apply_filters('ecommerce_thank_you_customer_info', null, $order); ?>

</div>

<?php if($tax = $order->taxInformation): ?>
    <div class="customer-info-card tax-info-card">
        <h3 class="card-section-title"><?php echo e(trans('plugins/ecommerce::order.tax_information')); ?></h3>
        <div class="info-grid">
            <div class="info-block info-block-full">
                <div class="tax-info-grid">
                    <div class="tax-info-item">
                        <span class="tax-label"><?php echo e(trans('plugins/ecommerce::order.tax_info.company_name')); ?></span>
                        <span class="tax-value"><?php echo e($tax->company_name); ?></span>
                    </div>
                    <div class="tax-info-item">
                        <span class="tax-label"><?php echo e(trans('plugins/ecommerce::order.tax_info.company_tax_code')); ?></span>
                        <span class="tax-value"><?php echo e($tax->company_tax_code); ?></span>
                    </div>
                    <div class="tax-info-item">
                        <span class="tax-label"><?php echo e(trans('plugins/ecommerce::order.tax_info.company_email')); ?></span>
                        <span class="tax-value"><?php echo e($tax->company_email); ?></span>
                    </div>
                    <div class="tax-info-item">
                        <span class="tax-label"><?php echo e(trans('plugins/ecommerce::order.tax_info.company_address')); ?></span>
                        <span class="tax-value"><?php echo e($tax->company_address); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/orders/thank-you/customer-info.blade.php ENDPATH**/ ?>