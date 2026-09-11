<?php if(!empty($url)): ?>
    <div
        class="youtube-iframe"
        <?php if(!$width && !$height): ?> style="position: relative; display: block; height: 0; padding-bottom: 56.25%; overflow: hidden;"
        <?php else: ?>
            style="margin-bottom: 20px;" <?php endif; ?>
    >
        <iframe
            src="<?php echo e($url); ?>"
            allowfullscreen
            frameborder="0"
            style="<?php echo \Illuminate\Support\Arr::toCssStyles([
                'position: absolute; top: 0; bottom: 0; left: 0; width: 100%; height: 100%; border: 0;' => !$width && !$height,
                "height: {$height}px !important;" => $height,
                "width: {$width}px !important;" => $width,
                'max-width: 100%',
            ]) ?>"
            title="Video"
        ></iframe>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/theme/resources/views/shortcodes/youtube.blade.php ENDPATH**/ ?>