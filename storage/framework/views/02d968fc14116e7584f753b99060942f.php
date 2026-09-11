<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-8">
            <?php echo $__env->make('plugins/ecommerce::order-returns.partials.order-information', [
                'productEditRouteName' => 'products.edit',
                'orderReturnEditRouteName' => 'order_returns.edit',
            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>

        <div class="col-md-4">
            <?php echo $__env->make('plugins/ecommerce::order-returns.partials.customer-information', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(BaseHelper::getAdminMasterLayoutTemplate(), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/order-returns/edit.blade.php ENDPATH**/ ?>