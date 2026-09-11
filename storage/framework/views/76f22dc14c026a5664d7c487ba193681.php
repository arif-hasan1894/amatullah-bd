<?php $__env->startSection('title', trans('plugins/ecommerce::order.order_successfully_at_site', ['site_title' => Theme::getSiteTitle()])); ?>

<?php $__env->startPush('header'); ?>
    <?php echo $__env->make('plugins/ecommerce::orders.partials.google-ads-conversion', ['orders' => $orders], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>

<?php
    $firstOrder = $orders->first();
    $customerName = $firstOrder->address?->name ?: $firstOrder->user?->name ?: trans('plugins/marketplace::order.thank_you.customer');
?>

<?php $__env->startSection('content'); ?>
    <div class="checkout-success-page">
        <div class="checkout-success-header">
            <?php echo $__env->make('plugins/ecommerce::orders.partials.logo', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <div class="success-confirmation">
                <div class="success-checkmark">
                    <svg viewBox="0 0 52 52" class="checkmark-svg">
                        <circle class="checkmark-circle" cx="26" cy="26" r="25" fill="none"/>
                        <path class="checkmark-check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                    </svg>
                </div>

                <div class="success-message">
                    <p class="success-order-number">
                        <?php if($orders->count() > 1): ?>
                            <?php echo e(trans('plugins/marketplace::order.thank_you.count_orders', ['count' => $orders->count()])); ?>

                        <?php else: ?>
                            <?php echo e(trans('plugins/marketplace::order.thank_you.order')); ?> <?php echo e($firstOrder->code); ?>

                        <?php endif; ?>
                    </p>
                    <h1 class="success-title"><?php echo e(trans('plugins/marketplace::order.thank_you.thank_you_name', ['name' => $customerName])); ?></h1>
                </div>
            </div>
        </div>

        <div class="checkout-success-body">
            <div class="checkout-success-main">
                <div class="confirmation-card">
                    <div class="confirmation-card-header">
                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-circle-check'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'confirmation-icon']); ?>
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
                        <div class="confirmation-text">
                            <h2><?php echo e(trans('plugins/marketplace::order.thank_you.order_confirmed')); ?></h2>
                            <p><?php echo e(trans('plugins/marketplace::order.thank_you.order_accepted')); ?></p>
                        </div>
                    </div>
                </div>

                <?php echo $__env->make('plugins/ecommerce::orders.thank-you.customer-info', [
                    'order' => $orders,
                    'isShowShipping' => false,
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                <?php if(EcommerceHelper::isEnabledSupportDigitalProducts()): ?>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('plugins/ecommerce::orders.partials.digital-product-downloads-frontend', ['order' => $order], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <div class="success-actions">
                    <a class="btn-continue-shopping" href="<?php echo e(BaseHelper::getHomepageUrl()); ?>">
                        <?php echo e(trans('plugins/ecommerce::order.continue_shopping')); ?>

                    </a>
                    <?php if(auth('customer')->check()): ?>
                        <a class="btn-view-orders" href="<?php echo e(route('customer.orders')); ?>">
                            <?php echo e(trans('plugins/marketplace::order.thank_you.view_order_history')); ?>

                        </a>
                    <?php endif; ?>
                </div>

                <?php if(Route::has('public.contact')): ?>
                    <div class="help-section">
                        <p><?php echo e(trans('plugins/marketplace::order.thank_you.need_help')); ?> <a href="<?php echo e(route('public.contact')); ?>"><?php echo e(trans('plugins/marketplace::order.thank_you.contact_us')); ?></a></p>
                    </div>
                <?php endif; ?>
            </div>

            <div class="checkout-success-sidebar">
                <?php
                    $isUnifiedShipping = ! MarketplaceHelper::isChargeShippingPerVendor();
                    $totalShippingAmount = $orders->sum('shipping_amount');
                    $hasShipping = $orders->filter(fn ($order) => $order->shipment && $order->shipment->id)->count() > 0;
                ?>

                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="order-summary-card <?php if(!$loop->last): ?> mb-3 <?php endif; ?>">
                        <?php echo $__env->make('plugins/ecommerce::orders.thank-you.order-info', ['isShowTotalInfo' => false], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                        <div class="order-totals-section">
                            <?php if($order->sub_total != $order->amount): ?>
                                <?php echo $__env->make('plugins/ecommerce::orders.thank-you.total-row', [
                                    'label' => trans('plugins/ecommerce::order.sub_amount'),
                                    'value' => format_price($order->sub_total),
                                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <?php endif; ?>

                            <?php if($order->shipping_method->getValue()): ?>
                                <?php echo $__env->make('plugins/ecommerce::orders.thank-you.total-row', [
                                    'label' => trans('plugins/ecommerce::order.shipping_fee'),
                                    'value' => $order->shipping_method_name . ((float) $order->shipping_amount ? ' - ' . format_price($order->shipping_amount) : ' - ' . trans('plugins/ecommerce::ecommerce.free')),
                                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <?php endif; ?>

                            <?php if(EcommerceHelper::isTaxEnabled() && (float) $order->tax_amount): ?>
                                <?php if(EcommerceHelper::isDisplayCheckoutTaxInformation()): ?>
                                    <?php
                                        $taxGroups = [];
                                        foreach ($order->products as $orderProduct) {
                                            if ($orderProduct->tax_amount > 0 && !empty($orderProduct->options['taxClasses'])) {
                                                foreach ($orderProduct->options['taxClasses'] as $taxName => $taxRate) {
                                                    $taxKey = $taxName . ' ' . $taxRate . '%';
                                                    if (!isset($taxGroups[$taxKey])) {
                                                        $taxGroups[$taxKey] = 0;
                                                    }
                                                    $taxGroups[$taxKey] += $orderProduct->tax_amount;
                                                }
                                            }
                                        }
                                    ?>

                                    <?php if(!empty($taxGroups)): ?>
                                        <?php $__currentLoopData = $taxGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taxName => $taxAmount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo $__env->make('plugins/ecommerce::orders.thank-you.total-row', [
                                                'label' => trans('plugins/ecommerce::order.tax'),
                                                'value' => format_price($taxAmount) . ' <small>(' . $taxName . ')</small>',
                                            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <?php echo $__env->make('plugins/ecommerce::orders.thank-you.total-row', [
                                            'label' => trans('plugins/ecommerce::order.tax'),
                                            'value' => format_price($order->tax_amount),
                                        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <?php echo $__env->make('plugins/ecommerce::orders.thank-you.total-row', [
                                        'label' => trans('plugins/ecommerce::order.tax'),
                                        'value' => format_price($order->tax_amount),
                                    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                <?php endif; ?>
                            <?php endif; ?>

                            <?php if((float) ($order->shipping_tax_amount ?? 0)): ?>
                                <?php echo $__env->make('plugins/ecommerce::orders.thank-you.total-row', [
                                    'label' => trans('plugins/ecommerce::order.shipping_tax'),
                                    'value' => format_price($order->shipping_tax_amount),
                                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <?php endif; ?>

                            <?php if((float) $order->discount_amount): ?>
                                <?php echo $__env->make('plugins/ecommerce::orders.thank-you.total-row', [
                                    'label' => trans('plugins/ecommerce::order.discount'),
                                    'value' => format_price($order->discount_amount) .
                                        ($order->coupon_code ? ' <small>(' . trans('plugins/ecommerce::order.using_coupon_code') . ': <strong>' . $order->coupon_code . '</strong>)</small>' : ''),
                                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <?php endif; ?>

                            <?php if((float) $order->payment_fee): ?>
                                <?php echo $__env->make('plugins/ecommerce::orders.thank-you.total-row', [
                                    'label' => trans('plugins/payment::payment.payment_fee'),
                                    'value' => format_price($order->payment_fee),
                                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <?php endif; ?>

                            <div class="order-total-row">
                                <span class="order-total-label"><?php echo e(trans('plugins/ecommerce::order.total_amount')); ?>:</span>
                                <span class="order-total-value"><?php echo e(format_price($order->amount)); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php if(count($orders) > 1): ?>
                    <div class="order-summary-card order-grand-total-card mt-3">
                        <div class="order-summary-header">
                            <h3 class="order-summary-title"><?php echo e(trans('plugins/marketplace::order.thank_you.order_total')); ?></h3>
                        </div>

                        <div class="order-totals-section">
                            <?php echo $__env->make('plugins/ecommerce::orders.thank-you.total-row', [
                                'label' => trans('plugins/ecommerce::order.sub_amount'),
                                'value' => format_price($orders->sum('sub_total')),
                            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                            <?php if($hasShipping && $totalShippingAmount > 0): ?>
                                <?php echo $__env->make('plugins/ecommerce::orders.thank-you.total-row', [
                                    'label' => trans('plugins/ecommerce::order.shipping_fee'),
                                    'value' => format_price($totalShippingAmount),
                                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <?php endif; ?>

                            <?php if($orders->sum('discount_amount')): ?>
                                <?php echo $__env->make('plugins/ecommerce::orders.thank-you.total-row', [
                                    'label' => trans('plugins/ecommerce::order.discount'),
                                    'value' => format_price($orders->sum('discount_amount')),
                                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <?php endif; ?>

                            <?php if(EcommerceHelper::isTaxEnabled() && $orders->sum('tax_amount')): ?>
                                <?php echo $__env->make('plugins/ecommerce::orders.thank-you.total-row', [
                                    'label' => trans('plugins/ecommerce::order.tax'),
                                    'value' => format_price($orders->sum('tax_amount')),
                                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <?php endif; ?>

                            <?php if($orders->sum('shipping_tax_amount')): ?>
                                <?php echo $__env->make('plugins/ecommerce::orders.thank-you.total-row', [
                                    'label' => trans('plugins/ecommerce::order.shipping_tax'),
                                    'value' => format_price($orders->sum('shipping_tax_amount')),
                                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <?php endif; ?>

                            <?php if($orders->sum('payment_fee')): ?>
                                <?php echo $__env->make('plugins/ecommerce::orders.thank-you.total-row', [
                                    'label' => trans('plugins/payment::payment.payment_fee'),
                                    'value' => format_price($orders->sum('payment_fee')),
                                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <?php endif; ?>

                            <div class="order-total-row order-grand-total">
                                <span class="order-total-label"><?php echo e(trans('plugins/ecommerce::order.total_amount')); ?>:</span>
                                <span class="order-total-value"><?php echo e(format_price($orders->sum('amount'))); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plugins/ecommerce::orders.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/orders/thank-you.blade.php ENDPATH**/ ?>