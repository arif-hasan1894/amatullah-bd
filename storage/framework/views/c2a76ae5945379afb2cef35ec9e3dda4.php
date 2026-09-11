<?php if($productVariations->isNotEmpty()): ?>
    <table class="table table-hover-variants">
        <thead>
            <tr>
                <th style="width: 20px;">
                    <input
                        class="table-check-all"
                        data-set=".table-hover-variants .checkboxes"
                        type="checkbox"
                    >
                </th>
                <th><?php echo e(trans('plugins/ecommerce::products.form.image')); ?></th>
                <?php $__currentLoopData = $productAttributeSets->where('is_selected', '<>', null)->whereIn('id', $productVariationsInfo->pluck('attribute_set_id')->all())->sortBy('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attributeSet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th><?php echo e($attributeSet->title); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $productAttributeSets->where('is_selected', '<>', null)->whereNotIn('id', $productVariationsInfo->pluck('attribute_set_id')->all())->sortBy('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attributeSet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th><?php echo e($attributeSet->title); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <th><?php echo e(trans('plugins/ecommerce::products.form.price')); ?></th>
                <th><?php echo e(trans('plugins/ecommerce::products.form.is_default')); ?></th>
                <?php if(EcommerceHelper::isEnabledSupportDigitalProducts() && $product && $product->isTypeDigital()): ?>
                    <th><?php echo e($product->product_type->label()); ?></th>
                <?php endif; ?>
                <th class="text-center"><?php echo e(trans('plugins/ecommerce::products.form.action')); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $productVariations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $currentRelatedProduct = $productsRelatedToVariation->where('variation_id', $variation->id)->first();
                ?>
                <tr id="variation-id-<?php echo e($variation->id); ?>">
                    <td>
                        <input
                            class="checkboxes m-0"
                            name="id[]"
                            type="checkbox"
                            value="<?php echo e($variation->id); ?>"
                        >
                    </td>
                    <td>
                        <div class="wrap-img-product">
                            <img
                                src="<?php echo e(RvMedia::getImageUrl($currentRelatedProduct && $currentRelatedProduct->image ? $currentRelatedProduct->image : $product->image, 'thumb', false, RvMedia::getDefaultImage())); ?>"
                                alt="<?php echo e(trans('plugins/ecommerce::products.form.image')); ?>"
                            >
                        </div>
                    </td>
                    <?php $__currentLoopData = $productVariationsInfo->where('variation_id', $variation->id)->sortBy('attribute_set_id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($item->title); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php for($index = 0; $index < $productAttributeSets->where('is_selected', '<>', null)->count() - $productVariationsInfo->where('variation_id', $variation->id)->count(); $index++): ?>
                        <td>--</td>
                    <?php endfor; ?>
                    <td>
                        <?php if($currentRelatedProduct): ?>
                            <?php
                                $varRawSale = $currentRelatedProduct->getRawSalePrice();
                                $varBase = $currentRelatedProduct->getRawPrice();
                                $varHasSale = $varRawSale !== null && $varRawSale > 0 && $varRawSale < $varBase;
                            ?>
                            <?php echo e(format_price($currentRelatedProduct->front_sale_price)); ?>

                            <?php if($varHasSale): ?>
                                <del class="text-danger"><?php echo e(format_price($currentRelatedProduct->display_price)); ?></del>
                            <?php endif; ?>
                        <?php else: ?>
                            <?php
                                $varRawSale = $product->getRawSalePrice();
                                $varBase = $product->getRawPrice();
                                $varHasSale = $varRawSale !== null && $varRawSale > 0 && $varRawSale < $varBase;
                            ?>
                            <?php echo e(format_price($product->front_sale_price)); ?>

                            <?php if($varHasSale): ?>
                                <del class="text-danger"><?php echo e(format_price($product->display_price)); ?></del>
                            <?php endif; ?>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if (isset($component)) { $__componentOriginal424617256517489644ca6a2e02d16322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal424617256517489644ca6a2e02d16322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['name' => 'variation_default_id','value' => $variation->id,'checked' => $variation->is_default,'single' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'variation_default_id','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($variation->id),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($variation->is_default),'single' => true]); ?>
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
                    </td>
                    <?php if(EcommerceHelper::isEnabledSupportDigitalProducts() && $product && $product->isTypeDigital()): ?>
                        <td>
                            <?php if($currentRelatedProduct): ?>
                                <span><?php echo e($currentRelatedProduct->productFiles->count()); ?></span>
                                <span><i class="fas fa-paperclip"></i></span>
                            <?php endif; ?>
                        </td>
                    <?php endif; ?>
                    <td
                        class="text-center"
                        style="width: 180px;"
                    >
                        <a
                            class="btn btn-info btn-trigger-edit-product-version"
                            data-target="<?php echo e(route('products.update-version', $variation->id)); ?>"
                            data-load-form="<?php echo e(route('products.get-version-form', $variation->id)); ?>"
                            href="#"
                        ><?php echo e(trans('plugins/ecommerce::products.edit_variation_item')); ?></a>
                        <a
                            class="btn-trigger-delete-version btn btn-danger"
                            data-target="<?php echo e(route('products.delete-version', $variation->id)); ?>"
                            data-id="<?php echo e($variation->id); ?>"
                            href="#"
                        ><?php echo e(trans('plugins/ecommerce::products.delete')); ?></a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php else: ?>
    <p><?php echo e(trans('plugins/ecommerce::products.variations_box_description')); ?></p>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/products/partials/product-variations.blade.php ENDPATH**/ ?>