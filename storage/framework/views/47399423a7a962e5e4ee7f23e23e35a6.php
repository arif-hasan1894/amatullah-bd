<?php
    $displayAttributes = $attributes->where('attribute_set_id', $set->id);
?>

<?php if($displayAttributes && $displayAttributes->isNotEmpty()): ?>
    <div
        class="bb-product-attribute-swatch text-swatches-wrapper attribute-swatches-wrapper"
        data-type="text"
        data-slug="<?php echo e($set->slug); ?>"
    >
        <div class="bb-product-attribute-swatch-title"><?php echo e($set->title); ?>:</div>
        <ul class="bb-product-attribute-swatch-list text-swatch attribute-swatch">
            <?php $__currentLoopData = $displayAttributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $isDisabled = ! $variationInfo->where('id', $attribute->id)->isNotEmpty();
                ?>
                <li
                    data-slug="<?php echo e($attribute->slug); ?>"
                    data-id="<?php echo e($attribute->id); ?>"
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'bb-product-attribute-swatch-item attribute-swatch-item',
                        'disabled' => $isDisabled,
                    ]); ?>"
                >
                    <label>
                        <input
                            name="attribute_<?php echo e($set->slug); ?>_<?php echo e($key); ?>"
                            data-slug="<?php echo e($attribute->slug); ?>"
                            <?php if(! empty($referenceProduct)): ?> data-reference-product="<?php echo e($referenceProduct->slug); ?>" <?php endif; ?>
                            type="radio"
                            value="<?php echo e($attribute->id); ?>"
                            <?php if($selected->where('id', $attribute->id)->isNotEmpty()): echo 'checked'; endif; ?>
                            class="product-filter-item"
                            <?php if($isDisabled): ?> disabled <?php endif; ?>
                        >
                        <span class="bb-product-attribute-text-display"><?php echo e($attribute->title); ?></span>
                    </label>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/attributes/_layouts/text.blade.php ENDPATH**/ ?>