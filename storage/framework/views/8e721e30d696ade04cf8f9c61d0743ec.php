<div class="ps-product__header">
    <div class="ps-product__info">
        <h1><?php echo BaseHelper::clean($product->name); ?></h1>
        <?php echo Theme::partial('product-price', [
            'product' => $product,
            'priceWrapperTag' => 'h4',
            'priceWrapperClass' => 'ps-product__price',
        ]); ?>


        <?php if($product->has_variation): ?>
            <div class="pr_switch_wrap">
                <?php echo render_product_swatches($product, [
                    'selected' => $selectedAttrs,
                    'view'     => Theme::getThemeNamespace() . '::views.ecommerce.attributes.swatches-renderer',
                    'referenceProduct' => $referenceProduct ?? null,
                ]); ?>

            </div>
            <div class="number-items-available" style="display: none; margin-bottom: 10px;"></div>
        <?php endif; ?>

        <?php if($product->options()->count() > 0 && isset($product->toArray()['options'])): ?>
            <div class="pr_switch_wrap" id="product-option">
                <?php echo render_product_options($product); ?>

            </div>
        <?php endif; ?>

        <form class="add-to-cart-form" method="POST" action="<?php echo e(route('public.cart.add-to-cart')); ?>" data-bb-toggle="product-form">
            <?php echo csrf_field(); ?>
            <div class="ps-product__shopping d-block">
                <input type="hidden" name="id" class="hidden-product-id" value="<?php echo e(($product->is_variation || !$product->defaultVariation->product_id) ? $product->id : $product->defaultVariation->product_id); ?>"/>
                <figure>
                    <figcaption><?php echo e(__('Quantity')); ?></figcaption>
                    <div class="form-group--number product__qty">
                        <button class="up" type="button" aria-label="<?php echo e(__('Increase quantity')); ?>"><i class="icon-plus" aria-hidden="true"></i></button>
                        <button class="down" type="button" aria-label="<?php echo e(__('Decrease quantity')); ?>"><i class="icon-minus" aria-hidden="true"></i></button>
                        <input class="form-control qty-input" type="number" name="qty" value="1" placeholder="1" min="1">
                    </div>
                </figure>
                <?php if(EcommerceHelper::isCartEnabled()): ?>
                    <div class="mt-4 ps-product__actions">
                        <button class="ps-btn ps-btn--black" type="submit" name="add-to-cart" <?php if($product->isOutOfStock()): echo 'disabled'; endif; ?>><?php echo e(__('Add to cart')); ?></button>
                        <?php if(EcommerceHelper::isQuickBuyButtonEnabled()): ?>
                            <button class="ps-btn" type="submit" name="checkout" <?php if($product->isOutOfStock()): echo 'disabled'; endif; ?>><?php echo e(__('Buy Now')); ?></button>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </form>

        <div class="ps-product__specification">
            <a href="<?php echo e($product->url); ?>" class="report"><?php echo e(__('View full details')); ?></a>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/views/ecommerce/includes/quick-shop.blade.php ENDPATH**/ ?>