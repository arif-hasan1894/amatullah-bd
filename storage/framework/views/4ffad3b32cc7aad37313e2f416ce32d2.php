<?php if($order->store?->name): ?>
    <li class="ws-nm">
        <span class="bull">↳</span>
        <span class="black"><?php echo e(trans('plugins/marketplace::store.store')); ?></span>
        <a
            class="fw-semibold text-decoration-underline"
            href="<?php echo e($order->store->url); ?>"
            target="_blank"
        ><?php echo e($order->store->name); ?></a>
    </li>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/orders/product-item-store-info.blade.php ENDPATH**/ ?>