<?php
    $key = 'upsale-' . $product->id . '-' . mt_rand();
?>

<div
    class="ec-upsell-attributes product-attributes product-attribute-swatches"
    id="product-attributes-<?php echo e($product->id); ?>"
    data-target="<?php echo e(route('public.web.get-variation-by-attributes', $product->getKey())); ?>"
    data-update-url="false"
>
    <?php
        $variationInfo = $productVariationsInfo;
        $variationNextIds = [];
    ?>

    <?php $__currentLoopData = $attributeSets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $set): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(! $loop->first): ?>
            <?php
                $variationInfo = $productVariationsInfo->where('attribute_set_id', $set->id)->whereIn('variation_id', $variationNextIds);
            ?>
        <?php endif; ?>

        <?php
            $displayAttributes = $attributes->where('attribute_set_id', $set->id);
            $isVisual = $set->display_layout === 'visual';
        ?>

        <?php if($displayAttributes && $displayAttributes->isNotEmpty()): ?>
            <div
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'ec-upsell-attribute-group',
                    'visual-swatches-wrapper' => $isVisual,
                    'text-swatches-wrapper' => !$isVisual,
                ]); ?>"
                data-type="<?php echo e($set->display_layout); ?>"
                data-slug="<?php echo e($set->slug); ?>"
            >
                <span class="ec-upsell-attribute-label"><?php echo e($set->title); ?>:</span>
                <ul class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'ec-upsell-attribute-options',
                    'visual-swatch' => $isVisual,
                    'text-swatch' => !$isVisual,
                ]); ?>" data-slug="<?php echo e($set->slug); ?>">
                    <?php $__currentLoopData = $displayAttributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $isDisabled = $variationInfo->where('id', $attribute->id)->isEmpty();
                            $style = $attribute->getAttributeStyle($set, $productVariations);
                        ?>
                        <li
                            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                'ec-upsell-attribute-option',
                                'attribute-swatch-item',
                                'disabled' => $isDisabled,
                            ]); ?>"
                            data-slug="<?php echo e($attribute->slug); ?>"
                            data-id="<?php echo e($attribute->id); ?>"
                            <?php if($isDisabled): ?> title="<?php echo e(__('Not available')); ?>" <?php endif; ?>
                        >
                            <label>
                                <input
                                    type="radio"
                                    name="attribute_<?php echo e($set->slug); ?>_<?php echo e($key); ?>"
                                    data-slug="<?php echo e($attribute->slug); ?>"
                                    value="<?php echo e($attribute->id); ?>"
                                    <?php if($selected->where('id', $attribute->id)->isNotEmpty()): echo 'checked'; endif; ?>
                                    class="product-filter-item"
                                    <?php if($isDisabled): ?> disabled <?php endif; ?>
                                >
                                <?php if($isVisual && $style): ?>
                                    <span
                                        class="ec-upsell-attribute-visual"
                                        style="<?php echo e($style); ?>"
                                        title="<?php echo e($attribute->title); ?>"
                                    ></span>
                                <?php else: ?>
                                    <span class="ec-upsell-attribute-text"><?php echo e($attribute->title); ?></span>
                                <?php endif; ?>
                            </label>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php
            [$variationNextIds] = handle_next_attributes_in_product($attributes->where('attribute_set_id', $set->id), $productVariationsInfo, $set->id, $selected->pluck('id')->toArray(), $loop->index, $variationNextIds);
        ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/attributes/swatches-renderer-upsale.blade.php ENDPATH**/ ?>