<?php if($order): ?>
    <div class="bb-order-detail-wrapper">
        <!-- Order Information Section -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="bb-order-info">
                    <div class="row">
                        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['col-12' => ! $order->address->name, 'col-md-6' => $order->address->name]); ?>">
                            <div class="bb-order-info-section">
                                <h5 class="bb-section-title mb-3"><?php echo e(trans('plugins/ecommerce::order.order_information')); ?></h5>
                                <div class="bb-order-info-list">
                                    <div class="bb-order-info-item">
                                        <span class="label"><?php echo e(trans('plugins/ecommerce::order.order_number_1')); ?>:</span>
                                        <span class="value fw-bold"><?php echo e($order->code); ?></span>
                                    </div>
                                    <div class="bb-order-info-item">
                                        <span class="label"><?php echo e(trans('plugins/ecommerce::ecommerce.time')); ?>:</span>
                                        <span class="value"><?php echo e($order->created_at->translatedFormat('d M Y H:i:s')); ?></span>
                                    </div>
                                    <div class="bb-order-info-item">
                                        <span class="label"><?php echo e(trans('plugins/ecommerce::order.order_status')); ?>:</span>
                                        <span class="value"><?php echo BaseHelper::clean($order->status->toHtml()); ?></span>
                                    </div>
                                    <?php if($order->cancellation_reason): ?>
                                        <div class="bb-order-info-item">
                                            <span class="label"><?php echo e(trans('plugins/ecommerce::order.cancellation_reason')); ?>:</span>
                                            <span class="value text-warning"><?php echo e($order->cancellation_reason_message); ?></span>
                                        </div>
                                    <?php endif; ?>
                                    <?php if(is_plugin_active('payment') && $order->payment->id): ?>
                                        <div class="bb-order-info-item">
                                            <span class="label"><?php echo e(trans('plugins/ecommerce::order.payment_method')); ?>:</span>
                                            <span class="value"><?php echo e($order->payment->payment_channel->displayName()); ?></span>
                                        </div>
                                        <div class="bb-order-info-item">
                                            <span class="label"><?php echo e(trans('plugins/ecommerce::order.payment_status_1')); ?>:</span>
                                            <span class="value"><?php echo BaseHelper::clean($order->payment->status->toHtml()); ?></span>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($order->description): ?>
                                        <div class="bb-order-info-item">
                                            <span class="label"><?php echo e(trans('plugins/ecommerce::ecommerce.note')); ?>:</span>
                                            <span class="value text-warning fst-italic"><?php echo e($order->description); ?></span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php if($order->address->name): ?>
                            <div class="col-md-6">
                                <div class="bb-order-address-section">
                                    <h5 class="bb-section-title mb-3"><?php echo e(trans('plugins/ecommerce::order.shipping_address')); ?></h5>
                                    <div class="bb-order-info-list">
                                        <div class="bb-order-info-item">
                                            <span class="label"><?php echo e(trans('plugins/ecommerce::ecommerce.full_name')); ?>:</span>
                                            <span class="value"><?php echo e($order->address->name); ?></span>
                                        </div>
                                        <div class="bb-order-info-item">
                                            <span class="label"><?php echo e(trans('plugins/ecommerce::ecommerce.phone')); ?>:</span>
                                            <span class="value"><?php echo e($order->address->phone); ?></span>
                                        </div>
                                        <div class="bb-order-info-item">
                                            <span class="label"><?php echo e(trans('plugins/ecommerce::ecommerce.address')); ?>:</span>
                                            <span class="value"><?php echo e($order->address->full_address); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products Section -->
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="bb-section-title mb-3"><?php echo e(trans('plugins/ecommerce::products.products')); ?></h5>
                <div class="bb-order-products">
                    <div class="bb-order-product-cards mb-3">
                        <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $product = get_products([
                                    'condition' => [
                                        'ec_products.id' => $orderProduct->product_id,
                                    ],
                                    'take' => 1,
                                    'select' => ['ec_products.id', 'ec_products.images', 'ec_products.name', 'ec_products.price', 'ec_products.sale_price', 'ec_products.sale_type', 'ec_products.start_date', 'ec_products.end_date', 'ec_products.sku', 'ec_products.is_variation', 'ec_products.status', 'ec_products.order', 'ec_products.created_at'],
                                ]);
                            ?>
                            <div class="bb-order-product-card">
                                <div class="bb-order-product-card-content">
                                    <div class="bb-order-product-card-image">
                                        <img src="<?php echo e(RvMedia::getImageUrl($orderProduct->product_image, 'thumb', false, RvMedia::getDefaultImage())); ?>"
                                            alt="<?php echo e($orderProduct->product_name); ?>">
                                    </div>
                                    <div class="bb-order-product-card-details">
                                        <div class="bb-order-product-card-header">
                                            <div class="bb-order-product-card-name">
                                                <?php if($product && $product->original_product?->url): ?>
                                                    <a href="<?php echo e($product->original_product->url); ?>"><?php echo BaseHelper::clean($orderProduct->product_name); ?></a>
                                                <?php else: ?>
                                                    <?php echo BaseHelper::clean($orderProduct->product_name); ?>

                                                <?php endif; ?>
                                            </div>

                                            <?php if($sku = Arr::get($orderProduct->options, 'sku')): ?>
                                                <div class="bb-order-product-card-sku">
                                                    <span class="text-muted"><?php echo e($sku); ?></span>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="bb-order-product-card-meta">
                                            <?php if($attributes = Arr::get($orderProduct->options, 'attributes')): ?>
                                                <div class="bb-order-product-card-attributes">
                                                    <small><?php echo e($attributes); ?></small>
                                                </div>
                                            <?php elseif($product && $product->is_variation): ?>
                                                <div class="bb-order-product-card-attributes">
                                                    <small>
                                                        <?php if($attributes = get_product_attributes($product->getKey())): ?>
                                                            <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php echo e($attribute->attribute_set_title); ?>: <?php echo e($attribute->title); ?>

                                                                <?php if(!$loop->last): ?>
                                                                    ,
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                    </small>
                                                </div>
                                            <?php endif; ?>

                                            <?php echo $__env->make(
                                                EcommerceHelper::viewPath('includes.cart-item-options-extras'),
                                                ['options' => $orderProduct->options]
                                            , array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                                            <?php if(!empty($orderProduct->product_options) && is_array($orderProduct->product_options)): ?>
                                                <?php echo render_product_options_html($orderProduct->product_options, $product?->front_sale_price ?? $orderProduct->price); ?>

                                            <?php endif; ?>

                                            <?php if($orderProduct->license_code): ?>
                                                <?php
                                                    $licenseCodes = $orderProduct->license_codes_array;
                                                    $hasMultipleCodes = count($licenseCodes) > 1;
                                                ?>
                                                <div class="bb-order-product-card-license-code mt-2">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-key'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-primary']); ?>
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
                                                        <span class="fw-semibold">
                                                            <?php echo e($hasMultipleCodes
                                                                ? trans('plugins/ecommerce::products.license_codes.codes') . ' (' . count($licenseCodes) . ')'
                                                                : trans('plugins/ecommerce::products.license_codes.code')); ?>:
                                                        </span>
                                                    </div>
                                                    <div class="mt-1">
                                                        <?php if($hasMultipleCodes): ?>
                                                            <div class="d-flex flex-column gap-2">
                                                                <?php $__currentLoopData = $licenseCodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <div class="d-flex align-items-center">
                                                                        <span class="text-muted me-2"><?php echo e($index + 1); ?>.</span>
                                                                        <code class="bg-light p-2 rounded d-inline-block"><?php echo e($code); ?></code>
                                                                        <button type="button"
                                                                                class="btn btn-sm btn-outline-secondary ms-2"
                                                                                onclick="navigator.clipboard.writeText('<?php echo e($code); ?>'); this.innerHTML='<i class=\'ti ti-check\'></i> Copied!'; setTimeout(() => this.innerHTML='<i class=\'ti ti-copy\'></i> Copy', 2000)">
                                                                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-copy'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                                                            <?php echo e(trans('plugins/ecommerce::ecommerce.copy')); ?>

                                                                        </button>
                                                                    </div>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </div>
                                                        <?php else: ?>
                                                            <code class="bg-light p-2 rounded d-inline-block"><?php echo e($licenseCodes[0] ?? $orderProduct->license_code); ?></code>
                                                            <button type="button"
                                                                    class="btn btn-sm btn-outline-secondary ms-2"
                                                                    onclick="navigator.clipboard.writeText('<?php echo e($licenseCodes[0] ?? $orderProduct->license_code); ?>'); this.innerHTML='<i class=\'ti ti-check\'></i> Copied!'; setTimeout(() => this.innerHTML='<i class=\'ti ti-copy\'></i> Copy', 2000)">
                                                                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-copy'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                                                <?php echo e(trans('plugins/ecommerce::ecommerce.copy')); ?>

                                                            </button>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <?php if(is_plugin_active('marketplace') && ($product = $orderProduct->product) && $product->original_product->store?->id): ?>
                                                <div class="bb-order-product-card-vendor">
                                                    <small><?php echo e(trans('plugins/ecommerce::ecommerce.sold_by')); ?>: <a
                                                            href="<?php echo e($product->original_product->store->url); ?>"
                                                            class="text-primary"><?php echo e($product->original_product->store->name); ?></a>
                                                    </small>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="bb-order-product-card-info">
                                        <div class="bb-order-product-card-price">
                                            <div class="bb-order-product-card-price-item">
                                                <span class="label"><?php echo e(trans('plugins/ecommerce::products.price')); ?>:</span>
                                                <span class="value"><?php echo e($orderProduct->amount_format); ?></span>
                                            </div>
                                            <div class="bb-order-product-card-price-item">
                                                <span class="label"><?php echo e(trans('plugins/ecommerce::products.quantity')); ?>:</span>
                                                <span class="value"><?php echo e($orderProduct->qty); ?></span>
                                            </div>
                                            <div class="bb-order-product-card-price-item total">
                                                <span class="label"><?php echo e(trans('plugins/ecommerce::ecommerce.total')); ?>:</span>
                                                <span class="value"><?php echo e($orderProduct->total_format); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="bb-order-totals">
                        <?php if(EcommerceHelper::isTaxEnabled() && (float)$order->tax_amount): ?>
                            <?php
                                $taxInfo = '';
                                if (EcommerceHelper::isDisplayCheckoutTaxInformation()) {
                                    $taxParts = [];
                                    foreach ($order->products as $op) {
                                        if ($op->tax_amount > 0 && !empty($op->options['taxClasses'])) {
                                            foreach ($op->options['taxClasses'] as $tn => $tr) {
                                                $taxParts[$tn . ' ' . $tr . '%'] = true;
                                            }
                                        }
                                    }
                                    if ($taxParts) {
                                        $taxInfo = ' <small>(' . implode(', ', array_keys($taxParts)) . ')</small>';
                                    }
                                }
                            ?>
                            <div class="bb-order-total-item">
                                <span class="label"><?php echo e(trans('plugins/ecommerce::ecommerce.tax')); ?>:</span>
                                <span class="value"><?php echo BaseHelper::clean(format_price($order->tax_amount) . $taxInfo); ?></span>
                            </div>
                        <?php endif; ?>

                        <?php if((float)$order->discount_amount): ?>
                            <div class="bb-order-total-item">
                                <span class="label"><?php echo e(trans('plugins/ecommerce::ecommerce.discount')); ?>:</span>
                                <span class="value">
                                    <?php echo e(format_price($order->discount_amount)); ?>

                                    <?php if($order->discount_amount): ?>
                                        <?php if($order->coupon_code): ?>
                                            <span class="small">
                                                (<?php echo BaseHelper::html(trans('plugins/ecommerce::ecommerce.coupon_code_with_code', ['code' => Html::tag('strong', $order->coupon_code)->toHtml()])); ?>)
                                            </span>
                                        <?php elseif($order->discount_description): ?>
                                            <span class="small">(<?php echo e($order->discount_description); ?>)</span>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </span>
                            </div>
                        <?php endif; ?>

                        <?php if((float)$order->shipping_amount && EcommerceHelper::countDigitalProducts($order->products) != $order->products->count()): ?>
                            <div class="bb-order-total-item">
                                <span class="label"><?php echo e(trans('plugins/ecommerce::order.shipping_fee')); ?>:</span>
                                <span class="value"><?php echo e(format_price($order->shipping_amount)); ?></span>
                            </div>
                        <?php endif; ?>

                        <?php if((float) ($order->shipping_tax_amount ?? 0)): ?>
                            <div class="bb-order-total-item">
                                <span class="label"><?php echo e(trans('plugins/ecommerce::order.shipping_tax')); ?>:</span>
                                <span class="value"><?php echo e(format_price($order->shipping_tax_amount)); ?></span>
                            </div>
                        <?php endif; ?>

                        <?php if((float) $order->payment_fee): ?>
                            <div class="bb-order-total-item">
                                <span class="label"><?php echo e(trans('plugins/payment::payment.payment_fee')); ?>:</span>
                                <span class="value"><?php echo e(format_price($order->payment_fee)); ?></span>
                            </div>
                        <?php endif; ?>

                        <div class="bb-order-total-item grand-total">
                            <span class="label"><?php echo e(trans('plugins/ecommerce::ecommerce.total_amount')); ?>:</span>
                            <span class="value"><?php echo e(format_price($order->amount)); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Shipping Information Section -->
        <?php if(! EcommerceHelper::isDisabledPhysicalProduct() && $order->shipment->id): ?>
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="bb-section-title mb-3"><?php echo e(trans('plugins/ecommerce::order.shipping_information')); ?></h5>
                    <div class="bb-order-shipping">
                        <div class="bb-order-info-list">
                            <div class="bb-order-info-item">
                                <span class="label"><?php echo e(trans('plugins/ecommerce::order.shipping_status')); ?>:</span>
                                <span class="value"><?php echo BaseHelper::clean($order->shipment->status->toHtml()); ?></span>
                            </div>

                            <?php if($order->shipment->shipping_company_name): ?>
                                <div class="bb-order-info-item">
                                    <span class="label"><?php echo e(trans('plugins/ecommerce::order.shipping_company_name')); ?>:</span>
                                    <span class="value"><?php echo e($order->shipment->shipping_company_name); ?></span>
                                </div>
                            <?php endif; ?>

                            <?php if($order->shipment->tracking_id): ?>
                                <div class="bb-order-info-item">
                                    <span class="label"><?php echo e(trans('plugins/ecommerce::order.tracking_id')); ?>:</span>
                                    <span class="value"><?php echo e($order->shipment->tracking_id); ?></span>
                                </div>
                            <?php endif; ?>

                            <?php if($order->shipment->tracking_link): ?>
                                <div class="bb-order-info-item">
                                    <span class="label"><?php echo e(trans('plugins/ecommerce::order.tracking_link')); ?>:</span>
                                    <span class="value">
                                        <a href="<?php echo e($order->shipment->tracking_link); ?>" target="_blank"><?php echo e($order->shipment->tracking_link); ?></a>
                                    </span>
                                </div>
                            <?php endif; ?>

                            <?php if($order->shipment->note): ?>
                                <div class="bb-order-info-item">
                                    <span class="label"><?php echo e(trans('plugins/ecommerce::order.delivery_notes')); ?>:</span>
                                    <span class="value"><?php echo e($order->shipment->note); ?></span>
                                </div>
                            <?php endif; ?>

                            <?php if($order->shipment->estimate_date_shipped): ?>
                                <div class="bb-order-info-item">
                                    <span class="label"><?php echo e(trans('plugins/ecommerce::ecommerce.estimate_date_shipped')); ?>:</span>
                                    <span class="value"><?php echo e($order->shipment->estimate_date_shipped); ?></span>
                                </div>
                            <?php endif; ?>

                            <?php if($order->shipment->date_shipped): ?>
                                <div class="bb-order-info-item">
                                    <span class="label"><?php echo e(trans('plugins/ecommerce::ecommerce.date_shipped')); ?>:</span>
                                    <span class="value"><?php echo e($order->shipment->date_shipped); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php elseif(request()->input('order_id') || request()->input('email')): ?>
    <div role="alert" class="alert alert-danger mt-3">
        <div class="d-flex align-items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-triangle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 9v4"></path>
                <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z"></path>
                <path d="M12 16h.01"></path>
            </svg>

            <?php echo e(trans('plugins/ecommerce::order.the_order_could_not_be_found_please_try_again_or_c')); ?>

        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/includes/order-tracking-detail.blade.php ENDPATH**/ ?>