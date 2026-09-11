<ol>
    <li>
        <p>
            <a
                href="https://www.mollie.com/dashboard/signup"
                target="_blank"
            >
                <?php echo e(trans('plugins/mollie::mollie.register_account', ['name' => 'Mollie'])); ?>

            </a>
        </p>
    </li>
    <li>
        <p>
            <?php echo e(trans('plugins/mollie::mollie.after_registration', ['name' => 'Mollie'])); ?>

        </p>
    </li>
    <li>
        <p><?php echo e(trans('plugins/mollie::mollie.enter_api_key')); ?></p>
    </li>
    <li>
        <p><strong><?php echo e(trans('plugins/mollie::mollie.webhook_configuration')); ?></strong></p>
        <p><?php echo e(trans('plugins/mollie::mollie.webhook_url_instruction')); ?></p>
        <code style="background: #f5f5f5; padding: 5px; display: block; margin: 10px 0;">
            <?php echo e(url('mollie/payment/webhook/{token}')); ?>

        </code>
        <p><small><?php echo e(trans('plugins/mollie::mollie.webhook_note')); ?></small></p>
    </li>
    <li>
        <p><strong><?php echo e(trans('plugins/mollie::mollie.security_optional')); ?></strong></p>
        <p><?php echo e(trans('plugins/mollie::mollie.security_instruction')); ?></p>
    </li>
</ol>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/mollie/resources/views/instructions.blade.php ENDPATH**/ ?>