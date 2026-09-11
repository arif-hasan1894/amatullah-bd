<div <?php echo $shortcode->htmlAttributes(); ?> class="widget-testimonials mt-40 mb-40">
    <div class="ps-container">
        <?php if($shortcode->title || $shortcode->subtitle): ?>
            <div class="ps-section__header">
                <h3><?php echo e($shortcode->title); ?></h3>
                <?php if($shortcode->subtitle): ?>
                    <p><?php echo e($shortcode->subtitle); ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="ps-section__content">
            <div
                class="ps-carousel--nav owl-slider"
                data-owl-auto="<?php echo e($shortcode->is_autoplay == 'yes' ? 'true' : 'false'); ?>"
                data-owl-loop="<?php echo e(($shortcode->infinite == 'yes' || $shortcode->is_infinite == 'yes') ? 'true' : 'false'); ?>"
                data-owl-speed="<?php echo e(in_array($shortcode->autoplay_speed, theme_get_autoplay_speed_options()) ? $shortcode->autoplay_speed : 3000); ?>"
                data-owl-gap="30"
                data-owl-nav="true"
                data-owl-dots="true"
                data-owl-item="<?php echo e($shortcode->slides_to_show ?: 3); ?>"
                data-owl-item-xs="1"
                data-owl-item-sm="1"
                data-owl-item-md="2"
                data-owl-item-lg="2"
                data-owl-item-xl="<?php echo e(min($shortcode->slides_to_show ?: 3, 3)); ?>"
                data-owl-duration="1000"
                data-owl-mousedrag="on"
            >
                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="testimonial-item">
                        <div class="testimonial-item-body grey-bg-7 rounded h-100">
                            <div class="testimonial-quote">
                                <img src="<?php echo e(Theme::asset()->url('img/testimonial-quote.png')); ?>" alt="quote" />
                            </div>
                            <div class="testimonial-rating <?php if($shortcode->filled_color === 'yes'): ?> text-warning <?php endif; ?>">
                                <?php
                                    $stars = $testimonial->shortcode_stars ?? 5;
                                ?>
                                <?php for($i = 1; $i <= 5; $i++): ?>
                                    <span><?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => ''.e($i <= $stars ? 'ti ti-star-filled' : 'ti ti-star').''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?></span>
                                <?php endfor; ?>
                            </div>
                            <div class="testimonial-content">
                                <p>
                                    <?php echo BaseHelper::clean($testimonial->content); ?>

                                </p>
                            </div>
                            <div class="testimonial-user d-flex align-items-center">
                                <div class="testimonial-avatar me-3">
                                    <?php echo e(RvMedia::image($testimonial->image, $testimonial->name, 'thumb')); ?>

                                </div>
                                <div class="testimonial-user-info">
                                    <h6><?php echo e($testimonial->name); ?></h6>
                                    <span><?php echo e($testimonial->company); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/partials/short-codes/testimonials/index.blade.php ENDPATH**/ ?>