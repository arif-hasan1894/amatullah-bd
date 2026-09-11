<?php $__env->startSection('title', trans('plugins/ecommerce::order.order_successfully_id', ['id' => $order->code])); ?>

<?php $__env->startPush('header'); ?>
    <?php echo $__env->make('plugins/ecommerce::orders.partials.google-ads-conversion', ['orders' => [$order]], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>

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
                    <p class="success-order-number"><?php echo e(trans('plugins/ecommerce::order.order')); ?> <?php echo e($order->code); ?></p>
                    <h1 class="success-title"><?php echo e(trans('plugins/ecommerce::order.thank_you_name', ['name' => $order->address?->name ?: $order->user?->name ?: trans('plugins/ecommerce::order.customer')])); ?></h1>
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
                            <h2><?php echo e(trans('plugins/ecommerce::order.your_order_is_confirmed')); ?></h2>
                            <p><?php echo e(trans('plugins/ecommerce::order.order_confirmed_message')); ?></p>
                        </div>
                    </div>
                </div>

                <?php echo $__env->make('plugins/ecommerce::orders.thank-you.customer-info', compact('order'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                <?php if(EcommerceHelper::isEnabledSupportDigitalProducts()): ?>
                    <?php echo $__env->make('plugins/ecommerce::orders.partials.digital-product-downloads-frontend', ['order' => $order], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php endif; ?>

                <div class="success-actions">
                    <a class="btn-continue-shopping" href="<?php echo e(BaseHelper::getHomepageUrl()); ?>">
                        <?php echo e(trans('plugins/ecommerce::order.continue_shopping')); ?>

                    </a>
                    <?php if(auth('customer')->check()): ?>
                        <a class="btn-view-orders" href="<?php echo e(route('customer.orders')); ?>">
                            <?php echo e(trans('plugins/ecommerce::order.view_order_history')); ?>

                        </a>
                    <?php endif; ?>
                </div>

                <?php if(Route::has('public.contact')): ?>
                    <div class="help-section">
                        <p><?php echo e(trans('plugins/ecommerce::order.need_help')); ?> <a href="<?php echo e(route('public.contact')); ?>"><?php echo e(trans('plugins/ecommerce::order.contact_us')); ?></a></p>
                    </div>
                <?php endif; ?>
            </div>

            <div class="checkout-success-sidebar">
                <div class="order-summary-card">
                    <?php echo $__env->make('plugins/ecommerce::orders.thank-you.order-info', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('plugins/ecommerce::orders.thank-you.total-info', ['order' => $order], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plugins/ecommerce::orders.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/orders/thank-you.blade.php ENDPATH**/ ?>