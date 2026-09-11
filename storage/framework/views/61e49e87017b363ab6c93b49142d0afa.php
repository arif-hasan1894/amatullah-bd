<ul>
    <?php $__currentLoopData = $payments->payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <?php echo $__env->make('plugins/paypal::detail', compact('payment'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/paypal/resources/views/payments.blade.php ENDPATH**/ ?>