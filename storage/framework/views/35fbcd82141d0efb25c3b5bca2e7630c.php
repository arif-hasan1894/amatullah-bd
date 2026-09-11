<div class="mb-3">
    <label for="widget-name"><?php echo e(trans('core/base::forms.name')); ?></label>
    <input
        class="form-control"
        name="name"
        type="text"
        value="<?php echo e($config['name']); ?>"
    >
</div>
<div class="mb-3">
    <label for="content"><?php echo e(trans('core/base::forms.content')); ?></label>
    <textarea
        class="form-control"
        name="content"
        rows="7"
    ><?php echo e($config['content']); ?></textarea>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/widget/resources/views/widgets/text/backend.blade.php ENDPATH**/ ?>