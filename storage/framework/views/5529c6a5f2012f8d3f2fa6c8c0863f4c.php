<?php if($labels->isNotEmpty()): ?>
    <?php
        $requestLabels = EcommerceHelper::parseFilterParams(request(), 'labels');
    ?>
    <div class="bb-product-filter">
        <h4 class="bb-product-filter-title"><?php echo e(trans('plugins/ecommerce::products.form.labels')); ?></h4>

        <div class="bb-product-filter-content">
            <ul class="bb-product-filter-items filter-checkbox">
                <?php $__currentLoopData = $labels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="bb-product-filter-item">
                        <input id="attribute-label-<?php echo e($label->id); ?>" type="checkbox" name="labels[]" value="<?php echo e($label->id); ?>" <?php if(in_array($label->id, $requestLabels)): echo 'checked'; endif; ?> />
                        <label for="attribute-label-<?php echo e($label->id); ?>"><?php echo e($label->name); ?></label>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/includes/filters/labels.blade.php ENDPATH**/ ?>