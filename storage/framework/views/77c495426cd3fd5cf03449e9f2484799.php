<div class="container">
    <h3><?php echo e(trans('plugins/marketplace::marketplace.our_stores')); ?></h3>

    <div class="row">
        <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <?php echo $__env->make('plugins/marketplace::themes.includes.store-item', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <?php echo $stores->withQueryString()->links(); ?>

</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/stores.blade.php ENDPATH**/ ?>