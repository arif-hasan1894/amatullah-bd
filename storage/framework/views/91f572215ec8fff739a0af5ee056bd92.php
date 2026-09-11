<?php if($order->store): ?>
    <div>
        <span>
            <?php echo app('translator')->get('plugins/marketplace::store.forms.store'); ?> : <?php echo e($order->store->name); ?>

        </span>
    </div>
<?php endif; ?>
<?php echo $__env->make('plugins/ecommerce::emails.partials.order-detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/emails/partials/order-detail.blade.php ENDPATH**/ ?>