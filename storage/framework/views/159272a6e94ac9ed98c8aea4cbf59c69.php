<?php if($order->store?->name): ?>
    <div class="hr my-1"></div>

    <div class="p-3">
        <h4 class="mb-2"><?php echo e(trans('plugins/marketplace::store.store')); ?></h4>
        <a href="<?php echo e($order->store->url); ?>" target="_blank"><?php echo e($order->store->name); ?></a>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/orders/store-info.blade.php ENDPATH**/ ?>