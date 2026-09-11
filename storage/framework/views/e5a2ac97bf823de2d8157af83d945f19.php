<div
    class="alert alert-warning"
    style="margin-top: 15px;"
>
    <?php echo e(trans('plugins/ecommerce::setting.payment_method_maximum_amount_error', ['payment_method' => $paymentLabel, 'amount' => format_price($maximumOrderAmount), 'more' => format_price(Cart::instance('cart')->rawSubTotal() - $maximumOrderAmount)])); ?>

</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/orders/partials/maximum-order-amount-notice.blade.php ENDPATH**/ ?>