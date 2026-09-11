<div class="ps-product-list mt-40 mb-40">
    <div class="ps-container">
        <div class="ps-section__header">
            <h3><?php echo BaseHelper::clean($title); ?></h3>
            <ul class="ps-section__links">
                <li><a href="<?php echo e(route('public.products')); ?>" title="<?php echo e(__('View all products')); ?>"><?php echo e(__('View All')); ?></a></li>
            </ul>
        </div>
        <div class="ps-section__content">
            <div class="ps-carousel--responsive owl-slider"
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
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="ps-product">
                        <?php echo Theme::partial('product-item', compact('product')); ?>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>

<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/partials/short-codes/featured-products.blade.php ENDPATH**/ ?>