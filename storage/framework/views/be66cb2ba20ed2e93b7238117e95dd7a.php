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
                    <div><span><?php echo e($post->created_at->format('M d, Y')); ?></span><span><?php echo e($post->author->name); ?></span> -
                        <?php echo e(trans('plugins/blog::base.categories')); ?>:
                        <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e($category->url); ?>"><?php echo e($category->name); ?></a>
                            <?php if(!$loop->last): ?>
                                ,
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </header>
                <div>
                    <p><?php echo e($post->description); ?></p>
                </div>
            </div>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div>
        <?php echo $posts->withQueryString()->links(); ?>

    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/blog/resources/views/themes/templates/posts.blade.php ENDPATH**/ ?>