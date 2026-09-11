<?php $__env->startSection('content'); ?>
    <style>
        .dropzone {
            border: 2px dashed var(--primary-color);
        }
    </style>

    <div class="form__header">
        <h3><?php echo e(SeoHelper::getTitle()); ?></h3>

        <?php echo $form->renderForm(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(EcommerceHelper::viewPath('customers.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/become-vendor.blade.php ENDPATH**/ ?>