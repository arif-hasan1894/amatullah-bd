<?php if($data->canEditStatus() && !$data->transaction_id): ?>
    <a
        class="btn btn-warning btn-payout-button"
        href="<?php echo e(route('paypal-payout.make', $data->id)); ?>"
    ><i class="fab fa-paypal"></i> <?php echo e(trans('plugins/paypal-payout::paypal-payout.process_payout')); ?></a>
<?php elseif($data->transaction_id): ?>
    <div
        id="payout-transaction-detail"
        data-url="<?php echo e(route('paypal-payout.retrieve', $data->transaction_id)); ?>"
    >
        <?php if (isset($component)) { $__componentOriginal7edd4d0d68777cdefae7087b439de89f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7edd4d0d68777cdefae7087b439de89f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::loading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7edd4d0d68777cdefae7087b439de89f)): ?>
<?php $attributes = $__attributesOriginal7edd4d0d68777cdefae7087b439de89f; ?>
<?php unset($__attributesOriginal7edd4d0d68777cdefae7087b439de89f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7edd4d0d68777cdefae7087b439de89f)): ?>
<?php $component = $__componentOriginal7edd4d0d68777cdefae7087b439de89f; ?>
<?php unset($__componentOriginal7edd4d0d68777cdefae7087b439de89f); ?>
<?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/paypal-payout/resources/views/payout-form.blade.php ENDPATH**/ ?>