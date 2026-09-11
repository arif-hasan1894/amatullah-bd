<div class="number-items-available">
    <?php if($product->stock_status == \Botble\Ecommerce\Enums\StockStatusEnum::ON_BACKORDER): ?>
        <p class="text-warning fw-medium mb-0"><?php echo e(trans('plugins/ecommerce::ecommerce.backorder_warning')); ?></p>
    <?php elseif($product->isOutOfStock()): ?>
        <span class="text-danger"><?php echo e(trans('plugins/ecommerce::ecommerce.out_of_stock')); ?></span>
    <?php else: ?>
        <?php if(! $productVariation): ?>
            <span class="text-danger"><?php echo e(trans('plugins/ecommerce::ecommerce.not_available')); ?>

        <?php else: ?>
            <?php if($productVariation->stock_status == \Botble\Ecommerce\Enums\StockStatusEnum::ON_BACKORDER): ?>
                <p class="text-warning fw-medium mb-0"><?php echo e(trans('plugins/ecommerce::ecommerce.backorder_warning')); ?></p>
            <?php elseif($productVariation->isOutOfStock()): ?>
                <span class="text-danger"><?php echo e(trans('plugins/ecommerce::ecommerce.out_of_stock')); ?></span>
            <?php elseif(! $productVariation->with_storehouse_management || $productVariation->quantity < 1): ?>
                <span class="text-success"><?php echo e(trans('plugins/ecommerce::ecommerce.available')); ?></span>
            <?php elseif($productVariation->quantity): ?>
                <span class="text-success">
                    <?php if(EcommerceHelper::showNumberOfProductsInProductSingle()): ?>
                        <?php if($productVariation->quantity !== 1): ?>
                            <?php echo e(trans('plugins/ecommerce::products.number_products_available_plural', ['number' => $productVariation->quantity])); ?>

                        <?php else: ?>
                            <?php echo e(trans('plugins/ecommerce::products.number_product_available_singular', ['number' => $productVariation->quantity])); ?>

                        <?php endif; ?>
                    <?php else: ?>
                        <?php echo e(trans('plugins/ecommerce::ecommerce.in_stock')); ?>

                    <?php endif; ?>
                </span>
           <?php endif; ?>
       <?php endif; ?>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/includes/product-availability.blade.php ENDPATH**/ ?>