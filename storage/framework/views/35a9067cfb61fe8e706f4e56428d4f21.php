<?php
    Arr::set($selectAttributes, 'class', Arr::get($selectAttributes, 'class') . ' select-autocomplete');
?>

<?php echo $__env->make('core/base::forms.partials.custom-select', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/core/base/resources/views/forms/partials/autocomplete.blade.php ENDPATH**/ ?>