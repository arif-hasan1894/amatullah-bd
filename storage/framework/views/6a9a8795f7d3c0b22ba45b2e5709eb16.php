<?php
    $price = $product->price();
    $priceValue = $price->getPrice();

    $priceFormatted ??= $price->displayAsText();
    $priceOriginalFormatted ??= $price->displayPriceOriginalAsText();

    $priceWrapperTag ??= 'p';
    $priceWrapperClass ??= 'ps-product__price';
    $priceClass ??= '';
    $priceOriginalWrapperClass ??= '';
    $priceOriginalClass ??= '';
    $salePercentageClass ??= '';

    $shouldShowPrice = (! EcommerceHelper::hideProductPrice() || EcommerceHelper::isCartEnabled())
        && (! EcommerceHelper::hideProductPriceWhenZero() || $priceValue > 0);
?>

<?php if($shouldShowPrice): ?>
    <<?php echo e($priceWrapperTag); ?> class="<?php echo e(trim($priceWrapperClass . ($product->isOnSale() ? ' sale' : ''))); ?>">
        <span class="<?php echo e(trim($priceClass)); ?>" data-bb-value="product-price"><?php echo e($priceFormatted); ?></span>

        <?php if($product->isOnSale()): ?>
            <span class="<?php echo e(trim($priceOriginalWrapperClass)); ?>">
                <small>
                    <del class="<?php echo e(trim($priceOriginalClass)); ?>" data-bb-value="product-original-price">
                        <?php echo e($priceOriginalFormatted); ?>

                    </del>
                </small>
            </span>

            <?php if(! empty($showSalePercentage)): ?>
                <small class="<?php echo e(trim($salePercentageClass)); ?>">
                    (<?php echo e(get_sale_percentage($product->price, $product->front_sale_price)); ?>)
                </small>
            <?php endif; ?>
        <?php endif; ?>
    </<?php echo e($priceWrapperTag); ?>>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/partials/product-price.blade.php ENDPATH**/ ?>