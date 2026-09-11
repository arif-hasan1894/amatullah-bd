<?php $__env->startSection('title', trans('plugins/ecommerce::customer-dashboard.return_products')); ?>

<?php $__env->startSection('content'); ?>
    <?php
        Theme::set('pageName', trans('plugins/ecommerce::customer-dashboard.return_products'));
    ?>

    <?php echo $__env->make(EcommerceHelper::viewPath('includes.order-return-detail'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(EcommerceHelper::viewPath('customers.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/customers/order-returns/detail.blade.php ENDPATH**/ ?>