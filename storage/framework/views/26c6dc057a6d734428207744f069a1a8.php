

<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'active' => 1,
    'shouldChangeAccount' => true,
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'active' => 1,
    'shouldChangeAccount' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php if (isset($component)) { $__componentOriginalf18e72ccb4a95b013f70d2607d45e1cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf18e72ccb4a95b013f70d2607d45e1cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::step.index','data' => ['counter' => true,'class' => 'get-started-steps']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::step'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['counter' => true,'class' => 'get-started-steps']); ?>
    <?php if (isset($component)) { $__componentOriginal517ce0a0f91f0415854ef022e6c0f03e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal517ce0a0f91f0415854ef022e6c0f03e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::step.item','data' => ['isActive' => $active === 1]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::step.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['is-active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($active === 1)]); ?>
        <?php echo e(trans('packages/get-started::get-started.step_branding')); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal517ce0a0f91f0415854ef022e6c0f03e)): ?>
<?php $attributes = $__attributesOriginal517ce0a0f91f0415854ef022e6c0f03e; ?>
<?php unset($__attributesOriginal517ce0a0f91f0415854ef022e6c0f03e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal517ce0a0f91f0415854ef022e6c0f03e)): ?>
<?php $component = $__componentOriginal517ce0a0f91f0415854ef022e6c0f03e; ?>
<?php unset($__componentOriginal517ce0a0f91f0415854ef022e6c0f03e); ?>
<?php endif; ?>

    <?php if($shouldChangeAccount): ?>
        <?php if (isset($component)) { $__componentOriginal517ce0a0f91f0415854ef022e6c0f03e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal517ce0a0f91f0415854ef022e6c0f03e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::step.item','data' => ['isActive' => $active === 2]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::step.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['is-active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($active === 2)]); ?>
            <?php echo e(trans('packages/get-started::get-started.step_account')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal517ce0a0f91f0415854ef022e6c0f03e)): ?>
<?php $attributes = $__attributesOriginal517ce0a0f91f0415854ef022e6c0f03e; ?>
<?php unset($__attributesOriginal517ce0a0f91f0415854ef022e6c0f03e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal517ce0a0f91f0415854ef022e6c0f03e)): ?>
<?php $component = $__componentOriginal517ce0a0f91f0415854ef022e6c0f03e; ?>
<?php unset($__componentOriginal517ce0a0f91f0415854ef022e6c0f03e); ?>
<?php endif; ?>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf18e72ccb4a95b013f70d2607d45e1cc)): ?>
<?php $attributes = $__attributesOriginalf18e72ccb4a95b013f70d2607d45e1cc; ?>
<?php unset($__attributesOriginalf18e72ccb4a95b013f70d2607d45e1cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf18e72ccb4a95b013f70d2607d45e1cc)): ?>
<?php $component = $__componentOriginalf18e72ccb4a95b013f70d2607d45e1cc; ?>
<?php unset($__componentOriginalf18e72ccb4a95b013f70d2607d45e1cc); ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/get-started/resources/views/partials/steps.blade.php ENDPATH**/ ?>