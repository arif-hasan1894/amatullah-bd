<?php if (isset($component)) { $__componentOriginal1cf2215eb572939eadf530b06ecc86cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1cf2215eb572939eadf530b06ecc86cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.on-off.index','data' => ['attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.on-off'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1cf2215eb572939eadf530b06ecc86cc)): ?>
<?php $attributes = $__attributesOriginal1cf2215eb572939eadf530b06ecc86cc; ?>
<?php unset($__attributesOriginal1cf2215eb572939eadf530b06ecc86cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1cf2215eb572939eadf530b06ecc86cc)): ?>
<?php $component = $__componentOriginal1cf2215eb572939eadf530b06ecc86cc; ?>
<?php unset($__componentOriginal1cf2215eb572939eadf530b06ecc86cc); ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/core/setting/resources/views/components/on-off.blade.php ENDPATH**/ ?>