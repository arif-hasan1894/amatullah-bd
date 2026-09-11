<select class="ps-select ps-select-shop-sort" data-placeholder="<?php echo e(__('Sort Items')); ?>" aria-label="<?php echo e(__('Sort Items')); ?>">
    <?php $__currentLoopData = EcommerceHelper::getSortParams(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($key); ?>" <?php if(request()->input('sort-by') == $key): ?> selected <?php endif; ?>><?php echo e($name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/views/ecommerce/includes/sort.blade.php ENDPATH**/ ?>