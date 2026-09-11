<div class="container">
    <h3 class="page-intro__title"><?php echo e($page->name); ?></h3>
    <?php echo Theme::breadcrumb()->render(); ?>

</div>
<div>
    <?php echo apply_filters(
        PAGE_FILTER_FRONT_PAGE_CONTENT,
        Html::tag('div', BaseHelper::clean($page->content), ['class' => 'ck-content'])->toHtml(),
        $page,
    ); ?>

</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/page/resources/views/themes/page.blade.php ENDPATH**/ ?>