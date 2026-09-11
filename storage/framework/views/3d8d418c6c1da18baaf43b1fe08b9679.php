<div class="ps-product__header">
    <div class="ps-product__thumbnail" data-vertical="false">
        <div class="bb-quick-view-gallery-images" data-arrow="true">
            <?php $__currentLoopData = $productImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item"><img src="<?php echo e(RvMedia::getImageUrl($img)); ?>" alt="<?php echo e($product->name); ?>"></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class="ps-product__info">
        <h1><a href="<?php echo e($product->url); ?>"><?php echo BaseHelper::clean($product->name); ?></a></h1>
        <div class="ps-product__meta">
            <p><?php echo e(__('Brand')); ?>: <a href="<?php echo e($product->brand->url); ?>"><?php echo e($product->brand->name); ?></a></p>
            <?php if(EcommerceHelper::isReviewEnabled()): ?>
                <?php if($product->reviews_count > 0): ?>
                    <div class="rating_wrap">
                        <div class="rating">
                            <div class="product_rate" style="width: <?php echo e($product->reviews_avg * 20); ?>%"></div>
                        </div>
                        <span class="rating_num">(<?php echo e($product->reviews_count); ?> <?php echo e(__('reviews')); ?>)</span>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <?php echo Theme::partial('product-price', [
            'product' => $product,
            'priceWrapperTag' => 'h4',
            'priceWrapperClass' => 'ps-product__price',
        ]); ?>

        <div class="ps-product__desc">
            <div class="ps-list--dot">
                <?php echo apply_filters('ecommerce_before_product_description', null, $product); ?>

                <?php echo BaseHelper::clean($product->description); ?>

                <?php echo apply_filters('ecommerce_after_product_description', null, $product); ?>

            </div>
        </div>
        <?php if($product->has_variation): ?>
            <div class="pr_switch_wrap">
                <?php echo render_product_swatches($product, [
                    'selected' => $selectedAttrs,
                    'view'     => Theme::getThemeNamespace() . '::views.ecommerce.attributes.swatches-renderer'
                ]); ?>

            </div>
            <div class="number-items-available" style="display: none; margin-bottom: 10px;"></div>
        <?php endif; ?>

        <?php if($product->options()->count() > 0 && isset($product->toArray()['options'])): ?>
            <div class="pr_switch_wrap" id="product-option">
                <?php echo render_product_options($product, $product->toArray()['options']); ?>

            </div>
        <?php endif; ?>

        <form class="add-to-cart-form" method="POST" action="<?php echo e(route('public.cart.add-to-cart')); ?>">
            <?php echo csrf_field(); ?>
            <div class="ps-product__shopping">
                <input type="hidden" name="id" class="hidden-product-id" value="<?php echo e(($product->is_variation || !$product->defaultVariation->product_id) ? $product->id : $product->defaultVariation->product_id); ?>"/>
                <input type="hidden" name="qty" value="1">
                <?php if(EcommerceHelper::isCartEnabled()): ?>
                    <button class="ps-btn ps-btn--black" type="submit"><?php echo e(__('Add to cart')); ?></button>
                    <?php if(EcommerceHelper::isQuickBuyButtonEnabled()): ?>
                        <button class="ps-btn" type="submit" name="checkout"><?php echo e(__('Buy Now')); ?></button>
                    <?php endif; ?>
                <?php endif; ?>
                <div class="ps-product__actions">
                    <?php if(EcommerceHelper::isWishlistEnabled()): ?>
                        <a class="js-add-to-wishlist-button" href="#" data-url="<?php echo e(route('public.wishlist.add', $product->id)); ?>"><i class="icon-heart"></i></a>
                    <?php endif; ?>
                    <?php if(EcommerceHelper::isCompareEnabled()): ?>
                        <a class="js-add-to-compare-button" href="#" data-url="<?php echo e(route('public.compare.add', $product->id)); ?>"><i class="icon-chart-bars"></i></a>
                    <?php endif; ?>
                </div>
            </div>
        </form>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/partials/quick-view.blade.php ENDPATH**/ ?>