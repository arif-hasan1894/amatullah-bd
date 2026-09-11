<div class="row">
    <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 ">
            <article class="ps-block--store-2">
                <div class="ps-block__content bg--cover" data-background="<?php echo e(asset('vendor/core/plugins/marketplace/img/default-store-banner.png')); ?>">
                    <figure>
                        <h4>
			     <?php echo e($store->name); ?>

                             <?php echo $store->badge; ?>

                        </h4>
                        <?php if(method_exists($store, 'isOnVacation') && $store->isOnVacation()): ?>
                            <span class="ps-store-vacation-badge">
                                <i class="icon-clock"></i>
                                <?php echo e(trans('plugins/marketplace::store.forms.vacation_badge')); ?>

                            </span>
                        <?php endif; ?>
                        <?php if(EcommerceHelper::isReviewEnabled()): ?>
                            <div class="rating_wrap">
                                <div class="rating">
                                    <div class="product_rate" style="width: <?php echo e($store->reviews->avg('star') * 20); ?>%"></div>
                                </div>
                                <span class="rating_num">(<?php echo e($store->reviews->count()); ?>)</span>
                            </div>
                        <?php endif; ?>
                        <?php if(! MarketplaceHelper::hideStoreAddress() && $store->full_address): ?>
                            <p><?php echo e($store->full_address); ?></p>
                        <?php endif; ?>
                        <?php if(!MarketplaceHelper::hideStorePhoneNumber() && $store->phone): ?>
                            <p><i class="icon-telephone"></i><span>&nbsp;<?php echo e($store->phone); ?></span></p>
                        <?php endif; ?>
                        <?php if(!MarketplaceHelper::hideStoreEmail() && $store->email): ?>
                            <p><i class="icon-envelope"></i>&nbsp;<a href="mailto:<?php echo e($store->email); ?>"><?php echo e($store->email); ?></a></p>
                        <?php endif; ?>
                        <?php if(!MarketplaceHelper::hideStoreSocialLinks() && ($socials = $store->getMetaData('social_links', true))): ?>
                            <ul class="ps-block__social mt-2">
                                <?php $__currentLoopData = MarketplaceHelper::getAllowedSocialLinks(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(! Arr::get($socials, $key)) continue; ?>
                                    <li>
                                        <a href="<?php echo e(Arr::get($social, 'url') . Arr::get($socials, $key)); ?>" target="_blank" title="<?php echo e(Arr::get($social, 'title')); ?>">
                                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-brand-' . Arr::get($social, 'icon')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </figure>
                </div>
                <div class="ps-block__author">
                    <a class="ps-block__user" href="<?php echo e($store->url); ?>">
                        <?php echo RvMedia::image($store->logo, $store->name, 'small'); ?>

                    </a>
                    <a class="ps-btn" href="<?php echo e($store->url); ?>"><?php echo e(__('Visit Store')); ?></a>
                </div>
            </article>
        </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/views/marketplace/includes/store-items.blade.php ENDPATH**/ ?>