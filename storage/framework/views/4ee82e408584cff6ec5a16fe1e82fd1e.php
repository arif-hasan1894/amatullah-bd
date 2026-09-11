<?php
    $url = $data['url'];
    $width = $data['width'] ?? null;
    $height = $data['height'] ?? null;
    $centered = $data['centered'] ?? false;
    $marginTop = $data['margin_top'] ?? 0;
    $marginBottom = $data['margin_bottom'] ?? 20;
    $marginStart = $data['margin_start'] ?? 0;
    $marginEnd = $data['margin_end'] ?? 0;

    $marginStyle = "margin-top: {$marginTop}px; margin-bottom: {$marginBottom}px;";

    if ($centered) {
        $marginStyle .= ' margin-inline: auto;';
    } else {
        $marginStyle .= " margin-inline-start: {$marginStart}px; margin-inline-end: {$marginEnd}px;";
    }
?>

<?php switch($type):
    case ('youtube'): ?>
    <?php case ('vimeo'): ?>
        <div
            class="<?php echo e($type); ?>-iframe"
            <?php if(!$width && !$height): ?> style="position: relative; display: block; height: 0; padding-bottom: 56.25%; overflow: hidden; <?php echo e($marginStyle); ?>"
            <?php else: ?>
                style="<?php echo e($marginStyle); ?><?php echo e($centered ? ' display: flex; justify-content: center;' : ''); ?>" <?php endif; ?>
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
        <?php break; ?>

    <?php case ('tiktok'): ?>
        <div
            class="<?php echo e($type); ?>-iframe"
            style="<?php echo e($marginStyle); ?><?php echo e($centered ? ' display: flex; justify-content: center;' : ''); ?>"
        >
            <blockquote
                class="tiktok-embed"
                cite="<?php echo e($data['url']); ?>"
                data-video-id="<?php echo e($data['video_id']); ?>"
                style="max-width: 605px; min-width: 325px; margin-bottom: 20px; border: none !important;"
            >
                <section></section>
            </blockquote>
        </div>
        <?php break; ?>

    <?php case ('twitter'): ?>
        <div
            class="<?php echo e($type); ?>-iframe"
            style="<?php echo e($marginStyle); ?> display: flex; justify-content: center"
        >
            <blockquote
                class="twitter-tweet"
                style="border: none !important;"
            ><a href="<?php echo e($data['url']); ?>"></a></blockquote>
        </div>
        <?php break; ?>

    <?php case ('video'): ?>
        <div
            class="<?php echo e($type); ?>-iframe"
            style="<?php echo e($marginStyle); ?><?php echo e($centered ? ' display: flex; justify-content: center;' : ''); ?>"
        >
            <video
                style="<?php echo \Illuminate\Support\Arr::toCssStyles(["height: {$height}px !important;" => $height, "width: {$width}px !important;" => $width, 'max-width: 100%']) ?>"
                controls
            >
                <source
                    src="<?php echo e($data['url']); ?>"
                    type="video/<?php echo e($data['extension']); ?>"
                >
            </video>
        </div>
<?php endswitch; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/theme/resources/views/shortcodes/media.blade.php ENDPATH**/ ?>