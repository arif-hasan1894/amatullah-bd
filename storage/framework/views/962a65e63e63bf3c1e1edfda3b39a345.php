<ol>
    <li>
        <p>
            <a
                href="https://paystack.com"
                target="_blank"
            >
                <?php echo e(trans('plugins/paystack::paystack.register_account', ['name' => 'Paystack'])); ?>

            </a>
        </p>
    </li>
    <li>
        <p>
            <?php echo e(trans('plugins/paystack::paystack.after_registration', ['name' => 'Paystack'])); ?>

        </p>
    </li>
    <li>
        <p>
            <?php echo e(trans('plugins/paystack::paystack.enter_keys')); ?>

        </p>
    </li>
    <li>
        <p>
            <?php echo trans('plugins/paystack::paystack.callback_url_instruction'); ?>

        </p>
        <p>
            <code><?php echo e(route('paystack.payment.callback')); ?></code>
        </p>
    </li>
    <li>
        <p>
            <?php echo trans('plugins/paystack::paystack.webhook_url_instruction'); ?>

        </p>
        <p>
            <code><?php echo e(route('paystack.webhook')); ?></code>
        </p>
    </li>
</ol>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/paystack/resources/views/instructions.blade.php ENDPATH**/ ?>