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
        <ul class="ps-product__actions">
            <?php if(EcommerceHelper::isCartEnabled()): ?>
                <?php if($product->has_variation): ?>
                    <li><a href="#" data-bb-toggle="quick-shop" data-url="<?php echo e(route('public.ajax.quick-shop', $product->slug)); ?>" <?php echo EcommerceHelper::jsAttributes('quick-shop', $product); ?> title="<?php echo e(__('Select Options')); ?>"><i class="icon-bag2"></i></a></li>
                <?php else: ?>
                    <li><a class="add-to-cart-button" data-id="<?php echo e($product->id); ?>" href="#" data-url="<?php echo e(route('public.cart.add-to-cart')); ?>" <?php echo EcommerceHelper::jsAttributes('add-to-cart', $product, additional: ['data-bb-toggle' => 'none']); ?> title="<?php echo e(__('Add To Cart')); ?>"><i class="icon-bag2"></i></a></li>
                <?php endif; ?>
            <?php endif; ?>
            <li><a class="js-quick-view-button" href="#" data-url="<?php echo e(route('public.ajax.quick-view', $product->id)); ?>" title="<?php echo e(__('Quick View')); ?>"><i class="icon-eye"></i></a></li>
            <?php if(EcommerceHelper::isWishlistEnabled()): ?>
                <li><a class="js-add-to-wishlist-button" href="#" data-url="<?php echo e(route('public.wishlist.add', $product->id)); ?>" title="<?php echo e(__('Add to Wishlist')); ?>"><i class="icon-heart"></i></a></li>
            <?php endif; ?>
            <?php if(EcommerceHelper::isCompareEnabled()): ?>
                <li><a class="js-add-to-compare-button" href="#" data-url="<?php echo e(route('public.compare.add', $product->id)); ?>" title="<?php echo e(__('Compare')); ?>"><i class="icon-chart-bars"></i></a></li>
            <?php endif; ?>
        </ul>
    </div>
    <div class="ps-product__container">
        <?php if(is_plugin_active('marketplace') && $product->store->id): ?>
            <a class="ps-product__vendor" href="<?php echo e($product->store->url); ?>" title="<?php echo e(__('Visit store')); ?>: <?php echo e($product->store->name); ?>"><?php echo e($product->store->name); ?> <?php echo $product->store->badge; ?></a>
        <?php endif; ?>
        <div class="ps-product__content">
            <a class="ps-product__title" href="<?php echo e($product->url); ?>" title="<?php echo e($product->name); ?>"><?php echo BaseHelper::clean($product->name); ?></a>
            <?php if(EcommerceHelper::isReviewEnabled()): ?>
                <div class="rating_wrap">
                    <div class="rating">
                        <div class="product_rate" style="width: <?php echo e($product->reviews_avg * 20); ?>%"></div>
                    </div>
                    <span class="rating_num">(<?php echo e($product->reviews_count); ?>)</span>
                </div>
            <?php endif; ?>
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
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/partials/product-item.blade.php ENDPATH**/ ?>