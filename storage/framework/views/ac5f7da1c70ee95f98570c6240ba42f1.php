<aside class="widget widget--blog widget--tags">
    <h3 class="widget__title"><?php echo e($config['name']); ?></h3>
    <div class="widget__content">
        <?php $__currentLoopData = get_popular_tags($config['number_display']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e($tag->url); ?>"><?php echo e($tag->name); ?></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</aside>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/widgets/tags/templates/frontend.blade.php ENDPATH**/ ?>