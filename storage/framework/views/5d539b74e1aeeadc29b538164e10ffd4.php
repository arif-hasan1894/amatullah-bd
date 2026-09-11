<div class="widget meta-boxes">
    <div class="widget-title">
        <h4><span><?php echo e($title ?? trans('core/base::forms.image')); ?></span></h4>
    </div>
    <div class="widget-body">
        <?php echo Form::mediaImage($name ?? 'image', $value); ?>

        <?php echo Form::error($name ?? 'image', $errors); ?>

    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/core/base/resources/views/forms/partials/image-box.blade.php ENDPATH**/ ?>