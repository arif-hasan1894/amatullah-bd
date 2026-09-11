<?php
    $displayAttributes = $attributes->where('attribute_set_id', $set->id);
?>

<?php if($displayAttributes && $displayAttributes->isNotEmpty()): ?>
    <div
        class="bb-product-attribute-swatch dropdown-swatches-wrapper attribute-swatches-wrapper"
        data-type="dropdown"
        data-slug="<?php echo e($set->slug); ?>"
    >
        <div class="bb-product-attribute-swatch-title"><?php echo e($set->title); ?>:</div>
        <div class="bb-product-attribute-swatch-list attribute-swatch">
            <select class="form-select product-filter-item">
                <option value=""><?php echo e(trans('plugins/ecommerce::products.select_attribute', ['name' => strtolower($set->title)])); ?></option>
                <?php $__currentLoopData = $displayAttributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $isDisabled = isset($variationInfo) && $variationInfo->where('id', $attribute->id)->isEmpty();
                    ?>
                    <option
                        data-id="<?php echo e($attribute->id); ?>"
                        data-slug="<?php echo e($attribute->slug); ?>"
                        <?php if(! empty($referenceProduct)): ?> data-reference-product="<?php echo e($referenceProduct->slug); ?>" <?php endif; ?>
                        value="<?php echo e($attribute->id); ?>"
                        <?php if($selected->where('id', $attribute->id)->isNotEmpty()): echo 'selected'; endif; ?>
                        <?php if($isDisabled): echo 'disabled'; endif; ?>
                    >
                        <?php echo e($attribute->title); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/attributes/_layouts/dropdown.blade.php ENDPATH**/ ?>