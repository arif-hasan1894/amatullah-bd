<div class="btn-group w-100">
    <input
        class="form-control coupon-code"
        name="coupon_code"
        type="text"
        value="<?php echo e(old('coupon_code')); ?>"
        placeholder="<?php echo e(trans('plugins/ecommerce::discount.enter_coupon_code_placeholder')); ?>"
    >
    <button
        class="apply-coupon-code d-flex align-items-center gap-2"
        data-url="<?php echo e(route('public.coupon.apply')); ?>"
        type="button"
    >
        <?php echo e(trans('plugins/ecommerce::discount.apply')); ?>

    </button>
</div>

<div class="coupon-error-msg mt-1">
    <span class="text-danger"></span>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/discounts/partials/apply-coupon.blade.php ENDPATH**/ ?>