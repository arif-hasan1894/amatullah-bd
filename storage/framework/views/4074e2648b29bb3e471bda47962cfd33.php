<?php echo Theme::partial('header'); ?>


<div class="ps-page--blog">
    <div class="container">
        <div class="ps-page__header">
            <h1><?php echo e(SeoHelper::getTitle()); ?></h1>
            <div class="ps-breadcrumb--2">
                <?php echo Theme::partial('breadcrumbs'); ?>

            </div>
        </div>
        <div class="ps-blog--sidebar">
            <div class="ps-blog__left">
                <?php echo Theme::content(); ?>

            </div>
            <div class="ps-blog__right">
                <?php echo dynamic_sidebar('primary_sidebar'); ?>

            </div>
        </div>
    </div>
</div>

<?php echo Theme::partial('footer'); ?>

<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/layouts/blog-sidebar.blade.php ENDPATH**/ ?>