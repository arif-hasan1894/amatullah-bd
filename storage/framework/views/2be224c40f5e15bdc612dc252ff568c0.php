<?php echo Theme::partial('header-meta'); ?>

<body <?php echo Theme::bodyAttributes(); ?> <?php if(Theme::get('pageId')): ?> id="<?php echo e(Theme::get('pageId')); ?>" <?php endif; ?>>
<div class="ps-page--comming-soon">
    <div class="container">
        <div class="ps-page__header">
            <h1><?php echo e(SeoHelper::getTitle()); ?></h1>
        </div>
        <div><?php echo Theme::content(); ?></div>
        <div class="ps-page__footer">
            <?php echo Theme::partial('social-links'); ?>

        </div>
    </div>
</div>

<?php echo Theme::footer(); ?>

</body>
</html>

<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/layouts/coming-soon.blade.php ENDPATH**/ ?>