<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <?php echo $__env->make('plugins/ecommerce::order-returns.partials.order-information', [
                'productEditRouteName' => 'marketplace.vendor.products.edit',
                'orderReturnEditRouteName' => 'marketplace.vendor.order-returns.edit',
            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>

        <div class="col-md-3">
            <?php echo $__env->make('plugins/ecommerce::order-returns.partials.customer-information', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(MarketplaceHelper::viewPath('vendor-dashboard.layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/vendor-dashboard/order-returns/edit.blade.php ENDPATH**/ ?>