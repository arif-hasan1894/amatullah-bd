<?php $__env->startSection('title', trans('plugins/ecommerce::customer-dashboard.address_books')); ?>

<?php $__env->startSection('content'); ?>
    <?php echo Form::open(['route' => ['customer.address.edit', $address->id]]); ?>

        <?php echo $__env->make(EcommerceHelper::viewPath('customers.address.form'), compact('form', 'address'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(EcommerceHelper::viewPath('customers.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/customers/address/edit.blade.php ENDPATH**/ ?>