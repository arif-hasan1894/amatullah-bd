<div class="mb-3 position-relative">
    <label
        for="enable_lazy_loading"
        class="form-label"
    ><?php echo e(trans('packages/shortcode::shortcode.form.enable_lazy_loading')); ?></label>

    <?php echo Form::customSelect(
        'enable_lazy_loading',
        ['no' => trans('packages/shortcode::shortcode.form.no'), 'yes' => trans('packages/shortcode::shortcode.form.yes')],
        Arr::get($attributes, 'enable_lazy_loading', 'no'),
    ); ?>


    <?php echo Form::helper(trans('packages/shortcode::shortcode.form.lazy_loading_helper')); ?>

</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/shortcode/resources/views/fields/lazy-loading.blade.php ENDPATH**/ ?>