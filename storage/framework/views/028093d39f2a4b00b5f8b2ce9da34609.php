<?php
    $googleAdsConversionId = get_ecommerce_setting('google_ads_conversion_id');
    $gtmEnabled = get_ecommerce_setting('google_tag_manager_enabled', false);
    $shouldRenderPurchaseEvent = $googleAdsConversionId || $gtmEnabled;
?>

<?php if($shouldRenderPurchaseEvent): ?>
    <script>
        window.addEventListener('load', function() {
            window.dataLayer = window.dataLayer || [];

            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $orderProducts = $order->products;
                    $items = [];

                    $productIds = $orderProducts->pluck('product_id')->filter()->all();
                    if (!empty($productIds)) {
                        $productsWithRelations = \Botble\Ecommerce\Models\Product::query()
                            ->whereIn('id', $productIds)
                            ->with(['brand', 'categories', 'variationInfo.configurableProduct.brand', 'variationInfo.configurableProduct.categories'])
                            ->get()
                            ->keyBy('id');
                    } else {
                        $productsWithRelations = collect();
                    }

                    foreach ($orderProducts as $index => $orderProduct) {
                        $product = $productsWithRelations->get($orderProduct->product_id);
                        $originalProduct = $product?->original_product;

                        $item = [
                            'item_id' => $product?->sku ?: $orderProduct->product_id,
                            'item_name' => $orderProduct->product_name,
                            'price' => (float) $orderProduct->price,
                            'quantity' => (int) $orderProduct->qty,
                            'index' => $index,
                        ];

                        if ($originalProduct) {
                            if ($originalProduct->relationLoaded('brand') && $originalProduct->brand) {
                                $item['item_brand'] = $originalProduct->brand->name;
                            }

                            if ($originalProduct->relationLoaded('categories')) {
                                $categories = $originalProduct->categories;
                                if ($categories && $categories->isNotEmpty()) {
                                    foreach ($categories as $catIndex => $category) {
                                        $catKey = $catIndex === 0 ? 'item_category' : 'item_category' . ($catIndex + 1);
                                        $item[$catKey] = $category->name;
                                    }
                                }
                            }
                        }

                        $items[] = $item;
                    }
                ?>

                window.dataLayer.push({ ecommerce: null });
                window.dataLayer.push({
                    event: 'purchase',
                    ecommerce: {
                        transaction_id: '<?php echo e($order->code); ?>',
                        value: <?php echo e(number_format((float) $order->sub_total, 2, '.', '')); ?>,
                        tax: <?php echo e(number_format((float) ($order->tax_amount ?? 0), 2, '.', '')); ?>,
                        shipping: <?php echo e(number_format((float) ($order->shipping_amount ?? 0), 2, '.', '')); ?>,
                        currency: '<?php echo e(get_application_currency()->title); ?>',
                        <?php if($order->coupon_code): ?>
                        coupon: '<?php echo e($order->coupon_code); ?>',
                        <?php endif; ?>
                        items: <?php echo json_encode($items, 15, 512) ?>
                    }
                });

                <?php if($googleAdsConversionId): ?>
                    var conversionData<?php echo e($loop->index); ?> = {
                        'send_to': '<?php echo e($googleAdsConversionId); ?>',
                        'value': <?php echo e(number_format((float) $order->amount, 2, '.', '')); ?>,
                        'currency': '<?php echo e(get_application_currency()->title); ?>',
                        'transaction_id': '<?php echo e($order->code); ?>'
                    };

                    if (typeof gtag === 'function') {
                        gtag('event', 'conversion', conversionData<?php echo e($loop->index); ?>);
                    }
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        });
    </script>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/orders/partials/google-ads-conversion.blade.php ENDPATH**/ ?>