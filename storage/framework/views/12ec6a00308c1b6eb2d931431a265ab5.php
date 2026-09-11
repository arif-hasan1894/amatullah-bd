<div style="min-width: 120px;">
    <?php if($product->variations_count > 0 && ! $product->is_variation): ?>
        <span class="text-muted">&mdash;</span>
    <?php else: ?>
        <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['label' => false,'value' => ''.e($product->{$type} ?: null).'','dataBbToggle' => 'product-bulk-change','dataUrl' => ''.e(route('ecommerce.product-prices.update', ['product' => $product->id])).'','dataColumn' => ''.e($type).'','dataId' => 'product-price-'.e($type).'-'.e($product->id).'','step' => 'any','class' => 'input-mask-number','groupFlat' => true,'name' => null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'value' => ''.e($product->{$type} ?: null).'','data-bb-toggle' => 'product-bulk-change','data-url' => ''.e(route('ecommerce.product-prices.update', ['product' => $product->id])).'','data-column' => ''.e($type).'','data-id' => 'product-price-'.e($type).'-'.e($product->id).'','step' => 'any','class' => 'input-mask-number','group-flat' => true,'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(null)]); ?>
             <?php $__env->slot('prepend', null, []); ?> 
                <span class="input-group-text"><?php echo e(get_application_currency()->symbol); ?></span>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $attributes = $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
    <?php endif; ?>

</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/product-prices/columns/price.blade.php ENDPATH**/ ?>