<?php if($refund): ?>
    <?php
        $dataRequest = Arr::get($refund, '_data_request');
        $refundRefId = Arr::get($refund, 'refund_ref_id');
    ?>
    <div
        class="alert alert-warning"
        role="alert"
    >
        <div class="d-flex justify-content-between">
            <p><?php echo e(trans('plugins/payment::payment.refunds.id')); ?>: <strong><?php echo e($refundRefId); ?></strong></p>
            <?php if($refundRefId): ?>
                <a
                    class="get-refund-detail d-block"
                    data-element="#<?php echo e($refundRefId); ?>"
                    data-url="<?php echo e(route('payment.refund-detail', [$paymentModel->id, $refundRefId])); ?>"
                >
                    <i class="fas fa-sync-alt"></i>
                </a>
            <?php endif; ?>
        </div>
        <p><?php echo e(trans('plugins/payment::payment.amount')); ?>: <?php echo e(Arr::get($dataRequest, 'refund_amount')); ?>

            <?php echo e(Arr::get($dataRequest, 'currency')); ?></p>
        <p><?php echo e(trans('plugins/payment::payment.refunds.status')); ?>: <?php echo e(Arr::get($refund, 'status')); ?></p>
        <?php if(Arr::has($refund, 'initiated_on')): ?>
            <p><?php echo e(trans('core/base::tables.created_at')); ?>:
                <?php echo e(BaseHelper::formatDate(Arr::get($refund, 'initiated_on'))); ?></p>
        <?php endif; ?>
        <?php if(Arr::has($refund, 'refunded_on')): ?>
            <p><?php echo e(trans('plugins/payment::payment.refunds.refunded_at')); ?>:
                <?php echo e(BaseHelper::formatDate(Arr::get($refund, 'refunded_on'))); ?></p>
        <?php endif; ?>
        <?php if($errorReason = Arr::get($refund, 'errorReason')): ?>
            <p class="text-danger"><?php echo e(trans('plugins/payment::payment.refunds.error_message')); ?>: <?php echo e($errorReason); ?>

            </p>
        <?php endif; ?>
    </div>
    <br />
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/sslcommerz/resources/views/refund-detail.blade.php ENDPATH**/ ?>