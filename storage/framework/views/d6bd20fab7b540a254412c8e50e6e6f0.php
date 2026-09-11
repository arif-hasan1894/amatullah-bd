<a
    href="<?php echo e(route('public.store', $discount->store->slug ?: '/')); ?>"
    class="checkout__coupon-item-store d-inline-flex align-items-center gap-1 mb-2"
>
    <?php echo e(RvMedia::image($discount->store->logo, $discount->store->name, attributes: ['width' => 28, 'height' => 28])); ?>

    <span class="small fw-medium"><?php echo e($discount->store->name); ?></span>
</a>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/checkout/discount-item-store.blade.php ENDPATH**/ ?>