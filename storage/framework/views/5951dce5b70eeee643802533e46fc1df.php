<?php
    EcommerceHelper::registerThemeAssets();

    $product->loadMissing('variationAttributeSwatchesForProductList');

    $variationAttributeSwatchesForProductList = $product->variationAttributeSwatchesForProductList
        ->where('display_layout', 'visual')
        ->unique('attribute_id');
?>

<?php if($variationAttributeSwatchesForProductList->isNotEmpty()): ?>
    <ul class="bb-product-attribute-swatch-list visual-swatch color-swatch attribute-swatch mt-3">
        <?php $__currentLoopData = $variationAttributeSwatchesForProductList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $attribute->setRelation('product', $product);
            ?>
            <li class="bb-product-attribute-swatch-item attribute-swatch-item">
                <label>
                    <span style="background-color: <?php echo e($attribute->color ?: '#000'); ?> !important;"></span>
                    <div class="bb-product-attribute-swatch-item-tooltip"><?php echo e($attribute->attribute_title); ?></div>
                </label>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/includes/product-color-swatch.blade.php ENDPATH**/ ?>