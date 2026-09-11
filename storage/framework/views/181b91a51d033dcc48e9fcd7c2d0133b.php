<?php if(count($choices) > 0): ?>
    <?php
        $attributes['name'] = Arr::get($attributes, 'name', $name);
        $attributes['class'] = Arr::get($attributes, 'class', '') . ' form-imagecheck-input';
        $attributes = Arr::except($attributes, ['id', 'type', 'value']);
    ?>

    <?php if (isset($component)) { $__componentOriginal1d90caa58dbadb495323bd6b89bc42e7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1d90caa58dbadb495323bd6b89bc42e7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.image-check','data' => ['options' => $choices,'value' => $value,'attributes' => new Illuminate\View\ComponentAttributeBag((array) $attributes)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.image-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($choices),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(new Illuminate\View\ComponentAttributeBag((array) $attributes))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1d90caa58dbadb495323bd6b89bc42e7)): ?>
<?php $attributes = $__attributesOriginal1d90caa58dbadb495323bd6b89bc42e7; ?>
<?php unset($__attributesOriginal1d90caa58dbadb495323bd6b89bc42e7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1d90caa58dbadb495323bd6b89bc42e7)): ?>
<?php $component = $__componentOriginal1d90caa58dbadb495323bd6b89bc42e7; ?>
<?php unset($__componentOriginal1d90caa58dbadb495323bd6b89bc42e7); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/core/base/resources/views/forms/partials/ui-selector.blade.php ENDPATH**/ ?>