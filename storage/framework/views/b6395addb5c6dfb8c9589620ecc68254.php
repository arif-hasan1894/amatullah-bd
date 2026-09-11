<?php if($showLabel && $showField): ?>
    <?php if($options['wrapper'] !== false): ?>
        <div <?php echo $options['wrapperAttrs']; ?>>
    <?php endif; ?>
<?php endif; ?>

<?php if($showLabel && $options['label'] !== false && $options['label_show']): ?>
    <?php echo Form::label($name, $options['label'], $options['label_attr']); ?>

<?php endif; ?>

<?php
    if (Arr::get($options, 'choices')) {
        $classAppend = 'list-tagify';
    } else {
        $classAppend = 'tags';
    }
?>

<?php if($showField): ?>
    <?php
        $options['attr']['class'] = (rtrim(Arr::get($options, 'attr.class'), ' ') ?: '') . ' ' . $classAppend;

        if (Arr::has($options, 'choices')) {
            $choices = $options['choices'];

            if ($choices instanceof \Illuminate\Support\Collection) {
                $choices = $choices->toArray();
            }

            if ($choices) {
                $options['attr']['data-list'] = json_encode($choices);
            }
        }
    ?>
    <?php echo Form::text($name, $options['value'], $options['attr']); ?>

    <?php echo $__env->make('core/base::forms.partials.help-block', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>

<?php echo $__env->make('core/base::forms.partials.errors', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php if($showLabel && $showField): ?>
    <?php if($options['wrapper'] !== false): ?>
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/shortcode/resources/views/forms/fields/tags.blade.php ENDPATH**/ ?>