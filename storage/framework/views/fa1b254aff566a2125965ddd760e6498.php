<div data-bb-toggle="tree-checkboxes">
    <ul class="list-unstyled">
        <?php $__currentLoopData = ProductCategoryHelper::getActiveTreeCategories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <label class="form-check">
                    <input
                        name="categories[]"
                        type="checkbox"
                        class="form-check-input"
                        value="<?php echo e($category->id); ?>"
                        <?php if(in_array($category->id, $config['categories'])): ?> checked="checked" <?php endif; ?>
                    >
                    <span class="form-check-label"><?php echo e($category->name); ?></span>
                </label>
                <?php if($category->activeChildren->isNotEmpty()): ?>
                    <ul style="padding-left: 20px">
                        <?php $__currentLoopData = $category->activeChildren; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <label class="form-check">
                                    <input
                                        name="categories[]"
                                        type="checkbox"
                                        class="form-check-input"
                                        value="<?php echo e($child->id); ?>"
                                        <?php if(in_array($child->id, $config['categories'])): ?> checked="checked" <?php endif; ?>
                                    >
                                    <span class="form-check-label"><?php echo e($child->name); ?></span>
                                </label>
                                <?php if($child->activeChildren->isNotEmpty()): ?>
                                    <ul style="padding-left: 20px">
                                        <?php $__currentLoopData = $child->activeChildren; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <label class="form-check">
                                                    <input
                                                        name="categories[]"
                                                        type="checkbox"
                                                        class="form-check-input"
                                                        value="<?php echo e($item->id); ?>"
                                                        <?php if(in_array($item->id, $config['categories'])): ?> checked="checked" <?php endif; ?>
                                                    >
                                                    <span class="form-check-label"><?php echo e($item->name); ?></span>
                                                </label>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>

<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/widgets/partials/select-product-categories.blade.php ENDPATH**/ ?>