<?php
    Theme::set('stickyHeader', 'false');
    Theme::set('topHeader', Theme::partial('header-product-page', compact('product')));
    Theme::set('bottomFooter', Theme::partial('footer-product-page', compact('product')));
    Theme::set('pageId', 'product-page');
    Theme::set('headerMobile', Theme::partial('header-mobile-product'));
    Theme::set('showBottomBarMenu', false);
?>

<div class="ps-page--product">
    <div class="ps-container" id="app">
            <div class="ps-page__container">
                <div class="ps-page__left">
                    <div class="ps-product--detail ps-product--fullwidth bb-product-detail">
                        <div class="ps-product__header">
                            <div class="ps-product__thumbnail">
                                <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-gallery'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            </div>
                            <div class="ps-product__info">
                                <h1><?php echo e($product->name); ?></h1>
                                <div class="ps-product__meta">
                                    <?php if($product->brand_id): ?>
                                        <p><?php echo e(__('Brand')); ?>: <a href="<?php echo e($product->brand->url); ?>"><?php echo e($product->brand->name); ?></a></p>
                                    <?php endif; ?>

                                    <?php if(EcommerceHelper::isReviewEnabled() && $product->reviews_count > 0): ?>
                                        <div class="rating_wrap">
                                            <a href="#tab-reviews">
                                                <div class="rating">
                                                    <div class="product_rate" style="width: <?php echo e($product->reviews_avg * 20); ?>%"></div>
                                                </div>
                                                <span class="rating_num">(<?php echo e($product->reviews_count); ?> <?php echo e(__('reviews')); ?>)</span>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <?php echo Theme::partial('product-price', [
                                    'product' => $product,
                                    'priceWrapperTag' => 'h4',
                                    'priceWrapperClass' => 'ps-product__price',
                                ]); ?>

                                <?php if($product->tax_description): ?>
                                    <p class="ps-product__tax-text">
                                        <small class="text-secondary">
                                            <?php echo e($product->tax_description); ?>

                                        </small>
                                    </p>
                                <?php endif; ?>
                                <div class="ps-product__desc">
                                    <?php if(is_plugin_active('marketplace') && $product->store_id): ?>
                                        <p><?php echo e(__('Sold By')); ?>: <a href="<?php echo e($product->store->url); ?>"><strong><?php echo e($product->store->name); ?> <?php echo $product->store->badge; ?></strong></a></p>
                                    <?php endif; ?>

                                    <div class="ps-list--dot">
                                        <?php echo apply_filters('ecommerce_before_product_description', null, $product); ?>

                                        <?php echo BaseHelper::clean($product->description); ?>

                                        <?php echo apply_filters('ecommerce_after_product_description', null, $product); ?>

                                    </div>
                                </div>

                                <?php if(($flashSale = $product->latestFlashSales()->first()) && $flashSale->end_date->isFuture()): ?>
                                    <div class="ps-product__countdown">
                                        <figure>
                                            <figcaption> <?php echo e(__("Don't Miss Out! This promotion will expires in")); ?></figcaption>
                                            <ul class="ps-countdown" data-time="<?php echo e($flashSale->end_date); ?>">
                                                <li><span class="days"></span>
                                                    <p><?php echo e(__('Days')); ?></p>
                                                </li>
                                                <li><span class="hours"></span>
                                                    <p><?php echo e(__('Hours')); ?></p>
                                                </li>
                                                <li><span class="minutes"></span>
                                                    <p><?php echo e(__('Minutes')); ?></p>
                                                </li>
                                                <li><span class="seconds"></span>
                                                    <p><?php echo e(__('Seconds')); ?></p>
                                                </li>
                                            </ul>
                                        </figure>
                                        <figure>
                                            <figcaption><?php echo e(__('Sold Items')); ?></figcaption>
                                            <div class="ps-product__progress-bar ps-progress" data-value="<?php echo e($flashSale->pivot->quantity > 0 ? ($flashSale->pivot->sold / $flashSale->pivot->quantity) * 100 : 0); ?>">
                                                <div class="ps-progress__value"><span style="width: <?php echo e($flashSale->pivot->quantity > 0 ? $flashSale->pivot->sold / $flashSale->pivot->quantity : 0); ?>%;"></span></div>
                                                <?php if(Botble\Ecommerce\Facades\FlashSale::isShowSaleCountLeft()): ?>
                                                    <p><b><?php echo e($flashSale->pivot->sold); ?>/<?php echo e($flashSale->pivot->quantity); ?></b> <?php echo e(__('Sold')); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </figure>
                                    </div>
                                <?php endif; ?>

                                <form class="add-to-cart-form" method="POST" action="<?php echo e(route('public.cart.add-to-cart')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php if($product->has_variation): ?>
                                        <div class="pr_switch_wrap">
                                            <?php echo render_product_swatches($product, [
                                                'selected' => $selectedAttrs,
                                                'view'     => Theme::getThemeNamespace() . '::views.ecommerce.attributes.swatches-renderer'
                                            ]); ?>

                                        </div>
                                    <?php endif; ?>

                                    <?php echo render_product_options($product); ?>


                                    <div class="number-items-available mb-3">
                                        <?php if($product->isOutOfStock()): ?>
                                            <span class="text-danger">(<?php echo e(__('Out of stock')); ?>)</span>
                                        <?php else: ?>
                                            <?php if(!$productVariation): ?>
                                                <span class="text-danger">(<?php echo e(__('Not available')); ?>)</span>
                                            <?php else: ?>
                                                <?php if($productVariation->isOutOfStock()): ?>
                                                    <span class="text-danger">(<?php echo e(__('Out of stock')); ?>)</span>
                                                <?php elseif(!$productVariation->with_storehouse_management || $productVariation->quantity < 1): ?>
                                                    <span class="text-success">(<?php echo e(__('Available')); ?>)</span>
                                                <?php elseif($productVariation->quantity): ?>
                                                    <?php if(EcommerceHelper::showNumberOfProductsInProductSingle()): ?>
                                                        <span class="text-success">
                                                            <?php if($productVariation->quantity != 1): ?>
                                                                    (<?php echo e(__(':number products available', ['number' => $productVariation->quantity])); ?>)
                                                                <?php else: ?>
                                                                    (<?php echo e(__(':number product available', ['number' => $productVariation->quantity])); ?>)
                                                                <?php endif; ?>
                                                        </span>
                                                    <?php else: ?>
                                                        <span class="text-success">(<?php echo e(__('In stock')); ?>)</span>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>

                                    <?php echo apply_filters(ECOMMERCE_PRODUCT_DETAIL_EXTRA_HTML, null, $product); ?>

                                    <div class="ps-product__shopping">
                                        <?php if(EcommerceHelper::isCartEnabled()): ?>
                                            <figure>
                                                <figcaption><?php echo e(__('Quantity')); ?></figcaption>
                                                <div class="form-group--number product__qty">
                                                    <button class="up" type="button" aria-label="<?php echo e(__('Increase quantity')); ?>"><i class="icon-plus" aria-hidden="true"></i></button>
                                                    <button class="down" type="button" aria-label="<?php echo e(__('Decrease quantity')); ?>"><i class="icon-minus" aria-hidden="true"></i></button>
                                                    <input class="form-control qty-input" type="number" name="qty" value="1" placeholder="1" min="1">
                                                </div>
                                            </figure>
                                            <input type="hidden" name="id" class="hidden-product-id" value="<?php echo e(($product->is_variation || !$product->defaultVariation->product_id) ? $product->id : $product->defaultVariation->product_id); ?>"/>

                                            <button class="ps-btn ps-btn--black add-to-cart-button <?php if($product->isOutOfStock()): ?> btn-disabled <?php endif; ?>" type="submit" name="add_to_cart" value="1" <?php echo EcommerceHelper::jsAttributes('add-to-cart', $product, additional: ['data-bb-toggle' => 'none']); ?> <?php if($product->isOutOfStock()): ?> disabled <?php endif; ?>><?php echo e(__('Add to cart')); ?></button>
                                            <?php if(EcommerceHelper::isQuickBuyButtonEnabled()): ?>
                                                <button class="ps-btn add-to-cart-button <?php if($product->isOutOfStock()): ?> btn-disabled <?php endif; ?>" type="submit" name="checkout" value="1" <?php echo EcommerceHelper::jsAttributes('add-to-cart', $product, additional: ['data-bb-toggle' => 'none']); ?> <?php if($product->isOutOfStock()): ?> disabled <?php endif; ?>><?php echo e(__('Buy Now')); ?></button>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <div class="ps-product__actions">
                                            <?php if(EcommerceHelper::isWishlistEnabled()): ?>
                                                <a class="js-add-to-wishlist-button" href="#" data-url="<?php echo e(route('public.wishlist.add', $product->id)); ?>"><i class="icon-heart"></i></a>
                                            <?php endif; ?>
                                            <?php if(EcommerceHelper::isCompareEnabled()): ?>
                                                <a class="js-add-to-compare-button" href="#" data-url="<?php echo e(route('public.compare.add', $product->id)); ?>" title="<?php echo e(__('Compare')); ?>"><i class="icon-chart-bars"></i></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </form>
                                <div class="ps-product__specification">

                                    <p <?php if(!$product->sku): ?> style="display: none" <?php endif; ?>><strong><?php echo e(__('SKU')); ?>:</strong> <span data-bb-value="product-sku"><?php echo e($product->sku); ?></span></p>
                                    <?php if($product->categories->isNotEmpty()): ?>
                                        <p class="categories"><strong> <?php echo e(__('Categories')); ?>:</strong>
                                            <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="<?php echo e($category->url); ?>"><?php echo BaseHelper::clean($category->name); ?></a><?php if(!$loop->last): ?>,<?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </p>
                                    <?php endif; ?>

                                    <?php if($product->tags->isNotEmpty()): ?>
                                        <p class="tags"><strong> <?php echo e(__('Tags')); ?>:</strong>
                                            <?php $__currentLoopData = $product->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="<?php echo e($tag->url); ?>"><?php echo e($tag->name); ?></a><?php if(!$loop->last): ?>,<?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="ps-product__sharing">
                                    <span><?php echo e(__('Share:')); ?></span>

                                    <?php echo Theme::renderSocialSharing($product->url, SeoHelper::getDescription(), $product->image); ?>

                                </div>
                            </div>
                        </div>
                        <?php if(EcommerceHelper::isEnabledUpSaleProducts()): ?>
                            <?php echo $__env->make(EcommerceHelper::viewPath('includes.up-sale-products'), ['parentProduct' => $product], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <?php endif; ?>

                        <?php if(EcommerceHelper::isEnabledCrossSaleProducts()): ?>
                            <?php echo $__env->make(EcommerceHelper::viewPath('includes.cross-sale-products'), ['parentProduct' => $product], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <?php endif; ?>

                        <div class="ps-product__content ps-tab-root">
                            <ul class="ps-tab-list">
                                <li class="active"><a href="#tab-description"><?php echo e(__('Description')); ?></a></li>
                                <?php if(EcommerceHelper::isProductSpecificationEnabled() && $product->specificationAttributes->where('pivot.hidden', false)->isNotEmpty()): ?>
                                    <li><a href="#tab-specification"><?php echo e(__('Specification')); ?></a></li>
                                <?php endif; ?>
                                <?php if(EcommerceHelper::isReviewEnabled()): ?>
                                    <li><a href="#tab-reviews"><?php echo e(__('Reviews')); ?>&nbsp;(<?php echo e($product->reviews_count); ?>)</a></li>
                                <?php endif; ?>
                                <?php if(is_plugin_active('marketplace') && $product->store_id): ?>
                                    <li><a href="#tab-vendor"><?php echo e(__('Vendor')); ?></a></li>
                                <?php endif; ?>
                                <?php if(is_plugin_active('faq')): ?>
                                    <?php if(count($product->faq_items) > 0): ?>
                                        <li><a href="#tab-faq"><?php echo e(__('Questions and Answers')); ?></a></li>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </ul>
                            <div class="ps-tabs">
                                <div class="ps-tab active" id="tab-description">
                                    <div class="ps-document">
                                        <div class="ck-content">
                                            <?php echo BaseHelper::clean($product->content); ?>

                                        </div>
                                        <br />
                                        <?php echo apply_filters(BASE_FILTER_PUBLIC_COMMENT_AREA, null, $product); ?>

                                    </div>
                                </div>

                                <?php if(EcommerceHelper::isProductSpecificationEnabled() && $product->specificationAttributes->where('pivot.hidden', false)->isNotEmpty()): ?>
                                    <div class="ps-tab" id="tab-specification">
                                        <div class="tp-product-details-additional-info">
                                            <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-specification'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if(EcommerceHelper::isReviewEnabled()): ?>
                                    <div class="ps-tab" id="tab-reviews">
                                        <?php echo $__env->make('plugins/ecommerce::themes.includes.reviews', ['reviewButtonClass' => 'ps-btn'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if(is_plugin_active('marketplace') && $product->store_id): ?>
                                    <div class="ps-tab" id="tab-vendor">
                                        <h4><?php echo e($product->store->name); ?> <?php echo $product->store->badge; ?></h4>
                                        <div>
                                            <?php echo BaseHelper::clean($product->store->content); ?>

                                        </div>

                                        <a href="<?php echo e($product->store->url); ?>" class="more-products">
                                            <?php echo e(__('More Products from :store',  ['store' => $product->store->name])); ?>

                                        </a>
                                    </div>
                                <?php endif; ?>

                                <?php if(is_plugin_active('faq') && count($product->faq_items) > 0): ?>
                                    <div class="ps-tab" id="tab-faq">
                                        <div class="ps-faq-wrapper">
                                            <div class="ps-faq-header mb-4">
                                                <h3 class="ps-faq-title"><?php echo e(__('Frequently Asked Questions')); ?></h3>
                                                <p class="ps-faq-subtitle text-muted"><?php echo e(__('Find answers to common questions about this product')); ?></p>
                                            </div>
                                            <div class="accordion ps-faq-accordion" id="faq-accordion">
                                                <?php $__currentLoopData = $product->faq_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="accordion-item ps-faq-item <?php if($loop->first): ?> first-item <?php endif; ?>">
                                                        <h2 class="accordion-header" id="heading-faq-<?php echo e($loop->index); ?>">
                                                            <button class="accordion-button ps-faq-question <?php if(!$loop->first): ?> collapsed <?php endif; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-<?php echo e($loop->index); ?>" aria-expanded="<?php if($loop->first): ?> true <?php else: ?> false <?php endif; ?>" aria-controls="collapse-faq-<?php echo e($loop->index); ?>">
                                                                <span class="ps-faq-icon me-3">
                                                                    <i class="icon-question-circle"></i>
                                                                </span>
                                                                <span class="ps-faq-question-text"><?php echo BaseHelper::clean($faq[0]['value']); ?></span>
                                                                <span class="ps-faq-toggle-icon ms-auto">
                                                                    <i class="icon-chevron-down"></i>
                                                                </span>
                                                            </button>
                                                        </h2>
                                                        <div id="collapse-faq-<?php echo e($loop->index); ?>" class="accordion-collapse collapse <?php if($loop->first): ?> show <?php endif; ?>" aria-labelledby="heading-faq-<?php echo e($loop->index); ?>" data-bs-parent="#faq-accordion">
                                                            <div class="accordion-body ps-faq-answer">
                                                                <div class="ps-faq-answer-content">
                                                                    <?php echo BaseHelper::clean($faq[1]['value']); ?>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-page__right">
                    <aside class="widget widget_product widget_features">
                        <?php for($i = 1; $i <= 5; $i++): ?>
                            <?php if(theme_option('product_feature_' . $i . '_title')): ?>
                                <p><i class="<?php echo e(theme_option('product_feature_' . $i . '_icon')); ?>"></i> <?php echo e(theme_option('product_feature_' . $i . '_title')); ?></p>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </aside>
                    <?php if(is_plugin_active('ads')): ?>
                        <aside class="widget">
                            <?php echo AdsManager::display('product-sidebar', ['class' => 'mb-3'], false); ?>

                        </aside>
                    <?php endif; ?>
                </div>
            </div>

            <div class="ps-section--default">
                <div class="ps-section__header">
                    <h3><?php echo e(__('Related products')); ?></h3>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--responsive owl-slider"
                         data-owl-auto="true"
                         data-owl-loop="false"
                         data-owl-speed="10000"
                         data-owl-gap="0"
                         data-owl-nav="false"
                         data-owl-dots="true"
                         data-owl-item="7"
                         data-owl-item-xs="2"
                         data-owl-item-sm="2"
                         data-owl-item-md="3"
                         data-owl-item-lg="4"
                         data-owl-item-xl="6"
                         data-owl-duration="1000"
                         data-owl-mousedrag="on"
                    >
                        <?php $__currentLoopData = get_related_products($product, 7); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="ps-product">
                                <?php echo Theme::partial('product-item', ['product' => $relatedProduct]); ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/views/ecommerce/product.blade.php ENDPATH**/ ?>