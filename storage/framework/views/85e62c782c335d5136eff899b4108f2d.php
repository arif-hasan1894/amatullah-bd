<?php $__env->startSection('title', trans('plugins/ecommerce::customer-dashboard.address_books')); ?>

<?php $__env->startSection('content'); ?>
    <?php echo apply_filters('ecommerce_customer_addresses_before_content', ''); ?>


    <div class="bb-customer-content-wrapper">
        <?php if($addresses->isNotEmpty()): ?>
            <div class="dashboard-address">
            <!-- Page Header -->
            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-3 mb-4">
                <div>
                    <h2 class="h5 mb-1"><?php echo e(trans('plugins/ecommerce::customer-dashboard.your_addresses')); ?></h2>
                    <p class="text-muted small mb-0"><?php echo e(trans('plugins/ecommerce::customer-dashboard.manage_shipping_billing_addresses')); ?></p>
                </div>
            </div>

            <!-- Address Grid -->
            <div class="bb-customer-card-list">
                <div class="row row-cols-1 row-cols-lg-2 g-4">
                    <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make(EcommerceHelper::viewPath('customers.address.item'), ['address' => $address], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- Add Address Prompt -->
            <?php if($addresses->count() < 5): ?>
                <div class="card border-0 bg-light mt-4">
                    <div class="card-body text-center py-4">
                        <div class="bg-primary bg-opacity-10 rounded-circle p-3 d-inline-flex mb-3">
                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-map-pin-plus'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                        </div>
                        <h5 class="card-title h6 mb-2"><?php echo e(trans('plugins/ecommerce::customer-dashboard.need_another_address')); ?></h5>
                        <p class="card-text text-muted small mb-3">
                            <?php echo e(trans('plugins/ecommerce::customer-dashboard.add_multiple_addresses_description')); ?>

                        </p>
                        <a href="<?php echo e(route('customer.address.create')); ?>" class="btn btn-outline-primary btn-sm">
                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-plus'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                            <?php echo e(trans('plugins/ecommerce::customer-dashboard.add_another_address')); ?>

                        </a>
                    </div>
                </div>
            <?php endif; ?>
            </div>
        <?php else: ?>
            <?php echo $__env->make(EcommerceHelper::viewPath('customers.partials.empty-state'), [
                'title' => trans('plugins/ecommerce::customer-dashboard.no_addresses_yet'),
                'subtitle' => trans('plugins/ecommerce::customer-dashboard.add_first_address_description'),
                'actionUrl' => route('customer.address.create'),
                'actionLabel' => trans('plugins/ecommerce::customer-dashboard.add_your_first_address'),
            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endif; ?>
    </div>

    <?php echo apply_filters('ecommerce_customer_addresses_after_content', ''); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(EcommerceHelper::viewPath('customers.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/customers/address/list.blade.php ENDPATH**/ ?>