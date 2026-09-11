<header class="header header--mobile header--mobile-product" data-sticky="<?php echo e(theme_option('sticky_header_mobile_enabled', 'yes') == 'yes' ? 'true' : 'false'); ?>">
    <div class="navigation--mobile">
        <div class="navigation__left">
            <a class="header__back" href="<?php echo e(route('public.products')); ?>"><i class="icon-chevron-left"></i><strong><?php echo e(__('Back to Products')); ?></strong></a>
        </div>
        <?php if(is_plugin_active('ecommerce')): ?>
            <div class="navigation__right">
                <div class="header__actions">
                    <div class="ps-cart--mini">
                        <a class="header__extra btn-shopping-cart" href="<?php echo e(route('public.cart')); ?>">
                            <i class="icon-bag2"></i><span><i><?php echo e(Cart::instance('cart')->count()); ?></i></span>
                        </a>
                        <div class="ps-cart--mobile">
                            <?php echo Theme::partial('cart'); ?>

                        </div>
                    </div>
                    <div class="ps-block--user-header">
                        <div class="ps-block__left"><a href="<?php echo e(route('customer.overview')); ?>" aria-label="<?php echo e(__('My Account')); ?>"><i class="icon-user" aria-hidden="true"></i></a></div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</header>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/partials/header-mobile-product.blade.php ENDPATH**/ ?>