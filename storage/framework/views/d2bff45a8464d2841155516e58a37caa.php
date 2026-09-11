<?php $__env->startSection('title', trans('packages/theme::theme.errors.503_service_unavailable')); ?>

<?php $__env->startSection('content'); ?>
    <div class="empty">
        <div class="empty-img">
            <img
                src="<?php echo e(asset('vendor/core/core/base/images/503.svg')); ?>"
                alt="503"
                height="128"
            >
        </div>
        <p class="empty-title"><?php echo e(trans('packages/theme::theme.errors.temporarily_down')); ?></p>
        <p class="empty-subtitle text-secondary"><?php echo e(trans('packages/theme::theme.errors.maintenance_description')); ?></p>
        <p class="empty-subtitle text-secondary">
            <i><?php echo BaseHelper::clean(trans('packages/theme::theme.errors.maintenance_admin_note')); ?></i></p>
        <?php if($email = get_admin_email()->first()): ?>
            <p class="empty-subtitle text-secondary"><?php echo BaseHelper::clean(trans('packages/theme::theme.errors.need_help_contact', ['mail' => Html::mailto($email)])); ?></p>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('packages/theme::errors.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/packages/theme/resources/views/errors/503.blade.php ENDPATH**/ ?>