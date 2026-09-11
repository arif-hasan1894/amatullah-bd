<div class="mb-3">
    <label class="form-label" for="widget-name"><?php echo e(trans('core/base::forms.name')); ?></label>
    <input
        class="form-control"
        name="name"
        type="text"
        value="<?php echo e($config['name']); ?>"
    >
</div>

<div class="mb-3 product-categories-select">
    <div class="multi-choices-widget list-item-checkbox">
        <ul>
            <?php $__currentLoopData = ProductCategoryHelper::getActiveTreeCategories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <label>
                        <input
                            name="categories[]"
                            type="checkbox"
                            value="<?php echo e($category->id); ?>"
                            <?php if(in_array($category->id, $config['categories'])): ?> checked="checked" <?php endif; ?>
                        >
                        <?php echo e($category->name); ?>

                    </label>
                    <?php if($category->activeChildren->isNotEmpty()): ?>
                        <ul style="padding-left: 20px">
                            <?php $__currentLoopData = $category->activeChildren; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <label>
                                        <input
                                            name="categories[]"
                                            type="checkbox"
                                            value="<?php echo e($child->id); ?>"
                                            <?php if(in_array($child->id, $config['categories'])): ?> checked="checked" <?php endif; ?>
                                        >
                                        <?php echo e($child->name); ?>

                                    </label>
                                    <?php if($child->activeChildren->isNotEmpty()): ?>
                                        <ul style="padding-left: 20px">
                                            <?php $__currentLoopData = $child->activeChildren; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <label>
                                                        <input
                                                            name="categories[]"
                                                            type="checkbox"
                                                            value="<?php echo e($item->id); ?>"
                                                            <?php if(in_array($item->id, $config['categories'])): ?> checked="checked" <?php endif; ?>
                                                        >
                                                        <?php echo e($item->name); ?>

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
</div>

<style>
    .product-categories-select .list-item-checkbox {
        background: #f1f1f1;
        margin-bottom: 20px;
        padding-left: 15px !important;
    }

    .product-categories-select .list-item-checkbox input[type=checkbox] {
        margin-left: 2px;
    }
</style>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/widgets/product-categories/templates/backend.blade.php ENDPATH**/ ?>