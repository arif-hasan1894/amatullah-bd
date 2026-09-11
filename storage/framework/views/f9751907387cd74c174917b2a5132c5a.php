<div>
    <h3><?php echo e($category->name); ?></h3>
    <?php echo Theme::breadcrumb()->render(); ?>

</div>
<div>
    <?php if($posts->isNotEmpty()): ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article>
                <div>
                    <a href="<?php echo e($post->url); ?>"><img
                            src="<?php echo e(RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage())); ?>"
                            alt="<?php echo e($post->name); ?>"
                        ></a>
                </div>
                <div>
                    <header>
                        <h3><a href="<?php echo e($post->url); ?>"><?php echo e($post->name); ?></a></h3>
                        <div>
                            <span><?php echo e($post->created_at->format('M d, Y')); ?></span><span><?php echo e($post->author->name); ?></span>
                            - <a href="<?php echo e($category->url); ?>"><?php echo e($category->name); ?></a>
                        </div>
                    </header>
                    <div>
                        <p><?php echo e($post->description); ?></p>
                    </div>
                </div>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div>
            <?php echo $posts->links(); ?>

        </div>
    <?php else: ?>
        <div>
            <p><?php echo e(trans('plugins/blog::base.no_data_to_display')); ?></p>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/blog/resources/views/themes/category.blade.php ENDPATH**/ ?>