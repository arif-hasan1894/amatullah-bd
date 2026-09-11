<?php if(!empty($errors) && $errors->has($name)): ?>
    <div class="invalid-feedback">
        <small><?php echo e($errors->first($name)); ?></small>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/core/base/resources/views/forms/partials/error.blade.php ENDPATH**/ ?>