<?php $__env->startSection('title', trans('plugins/ecommerce::customer-dashboard.order_return_requests')); ?>

<?php $__env->startSection('content'); ?>
    <div class="bb-customer-content-wrapper">
        <?php if($requests->isNotEmpty()): ?>
            <div class="customer-list-order">
                <!-- Return Requests Grid -->
                <div class="bb-customer-card-list order-return-cards">
                <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bb-customer-card">
                        <!-- Return Request Header -->
                        <div class="bb-customer-card-header">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h3 class="bb-customer-card-title h6 mb-1">
                                        <?php echo e(trans('plugins/ecommerce::customer-dashboard.return_request_code', ['code' => $item->code])); ?>

                                    </h3>
                                    <p class="text-muted small mb-0">
                                        <?php echo e($item->created_at->translatedFormat('M d, Y \a\t g:i A')); ?>

                                    </p>
                                    <div class="bb-customer-card-status">
                                        <?php echo BaseHelper::clean($item->return_status->toHtml()); ?>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Return Request Content -->
                        <div class="bb-customer-card-body">
                            <div class="bb-customer-card-info">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="info-item">
                                            <span class="label">
                                                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-shopping-cart'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                                <?php echo e(trans('plugins/ecommerce::customer-dashboard.original_order')); ?>

                                            </span>
                                            <span class="value">
                                                <a
                                                    href="<?php echo e(route('customer.orders.view', $item->order_id)); ?>"
                                                    class="text-decoration-none fw-medium"
                                                    title="<?php echo e(trans('plugins/ecommerce::customer-dashboard.click_to_view_order_details')); ?>"
                                                >
                                                    <?php echo e($item->order->code); ?>

                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-item">
                                            <span class="label">
                                                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-package'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                                <?php echo e(trans('plugins/ecommerce::customer-dashboard.items_count')); ?>

                                            </span>
                                            <span class="value">
                                                <?php echo e($item->items_count === 1 ? trans('plugins/ecommerce::customer-dashboard.count_item', ['count' => $item->items_count]) : trans('plugins/ecommerce::customer-dashboard.count_items', ['count' => $item->items_count])); ?>

                                            </span>
                                        </div>
                                    </div>

                                    <?php echo apply_filters('ecommerce_order_return_list_item_info', '', $item); ?>

                                </div>
                            </div>
                        </div>

                        <!-- Return Request Actions -->
                        <div class="bb-customer-card-footer">
                            <div class="d-flex justify-content-end">
                                <a
                                    class="btn btn-primary btn-sm"
                                    href="<?php echo e(route('customer.order_returns.detail', $item->id)); ?>"
                                >
                                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-eye'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                    <?php echo e(trans('plugins/ecommerce::customer-dashboard.view_details')); ?>

                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <!-- Pagination -->
                <?php if($requests->hasPages()): ?>
                    <div class="d-flex justify-content-center mt-4">
                        <?php echo $requests->links(); ?>

                    </div>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <?php echo $__env->make(EcommerceHelper::viewPath('customers.partials.empty-state'), [
                'title' => trans('plugins/ecommerce::customer-dashboard.no_order_return_requests_yet'),
                'subtitle' => trans('plugins/ecommerce::customer-dashboard.no_order_return_requests_description'),
            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(EcommerceHelper::viewPath('customers.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/customers/order-returns/list.blade.php ENDPATH**/ ?>