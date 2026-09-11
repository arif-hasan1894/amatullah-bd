
<div class="checkout-products-block">
    <?php echo apply_filters(RENDER_PRODUCTS_IN_CHECKOUT_PAGE, $products); ?>

</div>

<?php
    $cartSubTotal = Cart::instance('cart')->rawSubTotal();
    $cartTax = Cart::instance('cart')->rawTax();
    $hasShipping = ! empty($shipping) && Arr::get($sessionCheckoutData, 'is_available_shipping', true) && $shippingAmount > 0;
    $hasDiscount = $couponDiscountAmount > 0 || $promotionDiscountAmount > 0;
    $hasPaymentFee = isset($paymentFee) && $paymentFee > 0;
    $showSubtotal = $cartSubTotal != $orderAmount || $cartTax > 0 || $hasShipping || $hasDiscount || $hasPaymentFee;
?>


<div class="checkout-summary-block">
<div class="mt-2 p-2">
    <?php if($showSubtotal): ?>
        <div class="row ec-checkout-subtotal-row">
            <div class="col-6">
                <p><?php echo e(__('Subtotal')); ?>:</p>
            </div>
            <div class="col-6">
                <p class="price-text sub-total-text text-end">
                    <?php echo e($cartSubTotal == 0 ? trans('plugins/ecommerce::ecommerce.free') : format_price($cartSubTotal)); ?>

                </p>
            </div>
        </div>
    <?php endif; ?>
    <?php echo apply_filters('ecommerce_checkout_after_subtotal', null, $products); ?>

    <?php if(EcommerceHelper::isTaxEnabled() && $cartTax > 0): ?>
        <div class="row ec-checkout-tax-row">
            <div class="col-6">
                <p><?php echo e(__('Tax')); ?>:</p>
            </div>
            <div class="col-6 float-end">
                <p class="price-text tax-price-text">
                    <?php echo e(format_price($cartTax)); ?>

                    <?php if($cartTax && EcommerceHelper::isDisplayCheckoutTaxInformation()): ?>
                        <small>(<?php echo e(Cart::instance('cart')->taxClassesName()); ?>)</small>
                    <?php endif; ?>
                </p>
            </div>
        </div>
    <?php endif; ?>
    <?php if(session('applied_coupon_code')): ?>
        <div class="row coupon-information">
            <div class="col-6">
                <p><?php echo e(__('Coupon code')); ?>:</p>
            </div>
            <div class="col-6">
                <p class="price-text coupon-code-text">
                    <?php echo e(session('applied_coupon_code')); ?>

                </p>
            </div>
        </div>
    <?php endif; ?>
    <?php if($couponDiscountAmount > 0): ?>
        <div class="row price discount-amount">
            <div class="col-6">
                <p><?php echo e(__('Coupon code discount amount')); ?>:</p>
            </div>
            <div class="col-6">
                <p class="price-text total-discount-amount-text">
                    <?php echo e(format_price($couponDiscountAmount)); ?>

                </p>
            </div>
        </div>
    <?php endif; ?>
    <?php if($promotionDiscountAmount > 0): ?>
        <div class="row">
            <div class="col-6">
                <p><?php echo e(__('Promotion discount amount')); ?>:</p>
            </div>
            <div class="col-6">
                <p class="price-text">
                    <?php echo e(format_price($promotionDiscountAmount)); ?>

                </p>
            </div>
        </div>
    <?php endif; ?>
    <?php if(!empty($shipping) && Arr::get($sessionCheckoutData, 'is_available_shipping', true)): ?>
        <div class="row">
            <div class="col-6">
                <p><?php echo e(__('Shipping fee')); ?>:</p>
            </div>
            <div class="col-6 float-end">
                <p class="price-text shipping-price-text"><?php echo e($shippingAmount > 0 ? format_price($shippingAmount) : trans('plugins/ecommerce::order.free_shipping')); ?></p>
            </div>
        </div>
    <?php endif; ?>

    <?php if(isset($shippingTaxAmount) && (float) $shippingTaxAmount > 0): ?>
        <div class="row ec-checkout-shipping-tax-row">
            <div class="col-6">
                <p><?php echo e(trans('plugins/ecommerce::order.shipping_tax')); ?>:</p>
            </div>
            <div class="col-6 float-end">
                <p class="price-text shipping-tax-text"><?php echo e(format_price($shippingTaxAmount)); ?></p>
            </div>
        </div>
    <?php endif; ?>

    <?php if(isset($paymentFee) && $paymentFee > 0): ?>
        <div class="row payment-fee-row">
            <div class="col-6">
                <p><?php echo e(__('plugins/payment::payment.payment_fee')); ?>:</p>
            </div>
            <div class="col-6 float-end">
                <p class="price-text payment-fee-text"><?php echo e(format_price($paymentFee)); ?></p>
            </div>
        </div>
    <?php endif; ?>

    <div class="row ec-checkout-total-row">
        <div class="col-6">
            <p><strong><?php echo e(__('Total')); ?></strong>:</p>
        </div>
        <div class="col-6 float-end">
            <p class="total-text raw-total-text" data-price="<?php echo e(format_price($rawTotal, null, true)); ?>">
                <?php echo e($orderAmount == 0 ? trans('plugins/ecommerce::ecommerce.free') : format_price($orderAmount)); ?>

            </p>
        </div>
    </div>
</div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/orders/partials/amount.blade.php ENDPATH**/ ?>