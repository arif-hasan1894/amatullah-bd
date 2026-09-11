<?php $__env->startSection('content'); ?>
    <?php echo $form->renderForm(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(BaseHelper::getAdminMasterLayoutTemplate(), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/settings/tax.blade.php ENDPATH**/ ?>