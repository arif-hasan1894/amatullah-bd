<?php if($attributes->isNotEmpty()): ?>
    <div class="bb-product-attribute-list d-inline-block">
        <?php if(in_array($attributeSet->display_layout, ['text', 'dropdown'])): ?>
            <ul class="d-flex flex-wrap gap-2 list-unstyled mb-0">
                <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="bg-body-tertiary border px-2">
                        <?php echo e($attribute->title); ?>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php else: ?>
            <ul class="bb-product-attribute-swatch-list visual-swatch color-swatch attribute-swatch">
                <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="bb-product-attribute-swatch-item attribute-swatch-item">
                        <label>
                            <?php if($attribute->image): ?>
                                <?php echo e(RvMedia::image($attribute->image, $attribute->title, attributes: ['class' => 'rounded-pill'])); ?>

                            <?php else: ?>
                                <span style="background-color: <?php echo e($attribute->color); ?> !important;"></span>
                            <?php endif; ?>
                            <div class="bb-product-attribute-swatch-item-tooltip"><?php echo e($attribute->title); ?></div>
                        </label>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>
    </div>
<?php else: ?>
    &mdash;
<?php endif; ?>

<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/attributes/attributes-view-only.blade.php ENDPATH**/ ?>