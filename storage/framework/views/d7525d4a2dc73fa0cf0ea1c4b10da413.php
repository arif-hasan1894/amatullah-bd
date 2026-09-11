<div
    class="form-group mb-3 variant-radio product-option product-option-<?php echo e(Str::slug($option->name)); ?> product-option-<?php echo e($option->id); ?>"
    data-option-slug="<?php echo e(Str::slug($option->name)); ?>"
    style="margin-bottom: 10px"
>
    <div class="product-option-item-wrapper">
        <div class="product-option-item-label">
            <label class="<?php echo e($option->required ? 'required' : ''); ?>">
                <?php echo e($option->name); ?>

            </label>
        </div>
        <div class="product-option-item-values">
            <input
                name="options[<?php echo e($option->id); ?>][option_type]"
                type="hidden"
                value="radio"
            />
            <?php $__currentLoopData = $option->values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $price = 0;
                    if (!empty($value->affect_price) && doubleval($value->affect_price) > 0) {
                        $price = $value->affect_type == 0 ? $value->affect_price : (floatval($value->affect_price) * $product->price()->getPrice()) / 100;
                    }
                ?>
                <div class="<?php echo e($wrapperClass ?? 'form-radio'); ?>">
                    <input
                        id="option-<?php echo e($option->id); ?>-value-<?php echo e(Str::slug($value->option_value)); ?>"
                        name="options[<?php echo e($option->id); ?>][values]"
                        data-extra-price="<?php echo e(format_price($price, null, true)); ?>"
                        data-value-slug="<?php echo e(Str::slug($value->option_value)); ?>"
                        type="radio"
                        value="<?php echo e($value->option_value); ?>"
                        <?php if(isset($inputClass)): ?> class="<?php echo e($inputClass); ?>" <?php endif; ?>
                        <?php if($option->required && $loop->first): ?> checked <?php endif; ?>
                    >
                    <label for="option-<?php echo e($option->id); ?>-value-<?php echo e(Str::slug($value->option_value)); ?>" <?php if(isset($labelClass)): ?> class="<?php echo e($labelClass); ?>" <?php endif; ?>>
                        &nbsp;<?php echo e($value->option_value); ?>

                        <?php if($price > 0): ?>
                            <strong class="extra-price">+ <?php echo e(format_price($price)); ?></strong>
                        <?php endif; ?>
                    </label>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/options/radio.blade.php ENDPATH**/ ?>