<div
    class="form-group mb-3 option-field product-option product-option-<?php echo e(Str::slug($option->name)); ?> product-option-<?php echo e($option->id); ?>"
    data-option-slug="<?php echo e(Str::slug($option->name)); ?>"
    style="margin-bottom: 10px"
>
    <div class="product-option-item-wrapper">
        <div class="product-option-item-values">
            <div class="form-radio">
                <?php $__currentLoopData = $option->values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $price = 0;
                        if (!empty($value->affect_price) && doubleval($value->affect_price) > 0) {
                            $price = $value->affect_type == 0 ? $value->affect_price : (floatval($value->affect_price) * $product->price()->getPrice()) / 100;
                        }
                    ?>
                    <div class="product-option-item-label">
                        <label class="form-label <?php echo e($option->required ? 'required' : ''); ?>">
                            <?php echo e($option->name); ?>

                            <?php if($price > 0): ?>
                                (<span class="extra-price">+ <?php echo e(format_price($price)); ?></span>)
                            <?php endif; ?>
                        </label>
                    </div>
                    <input
                        name="options[<?php echo e($option->id); ?>][option_type]"
                        type="hidden"
                        value="field"
                    />
                    <input
                        class="form-control"
                        id="option-<?php echo e($option->id); ?>-value-<?php echo e(Str::slug($option->values[0]['option_value'])); ?>"
                        name="options[<?php echo e($option->id); ?>][values]"
                        data-extra-price="0"
                        type="text"
                        <?php echo e($option->required ? 'required' : ''); ?>

                    >
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/options/field.blade.php ENDPATH**/ ?>