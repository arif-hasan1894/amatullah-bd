<?php
    EcommerceHelper::registerThemeAssets();
    $version = EcommerceHelper::getAssetVersion();
    Theme::asset()->add('lightgallery-css', 'vendor/core/plugins/ecommerce/libraries/lightgallery/css/lightgallery.min.css', version: $version);
    Theme::asset()->add('slick-css', 'vendor/core/plugins/ecommerce/libraries/slick/slick.css', version: $version);
    Theme::asset()->container('footer')->add('lightgallery-js', 'vendor/core/plugins/ecommerce/libraries/lightgallery/js/lightgallery.min.js', ['jquery'], version: $version);
    Theme::asset()->container('footer')->add('slick-js', 'vendor/core/plugins/ecommerce/libraries/slick/slick.min.js', ['jquery'], version: $version);

    $galleryStyle = theme_option('ecommerce_product_gallery_image_style') ?: ($galleryStyle ?? 'vertical');
    $videoPosition = theme_option('ecommerce_product_gallery_video_position') ?: ($videoPosition ?? 'bottom');
?>

<div class="bb-product-gallery-wrapper">
    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['bb-product-gallery', 'bb-product-gallery-' . $galleryStyle]); ?>" data-video-position="<?php echo e($videoPosition); ?>" data-placeholder="<?php echo e(RvMedia::getDefaultImage()); ?>">
        <div class="bb-product-gallery-images">
            <?php if($videoPosition == 'top' || ($videoPosition == 'after_first_image' && empty($productImages))): ?>
                <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-gallery-video'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endif; ?>

            <?php $__currentLoopData = $productImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(RvMedia::getImageUrl($image)); ?>">
                    <?php if($loop->first): ?>
                        
                        <?php echo e(RvMedia::image($image, $product->name, $productImageSize ?? null, attributes: ['loading' => 'eager', 'fetchpriority' => 'high'], lazy: false)); ?>

                    <?php else: ?>
                        <?php echo e(RvMedia::image($image, $product->name, $productImageSize ?? null)); ?>

                    <?php endif; ?>
                </a>

                <?php if($loop->first && $videoPosition == 'after_first_image'): ?>
                    <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-gallery-video'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php endif; ?>

                <?php if($loop->last && $videoPosition == 'before_last_image'): ?>
                    <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-gallery-video'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($videoPosition == 'bottom'): ?>
                <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-gallery-video'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endif; ?>
        </div>
        <div class="bb-product-gallery-thumbnails" data-vertical="<?php echo e($galleryStyle === 'vertical' ? 1 : 0); ?>">
            <?php if($videoPosition == 'top'): ?>
                <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-gallery-video-thumbnail'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endif; ?>

            <?php $__currentLoopData = $productImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <?php echo e(RvMedia::image($image, $product->name, 'thumb')); ?>

                </div>

                <?php if($loop->first && $videoPosition == 'after_first_image'): ?>
                    <div>
                        <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-gallery-video-thumbnail'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </div>
                <?php endif; ?>

                <?php if($loop->last && $videoPosition == 'before_last_image'): ?>
                    <div>
                        <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-gallery-video-thumbnail'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($videoPosition == 'bottom'): ?>
                <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-gallery-video-thumbnail'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/includes/product-gallery.blade.php ENDPATH**/ ?>