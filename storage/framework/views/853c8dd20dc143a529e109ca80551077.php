<?php if (isset($component)) { $__componentOriginalf087395afb626f41f5ce85bc59faa625 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf087395afb626f41f5ce85bc59faa625 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.radio-list','data' => ['attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.radio-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf087395afb626f41f5ce85bc59faa625)): ?>
<?php $attributes = $__attributesOriginalf087395afb626f41f5ce85bc59faa625; ?>
<?php unset($__attributesOriginalf087395afb626f41f5ce85bc59faa625); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf087395afb626f41f5ce85bc59faa625)): ?>
<?php $component = $__componentOriginalf087395afb626f41f5ce85bc59faa625; ?>
<?php unset($__componentOriginalf087395afb626f41f5ce85bc59faa625); ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/core/setting/resources/views/components/radio.blade.php ENDPATH**/ ?>