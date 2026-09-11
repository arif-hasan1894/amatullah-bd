<div>
    <h3><?php echo e($post->name); ?></h3>
    <?php echo Theme::breadcrumb()->render(); ?>

</div>
<header>
    <h3><?php echo e($post->name); ?></h3>
    <div>
        <?php if($post->categories->isNotEmpty()): ?>
            <span>
                <a href="<?php echo e($post->categories->first()->url); ?>"><?php echo e($post->categories->first()->name); ?></a>
            </span>
        <?php endif; ?>
        <span><?php echo e($post->created_at->format('M d, Y')); ?></span>

        <?php if($post->tags->isNotEmpty()): ?>
            <span>
                <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($tag->url); ?>"><?php echo e($tag->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </span>
        <?php endif; ?>
    </div>
</header>
<div class='ck-content'>
    <?php echo BaseHelper::clean($post->content); ?>

</div>
<br />
<?php echo apply_filters(BASE_FILTER_PUBLIC_COMMENT_AREA, null, $post); ?>


<?php $relatedPosts = get_related_posts($post->getKey(), 2); ?>

<?php if($relatedPosts->isNotEmpty()): ?>
    <footer>
        <?php $__currentLoopData = $relatedPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <article>
                    <div><a href="<?php echo e($relatedItem->url); ?>"></a>
                        <img
                            src="<?php echo e(RvMedia::getImageUrl($relatedItem->image, null, false, RvMedia::getDefaultImage())); ?>"
                            alt="<?php echo e($relatedItem->name); ?>"
                        >
                    </div>
                    <header><a href="<?php echo e($relatedItem->url); ?>"> <?php echo e($relatedItem->name); ?></a></header>
                </article>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </footer>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/blog/resources/views/themes/post.blade.php ENDPATH**/ ?>