<script>
    window.themeIcons = window.themeIcons || <?php echo json_encode(Theme::getThemeIcons(), 15, 512) ?>
</script>

<?php echo apply_filters('theme_icon_js_code', null); ?>

<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/theme/resources/views/forms/fields/includes/icon-fields-script.blade.php ENDPATH**/ ?>