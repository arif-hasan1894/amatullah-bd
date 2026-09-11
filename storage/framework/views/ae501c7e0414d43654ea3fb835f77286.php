<?php if($payment): ?>
    <p><?php echo e(trans('plugins/payment::payment.payment_id')); ?>: <?php echo e($payment->id); ?></p>
    <p><?php echo e(trans('plugins/payment::payment.amount')); ?>: <?php echo e($payment->amount->value); ?> <?php echo e($payment->amount->currency); ?>

    </p>
    <p><?php echo e(trans('plugins/payment::payment.amount_remaining')); ?>: <?php echo e($payment->amountRemaining->value); ?>

        <?php echo e($payment->amountRemaining->currency); ?></p>
    <p><?php echo e(trans('plugins/payment::payment.method_name')); ?>: <?php echo e($payment->method); ?></p>
    <p><?php echo e(trans('plugins/payment::payment.status')); ?>: <?php echo e($payment->status); ?></p>
    <p><?php echo e(trans('core/base::tables.created_at')); ?>: <?php echo e(BaseHelper::formatDate($payment->createdAt)); ?></p>
    <p><?php echo e(trans('plugins/payment::payment.paid_at')); ?>: <?php echo e(BaseHelper::formatDate($payment->paidAt)); ?></p>

    <?php if($payment->amount->value - $payment->amountRemaining->value): ?>
        <?php
            $amountRefunded = '';
            if ((float) $payment->amountRefunded->value) {
                $amountRefunded = ' (' . $payment->amountRefunded->value . ' ' . $payment->amountRefunded->currency . ')';
            }
            $refunds = $payment->refunds();
        ?>
        <br />
        <h6 class="alert-heading"><?php echo e(trans('plugins/payment::payment.refunds.title') . $amountRefunded); ?></h6>
        <hr class="m-0 mb-4">
        <?php $__currentLoopData = $refunds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $refund): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div
                class="alert alert-warning"
                role="alert"
            >
                <p><?php echo e(trans('plugins/payment::payment.refunds.id')); ?>: <?php echo e(htmlspecialchars($refund->id)); ?></p>
                <p><?php echo e(trans('plugins/payment::payment.amount')); ?>: <?php echo e($refund->amount->value); ?>

                    <?php echo e($refund->amount->currency); ?></p>
                <p><?php echo e(trans('plugins/payment::payment.refunds.description')); ?>: <?php echo e($refund->description); ?></p>
                <p><?php echo e(trans('plugins/payment::payment.refunds.status')); ?>: <?php echo e($refund->status); ?></p>
                <p><?php echo e(trans('plugins/payment::payment.refunds.create_time')); ?>:
                    <?php echo e(BaseHelper::formatDate($refund->createdAt)); ?></p>
            </div>
            <br />
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <?php echo $__env->make('plugins/payment::partials.view-payment-source', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/mollie/resources/views/detail.blade.php ENDPATH**/ ?>