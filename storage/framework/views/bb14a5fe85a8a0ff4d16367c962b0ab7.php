<?php $__env->startSection('title', trans('plugins/ecommerce::customer-dashboard.add_new_address')); ?>

<?php $__env->startSection('content'); ?>
    <?php echo Form::open(['route' => 'customer.address.create']); ?>

        <?php echo $__env->make(EcommerceHelper::viewPath('customers.address.form'), ['address' => new Botble\Ecommerce\Models\Address(), 'form'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(EcommerceHelper::viewPath('customers.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/customers/address/create.blade.php ENDPATH**/ ?>