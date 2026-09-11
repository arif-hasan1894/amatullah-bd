<?php if (isset($component)) { $__componentOriginal716474f28734973ec85e923173fde136 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal716474f28734973ec85e923173fde136 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '766be9a31b02d85b4410065d426a1ede::box-search-advanced','data' => ['type' => 'product','placeholder' => trans('plugins/ecommerce::products.search_products'),'shown' => $productCollection->products->isNotEmpty(),'searchTarget' => route('products.get-list-product-for-search')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('plugins-ecommerce::box-search-advanced'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'product','placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.search_products')),'shown' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($productCollection->products->isNotEmpty()),'search-target' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('products.get-list-product-for-search'))]); ?>
    <input
        name="collection_products"
        type="hidden"
        value="<?php if($productCollection): ?> <?php echo e(implode(',', $productCollection->products->pluck('id')->all())); ?> <?php endif; ?>"
    />

     <?php $__env->slot('items', null, []); ?> 
        <?php echo $__env->make('plugins/ecommerce::products.partials.selected-products-list', [
            'products' => $productCollection->products ?: collect(),
            'includeVariation' => false,
        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal716474f28734973ec85e923173fde136)): ?>
<?php $attributes = $__attributesOriginal716474f28734973ec85e923173fde136; ?>
<?php unset($__attributesOriginal716474f28734973ec85e923173fde136); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal716474f28734973ec85e923173fde136)): ?>
<?php $component = $__componentOriginal716474f28734973ec85e923173fde136; ?>
<?php unset($__componentOriginal716474f28734973ec85e923173fde136); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0e6b0152aee5342533433c1a5b9b4cb1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::custom-template','data' => ['id' => 'selected_product_list_template']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::custom-template'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'selected_product_list_template']); ?>
    <div class="list-group-item">
        <div class="row align-items-center">
            <div class="col-auto">
                <span
                    class="avatar"
                    style="background-image: url('__image__')"
                ></span>
            </div>
            <div class="col text-truncate">
                <a href="__url__" class="text-body d-block text-truncate" target="_blank">__name__</a>
                <div class="text-secondary text-truncate">
                    __attributes__
                </div>
            </div>
            <div class="col-auto">
                <a
                    href="javascript:void(0)"
                    data-bb-toggle="product-delete-item"
                    data-bb-target="__id__"
                    class="text-decoration-none list-group-item-actions btn-trigger-remove-selected-product"
                    title="<?php echo e(trans('plugins/ecommerce::products.delete')); ?>"
                >
                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-x'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-secondary']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
                </a>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0e6b0152aee5342533433c1a5b9b4cb1)): ?>
<?php $attributes = $__attributesOriginal0e6b0152aee5342533433c1a5b9b4cb1; ?>
<?php unset($__attributesOriginal0e6b0152aee5342533433c1a5b9b4cb1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1)): ?>
<?php $component = $__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1; ?>
<?php unset($__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1); ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/product-collections/partials/products.blade.php ENDPATH**/ ?>