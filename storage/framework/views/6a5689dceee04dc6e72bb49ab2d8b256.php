<?php $__env->startSection('title', trans('plugins/ecommerce::customer-dashboard.change_password')); ?>

<?php $__env->startSection('account-content'); ?>
    <?php echo $form->renderForm(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(EcommerceHelper::viewPath('customers.layouts.account-settings'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/customers/change-password.blade.php ENDPATH**/ ?>