<form method="post" id="widget-add-form">
    <input name="id" type="hidden" value="<?php echo e($widget->getId()); ?>">
    <?php echo $widget->form($sidebarId, $position); ?>

</form>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/widget/resources/views/partials/widget-form.blade.php ENDPATH**/ ?>