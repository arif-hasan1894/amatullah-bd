<?php
    $name = 'slug';
    $options = [
        'prefix' => SlugHelper::getPrefix($object::class),
        'model' => $object,
    ];
?>

<?php echo $__env->make('packages/slug::forms.fields.permalink', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/slug/resources/views/partials/slug.blade.php ENDPATH**/ ?>