<?php if(($attributes = $attributes->where('attribute_set_id', $set->id)) && $attributes->isNotEmpty()): ?>
    <div class="bb-product-filter-attribute-item">
        <h4 class="bb-product-filter-title"><?php echo e($set->title); ?></h4>

        <div class="bb-product-filter-content">
            <ul class="bb-product-filter-items filter-checkbox">
                <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="bb-product-filter-item">
                        <input
                            id="attribute-<?php echo e($attribute->id); ?>"
                            name="attributes[<?php echo e($set->slug); ?>][]"
                            type="checkbox"
                            value="<?php echo e($attribute->id); ?>"
                            <?php if(in_array($attribute->id, $selected)): echo 'checked'; endif; ?>
                        >
                        <label for="attribute-<?php echo e($attribute->id); ?>"><?php echo e($attribute->title); ?></label>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/attributes/_layouts-filter/dropdown.blade.php ENDPATH**/ ?>