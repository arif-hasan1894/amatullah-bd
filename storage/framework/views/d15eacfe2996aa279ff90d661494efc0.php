<select
    class="select-full"
    name="<?php echo e($field); ?>"
    <?php if($multiple): ?> multiple <?php endif; ?>
>
    <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option
            value="<?php echo e($key); ?>"
            <?php if(in_array($key, $value)): echo 'selected'; endif; ?>
        ><?php echo e($label); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/shortcode/resources/views/fields/select.blade.php ENDPATH**/ ?>