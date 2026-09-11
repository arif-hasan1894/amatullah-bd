<?php
    PageTitle::setTitle(trans('core/base::errors.503_service_unavailable'));
?>



<?php $__env->startSection('content'); ?>
    <div class="empty">
        <div class="empty-img">
            <img
                src="<?php echo e(asset('vendor/core/core/base/images/503.svg')); ?>"
                alt="503"
                height="128"
            >
        </div>
        <p class="empty-title"><?php echo e(trans('core/base::errors.503_temporarily_down')); ?></p>
        <p class="empty-subtitle text-secondary">
            <?php echo BaseHelper::clean(trans('core/base::errors.503_admin_instruction')); ?>

        </p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('core/base::errors.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/core/base/resources/views/errors/503.blade.php ENDPATH**/ ?>