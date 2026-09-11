<?php if($refund): ?>
    <?php
        $refundData = Arr::get($refund, 'data');
        $refundRefId = Arr::get($refundData, 'id');
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
        <p><?php echo e(trans('plugins/payment::payment.amount')); ?>: <?php echo e(Arr::get($refundData, 'amount') / 100); ?>

            <?php echo e(Arr::get($refundData, 'currency')); ?></p>
        <p><?php echo e(trans('plugins/payment::payment.refunds.status')); ?>: <?php echo e(Arr::get($refundData, 'status')); ?></p>
        <?php if(Arr::has($refundData, 'createdAt')): ?>
            <p><?php echo e(trans('core/base::tables.created_at')); ?>:
                <?php echo e(BaseHelper::formatDate(Arr::get($refundData, 'createdAt'))); ?></p>
        <?php endif; ?>
        <?php if($customerNote = Arr::get($refundData, 'customer_note')): ?>
            <p><?php echo e(trans('plugins/payment::payment.refunds.description')); ?>: <?php echo e($customerNote); ?></p>
        <?php endif; ?>
    </div>
    <br />
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/paystack/resources/views/refund-detail.blade.php ENDPATH**/ ?>