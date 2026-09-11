<div class="ps-page--single ps-page--vendor">
    <section class="ps-store-list">
        <div class="container">
            <?php $coverImage = $store->getMetaData('cover_image', true); ?>
            <aside class="ps-block--store-banner" <?php if($coverImage): ?> style="background-image: url(<?php echo e(RvMedia::getImageUrl($coverImage)); ?>); background-repeat: no-repeat;
                background-size: cover;
                background-position: center;background-color: #2f2f2f;" <?php else: ?> style="background-color: #2f2f2f;" <?php endif; ?>>
                <div class="ps-block__user" <?php if($coverImage): ?> style="background: rgba(0, 0, 0, 0.3)" <?php endif; ?>>
                    <div class="ps-block__user-avatar">
                        <img src="<?php echo e($store->logo_url); ?>" alt="<?php echo e($store->name); ?>">
                        <?php if(EcommerceHelper::isReviewEnabled()): ?>
                            <div class="rating_wrap">
                                <div class="rating">
                                    <div class="product_rate" style="width: <?php echo e($store->reviews()->avg('star') * 20); ?>%"></div>
                                </div>
                                <span class="rating_num">(<?php echo e($store->reviews()->count()); ?>)</span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="ps-block__user-content">
                        <h3 class="text-white"><?php echo e($store->name); ?> <?php echo $store->badge; ?></h3>
                        <?php echo $__env->make(Theme::getThemeNamespace('views.marketplace.includes.vacation-notice'), ['store' => $store], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <?php if(! MarketplaceHelper::hideStoreAddress() && $store->full_address): ?>
                            <p><i class="icon-map-marker" <?php if($coverImage): ?> style="color: #fff" <?php endif; ?>></i>&nbsp;<?php echo e($store->full_address); ?></p>
                        <?php endif; ?>
                        <?php if(!MarketplaceHelper::hideStorePhoneNumber() && $store->phone): ?>
                            <p><i class="icon-telephone" <?php if($coverImage): ?> style="color: #fff" <?php endif; ?>></i>&nbsp;<?php echo e($store->phone); ?></p>
                        <?php endif; ?>
                        <?php if(!MarketplaceHelper::hideStoreEmail() && $store->email): ?>
                            <p><i class="icon-envelope" <?php if($coverImage): ?> style="color: #fff" <?php endif; ?>></i>&nbsp;<a href="mailto:<?php echo e($store->email); ?>"><?php echo e($store->email); ?></a></p>
                        <?php endif; ?>
                        <?php if(!MarketplaceHelper::hideStoreSocialLinks() && ($socials = $store->getMetaData('social_links', true))): ?>
                            <ul class="ps-block__user-social mt-3">
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
                    </div>
                </div>

                <?php
                    $description = BaseHelper::clean($store->description);
                    $content = BaseHelper::clean($store->content);
                ?>

                <?php if($description || $content): ?>
                    <div class="py-4 mb-4 bg-light">
                        <div class="px-4">
                            <?php if($content): ?>
                                <div
                                    id="store-content"
                                    class="d-none"
                                >
                                    <?php echo $content; ?>

                                </div>
                            <?php endif; ?>

                            <div id="store-short-description">
                                <?php echo $description ?: Str::limit($content, 250); ?>

                            </div>

                            <a
                                class="text-link toggle-show-more ms-1"
                                href="#"
                            ><?php echo e(__('show more')); ?></a>
                            <a
                                class="text-link toggle-show-less ms-1 d-none"
                                href="#"
                            ><?php echo e(__('show less')); ?></a>
                        </div>
                    </div>
                <?php endif; ?>
            </aside>
            <div class="ps-section__wrapper">
                <?php if($canContactStore = (MarketplaceHelper::isEnabledMessagingSystem() && (! auth('customer')->check() || $store->id != auth('customer')->user()->store->id))): ?>
                    <div class="ps-layout--shop">
                        <div class="ps-layout__left">
                            <div class="store-contact-form mb-4 bg-light p-4">
                                <h3 class="fs-4"><?php echo e(__('Email :store', ['store' => $store->name])); ?></h3>
                                <p><?php echo e(__('All messages are recorded and spam is not tolerated. Your email address will be shown to the recipient.')); ?></p>
                                <?php echo $contactForm
                                    ->setFormOption('class', 'ps-form--contact-us contact-form bb-contact-store-form')
                                    ->setFormInputClass('form-control')
                                    ->setFormLabelClass('d-none visually-hidden')
                                    ->modify(
                                        'submit',
                                        'submit',
                                        Botble\Base\Forms\FieldOptions\ButtonFieldOption::make()
                                            ->addAttribute('data-bb-loading', 'button-loading')
                                            ->cssClass('ps-btn')
                                            ->label(__('Send message'))
                                            ->wrapperAttributes(['class' => 'mb-3 submit'])
                                            ->toArray(),
                                        true
                                    )
                                    ->renderForm(); ?>

                        </div>

                        <?php echo $__env->make(MarketplaceHelper::viewPath('includes.contact-form-script'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
                <div class="ps-layout__right">
                    <?php endif; ?>
                    <div class="ps-shopping ps-tab-root">
                            <div class="ps-section__search">
                                <div class="mb-3">
                                    <form
                                        class="products-filter-form-vendor"
                                        action="<?php echo e(URL::current()); ?>"
                                        method="GET"
                                    >
                                        <div class="mb-5">
                                            <button type="submit" aria-label="<?php echo e(__('Search')); ?>"><i class="icon-magnifier" aria-hidden="true"></i></button>
                                            <input class="form-control" name="q" value="<?php echo e(BaseHelper::stringify(request()->query('q'))); ?>" type="text" placeholder="<?php echo e(__('Search in this store...')); ?>">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="ps-shopping__header">
                                <p><strong> <?php echo e($products->total()); ?></strong> <?php echo e(__('Products found')); ?></p>
                                <div class="ps-shopping__actions">
                                    <div class="ps-shopping__view">
                                        <p><?php echo e(__('View')); ?></p>
                                        <ul class="ps-tab-list">
                                            <li class="active"><a href="#tab-1"><i class="icon-grid"></i></a></li>
                                            <li><a href="#tab-2"><i class="icon-list4"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <div class="ps-tabs">
                            <div class="ps-tab active" id="tab-1">
                                <div class="ps-shopping-product">
                                    <div class="row">
                                        <?php if($products->isNotEmpty()): ?>
                                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                                    <div class="ps-product">
                                                        <?php echo Theme::partial('product-item', ['product' => $product, 'lazy' => false]); ?>

                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="ps-pagination">
                                    <?php echo $products->withQueryString()->links(); ?>

                                </div>
                            </div>
                            <div class="ps-tab" id="tab-2">
                                <div class="ps-shopping-product">
                                    <?php if($products->isNotEmpty()): ?>
                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="ps-product ps-product--wide">
                                                <?php echo Theme::partial('product-item-grid', ['product' => $product, 'lazy' => false]); ?>

                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="ps-pagination">
                                    <?php echo $products->withQueryString()->links(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                        <?php if($canContactStore): ?>
                </div>
                    <?php endif; ?>
            </div>
        </div>
    </section>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/views/marketplace/store.blade.php ENDPATH**/ ?>