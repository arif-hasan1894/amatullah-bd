<?php $__env->startSection('title', trans('plugins/ecommerce::customer-dashboard.change_avatar')); ?>

<?php $__env->startSection('content'); ?>
    <div class="panel panel-default">
        <div class="panel-body">

            <?php echo Form::open(['route' => 'customer.change-avatar', 'files' => true]); ?>


            <label class="btn-bs-file btn btn-lg btn-primary">
                <?php echo e(trans('plugins/ecommerce::customer-dashboard.select_file')); ?>

                <input
                    id="avatar"
                    name="avatar"
                    type="file"
                />
            </label>

            <?php echo Form::error('avatar', $errors); ?>


            <div class="form-group col s12 text-center">
                <button
                    class="btn btn-primary btn-sm"
                    id="change-avatar-btn"
                    type="submit"
                ><?php echo e(trans('plugins/ecommerce::customer-dashboard.update')); ?></button>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(EcommerceHelper::viewPath('customers.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/customers/change-profile-image.blade.php ENDPATH**/ ?>