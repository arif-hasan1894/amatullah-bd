<?php if (isset($component)) { $__componentOriginalb01dabf26578858fdcffedb4ad1d59fd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb01dabf26578858fdcffedb4ad1d59fd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::tab.item','data' => ['id' => 'tab_tax_info','label' => trans('plugins/marketplace::marketplace.tax_info')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::tab.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'tab_tax_info','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/marketplace::marketplace.tax_info'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb01dabf26578858fdcffedb4ad1d59fd)): ?>
<?php $attributes = $__attributesOriginalb01dabf26578858fdcffedb4ad1d59fd; ?>
<?php unset($__attributesOriginalb01dabf26578858fdcffedb4ad1d59fd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb01dabf26578858fdcffedb4ad1d59fd)): ?>
<?php $component = $__componentOriginalb01dabf26578858fdcffedb4ad1d59fd; ?>
<?php unset($__componentOriginalb01dabf26578858fdcffedb4ad1d59fd); ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/customers/tax-info-tab.blade.php ENDPATH**/ ?>