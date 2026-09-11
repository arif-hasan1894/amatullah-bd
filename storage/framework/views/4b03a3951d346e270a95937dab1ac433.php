<?php if($payment): ?>
    <?php
        $result = $payment->result;
        $purchaseUnits = $result->purchase_units;
        $purchaseUnit = Arr::get($purchaseUnits, 0);
        $payer = $result->payer;
        $shipping = $purchaseUnit->shipping;
    ?>

    <div class="my-3">
        <div
            class="alert alert-success"
            role="alert"
        >
            <p class="mb-2"><?php echo e(trans('plugins/payment::payment.payment_id')); ?>: <strong><?php echo e($result->id); ?></strong></p>

            <p class="mb-2">
                <?php echo e(trans('plugins/payment::payment.details')); ?>:
                <strong>
                    <?php $__currentLoopData = $purchaseUnits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($purchase->amount->value); ?> <?php echo e($purchase->amount->currency_code); ?> <?php if(!empty($purchase->description)): ?>
                            (<?php echo e($purchase->description); ?>)
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </strong>
            </p>

            <p class="mb-2"><?php echo e(trans('plugins/payment::payment.payer_name')); ?>

                : <?php echo e($payer->name->given_name); ?> <?php echo e($payer->name->surname); ?></p>
            <p class="mb-2"><?php echo e(trans('plugins/payment::payment.email')); ?>: <?php echo e($payer->email_address); ?></p>
            <?php if(!empty($payer->phone) && $payer->phone->phone_number && $payer->phone->phone_number->national_number): ?>
                <p class="mb-2"><?php echo e(trans('plugins/payment::payment.phone')); ?>:
                    <?php echo e($payer->phone->phone_number->national_number); ?></p>
            <?php endif; ?>
            <p class="mb-2"><?php echo e(trans('plugins/payment::payment.country')); ?>: <?php echo e($payer->address->country_code); ?></p>
            <p class="mb-0">
                <?php echo e(trans('plugins/payment::payment.shipping_address')); ?>:
                <?php echo e(implode(', ', (array) $shipping->name)); ?>, <?php echo e(implode(', ', (array) $shipping->address)); ?>

            </p>
        </div>

        <?php
            $refunds = [];
            $payments = $purchaseUnit->payments;
            if ($payments && !empty($payments->refunds)) {
                $refunds = $payments->refunds;
            }
        ?>
        <?php if($refunds): ?>
            <br />
            <?php if (isset($component)) { $__componentOriginalc0cc3528153402540de7319c5c012ee8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc0cc3528153402540de7319c5c012ee8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::datagrid.index','data' => ['class' => 'mb-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::datagrid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-2']); ?>
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
                     <?php $__env->slot('title', null, []); ?> <?php echo e(trans('plugins/payment::payment.refunds.title') . ' (' . count((array) $refunds) . ')'); ?> <?php $__env->endSlot(); ?>
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

            <?php $__currentLoopData = $refunds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div
                    class="alert alert-warning"
                    role="alert"
                >
                    <p><?php echo e(trans('plugins/payment::payment.refunds.id')); ?>: <?php echo e($item->id); ?></p>
                    <p><?php echo e(trans('plugins/payment::payment.amount')); ?>: <?php echo e($item->amount->value); ?>

                        <?php echo e($item->amount->currency_code); ?></p>
                    <p><?php echo e(trans('plugins/payment::payment.refunds.status')); ?>: <?php echo e($item->status); ?></p>
                    <p><?php echo e(trans('plugins/payment::payment.refunds.breakdowns')); ?>: </p>
                    <div class="ms-4">
                        <?php $__currentLoopData = $item->seller_payable_breakdown; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $breakdown): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(is_object($breakdown)): ?>
                                <p><?php echo e(trans('plugins/payment::payment.refunds.' . $k)); ?>: <?php echo e($breakdown->value); ?>

                                    <?php echo e($breakdown->currency_code); ?></p>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <p><?php echo e(trans('plugins/payment::payment.refunds.create_time')); ?>:
                        <?php echo e(BaseHelper::formatDate($item->create_time)); ?></p>
                    <p><?php echo e(trans('plugins/payment::payment.refunds.update_time')); ?>:
                        <?php echo e(BaseHelper::formatDate($item->update_time)); ?></p>
                </div>
                <br />
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <?php echo $__env->make('plugins/payment::partials.view-payment-source', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/paypal/resources/views/detail.blade.php ENDPATH**/ ?>