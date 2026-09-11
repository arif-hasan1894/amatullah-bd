<div class="simple-slider-assets mt-3">
    <pre class="mb-2">
/vendor/core/plugins/simple-slider/libraries/owl-carousel/owl.carousel.css
/vendor/core/plugins/simple-slider/css/simple-slider.css
/vendor/core/plugins/simple-slider/libraries/owl-carousel/owl.carousel.js
/vendor/core/plugins/simple-slider/js/simple-slider.js</pre>
    <?php if (isset($component)) { $__componentOriginal1844d57dc6206b688bd5adc7dea47e7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1844d57dc6206b688bd5adc7dea47e7d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.helper-text','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.helper-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php echo e(trans('plugins/simple-slider::simple-slider.settings.using_assets_description')); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1844d57dc6206b688bd5adc7dea47e7d)): ?>
<?php $attributes = $__attributesOriginal1844d57dc6206b688bd5adc7dea47e7d; ?>
<?php unset($__attributesOriginal1844d57dc6206b688bd5adc7dea47e7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1844d57dc6206b688bd5adc7dea47e7d)): ?>
<?php $component = $__componentOriginal1844d57dc6206b688bd5adc7dea47e7d; ?>
<?php unset($__componentOriginal1844d57dc6206b688bd5adc7dea47e7d); ?>
<?php endif; ?>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/simple-slider/resources/views/partials/simple-slider-asset-fields.blade.php ENDPATH**/ ?>