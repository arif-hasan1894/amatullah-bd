<div class="ps-product-list">
    <div class="ps-container">
        <div class="ps-section__header">
            <h3><?php echo e($shortcode->title); ?></h3>
        </div>
        <div class="ps-section__content">
            <div class="half-circle-spinner loading-spinner d-none">
                <div class="circle circle-1"></div>
                <div class="circle circle-2"></div>
            </div>

            <div class="ps-carousel--nav owl-slider"
                 data-owl-auto="false"
                 data-owl-loop="false"
                 data-owl-speed="10000"
                 data-owl-gap="0"
                 data-owl-nav="true"
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
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/views/ecommerce/shortcodes/recently-viewed-products.blade.php ENDPATH**/ ?>