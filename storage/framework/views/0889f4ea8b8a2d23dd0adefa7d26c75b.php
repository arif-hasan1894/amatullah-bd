<div class="d-flex">
    <?php if (isset($component)) { $__componentOriginal424617256517489644ca6a2e02d16322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal424617256517489644ca6a2e02d16322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['label' => ''.e(trans('core/acl::permissions.all')).'','id' => 'allTreeChecked','marginZero' => true,'class' => 'label label-default allTree']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(trans('core/acl::permissions.all')).'','id' => 'allTreeChecked','margin-zero' => true,'class' => 'label label-default allTree']); ?>
         <?php $__env->slot('label', null, []); ?> 
            <?php if (isset($component)) { $__componentOriginal86e87e37d100cbb441f5e9e293185347 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal86e87e37d100cbb441f5e9e293185347 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::badge','data' => ['lite' => true,'color' => 'primary','label' => trans('core/acl::permissions.all')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['lite' => true,'color' => 'primary','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/acl::permissions.all'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal86e87e37d100cbb441f5e9e293185347)): ?>
<?php $attributes = $__attributesOriginal86e87e37d100cbb441f5e9e293185347; ?>
<?php unset($__attributesOriginal86e87e37d100cbb441f5e9e293185347); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal86e87e37d100cbb441f5e9e293185347)): ?>
<?php $component = $__componentOriginal86e87e37d100cbb441f5e9e293185347; ?>
<?php unset($__componentOriginal86e87e37d100cbb441f5e9e293185347); ?>
<?php endif; ?>
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal424617256517489644ca6a2e02d16322)): ?>
<?php $attributes = $__attributesOriginal424617256517489644ca6a2e02d16322; ?>
<?php unset($__attributesOriginal424617256517489644ca6a2e02d16322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal424617256517489644ca6a2e02d16322)): ?>
<?php $component = $__componentOriginal424617256517489644ca6a2e02d16322; ?>
<?php unset($__componentOriginal424617256517489644ca6a2e02d16322); ?>
<?php endif; ?>
    <div
        id="sidetreecontrol"
        class="ms-3"
    ><a href="?#"><?php echo e(trans('core/base::tree-category.collapse_all')); ?></a> | <a
            href="?#"><?php echo e(trans('core/base::tree-category.expand_all')); ?></a></div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/core/acl/resources/views/roles/permissions-actions.blade.php ENDPATH**/ ?>