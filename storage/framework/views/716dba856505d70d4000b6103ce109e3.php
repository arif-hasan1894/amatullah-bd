<video
    <?php echo Html::attributes($data); ?>

    controls
>
    <source
        src="<?php echo e($url); ?>"
        type="video/<?php echo e($extension); ?>"
    >
</video>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/theme/resources/views/shortcodes/video.blade.php ENDPATH**/ ?>