<?php if($product && is_object($product)): ?>
    <div class="ps-product__thumbnail">
        <a href="<?php echo e($product->url); ?>" title="<?php echo e($product->name); ?>">
            <?php echo RvMedia::image($product->image, $product->name, 'small', lazy: $lazy ?? true); ?>

        </a>
        <?php if($product->isOutOfStock()): ?>
            <div class="ps-product__badges">
                <span class="ps-product__badge out-stock"><?php echo e(__('Out Of Stock')); ?></span>
            </div>
        <?php else: ?>
            <?php if($product->productLabels->isNotEmpty()): ?>
                <div class="ps-product__badges">
                    <?php $__currentLoopData = $product->productLabels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="ps-product__badge" <?php echo $label->css_styles; ?>><?php echo e($label->name); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php else: ?>
                <?php if($product->front_sale_price !== $product->price): ?>
                    <div class="ps-product__badges">
                        <div class="ps-product__badge"><?php echo e(get_sale_percentage($product->price, $product->front_sale_price)); ?></div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <div class="ps-product__container">
        <div class="ps-product__content">
            <a class="ps-product__title" href="<?php echo e($product->url); ?>" title="<?php echo e($product->name); ?>"><?php echo BaseHelper::clean($product->name); ?></a>
            <?php if(is_plugin_active('marketplace') && $product->store->id): ?>
                <p class="ps-product__vendor">
                    <span><?php echo e(__('Sold by')); ?>: </span>
                    <a href="<?php echo e($product->store->url); ?>" class="text-uppercase" title="<?php echo e(__('Visit store')); ?>: <?php echo e($product->store->name); ?>"><?php echo e($product->store->name); ?> <?php echo $product->store->badge; ?></a>
                </p>
            <?php endif; ?>
            <?php if(EcommerceHelper::isReviewEnabled()): ?>
                <div class="rating_wrap">
                    <div class="rating">
                        <div class="product_rate" style="width: <?php echo e($product->reviews_avg * 20); ?>%"></div>
                    </div>
                    <span class="rating_num">(<?php echo e($product->reviews_count); ?>)</span>
                </div>
            <?php endif; ?>
        <div class="ps-product__desc">
            <?php echo Str::limit(clean(strip_tags($product->description)), 120); ?>

        </div>
    </div>
    <div class="ps-product__shopping">
            <?php
                $priceHtml = Theme::partial('product-price', [
                    'product' => $product,
                    'priceWrapperTag' => 'p',
                    'priceWrapperClass' => 'ps-product__price',
                ]);
            ?>

            <?php if($priceHtml): ?>
                <?php echo apply_filters('ecommerce_before_product_price_in_listing', null, $product); ?>

                <?php echo $priceHtml; ?>

                <?php echo apply_filters('ecommerce_after_product_price_in_listing', null, $product); ?>

            <?php endif; ?>
            <?php if(EcommerceHelper::isCartEnabled()): ?>
                <?php if($product->has_variation): ?>
                    <a class="ps-btn" href="#" data-bb-toggle="quick-shop" data-url="<?php echo e(route('public.ajax.quick-shop', $product->slug)); ?>" <?php echo EcommerceHelper::jsAttributes('quick-shop', $product); ?> title="<?php echo e(__('Select Options')); ?>"><?php echo e(__('Select Options')); ?></a>
                <?php else: ?>
                    <a class="ps-btn add-to-cart-button" data-id="<?php echo e($product->id); ?>" href="#" data-url="<?php echo e(route('public.cart.add-to-cart')); ?>" <?php echo EcommerceHelper::jsAttributes('add-to-cart', $product, additional: ['data-bb-toggle' => 'none']); ?> title="<?php echo e(__('Add to cart')); ?>"><?php echo e(__('Add to cart')); ?></a>
                <?php endif; ?>
            <?php endif; ?>
            <ul class="ps-product__actions">
                <?php if(EcommerceHelper::isWishlistEnabled()): ?>
                    <li><a class="js-add-to-wishlist-button" href="#" data-url="<?php echo e(route('public.wishlist.add', $product->id)); ?>" title="<?php echo e(__('Add to Wishlist')); ?>"><i class="icon-heart"></i> <?php echo e(__('Wishlist')); ?></a></li>
                <?php endif; ?>
                <?php if(EcommerceHelper::isCompareEnabled()): ?>
                    <li>
                        <a class="js-add-to-compare-button" href="#" data-url="<?php echo e(route('public.compare.add', $product->id)); ?>" title="<?php echo e(__('Compare')); ?>"><i class="icon-chart-bars"></i>
                        <?php echo e(__('Compare')); ?></a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/partials/product-item-grid.blade.php ENDPATH**/ ?>