<section data-bb-toggle="cart-content" class="cart-area pt-50 pb-50">
    <div class="container">
        <?php if($products->isNotEmpty()): ?>
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <?php if (isset($component)) { $__componentOriginald83dae5750a07af1a413e54a0071b325 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald83dae5750a07af1a413e54a0071b325 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.index','data' => ['method' => 'POST','url' => route('public.cart.update'),'class' => 'mw-100 overflow-x-auto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['method' => 'POST','url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('public.cart.update')),'class' => 'mw-100 overflow-x-auto']); ?>
                        <div class="cart-list mb-25 mr-30">
                            <table data-bb-value="cart-table" class="table">
                                <thead class="table-light">
                                <tr>
                                    <th colspan="2" class="cart-header-product"><?php echo e(trans('plugins/ecommerce::products.product')); ?></th>
                                    <th class="cart-header-price"><?php echo e(trans('plugins/ecommerce::products.price')); ?></th>
                                    <th class="cart-header-quantity"><?php echo e(trans('plugins/ecommerce::products.quantity')); ?></th>
                                    <th class="cart-header-total"><?php echo e(trans('plugins/ecommerce::ecommerce.total')); ?></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = Cart::instance('cart')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $product = $products->find($cartItem->id);
                                    ?>

                                    <?php if(empty($product)) continue; ?>

                                    <tr data-bb-value="cart-row-<?php echo e($cartItem->rowId); ?>">
                                        <input type="hidden" name="items[<?php echo e($key); ?>][rowId]" value="<?php echo e($cartItem->rowId); ?>">

                                        <td class="cart-img">
                                            <a href="<?php echo e($product->original_product->url); ?>">
                                                <?php echo e(RvMedia::image($cartItem->options['image'], $product->original_product->name, 'thumb')); ?>

                                            </a>
                                        </td>
                                        <td class="ps-3 align-middle">
                                            <?php echo apply_filters('ecommerce_cart_before_item_content', null, $cartItem); ?>


                                            <div class="cart-title">
                                                <a href="<?php echo e($product->original_product->url); ?>" class="ms-0"><?php echo e($product->original_product->name); ?></a>
                                                <span class="<?php echo \Illuminate\Support\Arr::toCssClasses(['small', 'text-danger' => $product->isOutOfStock(), 'text-success' => ! $product->isOutOfStock()]); ?>">
                                                        <?php if($product->isOutOfStock()): ?>
                                                        (<?php echo e(trans('plugins/ecommerce::ecommerce.out_of_stock')); ?>)
                                                    <?php else: ?>
                                                        (<?php echo e(trans('plugins/ecommerce::ecommerce.in_stock')); ?>)
                                                    <?php endif; ?>
                                                    </span>
                                            </div>

                                            <?php if(is_plugin_active('marketplace') && $product->original_product->store?->id): ?>
                                                <div class="small">
                                                    <span><?php echo e(trans('plugins/ecommerce::ecommerce.vendor')); ?></span>
                                                    <a href="<?php echo e($product->original_product->store->url); ?>" class="fw-medium"><?php echo e($product->original_product->store->name); ?></a>
                                                </div>
                                            <?php endif; ?>

                                            <div class="small"><?php echo e($cartItem->options['attributes'] ?? ''); ?></div>

                                            <?php if(EcommerceHelper::isEnabledProductOptions() && !empty($cartItem->options['options'])): ?>
                                                <?php echo render_product_options_html($cartItem->options['options'], $product->price()->getPrice()); ?>

                                            <?php endif; ?>

                                            <?php echo $__env->make(
                                                EcommerceHelper::viewPath('includes.cart-item-options-extras'),
                                                ['options' => $cartItem->options]
                                            , array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                                            <?php echo apply_filters('ecommerce_cart_after_item_content', null, $cartItem); ?>

                                        </td>
                                        <td data-bb-value="cart-product-price-text" class="cart-price align-middle">
                                            <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-price'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                        </td>
                                        <td data-bb-value="cart-product-quantity" class="cart-quantity align-middle">
                                            <?php echo $__env->make(EcommerceHelper::viewPath('includes.cart-quantity'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                        </td>
                                        <td data-bb-value="cart-product-total-price" class="cart-total align-middle bb-product-price">
                                            <span class="bb-product-price-text fw-bold"><?php echo e(format_price($cartItem->price * $cartItem->qty)); ?></span>
                                        </td>
                                        <td class="cart-action align-middle">
                                            <a
                                                class="btn btn-danger btn-icon"
                                                data-url="<?php echo e(route('public.cart.remove', $cartItem->rowId)); ?>"
                                                data-bb-toggle="remove-from-cart"
                                                <?php echo EcommerceHelper::jsAttributes('remove-from-cart', $product, ['data-product-quantity' => $cartItem->qty]); ?>

                                            >
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M9.53033 1.53033C9.82322 1.23744 9.82322 0.762563 9.53033 0.46967C9.23744 0.176777 8.76256 0.176777 8.46967 0.46967L5 3.93934L1.53033 0.46967C1.23744 0.176777 0.762563 0.176777 0.46967 0.46967C0.176777 0.762563 0.176777 1.23744 0.46967 1.53033L3.93934 5L0.46967 8.46967C0.176777 8.76256 0.176777 9.23744 0.46967 9.53033C0.762563 9.82322 1.23744 9.82322 1.53033 9.53033L5 6.06066L8.46967 9.53033C8.76256 9.82322 9.23744 9.82322 9.53033 9.53033C9.82322 9.23744 9.82322 8.76256 9.53033 8.46967L6.06066 5L9.53033 1.53033Z"
                                                        fill="currentColor"
                                                    />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald83dae5750a07af1a413e54a0071b325)): ?>
<?php $attributes = $__attributesOriginald83dae5750a07af1a413e54a0071b325; ?>
<?php unset($__attributesOriginald83dae5750a07af1a413e54a0071b325); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald83dae5750a07af1a413e54a0071b325)): ?>
<?php $component = $__componentOriginald83dae5750a07af1a413e54a0071b325; ?>
<?php unset($__componentOriginald83dae5750a07af1a413e54a0071b325); ?>
<?php endif; ?>
                    <div class="cart-bottom mt-4 mb-4">
                        <div class="cart-coupon row">
                            <div class="col-lg-6">
                                <?php if (isset($component)) { $__componentOriginald83dae5750a07af1a413e54a0071b325 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald83dae5750a07af1a413e54a0071b325 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.index','data' => ['url' => route('public.coupon.apply'),'method' => 'post','dataBbToggle' => 'coupon-form','id' => 'coupon-form']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('public.coupon.apply')),'method' => 'post','data-bb-toggle' => 'coupon-form','id' => 'coupon-form']); ?>
                                    <div class="input-group mb-3 w-auto">
                                        <input type="text" class="form-control" name="coupon_code" placeholder="<?php echo e(trans('plugins/ecommerce::ecommerce.enter_coupon_code')); ?>" value="<?php echo e(BaseHelper::stringify(old('coupon_code', session('applied_coupon_code')))); ?>">
                                        <button data-bb-toggle="coupon-form-btn" class="btn btn-primary" type="submit" <?php if(session('applied_coupon_code')): echo 'disabled'; endif; ?>><?php echo e(trans('plugins/ecommerce::ecommerce.apply')); ?></button>
                                    </div>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald83dae5750a07af1a413e54a0071b325)): ?>
<?php $attributes = $__attributesOriginald83dae5750a07af1a413e54a0071b325; ?>
<?php unset($__attributesOriginald83dae5750a07af1a413e54a0071b325); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald83dae5750a07af1a413e54a0071b325)): ?>
<?php $component = $__componentOriginald83dae5750a07af1a413e54a0071b325; ?>
<?php unset($__componentOriginald83dae5750a07af1a413e54a0071b325); ?>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card p-4">
                        <div class="cart-checkout-top d-flex align-items-center justify-content-between pb-2 border-bottom mb-2">
                            <span class="cart-checkout-top-title fw-bold"><?php echo e(trans('plugins/ecommerce::ecommerce.subtotal')); ?></span>
                            <span data-bb-value="cart-subtotal" class="cart-checkout-top-price fw-bold"><?php echo e(format_price(Cart::instance('cart')->rawSubTotal())); ?></span>
                        </div>
                        <?php echo apply_filters('ecommerce_cart_after_subtotal', null, Cart::instance('cart')->products()); ?>

                        <?php if(EcommerceHelper::isTaxEnabled()): ?>
                            <div class="cart-checkout-tax d-flex align-items-center justify-content-between mb-2">
                                <span class="cart-checkout-tax-title"><?php echo e(trans('plugins/ecommerce::ecommerce.tax')); ?></span>
                                <span data-bb-value="cart-tax" class="cart-checkout-tax-price"><?php echo e(format_price(Cart::instance('cart')->rawTax())); ?></span>
                            </div>
                        <?php endif; ?>
                        <?php if($couponDiscountAmount > 0 && session('applied_coupon_code')): ?>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div>
                                    <?php echo e(trans('plugins/ecommerce::ecommerce.coupon')); ?>

                                    <span class="small">(<?php echo e(session('applied_coupon_code')); ?>)</span>
                                    <a class="small btn-link text-danger lh-1" data-bb-toggle="remove-coupon" href="<?php echo e(route('public.coupon.remove')); ?>"><?php echo e(trans('plugins/ecommerce::ecommerce.remove')); ?></a>
                                </div>
                                <span data-bb-value="cart-coupon-discount-amount"><?php echo e(format_price($couponDiscountAmount)); ?></span>
                            </div>
                        <?php endif; ?>
                        <?php if($promotionDiscountAmount): ?>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span><?php echo e(trans('plugins/ecommerce::ecommerce.promotion')); ?></span>
                                <span data-bb-value="cart-promotion-discount-amount"><?php echo e(format_price($promotionDiscountAmount)); ?></span>
                            </div>
                        <?php endif; ?>
                        <div class="cart-checkout-total d-flex align-items-center justify-content-between mt-3 mb-0">
                            <span class="fw-bold mb-1"><?php echo e(trans('plugins/ecommerce::ecommerce.total')); ?></span>
                            <span data-bb-value="cart-total" class="fw-bold"><?php echo e(($promotionDiscountAmount + $couponDiscountAmount) > Cart::instance('cart')->rawTotal() ? format_price(0) : format_price(Cart::instance('cart')->rawTotal() - $promotionDiscountAmount - $couponDiscountAmount)); ?></span>
                        </div>
                        <small class="small"><?php echo e(trans('plugins/ecommerce::order.shipping_fees_not_included')); ?></small>
                        <div class="cart-checkout-proceed mt-3">
                            <a href="<?php echo e(route('public.checkout.information', OrderHelper::getOrderSessionToken())); ?>" data-bb-toggle="cart-checkout" class="cart-checkout-btn w-100 btn btn-primary">
                                <?php echo e(trans('plugins/ecommerce::ecommerce.proceed_to_checkout')); ?>

                            </a>
                        </div>

                        <a href="<?php echo e(route('public.products')); ?>" data-bb-toggle="continue-shopping" class="btn-link d-block text-center mt-3">
                            <?php echo e(trans('plugins/ecommerce::ecommerce.continue_shopping')); ?>

                        </a>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <?php echo $__env->make(EcommerceHelper::viewPath('includes.empty-state'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endif; ?>
    </div>
</section>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/cart.blade.php ENDPATH**/ ?>