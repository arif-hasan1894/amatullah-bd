<div
    class="form-group mb-3 variant-radio product-option product-option-<?php echo e(Str::slug($option->name)); ?> product-option-<?php echo e($option->id); ?>"
    data-option-slug="<?php echo e(Str::slug($option->name)); ?>"
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
                value="dropdown"
            />
            <select
                class="form-select"
                name="options[<?php echo e($option->id); ?>][values]"
                <?php echo e($option->required ? 'required' : ''); ?>

            >
                <option value=""><?php echo e(trans('plugins/ecommerce::ecommerce.select_an_option')); ?></option>
                <?php $__currentLoopData = $option->values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $price = 0;
                        if (!empty($value->affect_price) && doubleval($value->affect_price) > 0) {
                            $price = $value->affect_type == 0 ? $value->affect_price : (floatval($value->affect_price) * $product->price()->getPrice()) / 100;
                        }
                    ?>
                    <option
                        data-extra-price="<?php echo e(format_price($price, null, true)); ?>"
                        data-value-slug="<?php echo e(Str::slug($value->option_value)); ?>"
                        value="<?php echo e($value->option_value); ?>"
                    ><?php echo e($value->option_value); ?> <?php echo e($price > 0 ? '+' . format_price($price) : ''); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/options/dropdown.blade.php ENDPATH**/ ?>