<?php if($displayBasePrice && $basePrice != null): ?>
    <div class="small d-flex gap-2">
        <span><?php echo e(trans('plugins/ecommerce::product-option.price')); ?>:</span>
        <strong><?php echo e(format_price($basePrice)); ?></strong>
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
                    if ($value['affect_price']) {
                        if ($value['affect_type'] == 1) {
                            $price += ($basePrice * $value['affect_price']) / 100;
                        } else {
                            $price += $value['affect_price'];
                        }
                    }
                ?>
                <strong><?php echo e($value['option_value']); ?></strong>
                <?php if($key + 1 < $totalOptionValue): ?>
                    ,
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </span>
        <?php if($price > 0): ?>
            <strong class="text-nowrap ps-2">+ <?php echo e(format_price($price)); ?></strong>
        <?php endif; ?>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/options/render-options-html.blade.php ENDPATH**/ ?>