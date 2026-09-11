<header class="header header--product" data-sticky="true">
    <nav class="navigation">
        <div class="container">
            <article class="ps-product--header-sticky">
                <div class="ps-product__thumbnail">
                    <?php echo RvMedia::image($product->image, $product->name, 'small'); ?>

                </div>
                <div class="ps-product__wrapper">
                    <div class="ps-product__content">
                        <span class="ps-product__title"><?php echo BaseHelper::clean($product->name); ?></span>
                        <ul class="ps-tab-list">
                            <li class="active"><a href="#tab-description"><?php echo e(__('Description')); ?></a></li>
                            <?php if(EcommerceHelper::isReviewEnabled()): ?>
                                <li><a href="#tab-reviews"><?php echo e(__('Reviews')); ?> (<?php echo e($product->reviews_count); ?>)</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="ps-product__shopping">
                        <?php echo Theme::partial('product-price', [
                            'product' => $product,
                            'priceWrapperTag' => 'span',
                            'priceWrapperClass' => 'ps-product__price',
                        ]); ?>

                        <?php if(EcommerceHelper::isCartEnabled()): ?>
                            <button class="ps-btn add-to-cart-button <?php if($product->isOutOfStock()): ?> btn-disabled <?php endif; ?>" type="button" name="add_to_cart" value="1" <?php echo EcommerceHelper::jsAttributes('add-to-cart', $product, additional: ['data-bb-toggle' => 'none']); ?>><?php echo e(__('Add to cart')); ?></button>
                        <?php endif; ?>
                    </div>
                </div>
            </article>
        </div>
    </nav>
</header>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/partials/header-product-page.blade.php ENDPATH**/ ?>