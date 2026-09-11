<?php if(session()->has('status')): ?>
    <div role="alert" class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
<?php elseif(session()->has('auth_error_message')): ?>
    <div role="alert" class="alert alert-danger">
        <?php echo e(session('auth_error_message')); ?>

    </div>
<?php elseif(session()->has('auth_success_message')): ?>
    <div role="alert" class="alert alert-success">
        <?php echo e(session('auth_success_message')); ?>

    </div>
<?php elseif(session()->has('auth_warning_message')): ?>
    <div role="alert" class="alert alert-warning">
        <?php echo e(session('auth_warning_message')); ?>

    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/customers/includes/auth-messages.blade.php ENDPATH**/ ?>