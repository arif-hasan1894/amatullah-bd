
<?php if($order->sub_total != $order->amount): ?>
    <?php echo $__env->make('plugins/ecommerce::orders.thank-you.total-row', [
        'label' => trans('plugins/ecommerce::order.sub_amount'),
        'value' => $order->sub_total == 0 ? trans('plugins/ecommerce::ecommerce.free') : format_price($order->sub_total),
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>

<?php if($order->shipping_method->getValue()): ?>
    <?php echo $__env->make('plugins/ecommerce::orders.thank-you.total-row', [
        'label' =>
            trans('plugins/ecommerce::order.shipping_fee') .
            ($order->is_free_shipping
                ? ' <small>(' . trans('plugins/ecommerce::order.using_coupon_code') . ': <strong>' . $order->coupon_code . '</strong>)</small>'
                : ''),
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
        'value' =>
            format_price($order->discount_amount) .
            ($order->coupon_code
                ? ' <small>(' . trans('plugins/ecommerce::order.using_coupon_code') . ': <strong>' . $order->coupon_code . '</strong>)</small>'
                : ''),
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>

<?php if((float) $order->payment_fee): ?>
    <?php echo $__env->make('plugins/ecommerce::orders.thank-you.total-row', [
        'label' => trans('plugins/payment::payment.payment_fee'),
        'value' => format_price($order->payment_fee),
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>

<?php echo apply_filters('ecommerce_thank_you_total_info', null, $order); ?>


<?php ($isOrderTotalFree = $order->amount == 0); ?>
<div class="row">
    <div class="col-6">
        <p><?php echo e(trans('plugins/ecommerce::order.total_amount')); ?>:</p>
    </div>
    <div class="col-6 float-end">
        <p class="total-text raw-total-text"> <?php echo e($isOrderTotalFree ? trans('plugins/ecommerce::ecommerce.free') : format_price($order->amount)); ?> </p>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/orders/thank-you/total-info.blade.php ENDPATH**/ ?>