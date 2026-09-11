<div class="bb-quick-view-content">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 mb-30 image">
            <div class="wrapper">
                <?php echo e(RvMedia::image($product->image, $product->name)); ?>

            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
            <div class="bb-product-page-content">
                <h2 class="product-title mb-2"><?php echo e($product->name); ?></h2>
                <?php if(EcommerceHelper::isReviewEnabled()): ?>
                    <?php echo $__env->make(EcommerceHelper::viewPath('includes.rating'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php endif; ?>

                <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-price'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                <?php echo apply_filters('ecommerce_before_product_description', null, $product); ?>

                <p
                    class="product-description"
                    id="detail-description"
                >
                    <?php echo BaseHelper::clean($product->description); ?>

                </p>
                <?php echo apply_filters('ecommerce_after_product_description', null, $product); ?>


                <div class="text-warning"></div>
                <form class="single-variation-wrap" data-bb-toggle="product-form" action="<?php echo e(route('public.cart.add-to-cart')); ?>" method="post">
                    <?php echo csrf_field(); ?>

                    <div class="row product-filters">
                        <?php if($product->has_variation): ?>
                            <?php echo render_product_swatches($product, [
                                'selected' => $selectedAttrs,
                            ]); ?>

                        <?php endif; ?>
                    </div>

                    <?php echo render_product_options($product); ?>


                    <?php echo apply_filters(ECOMMERCE_PRODUCT_DETAIL_EXTRA_HTML, null); ?>

                    <input
                        id="hidden-product-is_out_of_stock"
                        name="product_is_out_of_stock"
                        type="hidden"
                        value="<?php echo e($product->isOutOfStock()); ?>"
                    />
                    <input
                        id="hidden-product-id"
                        name="id"
                        type="hidden"
                        value="<?php echo e($product->id); ?>"
                    />

                    <?php if(EcommerceHelper::isCartEnabled()): ?>
                        <div class="d-flex gap-4 mb-3">
                            <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-quantity'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <button
                                type="submit"
                                name="add-to-cart"
                                class="bb-product-details-add-to-cart-btn btn btn-primary bb-btn-product-actions-icon"
                                <?php if($product->isOutOfStock()): echo 'disabled'; endif; ?>
                                data-bb-toggle="add-to-cart-in-form"
                                <?php echo EcommerceHelper::jsAttributes('add-to-cart-in-form', $product); ?>

                            >
                                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-shopping-cart'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                                <?php echo e(trans('plugins/ecommerce::ecommerce.add_to_cart')); ?>

                            </button>
                        </div>
                    <?php endif; ?>

                    <?php if(EcommerceHelper::isWishlistEnabled() || EcommerceHelper::isCompareEnabled()): ?>
                        <div class="d-flex gap-4 mb-3">
                            <?php if(EcommerceHelper::isCompareEnabled()): ?>
                                <button
                                    class="<?php echo \Illuminate\Support\Arr::toCssClasses(['btn bb-btn-compare bb-btn-product-actions-icon', 'active' => EcommerceHelper::isProductInCompare($product->original_product->id)]); ?>"
                                    style="border: 0 !important;"
                                    data-bb-toggle="add-to-compare" title="Add to compare"
                                    data-url="<?php echo e(route('public.compare.add', $product)); ?>"
                                    data-remove-url="<?php echo e(route('public.compare.remove', $product)); ?>"
                                >
                                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-refresh'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                                    <?php echo e(trans('plugins/ecommerce::ecommerce.compare')); ?>

                                </button>
                            <?php endif; ?>
                            <?php if(EcommerceHelper::isWishlistEnabled()): ?>
                                <button
                                    class="btn bb-btn-wishlist bb-btn-product-actions-icon"
                                    data-bb-toggle="add-to-wishlist" title="Add to wishlist"
                                    data-url="<?php echo e(route('public.wishlist.add', $product)); ?>"
                                >
                                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-heart'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                                    <?php echo e(trans('plugins/ecommerce::ecommerce.add_wishlist')); ?>

                                </button>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </form>
                <div class="bb-product-meta">
                    <?php if($product->sku): ?>
                        <span><?php echo e(trans('plugins/ecommerce::products.sku')); ?> : <span
                                class="sku"
                                id="product-sku"
                                itemprop="sku"
                            ><?php echo e($product->sku); ?></span></span>
                    <?php endif; ?>
                    <span>
                    <span
                        id="is-out-of-stock"><?php echo e(!$product->isOutOfStock() ? trans('plugins/ecommerce::ecommerce.in_stock' : trans('plugins/ecommerce::ecommerce.out_of_stock'); ?></span>
                </span>

                    <?php if(!$product->categories->isEmpty()): ?>
                        <span><?php echo e(trans('plugins/ecommerce::products.categories')); ?> :
                        <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e($category->url); ?>"> <?php echo e($category->name); ?>

                                    <?php if(!$loop->last): ?>, <?php endif; ?>
                            </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/includes/quick-view.blade.php ENDPATH**/ ?>