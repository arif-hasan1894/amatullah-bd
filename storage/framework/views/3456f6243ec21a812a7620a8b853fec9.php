<?php if($payment): ?>
    <p><span><?php echo e(trans('plugins/payment::payment.payment_id')); ?>: </span>
        <a
            href="https://dashboard.paystack.com/#/transactions/<?php echo e(Arr::get($payment, 'id')); ?>"
            target="_blank"
            rel="noopener noreferrer"
        ><?php echo e(Arr::get($payment, 'id')); ?></a>
    </p>
    <p><?php echo e(trans('plugins/payment::payment.amount')); ?>: <?php echo e(Arr::get($payment, 'amount') / 100); ?>

        <?php echo e(Arr::get($payment, 'currency')); ?></p>
    <p><?php echo e(trans('plugins/payment::payment.email')); ?>: <?php echo e(Arr::get($payment, 'customer.email')); ?></p>
    <p><?php echo e(trans('core/base::tables.created_at')); ?>: <?php echo e(BaseHelper::formatDate(Arr::get($payment, 'created_at'))); ?>

    </p>
    <hr>

    <?php if($refunds = Arr::get($paymentModel->metadata, 'refunds', [])): ?>
        <h6 class="alert-heading"><?php echo e(trans('plugins/payment::payment.amount_refunded')); ?>:
            <?php echo e(collect($refunds)->sum('_data_request.refund_amount')); ?></h6>
        <?php $__currentLoopData = $refunds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $refund): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div id="<?php echo e(Arr::get($refund, 'data.id')); ?>">
                <?php echo $__env->make('plugins/paystack::refund-detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <?php echo $__env->make('plugins/payment::partials.view-payment-source', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/paystack/resources/views/detail.blade.php ENDPATH**/ ?>