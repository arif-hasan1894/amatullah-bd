<?php
    Theme::layout('blog-sidebar')
?>

<div class="ps-post--detail sidebar">
    <div class="ps-post__header">
        <p><?php echo e(Theme::formatDate($post->created_at)); ?> <?php if($post->author): ?> / <?php echo e(__('By')); ?> <?php echo e($post->author->name); ?> <?php endif; ?> / <?php echo e(__('in')); ?> <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <a href="<?php echo e($category->url); ?>"><?php echo BaseHelper::clean($category->name); ?></a> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></p>
    </div>
    <div class="ps-post__content" style="padding-top: 0;">
        <div class="ck-content"><?php echo BaseHelper::clean($post->content); ?></div>
            <br />
            <?php echo apply_filters(BASE_FILTER_PUBLIC_COMMENT_AREA, null, $post); ?>

    </div>
    <div class="ps-post__footer">
        <?php if(!$post->tags->isEmpty()): ?>
            <p class="ps-post__tags"><?php echo e(__('Tags')); ?>:
                <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($tag->url); ?>"><?php echo e($tag->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </p>
        <?php endif; ?>
        <div class="ps-post__sharing">
            <span><?php echo e(__('Share:')); ?></span>

            <?php echo Theme::renderSocialSharing($post->url, SeoHelper::getDescription(), $post->image); ?>

        </div>
    </div>
    <?php $relatedPosts = get_related_posts($post->id, 2); ?>

    <?php if($relatedPosts->count()): ?>
        <div class="ps-related-posts">
            <h3><?php echo e(__('Related Posts')); ?></h3>
            <div class="row">
                <?php $__currentLoopData = $relatedPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-6 col-12">
                        <div class="ps-post">
                            <div class="ps-post__thumbnail">
                                <a class="ps-post__overlay" href="<?php echo e($post->url); ?>"></a>
                                <?php echo RvMedia::image($post->image, $post->name, 'small'); ?>

                            </div>
                            <div class="ps-post__content" style="padding: 20px 0;">
                                <div class="ps-post__top">
                                    <div class="ps-post__meta">
                                        <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php echo e($category->url); ?>"><?php echo BaseHelper::clean($category->name); ?></a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <a class="ps-post__title" href="<?php echo e($post->url); ?>"><?php echo BaseHelper::clean($post->name); ?></a>
                                </div>
                                <div class="ps-post__bottom">
                                    <p><?php echo e(Theme::formatDate($post->created_at)); ?> <?php if($post->author): ?> <?php echo e(__('by')); ?> <?php echo e($post->author->name); ?> <?php endif; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endif; ?>
</div>


<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/views/post.blade.php ENDPATH**/ ?>