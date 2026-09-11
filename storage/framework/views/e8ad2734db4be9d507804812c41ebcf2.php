<?php $__env->startPush('header'); ?>
    <script>
        'use strict';

        window.trans = window.trans || {};

        window.trans.order = <?php echo e(Js::from(trans('plugins/ecommerce::order'))); ?>;
        window.trans.order.status = '<?php echo e(trans('core/base::forms.status')); ?>';
        window.trans.order.published = '<?php echo e(trans('core/base::enums.statuses.published')); ?>';
        window.trans.order.draft = '<?php echo e(trans('core/base::enums.statuses.draft')); ?>';
        window.trans.order.pending = '<?php echo e(trans('core/base::enums.statuses.pending')); ?>';
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div
        class="max-width-1200"
        id="main-order"
    >
        <create-order
            :products="<?php echo e(json_encode($products)); ?>"
            :product_ids="<?php echo e(json_encode($productIds)); ?>"
            <?php if($customer): ?> :customer="<?php echo e($customer); ?>" <?php endif; ?>
            :customer_id="<?php echo e($order->user_id); ?>"
            :customer_addresses="<?php echo e(json_encode($customerAddresses)); ?>"
            :customer_address="<?php echo e($customerAddress->toJson()); ?>"
            :sub_amount="<?php echo e($order->amount); ?>"
            :total_amount="<?php echo e(is_plugin_active('payment') && $order->payment->amount ? $order->payment->amount : $order->amount); ?>"
            :discount_amount="<?php echo e($order->discount_amount); ?>"
            <?php if($order->coupon_code): ?> :coupon_code="'<?php echo e($order->coupon_code); ?>'" <?php endif; ?>
            <?php if($order->discount_description): ?> :discount_description="'<?php echo e($order->discount_description); ?>'" <?php endif; ?>
            :shipping_amount="<?php echo e($order->shipping_amount); ?>"
            <?php if($order->shipping_method): ?> :shipping_method="'<?php echo e($order->shipping_method); ?>'" <?php endif; ?>
            <?php if($order->shipping_option): ?> :shipping_option="'<?php echo e($order->shipping_option); ?>'" <?php endif; ?>
            <?php if($order->shipping_method): ?> :shipping_method_name="'<?php echo e(OrderHelper::getShippingMethod($order->shipping_method, $order->shipping_option)); ?>'" <?php endif; ?>
            :is_selected_shipping="true"
            :customer_order_numbers="<?php echo e($customerOrderNumbers); ?>"
            :currency="'<?php echo e(get_application_currency()->symbol); ?>'"
            :zip_code_enabled="<?php echo e((int) EcommerceHelper::isZipCodeEnabled()); ?>"
            :use_location_data="<?php echo e((int) EcommerceHelper::loadCountriesStatesCitiesFromPluginLocation()); ?>"
            :sub_amount_label="'<?php echo e(format_price(0)); ?>'"
            :tax_amount_label="'<?php echo e(format_price(0)); ?>'"
            :promotion_amount_label="'<?php echo e(format_price(0)); ?>'"
            :discount_amount_label="'<?php echo e(format_price(0)); ?>'"
            :shipping_amount_label="'<?php echo e(format_price(0)); ?>'"
            :total_amount_label="'<?php echo e(format_price(0)); ?>'"
            :payment-methods="<?php echo e(json_encode(is_plugin_active('payment') ? \Botble\Payment\Enums\PaymentMethodEnum::labels() : [])); ?>"
            :payment-statuses="<?php echo e(json_encode(is_plugin_active('payment') ? \Botble\Payment\Enums\PaymentStatusEnum::labels() : [])); ?>"
        ></create-order>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(BaseHelper::getAdminMasterLayoutTemplate(), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/orders/reorder.blade.php ENDPATH**/ ?>