<?php
    $options = [
        1 => trans('core/base::base.yes'),
        0 => trans('core/base::base.no'),
    ];
?>

<?php echo $__env->make('core/base::components.form.radio-list', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/core/base/resources/views/components/form/on-off/index.blade.php ENDPATH**/ ?>