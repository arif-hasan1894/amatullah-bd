<div class="mt-40 mb-40">
    <div class="ps-container">
        <?php if($title): ?>
            <div class="ps-top-categories">
                <div class="ps-section__header">
                    <h3><?php echo BaseHelper::clean($title); ?></h3>
                </div>
            </div>
        <?php endif; ?>
        <div class="ps-carousel--nav owl-slider"
             data-owl-auto="true"
             data-owl-loop="false"
             data-owl-speed="10000"
             data-owl-gap="0"
             data-owl-nav="false"
             data-owl-dots="true"
             data-owl-item="7"
             data-owl-item-xs="2"
             data-owl-item-sm="2"
             data-owl-item-md="3"
             data-owl-item-lg="4"
             data-owl-item-xl="6"
             data-owl-duration="1000"
             data-owl-mousedrag="on"
        >
            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($brand->website): ?>
                    <a href="<?php echo e($brand->website); ?>">
                <?php endif; ?>
                <img src="<?php echo e(RvMedia::getImageUrl($brand->logo, null, false, RvMedia::getDefaultImage())); ?>" alt="<?php echo e($brand->name); ?>" loading="lazy"/>
                <?php if($brand->website): ?>
                    </a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/partials/short-codes/featured-brands.blade.php ENDPATH**/ ?>