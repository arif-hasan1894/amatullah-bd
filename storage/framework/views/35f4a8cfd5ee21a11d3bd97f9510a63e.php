<?php $__env->startSection('title', SeoHelper::getTitle()); ?>

<?php $__env->startSection('content'); ?>
    <div class="bb-customer-content-wrapper">
        <?php if($orderProducts->isNotEmpty()): ?>
            <div class="bb-customer-card-list">
            <?php $__currentLoopData = $orderProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $product = get_products([
                        'condition' => [
                            'ec_products.id' => $orderProduct->product_id,
                        ],
                        'take'   => 1,
                        'select' => [
                            'ec_products.id',
                            'ec_products.images',
                            'ec_products.name',
                            'ec_products.price',
                            'ec_products.sale_price',
                            'ec_products.sale_type',
                            'ec_products.start_date',
                            'ec_products.end_date',
                            'ec_products.sku',
                            'ec_products.is_variation',
                            'ec_products.status',
                            'ec_products.order',
                            'ec_products.created_at',
                        ],
                    ]);

                    $hasDigitalFiles = $orderProduct->product_file_internal_count || $orderProduct->product_file_external_count;
                ?>
                <div class="bb-customer-card">
                    <div class="bb-customer-card-header">
                        <div class="bb-customer-card-title">
                            <span class="value"><?php echo e(trans('plugins/ecommerce::customer-dashboard.digital_product')); ?></span>
                        </div>
                        <?php if($hasDigitalFiles): ?>
                            <div class="bb-customer-card-status">
                                <span><?php echo e(trans('plugins/ecommerce::customer-dashboard.downloaded')); ?>: <?php echo e($orderProduct->times_downloaded); ?> <?php echo e(trans('plugins/ecommerce::customer-dashboard.times')); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="bb-customer-card-body">
                        <div class="bb-customer-card-content">
                            <div class="bb-customer-card-image">
                                <img
                                    src="<?php echo e(RvMedia::getImageUrl($orderProduct->product_image, 'thumb', false, RvMedia::getDefaultImage())); ?>"
                                    alt="<?php echo e($orderProduct->product_name); ?>"
                                >
                            </div>
                            <div class="bb-customer-card-details">
                                <div class="bb-customer-card-name">
                                    <?php if($product && $product->original_product?->url): ?>
                                        <a href="<?php echo e($product->original_product->url); ?>"><?php echo BaseHelper::clean($orderProduct->product_name); ?></a>
                                    <?php else: ?>
                                        <?php echo BaseHelper::clean($orderProduct->product_name); ?>

                                    <?php endif; ?>
                                </div>

                                <div class="bb-customer-card-meta">
                                    <?php if($sku = Arr::get($orderProduct->options, 'sku')): ?>
                                        <span>(<?php echo e($sku); ?>)</span>
                                    <?php endif; ?>

                                    <?php if($attributes = Arr::get($orderProduct->options, 'attributes')): ?>
                                        <span class="d-block"><?php echo e($attributes); ?></span>
                                    <?php elseif($product && $product->is_variation): ?>
                                        <span class="d-block">
                                            <?php $attributes = get_product_attributes($product->id) ?>
                                            <?php if($attributes->isNotEmpty()): ?>
                                                <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php echo e($attribute->attribute_set_title); ?>: <?php echo e($attribute->title); ?><?php if(!$loop->last): ?>, <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </span>
                                    <?php endif; ?>

                                    <?php if(is_plugin_active('marketplace') && ($product = $orderProduct->product) && $product->original_product->store?->id): ?>
                                        <span class="d-block"><?php echo e(trans('plugins/ecommerce::customer-dashboard.sold_by')); ?>: <a href="<?php echo e($product->original_product->store->url); ?>" class="text-primary"><?php echo e($product->original_product->store->name); ?></a></span>
                                    <?php endif; ?>

                                    <span class="d-block"><?php echo e(trans('plugins/ecommerce::customer-dashboard.ordered_at')); ?>: <?php echo e($orderProduct->created_at->translatedFormat('M d, Y h:m')); ?></span>
                                </div>

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
                                    <div class="bb-customer-card-license-code mt-3">
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
                                                                    data-ecommerce-clipboard
                                                                    data-clipboard-text="<?php echo e($code); ?>"
                                                                    data-clipboard-message="<?php echo e(trans('plugins/ecommerce::customer-dashboard.license_code_copied')); ?>">
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
                                                                <?php echo e(trans('plugins/ecommerce::customer-dashboard.copy')); ?>

                                                            </button>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            <?php else: ?>
                                                <code class="bg-light p-2 rounded d-inline-block"><?php echo e($licenseCodes[0] ?? $orderProduct->license_code); ?></code>
                                                <button type="button"
                                                        class="btn btn-sm btn-outline-secondary ms-2"
                                                        data-ecommerce-clipboard
                                                        data-clipboard-text="<?php echo e($licenseCodes[0] ?? $orderProduct->license_code); ?>"
                                                        data-clipboard-message="<?php echo e(trans('plugins/ecommerce::customer-dashboard.license_code_copied')); ?>">
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
                                                    <?php echo e(trans('plugins/ecommerce::customer-dashboard.copy')); ?>

                                                </button>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php if($hasDigitalFiles): ?>
                        <div class="bb-customer-card-footer">
                            <?php if($orderProduct->product_file_internal_count): ?>
                                <a
                                    class="btn btn-primary"
                                    href="<?php echo e(route('customer.downloads.product', $orderProduct->id)); ?>"
                                >
                                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-download'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'me-1']); ?>
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
                                    <span><?php echo e(trans('plugins/ecommerce::customer-dashboard.download_all_files')); ?></span>
                                </a>
                            <?php endif; ?>
                            <?php if($orderProduct->product_file_external_count): ?>
                                <a
                                    class="btn btn-info"
                                    href="<?php echo e(route('customer.downloads.product', [$orderProduct->id, 'external' => true])); ?>"
                                >
                                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-link'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'me-1']); ?>
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
                                    <span><?php echo e(trans('plugins/ecommerce::customer-dashboard.external_link_downloads')); ?></span>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="tp-pagination">
                <?php echo $orderProducts->links(); ?>

            </div>
        <?php else: ?>
            <?php echo $__env->make(EcommerceHelper::viewPath('customers.partials.empty-state'), [
                'title' => trans('plugins/ecommerce::customer-dashboard.no_digital_products'),
                'subtitle' => trans('plugins/ecommerce::customer-dashboard.no_digital_products_description'),
            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(EcommerceHelper::viewPath('customers.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/customers/orders/downloads.blade.php ENDPATH**/ ?>