<h3><?php echo e($config['name']); ?></h3>

<ul>
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <a
                href="<?php echo e(url((string) $item->url)); ?>"
                title="<?php echo e($item->label); ?>"
                <?php echo $item->attributes ? BaseHelper::clean($item->attributes) : null; ?>

                <?php if($item->is_open_new_tab): ?> target="_blank" <?php endif; ?>
            ><?php echo e($item->label); ?></a>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/widget/resources/views/widgets/core-simple-menu/frontend.blade.php ENDPATH**/ ?>