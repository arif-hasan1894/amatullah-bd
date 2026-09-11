<div id="app">
<?php echo apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, Html::tag('div', BaseHelper::clean($page->content), ['class' => 'ck-content'])->toHtml(), 
$page); ?>

</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/views/page.blade.php ENDPATH**/ ?>