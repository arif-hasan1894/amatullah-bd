<?php if(! empty($productOptions['optionCartValue'])): ?>
    <div class="product-cart-options mt-1">
        <?php if($displayBasePrice): ?>
            <div class="small d-flex gap-2">
                <span><?php echo e(trans('plugins/ecommerce::product-option.price')); ?>:</span>
                <strong><?php echo e($product->original_product->price()->displayAsText()); ?></strong>
            </div>
        <?php endif; ?>

        <?php $__currentLoopData = $productOptions['optionCartValue']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $price = 0;
                $totalOptionValue = count($optionValue);
            ?>
            <?php if(!$totalOptionValue) continue; ?>
            <div class="small d-flex gap-2">
                <span>
                    <?php echo e($productOptions['optionInfo'][$key]); ?>:
                    <?php $__currentLoopData = $optionValue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            if ($value['affect_type'] == 1) {
                                $price += ($product->original_product->price()->getPrice() * $value['affect_price']) / 100;
                            } else {
                                $price += $value['affect_price'];
                            }
                        ?>
                        <strong><?php echo e($value['option_value']); ?></strong><?php if(! $loop->last): ?>,&nbsp;<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </span>
                <?php if($price > 0): ?>
                    <strong class="text-nowrap ps-2">+ <?php echo e(format_price($price)); ?></strong>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/options/render-options-info.blade.php ENDPATH**/ ?>