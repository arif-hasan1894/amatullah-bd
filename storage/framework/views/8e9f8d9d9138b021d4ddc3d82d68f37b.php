<?php if($description = Arr::get($formOptions, 'description')): ?>
    <div class="text-center mb-5">
        <p><?php echo e($description); ?></p>
    </div>
<?php endif; ?>

<?php echo $__env->make('core/base::forms.form-content-only', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/forms/order-tracking-form.blade.php ENDPATH**/ ?>