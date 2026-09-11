<?php if($product->variations_count > 0 && ! $product->is_variation): ?>
    <span class="text-muted">&mdash;</span>
<?php else: ?>
    <input
        type="number"
        value="<?php echo e($product->quantity ?: 0); ?>"
        class="form-control"
        data-bb-toggle="product-bulk-change"
        data-url="<?php echo e(route('ecommerce.product-inventory.update', ['product' => $product->id])); ?>"
        data-column="quantity"
        data-target-id="storehouse-management-<?php echo e($product->id); ?>"
        data-target-value="1"
        style="<?php echo \Illuminate\Support\Arr::toCssStyles(['display: none;' => ! $product->with_storehouse_management, 'min-width: 80px;' => true]) ?>"
    />

    <?php if (isset($component)) { $__componentOriginald8f3cab0e02bd6920e9589a31228d9ca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.select','data' => ['dataBbToggle' => 'product-bulk-change','dataUrl' => ''.e(route('ecommerce.product-inventory.update', ['product' => $product->id])).'','dataColumn' => 'stock_status','dataTargetId' => 'storehouse-management-'.e($product->id).'','dataTargetValue' => '0','style' => \Illuminate\Support\Arr::toCssStyles(['display: none;' => $product->with_storehouse_management, 'min-width: 120px;' => true])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data-bb-toggle' => 'product-bulk-change','data-url' => ''.e(route('ecommerce.product-inventory.update', ['product' => $product->id])).'','data-column' => 'stock_status','data-target-id' => 'storehouse-management-'.e($product->id).'','data-target-value' => '0','style' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssStyles(['display: none;' => $product->with_storehouse_management, 'min-width: 120px;' => true]))]); ?>
        <?php $__currentLoopData = Botble\Ecommerce\Enums\StockStatusEnum::labels(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($status); ?>" <?php if(($product->stock_status ?: 'in_stock') == $status): echo 'selected'; endif; ?>><?php echo e($label); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/product-inventory/columns/quantity.blade.php ENDPATH**/ ?>