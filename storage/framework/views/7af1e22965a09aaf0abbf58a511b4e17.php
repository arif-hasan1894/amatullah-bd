<?php
    $checkoutOrderAmount = $orderAmount ?? Cart::instance('cart')->rawTotal();
    $isOrderFree = $checkoutOrderAmount == 0;
    $checkoutButtonText = $isOrderFree
        ? trans('plugins/ecommerce::ecommerce.complete_order')
        : trans('plugins/ecommerce::ecommerce.checkout');
?>

<?php if(EcommerceHelper::isValidToProcessCheckout()): ?>
    <button
        class="btn payment-checkout-btn payment-checkout-btn-step checkout-btn-responsive"
        data-processing-text="<?php echo e(__('Processing. Please wait...')); ?>"
        data-error-header="<?php echo e(__('Error')); ?>"
        type="submit"
        style="
            min-height: 48px;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
        "
    >
        <?php echo e($checkoutButtonText); ?>

    </button>
<?php else: ?>
    <span
        class="btn payment-checkout-btn-step checkout-btn-responsive disabled"
        style="
            min-height: 48px;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
        "
    >
        <?php echo e($checkoutButtonText); ?>

    </span>
<?php endif; ?>

<style>
@media (min-width: 768px) {
    .checkout-btn-responsive {
        width: auto !important;
        float: right;
        min-width: 150px;
    }

    [dir="rtl"] .checkout-btn-responsive {
        float: left;
    }
}
</style>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/orders/partials/checkout-button.blade.php ENDPATH**/ ?>