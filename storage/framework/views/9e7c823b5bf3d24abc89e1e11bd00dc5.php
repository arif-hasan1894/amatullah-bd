<div class="mb-3">
    <label class="form-label" for="widget-name"><?php echo e(__('Name')); ?></label>
    <input type="text" id="widget-name" class="form-control" name="name" value="<?php echo e($config['name']); ?>">
</div>

<div class="mb-3">
    <label class="form-label" for="widget_menu"><?php echo e(__('Select menu')); ?></label>
    <?php echo Form::customSelect('menu_id', $menus, $config['menu_id'], ['class' => 'form-control select-full']); ?>

</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/widgets/custom-menu/templates/backend.blade.php ENDPATH**/ ?>