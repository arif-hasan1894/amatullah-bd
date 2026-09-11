<?php if($product->variations_count > 0 && ! $product->is_variation): ?>
    <span class="text-muted">&mdash;</span>
<?php else: ?>
    <?php if (isset($component)) { $__componentOriginald8f3cab0e02bd6920e9589a31228d9ca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.select','data' => ['dataBbToggle' => 'product-bulk-change','dataUrl' => ''.e(route('ecommerce.product-inventory.update', ['product' => $product->id])).'','dataColumn' => 'with_storehouse_management','dataId' => 'storehouse-management-'.e($product->id).'','tabindex' => '-1','style' => \Illuminate\Support\Arr::toCssStyles(['width: 120px;' => true])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data-bb-toggle' => 'product-bulk-change','data-url' => ''.e(route('ecommerce.product-inventory.update', ['product' => $product->id])).'','data-column' => 'with_storehouse_management','data-id' => 'storehouse-management-'.e($product->id).'','tabindex' => '-1','style' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssStyles(['width: 120px;' => true]))]); ?>
        <option value="1" <?php if($product->with_storehouse_management): echo 'selected'; endif; ?>><?php echo e(trans('core/base::base.yes')); ?></option>
        <option value="0" <?php if(! $product->with_storehouse_management): echo 'selected'; endif; ?>><?php echo e(trans('core/base::base.no')); ?></option>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca)): ?>
<?php $attributes = $__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca; ?>
<?php unset($__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8f3cab0e02bd6920e9589a31228d9ca)): ?>
<?php $component = $__componentOriginald8f3cab0e02bd6920e9589a31228d9ca; ?>
<?php unset($__componentOriginald8f3cab0e02bd6920e9589a31228d9ca); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/product-inventory/columns/storehouse_management.blade.php ENDPATH**/ ?>