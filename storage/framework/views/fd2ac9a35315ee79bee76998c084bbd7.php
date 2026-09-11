<?php if(is_plugin_active('blog')): ?>
    <?php
        $posts = get_recent_posts($config['number_display']);
    ?>
    <?php if($posts->isNotEmpty()): ?>
        <aside class="widget widget--blog widget--recent-post">
            <h3 class="widget__title"><?php echo e($config['name']); ?></h3>
            <div class="widget__content">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($post->url); ?>"><?php echo BaseHelper::clean($post->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </aside>
    <?php endif; ?>
<?php endif; ?>


<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/widgets/recent-posts/templates/frontend.blade.php ENDPATH**/ ?>