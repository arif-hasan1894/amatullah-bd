<div id="withdrawal-images-container">
    <div class="row">
        <?php $__currentLoopData = $model->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 col-6">
                <a
                    class="fancybox"
                    href="<?php echo e(RvMedia::getImageUrl($image)); ?>"
                >
                    <img
                        src="<?php echo e(RvMedia::getImageUrl($image, 'thumb')); ?>"
                        alt="<?php echo e($model->id); ?>"
                    />
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/withdrawals/forms/images.blade.php ENDPATH**/ ?>