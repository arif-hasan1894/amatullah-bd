<div class="applied-coupon-alert mb-1">
    <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
        <div>
            <?php echo BaseHelper::clean(trans('plugins/ecommerce::discount.coupon_code_label', ['code' => '<strong>' . session('applied_coupon_code') . '</strong>'])); ?>

        </div>

        <button
            class="remove-coupon-code"
            data-url="<?php echo e(route('public.coupon.remove')); ?>"
            type="button"
        >
            <span><?php echo e(trans('plugins/ecommerce::discount.remove')); ?></span>
        </button>
    </div>
</div>

<div class="coupon-error-msg">
    <span class="text-danger"></span>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/discounts/partials/remove-coupon.blade.php ENDPATH**/ ?>