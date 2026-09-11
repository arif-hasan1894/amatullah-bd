<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('packages/data-synchronize::partials.importer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($importer->getLayout(), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/vendor/botble/data-synchronize/src/Providers/../../resources/views/import.blade.php ENDPATH**/ ?>