<?php
    $layout = MarketplaceHelper::viewPath('vendor-dashboard.layouts.master');
?>



<?php $__env->startSection('content'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('content'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plugins/marketplace::stores.form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/vendor-dashboard/stores/form.blade.php ENDPATH**/ ?>