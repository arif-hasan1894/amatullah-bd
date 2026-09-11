<?php if(!$isRendered || request()->ajax() || request()->wantsJson()): ?>
    <script
        src="<?php echo e($url); ?>"
        async
        defer
    ></script>

    <script>
        'use strict';

        window.recaptchaInputs = window.recaptchaInputs || [];

        var refreshRecaptcha = function() {
            window.recaptchaInputs.forEach(function(item) {
                grecaptcha.execute('<?php echo e($siteKey); ?>', {
                    action: item.action
                }).then(function(token) {
                    var input = document.getElementById(item.id);

                    if (input) {
                        input.value = token;
                    }
                });
            });
        };

        var onloadCallback = function() {
            grecaptcha.ready(function() {
                refreshRecaptcha();
            });
        };
    </script>
<?php endif; ?>

<script>
    window.recaptchaInputs.push({
        id: '<?php echo e($id); ?>',
        action: '<?php echo e($action); ?>'
    });
</script>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/captcha/resources/views/v3/script.blade.php ENDPATH**/ ?>