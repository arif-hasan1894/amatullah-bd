<?php
    $digitalProducts = $order->products->where('product_type', 'digital');
?>

<?php if($digitalProducts->isNotEmpty()): ?>
    <div class="digital-product-notice">
        <h5 class="digital-product-notice-title"><?php echo e(trans('plugins/ecommerce::order.digital_product_downloads.title')); ?></h5>

        <div class="digital-product-notice-card">
            <div class="d-flex align-items-start gap-3">
                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-cloud-download'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'fs-3 digital-product-notice-icon']); ?>
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
                <div class="flex-grow-1">
                    <?php $__currentLoopData = $digitalProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['digital-product-download-item', 'border-bottom pb-3 mb-3' => !$loop->last]); ?>">
                            <div class="d-flex align-items-start gap-3">
                                <img
                                    src="<?php echo e(RvMedia::getImageUrl($orderProduct->product_image, 'thumb', false, RvMedia::getDefaultImage())); ?>"
                                    alt="<?php echo e($orderProduct->product_name); ?>"
                                    width="60"
                                    class="rounded border"
                                >
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 fw-semibold"><?php echo e($orderProduct->product_name); ?></h6>

                                    <?php if($sku = Arr::get($orderProduct->options, 'sku') ?: $orderProduct->sku): ?>
                                        <div class="text-muted small mb-1"><?php echo e(trans('plugins/ecommerce::products.sku')); ?>: <?php echo e($sku); ?></div>
                                    <?php endif; ?>

                                    <div class="text-muted small mb-2">
                                        <?php echo e(trans('plugins/ecommerce::products.quantity')); ?>: <?php echo e($orderProduct->qty); ?>

                                    </div>

                                    <?php if($orderProduct->license_code): ?>
                                        <?php
                                            $licenseCodes = $orderProduct->license_codes_array;
                                            $hasMultipleCodes = count($licenseCodes) > 1;
                                        ?>
                                        <div class="license-codes-box mb-3">
                                            <div class="d-flex align-items-center gap-2 mb-2">
                                                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-key'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-warning']); ?>
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
                                                <span class="fw-semibold small">
                                                    <?php echo e($hasMultipleCodes
                                                        ? trans('plugins/ecommerce::products.license_codes.codes') . ' (' . count($licenseCodes) . ')'
                                                        : trans('plugins/ecommerce::products.license_codes.code')); ?>:
                                                </span>
                                            </div>
                                            <?php if($hasMultipleCodes): ?>
                                                <div class="d-flex flex-column gap-1">
                                                    <?php $__currentLoopData = $licenseCodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="d-flex align-items-center small">
                                                            <span class="text-muted me-2"><?php echo e($index + 1); ?>.</span>
                                                            <code class="license-code"><?php echo e($code); ?></code>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            <?php else: ?>
                                                <code class="license-code"><?php echo e($licenseCodes[0] ?? $orderProduct->license_code); ?></code>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($order->is_finished && ($orderProduct->product_file_internal_count || $orderProduct->product_file_external_count)): ?>
                                        <div class="d-flex flex-wrap gap-2">
                                            <?php if($orderProduct->product_file_internal_count && $orderProduct->download_hash_url): ?>
                                                <a
                                                    class="btn btn-sm download-btn"
                                                    href="<?php echo e($orderProduct->download_hash_url); ?>"
                                                    target="_blank"
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
                                                    <?php echo e(trans('plugins/ecommerce::products.download')); ?><?php if($orderProduct->product_file_internal_count > 1): ?> (<?php echo e($orderProduct->product_file_internal_count); ?>)<?php endif; ?>
                                                </a>
                                            <?php endif; ?>
                                            <?php if($orderProduct->product_file_external_count && $orderProduct->download_external_url): ?>
                                                <a
                                                    class="btn btn-sm download-btn-outline"
                                                    href="<?php echo e($orderProduct->download_external_url); ?>"
                                                    target="_blank"
                                                >
                                                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-external-link'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                                    <?php echo e(trans('plugins/ecommerce::products.external_link_downloads')); ?><?php if($orderProduct->product_file_external_count > 1): ?> (<?php echo e($orderProduct->product_file_external_count); ?>)<?php endif; ?>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    <?php elseif(!$order->is_finished): ?>
                                        <div class="text-muted small">
                                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-info-circle'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                            <?php echo e(trans('plugins/ecommerce::products.download_available_when_completed')); ?>

                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/orders/partials/digital-product-downloads-frontend.blade.php ENDPATH**/ ?>