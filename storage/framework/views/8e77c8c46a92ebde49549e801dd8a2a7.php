<?php
    $slider->loadMissing('metadata');
    $tabletImage = $slider->getMetaData('tablet_image', true) ?: $slider->image;
    $mobileImage = $slider->getMetaData('mobile_image', true) ?: $tabletImage;

    $attributes = $attributes ?? [];

    $lazy = true;

    if (Arr::get($attributes, 'loading') !== 'lazy') {
        $lazy = false;
    }
?>

<picture>
    <source
        srcset="<?php echo e(RvMedia::getImageUrl($slider->image, null, false, RvMedia::getDefaultImage())); ?>"
        media="(min-width: 1200px)"
    />
    <source
        srcset="<?php echo e(RvMedia::getImageUrl($tabletImage, null, false, RvMedia::getDefaultImage())); ?>"
        media="(min-width: 768px)"
    />
    <source
        srcset="<?php echo e(RvMedia::getImageUrl($mobileImage, null, false, RvMedia::getDefaultImage())); ?>"
        media="(max-width: 767px)"
    />
    <?php echo e(RvMedia::image($slider->image, attributes: $attributes, lazy: $lazy)); ?>

</picture>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/simple-slider/resources/views/includes/image.blade.php ENDPATH**/ ?>