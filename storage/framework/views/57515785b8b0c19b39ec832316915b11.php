<input
    id="<?php echo e($uniqueId); ?>"
    name="<?php echo e($name); ?>"
    type="hidden"
>

<?php if(setting('captcha_show_disclaimer')): ?>
    <div
        class="captcha-disclaimer"
        style="display: block; background-color: rgb(232 233 235); border-radius: 4px; padding: 16px; margin-bottom: 16px; "
    >
        <?php echo BaseHelper::clean(
            trans('plugins/captcha::captcha.recaptcha_disclaimer_message_with_link', [
                'privacyLink' => Html::link(
                    'https://www.google.com/intl/en/policies/privacy/',
                    trans('plugins/captcha::captcha.privacy_policy'),
                    ['target' => '_blank'],
                ),
                'termsLink' => Html::link(
                    'https://www.google.com/intl/en/policies/terms/',
                    trans('plugins/captcha::captcha.terms_of_service'),
                    ['target' => '_blank'],
                ),
            ]),
        ); ?>

    </div>

    <style>
        body[data-bs-theme="dark"] .captcha-disclaimer {
            background-color: transparent !important;
            border: var(--bb-border-width) solid var(--bb-border-color) !important;
        }
    </style>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/captcha/resources/views/v3/html.blade.php ENDPATH**/ ?>