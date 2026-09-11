<ol class="dd-list">
    <?php $__currentLoopData = $menu_nodes->loadMissing('metadata'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('packages/menu::partials.node', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ol>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/menu/resources/views/partials/menu.blade.php ENDPATH**/ ?>