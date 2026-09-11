<?php if(! $product->is_variation): ?>
    <div class="d-block">
        <div class="mb-1">
            <?php echo e(Html::link(route('products.edit', $product->id), $product->name, attributes: ['target' => '_blank', 'tabindex' => '-1'])); ?>

        </div>

        <?php if($product->sku): ?>
            <div class="d-block text-muted"><?php echo e(trans('plugins/ecommerce::products.sku_line', ['sku' => $product->sku])); ?></div>
        <?php endif; ?>
    </div>
<?php else: ?>
    <div class="d-flex align-items-start justify-content-start">
        <div class="me-1 text-muted">↳</div>
        <div>
            <?php if($product->variation_attributes): ?>
                <div class="d-block text-success mb-1"><?php echo e($product->variation_attributes); ?></div>
            <?php endif; ?>

            <?php if($product->sku): ?>
                <div class="d-block text-muted"><?php echo e(trans('plugins/ecommerce::products.sku_line', ['sku' => $product->sku])); ?></div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/product-prices/columns/name.blade.php ENDPATH**/ ?>