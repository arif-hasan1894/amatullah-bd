<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($loop->first): ?>
        <div class="ps-post">
            <div class="ps-post__thumbnail">
                <a class="ps-post__overlay" href="<?php echo e($post->url); ?>"></a>
                <?php echo RvMedia::image($post->image, $post->name, 'medium'); ?>

            </div>
            <div class="ps-post__content">
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
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php if($posts->count() > 1): ?>
    <div class="row">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(!$loop->first): ?>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 ">
                    <div class="ps-post">
                        <div class="ps-post__thumbnail">
                            <a class="ps-post__overlay" href="<?php echo e($post->url); ?>"></a>
                            <?php echo RvMedia::image($post->image, $post->name, 'small'); ?>

                        </div>
                        <div class="ps-post__content">
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
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>

<div class="ps-pagination">
    <?php echo $posts->withQueryString()->links(); ?>

</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/views/loop.blade.php ENDPATH**/ ?>