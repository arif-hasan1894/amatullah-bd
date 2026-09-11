<div class="bb-shop-banner" <?php if($coverImage): ?> style="background-image: url('<?php echo e(RvMedia::getImageUrl($coverImage)); ?>');" <?php endif; ?>>
    <div class="bb-shop-banner-overlay"></div>
    <div class="container bb-shop-banner-content">
        <?php echo e(RvMedia::image($store->logo, $store->name, useDefaultImage: true, attributes: ['class' => 'bb-shop-banner-logo'])); ?>


        <div class="bb-shop-banner-info">
            <h2 class="bb-shop-banner-name">
                <?php echo e($store->name); ?>

                <?php echo $store->badge; ?>

            </h2>

            <?php echo $__env->make(MarketplaceHelper::viewPath('includes.vacation-notice'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <?php if(EcommerceHelper::isReviewEnabled() && (!EcommerceHelper::hideRatingWhenNoReviews() || $store->reviews->count() > 0)): ?>
                <div class="bb-shop-banner-rating">
                    <?php echo $__env->make(EcommerceHelper::viewPath('includes.rating-star'), ['avg' => $store->reviews()->avg('star'), 'size' => 80], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <small><?php echo e(trans('plugins/ecommerce::review.count_reviews', ['count' => number_format($store->reviews->count())])); ?></small>
                </div>
            <?php endif; ?>

            <?php if($store->full_address || $store->phone || $store->email): ?>
                <div class="bb-shop-banner-contact">
                    <?php if(!MarketplaceHelper::hideStoreAddress() && $store->full_address): ?>
                        <div class="bb-shop-banner-address d-flex gap-1">
                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-map-pin'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php endif; ?>
                            <a href="<?php echo e($store->map_url); ?>" target="_blank" rel="nofollow noopener"><?php echo e($store->full_address); ?></a>
                        </div>
                    <?php endif; ?>

                    <?php if(!MarketplaceHelper::hideStorePhoneNumber() && $store->phone): ?>
                        <div class="bb-shop-banner-phone d-flex gap-1">
                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-phone'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php endif; ?>
                            <a href="tel:<?php echo e($store->phone); ?>"><?php echo e($store->phone); ?></a>
                        </div>
                    <?php endif; ?>

                    <?php if(!MarketplaceHelper::hideStoreEmail() && $store->email): ?>
                        <div class="bb-shop-banner-address d-flex gap-1">
                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-mail'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php endif; ?>
                            <a href="mailto:<?php echo e($store->email); ?>"><?php echo e($store->email); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if($store->description): ?>
                <div class="bb-shop-banner-description ck-content">
                    <?php echo BaseHelper::clean($store->description); ?>

                </div>
            <?php endif; ?>

            <?php if(!MarketplaceHelper::hideStoreSocialLinks() && ($socials = $store->getMetaData('social_links', true))): ?>
                <ul class="bb-shop-banner-socials">
                    <?php $__currentLoopData = MarketplaceHelper::getAllowedSocialLinks(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(! Arr::get($socials, $key)) continue; ?>

                        <li>
                            <a href="<?php echo e(Arr::get($social, 'url') . Arr::get($socials, $key)); ?>" target="_blank">
                                <?php if($icon = Arr::get($social, 'icon')): ?>
                                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-brand-' . $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php endif; ?>
                                <?php endif; ?>
                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/includes/store-detail-banner.blade.php ENDPATH**/ ?>