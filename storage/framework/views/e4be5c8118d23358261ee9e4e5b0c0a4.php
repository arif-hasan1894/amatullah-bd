<?php if (isset($component)) { $__componentOriginal9617628a792e50593096cc13859e9389 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9617628a792e50593096cc13859e9389 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.color-selector','data' => ['name' => $name,'choices' => $options['choices'],'label' => $options['label'],'selected' => $options['selected'],'required' => $options['required'],'wrapperClass' => $options['wrapper'] ? $options['wrapper']['class'] : null,'helperText' => $options['help_block'] ? $options['help_block']['text'] : null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.color-selector'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'choices' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($options['choices']),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($options['label']),'selected' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($options['selected']),'required' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($options['required']),'wrapper-class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($options['wrapper'] ? $options['wrapper']['class'] : null),'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($options['help_block'] ? $options['help_block']['text'] : null)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9617628a792e50593096cc13859e9389)): ?>
<?php $attributes = $__attributesOriginal9617628a792e50593096cc13859e9389; ?>
<?php unset($__attributesOriginal9617628a792e50593096cc13859e9389); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9617628a792e50593096cc13859e9389)): ?>
<?php $component = $__componentOriginal9617628a792e50593096cc13859e9389; ?>
<?php unset($__componentOriginal9617628a792e50593096cc13859e9389); ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/core/base/resources/views/forms/fields/color-selector.blade.php ENDPATH**/ ?>