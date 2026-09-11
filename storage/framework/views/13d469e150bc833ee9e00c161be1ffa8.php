<?php if (isset($component)) { $__componentOriginal716474f28734973ec85e923173fde136 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal716474f28734973ec85e923173fde136 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '766be9a31b02d85b4410065d426a1ede::box-search-advanced','data' => ['type' => 'product','placeholder' => trans('plugins/ecommerce::products.search_products'),'shown' => $products->isNotEmpty(),'template' => 'selected_product_label_template']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('plugins-ecommerce::box-search-advanced'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'product','placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.search_products')),'shown' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($products->isNotEmpty()),'template' => 'selected_product_label_template']); ?>
    <input
        name="label_products"
        type="hidden"
        value="<?php if($productLabel->id): ?> <?php echo e(implode(',', array_filter($productLabel->products()->allRelatedIds()->toArray()))); ?> <?php endif; ?>"
    />

     <?php $__env->slot('items', null, []); ?> 
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="list-group-item" data-product-id="<?php echo e($product->id); ?>">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span
                            class="avatar"
                            style="background-image: url('<?php echo e(RvMedia::getImageUrl($product->image, 'thumb', false, RvMedia::getDefaultImage())); ?>')"
                        ></span>
                    </div>
                    <div class="col text-truncate">
                        <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="text-body d-block text-truncate" target="_blank">
                            <?php echo e($product->name); ?>

                        </a>
                        <div class="text-secondary text-truncate">
                            <?php echo e(format_price($product->display_sale_price ?: $product->display_price)); ?>

                        </div>
                    </div>
                    <div class="col-auto">
                        <a
                            href="javascript:void(0)"
                            class="text-decoration-none list-group-item-actions"
                            data-bb-toggle="product-delete-item"
                            data-bb-target="<?php echo e($product->id); ?>"
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
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php $__env->startPush('footer'); ?>
<?php if (isset($component)) { $__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0e6b0152aee5342533433c1a5b9b4cb1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::custom-template','data' => ['id' => 'selected_product_label_template']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::custom-template'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'selected_product_label_template']); ?>
    <div class="list-group-item" data-product-id="__id__">
        <div class="row align-items-center">
            <div class="col-auto">
                <span
                    class="avatar"
                    style="background-image: url('__image__')"
                ></span>
            </div>
            <div class="col text-truncate">
                <a href="__url__" class="text-body d-block text-truncate" target="_blank">
                    __name__
                </a>
                <div class="text-secondary text-truncate">
                    __attributes__
                </div>
            </div>
            <div class="col-auto">
                <a
                    href="javascript:void(0)"
                    class="text-decoration-none list-group-item-actions"
                    data-bb-toggle="product-delete-item"
                    data-bb-target="__id__"
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
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/product-labels/products.blade.php ENDPATH**/ ?>