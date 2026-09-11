<section class="wishlist-area pt-50 pb-50">
    <div class="container">
        <?php if($products->total() && $products->loadMissing(['options', 'options.values'])): ?>
            <div class="cart-list mb-45 mw-100 overflow-x-auto">
                <table class="table">
                    <thead class="table-light">
                    <tr>
                        <th colspan="2" class="cart-header-product"><?php echo e(trans('plugins/ecommerce::products.product')); ?></th>
                        <th class="cart-header-price"><?php echo e(trans('plugins/ecommerce::products.price')); ?></th>
                        <th><?php echo e(trans('plugins/ecommerce::ecommerce.action')); ?></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="cart-img align-middle">
                                <a href="<?php echo e($product->original_product->url); ?>">
                                    <?php echo e(RvMedia::image($product->image, $product->name, 'thumb')); ?>

                                </a>
                            </td>
                            <td class="ps-3 align-middle">
                                <div class="cart-title">
                                    <a href="<?php echo e($product->original_product->url); ?>" class="ms-0 fw-bold">
                                        <?php echo e($product->name); ?>


                                        <span class="<?php echo \Illuminate\Support\Arr::toCssClasses(['small', 'text-danger' => $product->isOutOfStock(), 'text-success' => ! $product->isOutOfStock()]); ?>">
                                            <?php if($product->isOutOfStock()): ?>
                                                (<?php echo e(trans('plugins/ecommerce::ecommerce.out_of_stock')); ?>)
                                            <?php else: ?>
                                                (<?php echo e(trans('plugins/ecommerce::ecommerce.in_stock')); ?>)
                                            <?php endif; ?>
                                        </span>
                                    </a>
                                </div>

                                <?php if(is_plugin_active('marketplace') && $product->original_product->store?->id): ?>
                                    <div class="small">
                                        <span><?php echo e(trans('plugins/ecommerce::ecommerce.vendor')); ?></span>
                                        <a href="<?php echo e($product->original_product->store->url); ?>" class="fw-medium"><?php echo e($product->original_product->store->name); ?></a>
                                    </div>
                                <?php endif; ?>

                                <?php if($product->sku): ?>
                                    <div class="small">
                                        <span><?php echo e(trans('plugins/ecommerce::products.sku_1')); ?></span>
                                        <span><?php echo e($product->sku); ?></span>
                                    </div>
                                <?php endif; ?>
                            </td>
                            <td class="cart-price align-middle">
                                <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-price'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            </td>

                            <td class="cart-add-to-cart align-middle">
                                <button
                                    title="<?php echo e(trans('plugins/ecommerce::ecommerce.add_to_cart')); ?>"
                                    type="submit"
                                    class="btn btn-primary bb-btn-product-actions-icon"
                                    data-bb-toggle="add-to-cart"
                                    data-url="<?php echo e(route('public.cart.add-to-cart')); ?>"
                                    data-id="<?php echo e($product->original_product->id); ?>"
                                    <?php echo EcommerceHelper::jsAttributes('add-to-cart', $product); ?>

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
                                    <span><?php echo e(trans('plugins/ecommerce::ecommerce.add_to_cart')); ?></span>
                                </button>
                            </td>

                            <td class="cart-action align-middle">
                                <button class="cart-action-btn btn btn-icon btn-danger bb-btn-product-actions-icon" data-bb-toggle="remove-from-wishlist" data-url="<?php echo e(route('public.wishlist.remove', $product)); ?>">
                                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-x'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <div class="cart-bottom">
                <div class="row align-items-end">
                    <div class="col-xl-6 col-md-4">
                        <div class="cart-update">
                            <a href="<?php echo e(route('public.cart')); ?>" class="btn btn-primary bb-btn-link-icon">
                                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-logout-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                <?php echo e(trans('plugins/ecommerce::ecommerce.go_to_cart')); ?>

                            </a>
                        </div>
                        <?php if(EcommerceHelper::isWishlistSharingEnabled()): ?>
                            <div>
                                <span class="d-inline-block me-1"><?php echo e(trans('plugins/ecommerce::ecommerce.share')); ?></span>

                                <?php echo Theme::renderSocialSharing(route('public.wishlist', ['code' => EcommerceHelper::getWishlistCode()])); ?>

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <?php echo $__env->make(EcommerceHelper::viewPath('includes.empty-state'), ['title' => trans('plugins/ecommerce::ecommerce.your_wishlist_list_is_empty')], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endif; ?>
    </div>
</section>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/wishlist.blade.php ENDPATH**/ ?>