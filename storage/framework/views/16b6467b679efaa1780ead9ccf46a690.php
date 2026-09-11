<div class="ps-top-categories mt-40 mb-40">
    <div class="ps-container">
        <h3><?php echo BaseHelper::clean($title); ?></h3>
        <div class="row justify-content-center">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="ps-block--category">
                        <a class="ps-block__overlay" href="<?php echo e($category->url); ?>" title="<?php echo e($category->name); ?>"></a>
                        <?php echo RvMedia::image($category->image, $category->name, 'small'); ?>

                        <p><?php echo e($category->name); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/partials/short-codes/featured-product-categories.blade.php ENDPATH**/ ?>