<?php $__currentLoopData = $attributeSets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attributeSet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
        $selected = Arr::get($selectedAttrs, $attributeSet->slug, $selectedAttrs);

        $view = EcommerceHelper::viewPath("attributes._layouts-filter.$attributeSet->display_layout");

        if (! view()->exists($view)) {
            $view = EcommerceHelper::viewPath('attributes._layouts.dropdown');
        }
    ?>

    <?php echo $__env->make($view, [
        'set' => $attributeSet,
        'attributes' => $attributeSet->attributes,
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/attributes/attributes-filter-renderer.blade.php ENDPATH**/ ?>