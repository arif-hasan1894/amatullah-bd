<?php if (isset($component)) { $__componentOriginald9d6100f07b8c41618767a130852b3e8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald9d6100f07b8c41618767a130852b3e8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::empty-state','data' => ['title' => trans('No items'),'subtitle' => trans('There is no items to display.')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::empty-state'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('No items')),'subtitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('There is no items to display.'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald9d6100f07b8c41618767a130852b3e8)): ?>
<?php $attributes = $__attributesOriginald9d6100f07b8c41618767a130852b3e8; ?>
<?php unset($__attributesOriginald9d6100f07b8c41618767a130852b3e8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald9d6100f07b8c41618767a130852b3e8)): ?>
<?php $component = $__componentOriginald9d6100f07b8c41618767a130852b3e8; ?>
<?php unset($__componentOriginald9d6100f07b8c41618767a130852b3e8); ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/core/base/resources/views/sections/empty.blade.php ENDPATH**/ ?>