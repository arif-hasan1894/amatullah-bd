<?php
    Arr::set($attributes, 'class', Arr::get($attributes, 'class') . ' icon-select');
    Arr::set($attributes, 'data-empty-value', trans('packages/theme::theme.common.none'));
    Arr::set($attributes, 'data-check-initialized', true);
?>

<?php echo Form::customSelect($name, [$value => $value], $value, $attributes); ?>


<?php if (! $__env->hasRenderedOnce('c35eed4a-9cd9-437b-90e2-3f6facc0867b')): $__env->markAsRenderedOnce('c35eed4a-9cd9-437b-90e2-3f6facc0867b'); ?>
    <?php if(request()->ajax()): ?>
        <?php echo $__env->make('packages/theme::forms.fields.includes.icon-fields-script', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <script src="<?php echo e(asset('vendor/core/packages/theme/js/icons-field.js')); ?>?v=1.1.0"></script>
    <?php else: ?>
        <?php echo $__env->make('packages/theme::forms.fields.includes.icon-fields-script', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <?php $__env->startPush('footer'); ?>
            <script src="<?php echo e(asset('vendor/core/packages/theme/js/icons-field.js')); ?>?v=1.1.0"></script>
        <?php $__env->stopPush(); ?>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/theme/resources/views/forms/fields/icons-field.blade.php ENDPATH**/ ?>