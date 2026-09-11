<strong><?php echo e(trans('plugins/payment::payment.payment_details')); ?>: </strong>
<?php echo $__env->make('plugins/paypal::detail', compact('payment'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/paypal/resources/views/email.blade.php ENDPATH**/ ?>