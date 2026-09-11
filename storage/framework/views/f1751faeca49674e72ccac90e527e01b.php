<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <article>
            <div><a href="<?php echo e($post->url); ?>"></a>
                <img
                    src="<?php echo e(RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage())); ?>"
                    alt="<?php echo e($post->name); ?>"
                >
            </div>
            <header><a href="<?php echo e($post->url); ?>"> <?php echo e($post->name); ?></a></header>
        </article>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="pagination">
    <?php echo $posts->withQueryString()->links(); ?>

</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/blog/resources/views/themes/loop.blade.php ENDPATH**/ ?>