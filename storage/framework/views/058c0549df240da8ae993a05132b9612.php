<?php if (isset($component)) { $__componentOriginal4fdb92edf089f19cd17d37829580c9a6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4fdb92edf089f19cd17d37829580c9a6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::card.body.index','data' => ['class' => 'd-print-none']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::card.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'd-print-none']); ?>
    <?php if (isset($component)) { $__componentOriginalc0cc3528153402540de7319c5c012ee8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc0cc3528153402540de7319c5c012ee8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::datagrid.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::datagrid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php if (isset($component)) { $__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::datagrid.item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::datagrid.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('title', null, []); ?> 
                <?php echo e(trans('plugins/ecommerce::shipping.shipping')); ?>

             <?php $__env->endSlot(); ?>
            <a
                href="<?php echo e(route('ecommerce.shipments.edit', $shipment->id)); ?>"
                target="_blank"
            >
                <h4><?php echo e(get_shipment_code($shipment->id)); ?></h4>
            </a>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac)): ?>
<?php $attributes = $__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac; ?>
<?php unset($__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac)): ?>
<?php $component = $__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac; ?>
<?php unset($__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::datagrid.item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::datagrid.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('title', null, []); ?> 
                <?php echo e(trans('plugins/ecommerce::shipping.status')); ?>

             <?php $__env->endSlot(); ?>
            <?php echo BaseHelper::clean($shipment->status->toHtml()); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac)): ?>
<?php $attributes = $__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac; ?>
<?php unset($__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac)): ?>
<?php $component = $__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac; ?>
<?php unset($__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::datagrid.item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::datagrid.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('title', null, []); ?> 
                <?php echo e(trans('plugins/ecommerce::shipping.shipping_method')); ?>

             <?php $__env->endSlot(); ?>
            <?php echo e($shipment->order->shipping_method_name); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac)): ?>
<?php $attributes = $__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac; ?>
<?php unset($__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac)): ?>
<?php $component = $__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac; ?>
<?php unset($__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac); ?>
<?php endif; ?>

        <?php if($shipment->store_id && $shipment->store->name): ?>
            <?php if (isset($component)) { $__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::datagrid.item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::datagrid.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('title', null, []); ?> 
                    <?php echo e(trans('plugins/ecommerce::shipping.warehouse')); ?>

                 <?php $__env->endSlot(); ?>
                <?php echo e($shipment->store->name); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac)): ?>
<?php $attributes = $__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac; ?>
<?php unset($__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac)): ?>
<?php $component = $__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac; ?>
<?php unset($__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::datagrid.item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::datagrid.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('title', null, []); ?> 
                <?php echo e(trans('plugins/ecommerce::shipping.weight_unit', ['unit' => ecommerce_weight_unit()])); ?>

             <?php $__env->endSlot(); ?>
            <?php echo e($shipment->weight); ?> <?php echo e(ecommerce_weight_unit()); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac)): ?>
<?php $attributes = $__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac; ?>
<?php unset($__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac)): ?>
<?php $component = $__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac; ?>
<?php unset($__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::datagrid.item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::datagrid.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('title', null, []); ?> 
                <?php echo e(trans('plugins/ecommerce::shipping.updated_at')); ?>

             <?php $__env->endSlot(); ?>
            <?php echo e($shipment->updated_at); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac)): ?>
<?php $attributes = $__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac; ?>
<?php unset($__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac)): ?>
<?php $component = $__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac; ?>
<?php unset($__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac); ?>
<?php endif; ?>

        <?php if((float) $shipment->cod_amount): ?>
            <?php if (isset($component)) { $__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::datagrid.item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::datagrid.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('title', null, []); ?> 
                    <?php echo e(trans('plugins/ecommerce::shipping.cod_amount')); ?>

                 <?php $__env->endSlot(); ?>
                <?php echo e(format_price($shipment->cod_amount)); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac)): ?>
<?php $attributes = $__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac; ?>
<?php unset($__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac)): ?>
<?php $component = $__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac; ?>
<?php unset($__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if($shipment->note): ?>
            <?php if (isset($component)) { $__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::datagrid.item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::datagrid.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('title', null, []); ?> 
                    <?php echo e(trans('plugins/ecommerce::shipping.delivery_note')); ?>

                 <?php $__env->endSlot(); ?>
                <?php echo e($shipment->note); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac)): ?>
<?php $attributes = $__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac; ?>
<?php unset($__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac)): ?>
<?php $component = $__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac; ?>
<?php unset($__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if($shipment->customer_delivered_confirmed_at): ?>
            <?php if (isset($component)) { $__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::datagrid.item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::datagrid.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('title', null, []); ?> 
                    <span class="text-success"><?php echo e(trans('plugins/ecommerce::shipping.customer_confirmed_delivery_at')); ?></span>
                 <?php $__env->endSlot(); ?>
                <span class="text-success"><?php echo e($shipment->customer_delivered_confirmed_at); ?></span>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac)): ?>
<?php $attributes = $__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac; ?>
<?php unset($__attributesOriginal9d1723e55a4fe6f8bd7b5292f882d2ac); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac)): ?>
<?php $component = $__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac; ?>
<?php unset($__componentOriginal9d1723e55a4fe6f8bd7b5292f882d2ac); ?>
<?php endif; ?>
        <?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc0cc3528153402540de7319c5c012ee8)): ?>
<?php $attributes = $__attributesOriginalc0cc3528153402540de7319c5c012ee8; ?>
<?php unset($__attributesOriginalc0cc3528153402540de7319c5c012ee8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc0cc3528153402540de7319c5c012ee8)): ?>
<?php $component = $__componentOriginalc0cc3528153402540de7319c5c012ee8; ?>
<?php unset($__componentOriginalc0cc3528153402540de7319c5c012ee8); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4fdb92edf089f19cd17d37829580c9a6)): ?>
<?php $attributes = $__attributesOriginal4fdb92edf089f19cd17d37829580c9a6; ?>
<?php unset($__attributesOriginal4fdb92edf089f19cd17d37829580c9a6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4fdb92edf089f19cd17d37829580c9a6)): ?>
<?php $component = $__componentOriginal4fdb92edf089f19cd17d37829580c9a6; ?>
<?php unset($__componentOriginal4fdb92edf089f19cd17d37829580c9a6); ?>
<?php endif; ?>

<?php if(
    auth()->user()->hasPermission( 'ecommerce.shipments.edit')
    && $shipment->status != Botble\Ecommerce\Enums\ShippingStatusEnum::CANCELED
    && $order->status != Botble\Ecommerce\Enums\OrderStatusEnum::CANCELED
): ?>
    <?php if (isset($component)) { $__componentOriginal00609f0158ec6107e317b89bf18d2d23 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal00609f0158ec6107e317b89bf18d2d23 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::card.footer.index','data' => ['class' => 'shipment-actions-wrapper btn-list']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::card.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'shipment-actions-wrapper btn-list']); ?>
        <?php if(in_array($shipment->status, [
            Botble\Ecommerce\Enums\ShippingStatusEnum::NOT_APPROVED,
            Botble\Ecommerce\Enums\ShippingStatusEnum::APPROVED,
        ])): ?>
            <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::button','data' => ['type' => 'button','class' => 'btn-cancel-shipment','dataAction' => route('orders.cancel-shipment', $shipment->id)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','class' => 'btn-cancel-shipment','data-action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('orders.cancel-shipment', $shipment->id))]); ?>
                <?php echo e(trans('plugins/ecommerce::shipping.cancel_shipping')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $attributes = $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $component = $__componentOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::button','data' => ['type' => 'button','class' => 'btn-trigger-update-shipping-status','icon' => 'ti ti-truck-delivery']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','class' => 'btn-trigger-update-shipping-status','icon' => 'ti ti-truck-delivery']); ?>
            <?php echo e(trans('plugins/ecommerce::shipping.update_shipping_status')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $attributes = $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $component = $__componentOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>

        <?php if($shipment->canPrintLabel()): ?>
            <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::button','data' => ['tag' => 'a','href' => route('ecommerce.shipments.print', $shipment),'target' => '_blank','icon' => 'ti ti-printer']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'a','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('ecommerce.shipments.print', $shipment)),'target' => '_blank','icon' => 'ti ti-printer']); ?>
                <?php echo e(trans('plugins/ecommerce::shipping.shipping_label.print_shipping_label')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $attributes = $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $component = $__componentOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php echo apply_filters('shipment_buttons_detail_order', null, $shipment); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal00609f0158ec6107e317b89bf18d2d23)): ?>
<?php $attributes = $__attributesOriginal00609f0158ec6107e317b89bf18d2d23; ?>
<?php unset($__attributesOriginal00609f0158ec6107e317b89bf18d2d23); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal00609f0158ec6107e317b89bf18d2d23)): ?>
<?php $component = $__componentOriginal00609f0158ec6107e317b89bf18d2d23; ?>
<?php unset($__componentOriginal00609f0158ec6107e317b89bf18d2d23); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/orders/shipment-detail.blade.php ENDPATH**/ ?>