<?php if(!$isRendered || request()->ajax()): ?>
    <script
        src="<?php echo e($url); ?>"
        async
        defer
    ></script>

    <script>
        'use strict';

        window.recaptchaInputs = window.recaptchaInputs || [];

        var refreshRecaptcha = function() {
            window.recaptchaInputs.forEach(function(item, index) {
                grecaptcha.reset(index);
            });
        };

        var onloadCallback = function() {
            window.recaptchaInputs.forEach(function(item) {
                if (document.getElementById(item)) {
                    grecaptcha.render(item);
                } else {
                    console.warn('reCAPTCHA placeholder element not found for ID:', item);
                }
            });
        };
    </script>
<?php endif; ?>

<script>
    window.recaptchaInputs.push('<?php echo e($name); ?>');
</script>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/captcha/resources/views/v2/script.blade.php ENDPATH**/ ?>