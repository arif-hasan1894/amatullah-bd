<?php if($payment && ($data = Arr::get($payment, 'element.0', []))): ?>
    <hr>
    <?php if(Arr::get($data, 'tran_id')): ?>
        <p><?php echo e(trans('plugins/payment::payment.payment_id')); ?>: <?php echo e(Arr::get($data, 'tran_id')); ?></p>
    <?php endif; ?>
    <?php if(Arr::get($data, 'currency_amount')): ?>
        <p><?php echo e(trans('plugins/payment::payment.amount')); ?>: <?php echo e(Arr::get($data, 'currency_amount')); ?>

            <?php echo e(Arr::get($data, 'currency_type')); ?></p>
    <?php endif; ?>
    <?php if(Arr::get($data, 'status')): ?>
        <p><?php echo e(trans('plugins/payment::payment.status')); ?>: <?php echo e(Arr::get($data, 'status')); ?></p>
    <?php endif; ?>
    <?php if(Arr::get($data, 'card_issuer')): ?>
        <p><?php echo e(trans('plugins/payment::payment.card')); ?>: <?php echo e(Arr::get($data, 'card_issuer')); ?></p>
    <?php endif; ?>
    <?php if(Arr::get($data, 'card_issuer_country')): ?>
        <p><?php echo e(trans('plugins/payment::payment.country')); ?>: <?php echo e(Arr::get($data, 'card_issuer_country')); ?></p>
    <?php endif; ?>

    <?php if(Arr::get($data, 'tran_date')): ?>
        <p><?php echo e(trans('core/base::tables.created_at')); ?>:
            <?php echo e(BaseHelper::formatDate(Arr::get($data, 'tran_date'))); ?></p>
        <hr>
    <?php endif; ?>
    <?php if($refunds = Arr::get($paymentModel->metadata, 'refunds', [])): ?>
        <h6 class="alert-heading"><?php echo e(trans('plugins/payment::payment.amount_refunded')); ?>:
            <?php echo e(collect($refunds)->sum('_data_request.refund_amount')); ?> <?php echo e($paymentModel->currency); ?></h6>
        <?php $__currentLoopData = $refunds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $refund): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div id="<?php echo e(Arr::get($refund, 'refund_ref_id')); ?>">
                <?php echo $__env->make('plugins/sslcommerz::refund-detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <?php echo $__env->make('plugins/payment::partials.view-payment-source', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/sslcommerz/resources/views/detail.blade.php ENDPATH**/ ?>