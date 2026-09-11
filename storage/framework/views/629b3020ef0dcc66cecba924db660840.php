<?php
    $orderProducts = apply_filters('ecommerce_thank_you_order_products', $order->products, $order);
?>

<div class="order-summary-header">
    <h3 class="order-summary-title"><?php echo e(trans('plugins/ecommerce::order.order_summary')); ?></h3>
    <span class="order-number-badge"><?php echo e($order->code); ?></span>
</div>

<div class="order-products-list">
    <?php $__currentLoopData = $orderProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="order-product-item">
            <div class="product-image-wrapper">
                <img
                    class="product-image"
                    src="<?php echo e(RvMedia::getImageUrl($orderProduct->product_image, 'thumb', false, RvMedia::getDefaultImage())); ?>"
                    alt="<?php echo e($orderProduct->product_name); ?>"
                >
                <span class="product-quantity-badge"><?php echo e($orderProduct->qty); ?></span>
            </div>
            <div class="product-details">
                <p class="product-name"><?php echo BaseHelper::clean($orderProduct->product_name); ?></p>
                <?php if($sku = Arr::get($orderProduct->options, 'sku', $orderProduct->product?->sku)): ?>
                    <p class="product-sku"><?php echo e(trans('plugins/ecommerce::products.sku')); ?>: <?php echo e($sku); ?></p>
                <?php endif; ?>
                <?php if($attributes = Arr::get($orderProduct->options, 'attributes', '')): ?>
                    <p class="product-variant"><?php echo e($attributes); ?></p>
                <?php endif; ?>

                <?php if(!empty($orderProduct->product_options) && is_array($orderProduct->product_options)): ?>
                    <div class="product-options">
                        <?php echo render_product_options_html($orderProduct->product_options, $orderProduct->product?->front_sale_price ?? $orderProduct->price); ?>

                    </div>
                <?php endif; ?>

                <?php echo $__env->make(EcommerceHelper::viewPath('includes.cart-item-options-extras'), [
                    'options' => $orderProduct->options,
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                <?php
                    $bundleReference = Arr::get($orderProduct->options, 'extras.upsale_reference_product');
                    $bundleReferenceProduct = $bundleReference ? \Botble\Ecommerce\Models\Product::query()->where('slug', $bundleReference)->first() : null;
                ?>
                <?php if($bundleReference): ?>
                    <?php echo $__env->make('plugins/ecommerce::themes.includes.cart-bundle-badge', [
                        'reference' => $bundleReference,
                        'referenceProduct' => $bundleReferenceProduct,
                    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php endif; ?>

                <?php echo apply_filters('ecommerce_thank_you_order_product_item', null, $orderProduct, $order); ?>

            </div>
            <div class="product-price-col">
                <?php ($isOrderProductFree = $orderProduct->price == 0); ?>
                <p class="product-price"><?php echo e($isOrderProductFree ? trans('plugins/ecommerce::ecommerce.free') : format_price($orderProduct->price * $orderProduct->qty)); ?></p>

                <?php if(EcommerceHelper::isTaxEnabled() && $orderProduct->tax_amount > 0 && count($order->products) > 1): ?>
                    <p class="product-tax">
                        <?php echo e(trans('plugins/ecommerce::order.tax')); ?>: <?php echo e(format_price($orderProduct->tax_amount)); ?>

                        <?php if(EcommerceHelper::isDisplayCheckoutTaxInformation() && !empty($orderProduct->options['taxClasses'])): ?>
                            <span class="tax-detail">
                            (
                            <?php $__currentLoopData = $orderProduct->options['taxClasses']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taxName => $taxRate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($taxName); ?> <?php echo e($taxRate); ?>%<?php if(!$loop->last): ?>, <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            )
                            </span>
                        <?php elseif(EcommerceHelper::isDisplayCheckoutTaxInformation() && !empty($orderProduct->options['taxRate']) && $orderProduct->options['taxRate'] > 0): ?>
                            <span class="tax-detail">(<?php echo e($orderProduct->options['taxRate']); ?>%)</span>
                        <?php endif; ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php echo apply_filters('ecommerce_thank_you_after_order_products', null, $order); ?>


<?php if($order->description): ?>
    <div class="order-note">
        <h4 class="order-note-title">
            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-note'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'note-icon']); ?>
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
            <?php echo e(trans('plugins/ecommerce::order.order_note')); ?>

        </h4>
        <p class="order-note-text"><?php echo e($order->description); ?></p>
    </div>
<?php endif; ?>

<?php if(!empty($isShowTotalInfo)): ?>
    <?php echo $__env->make('plugins/ecommerce::orders.thank-you.total-info', compact('order'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/orders/thank-you/order-info.blade.php ENDPATH**/ ?>