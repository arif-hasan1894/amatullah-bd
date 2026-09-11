<?php if(sizeof($values = (array) $values) > 1): ?>
    <div class="mt-checkbox-list">
<?php endif; ?>
<?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if (isset($component)) { $__componentOriginal424617256517489644ca6a2e02d16322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal424617256517489644ca6a2e02d16322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['name' => $value[0] ?? '','value' => $value[1] ?? '','label' => BaseHelper::clean($value[2] ?? ''),'checked' => $value[3] ?? false,'disabled' => $value[4] ?? false,'inline' => $inline]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value[0] ?? ''),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value[1] ?? ''),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(BaseHelper::clean($value[2] ?? '')),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value[3] ?? false),'disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value[4] ?? false),'inline' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($inline)]); ?>
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
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php if(sizeof($values) > 1): ?>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/core/base/resources/views/forms/partials/custom-checkbox.blade.php ENDPATH**/ ?>