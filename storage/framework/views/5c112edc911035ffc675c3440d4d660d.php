<?php if($categories): ?>
    <?php
        $selected = (array) $selected;
    ?>

    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option
            value="<?php echo e($category->id ?? ''); ?>"
            <?php if(in_array($category->id, $selected)): echo 'selected'; endif; ?>
            data-render-item="<?php echo e($category->name); ?>"
            data-render-option="<?php echo e($indent); ?> <?php echo e($category->name); ?>"
        >
            <?php echo e($category->name); ?>

        </option>

        <?php if($category->activeChildren): ?>
            <?php echo $__env->make('core/base::forms.partials.tree-categories-select-options', [
                'categories' => $category->activeChildren,
                'selected' => $selected,
                'currentId' => $currentId,
                'name' => $name,
                'indent' => "{$indent}—",
            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/core/base/resources/views/forms/partials/tree-categories-select-options.blade.php ENDPATH**/ ?>