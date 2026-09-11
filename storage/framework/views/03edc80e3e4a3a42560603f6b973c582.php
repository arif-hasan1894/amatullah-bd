<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-9">
            <?php echo $__env->make('plugins/ecommerce::shipments.notification', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <?php echo $__env->make('plugins/ecommerce::shipments.products', [
                'productEditRouteName' => 'marketplace.vendor.products.edit',
                'orderEditRouteName' => 'marketplace.vendor.orders.edit',
            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <?php echo $__env->make('plugins/ecommerce::shipments.form', [
                'updateStatusRouteName' => 'marketplace.vendor.orders.update-shipping-status',
                'updateCodStatusRouteName' => 'marketplace.vendor.shipments.update-cod-status',
            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <?php echo $__env->make('plugins/ecommerce::shipments.histories', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>

        <div class="col-md-3">
            <?php echo $__env->make('plugins/ecommerce::shipments.information', [
                'orderEditRouteName' => 'marketplace.vendor.orders.edit',
            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('footer'); ?>
    <?php if(!$shipment->isCancelled): ?>
        <?php echo $__env->make('plugins/ecommerce::shipments.partials.update-cod-status', [
            'shipment' => $shipment,
            'updateCodStatusUrl' => route('marketplace.vendor.shipments.update-cod-status', $shipment->id),
        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <?php if(! EcommerceHelper::isDisabledPhysicalProduct() && $shipment && $shipment->id): ?>
            <?php if (isset($component)) { $__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldc8ac54b6bf7eb0d0560fdd5aa630687 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::modal','data' => ['id' => 'update-shipping-status-modal','title' => trans('plugins/ecommerce::shipping.update_shipping_status'),'buttonId' => 'confirm-update-shipping-status-button','buttonLabel' => trans('plugins/ecommerce::order.update')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'update-shipping-status-modal','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::shipping.update_shipping_status')),'button-id' => 'confirm-update-shipping-status-button','button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::order.update'))]); ?>
                <?php echo $__env->make(MarketplaceHelper::viewPath('vendor-dashboard.orders.shipping-status-modal'), [
                    'shipment' => $shipment,
                    'url' => route('marketplace.vendor.orders.update-shipping-status', $shipment->id),
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldc8ac54b6bf7eb0d0560fdd5aa630687)): ?>
<?php $attributes = $__attributesOriginaldc8ac54b6bf7eb0d0560fdd5aa630687; ?>
<?php unset($__attributesOriginaldc8ac54b6bf7eb0d0560fdd5aa630687); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687)): ?>
<?php $component = $__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687; ?>
<?php unset($__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687); ?>
<?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(MarketplaceHelper::viewPath('vendor-dashboard.layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/vendor-dashboard/shipments/edit.blade.php ENDPATH**/ ?>