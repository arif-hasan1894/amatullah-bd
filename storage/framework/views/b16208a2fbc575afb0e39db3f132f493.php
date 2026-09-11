<?php if($logo = theme_option('logo_in_the_checkout_page') ?: Theme::getLogo()): ?>
    <div class="checkout-logo text-center text-sm-start">
        <a
            href="<?php echo e(BaseHelper::getHomepageUrl()); ?>"
            title="<?php echo e($siteTitle = Theme::getSiteTitle()); ?>"
        >
            <img
                src="<?php echo e(RvMedia::getImageUrl($logo)); ?>"
                alt="<?php echo e($siteTitle); ?>"
            />
        </a>
    </div>
    <hr class="border-dark-subtle" />
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/orders/partials/logo.blade.php ENDPATH**/ ?>