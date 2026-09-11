<div class="ps-page--shop">
    <?php if(theme_option('show_featured_brands_on_products_page', 'yes') == 'yes'): ?>
        <div class="mt-40">
            <div class="ps-shop-brand ps-carousel--responsive owl-slider"
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
                <?php $__currentLoopData = get_featured_brands(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
    <?php endif; ?>

    <div class="ps-layout--shop">
        <div class="ps-layout__left">
            <div class="screen-darken"></div>
            <div class="ps-layout__left-container">
                <div class="ps-filter__header d-block d-xl-none">
                    <h3><?php echo e(__('Filter Products')); ?></h3><a class="ps-btn--close ps-btn--no-border" href="#"></a>
                </div>
                <div class="ps-layout__left-content">
                    <?php echo $__env->make(Theme::getThemeNamespace() . '::views.ecommerce.includes.filters', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
            </div>
        </div>
        <div class="ps-layout__right">
            <?php if(theme_option('show_recommend_items_on_products_page', 'yes') == 'yes'): ?>
                <div class="ps-block--shop-features">
                    <div class="ps-block__header">
                        <h3><?php echo e(__('Recommended Items')); ?></h3>
                        <div class="ps-block__navigation">
                            <a class="ps-carousel__prev" href="#recommended-products">
                                <i class="icon-chevron-left"></i>
                            </a>
                            <a class="ps-carousel__next" href="#recommended-products">
                                <i class="icon-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ps-block__content">
                        <div class="ps-section__content">
                            <div id="recommended-products"
                                 class="ps-carousel--responsive owl-slider"
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
                                <?php $__currentLoopData = get_featured_products(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="ps-product">
                                        <?php echo Theme::partial('product-item', ['product' => $product, 'lazy' => false]); ?>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.products-list'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/views/ecommerce/products.blade.php ENDPATH**/ ?>