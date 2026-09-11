<?php if(! empty($product->video)): ?>
    <?php $__currentLoopData = $product->video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(! $video['url']) continue; ?>

        <div class="bb-product-video" style="position: relative; width: 100%; background: #000; border-radius: 8px; overflow: hidden;">
            <?php switch($video['provider']):
                case ('video'): ?>
                    <?php
                        $fileExtension = File::extension($video['url']);

                        if (! $fileExtension || $fileExtension === 'mov') {
                            $fileExtension = 'mp4';
                        }
                    ?>

                    <video
                        id="<?php echo e(md5($video['url'])); ?>"
                        playsinline="playsinline"
                        muted
                        <?php if(theme_option('ecommerce_product_gallery_video_controls', false)): ?> controls <?php endif; ?>
                        preload="auto"
                        class="media-video"
                        aria-label="<?php echo e($product->name); ?>"
                        poster="<?php echo e($video['thumbnail']); ?>"
                        style="width: 100%; height: 100%; object-fit: contain; display: block;"
                    >
                        <source src="<?php echo e($video['url']); ?>" type="video/<?php echo e($fileExtension); ?>">
                        <img src="<?php echo e($video['thumbnail']); ?>" alt="<?php echo e($video['url']); ?>">
                    </video>
                    <button class="bb-button-trigger-play-video" data-target="<?php echo e(md5($video['url'])); ?>" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 80px; height: 80px; background: rgba(255, 255, 255, 0.9); border: none; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);">
                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-player-play-filled'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'width: 32px; height: 32px; margin-left: 4px;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
                    </button>
                    <?php break; ?>

                <?php case ('youtube'): ?>
                <?php case ('vimeo'): ?>
                    
                    <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; background: #000; border-radius: 8px;">
                        <button
                            type="button"
                            class="bb-product-video-facade"
                            data-provider="<?php echo e($video['provider']); ?>"
                            data-src="<?php echo e($video['url']); ?><?php echo e(Str::contains($video['url'], '?') ? '&' : '?'); ?>autoplay=1"
                            data-title="<?php echo e($product->name); ?> Video"
                            aria-label="<?php echo e(__('Play video')); ?>: <?php echo e($product->name); ?>"
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; padding: 0; border: 0; cursor: pointer; background: #000;"
                        >
                            <img
                                src="<?php echo e($video['thumbnail']); ?>"
                                alt="<?php echo e($product->name); ?>"
                                loading="lazy"
                                width="600"
                                height="338"
                                style="width: 100%; height: 100%; object-fit: cover; display: block;"
                            >
                            <span style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 80px; height: 80px; background: rgba(255, 255, 255, 0.9); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); transition: all 0.3s ease;">
                                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-player-play-filled'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'width: 32px; height: 32px; margin-left: 4px;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
                            </span>
                        </button>
                    </div>
                    <?php break; ?>

                <?php case ('tiktok'): ?>
                    <div style="display: flex; justify-content: center; align-items: center; min-height: 400px; background: #f8f9fa; border-radius: 8px; padding: 20px;">
                        <blockquote
                            class="tiktok-embed"
                            cite="<?php echo e($video['url']); ?>"
                            data-video-id="<?php echo e($video['video_id'] ?? ''); ?>"
                            style="max-width: 605px; min-width: 325px; border: none !important;">
                            <section></section>
                        </blockquote>
                    </div>
                    <?php break; ?>

                <?php case ('twitter'): ?>
                    <div style="display: flex; justify-content: center; align-items: center; min-height: 400px; background: #f8f9fa; border-radius: 8px; padding: 20px;">
                        <blockquote class="twitter-tweet" style="border: none !important;">
                            <a href="<?php echo e($video['url']); ?>"></a>
                        </blockquote>
                    </div>
                    <?php break; ?>

                <?php default: ?>
                    <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; background: #000; border-radius: 8px;">
                        <iframe
                            data-provider="<?php echo e($video['provider']); ?>"
                            src="<?php echo e($video['url']); ?>"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;">
                        </iframe>
                    </div>
            <?php endswitch; ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if(in_array('tiktok', array_column($product->video, 'provider'))): ?>
        <script async src="https://www.tiktok.com/embed.js"></script>
    <?php endif; ?>

    <?php if(in_array('twitter', array_column($product->video, 'provider'))): ?>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/includes/product-gallery-video.blade.php ENDPATH**/ ?>