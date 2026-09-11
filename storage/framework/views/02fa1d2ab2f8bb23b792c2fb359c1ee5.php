<div class="mb-3">
    <label class="form-label" for="widget-name"><?php echo e(trans('core/base::forms.name')); ?></label>
    <input type="text" class="form-control" name="name" value="<?php echo e($config['name']); ?>">
</div>
<div class="mb-3">
    <label class="form-label" for="number_display"><?php echo e(__('Number categories to display')); ?></label>
    <input type="number" class="form-control" name="number_display" value="<?php echo e($config['number_display']); ?>">
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/widgets/blog-categories/templates/backend.blade.php ENDPATH**/ ?>