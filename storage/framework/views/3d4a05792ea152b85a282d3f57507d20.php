<?php echo SeoHelper::render(); ?>


<?php echo $__env->make(MarketplaceHelper::viewPath('vendor-dashboard.layouts.header-meta'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<link
    href="<?php echo e(asset('vendor/core/plugins/marketplace/fonts/linearicons/linearicons.css')); ?>?v=<?php echo e(MarketplaceHelper::getAssetVersion()); ?>"
    rel="stylesheet"
>
<link
    href="<?php echo e(asset('vendor/core/plugins/marketplace/css/marketplace.css')); ?>?v=<?php echo e(MarketplaceHelper::getAssetVersion()); ?>"
    rel="stylesheet"
>

<?php if(session('locale_direction', 'ltr') == 'rtl'): ?>
    <link href="<?php echo e(asset('vendor/core/core/base/css/core.rtl.css')); ?>" rel="stylesheet">

    <link
        href="<?php echo e(asset('vendor/core/plugins/marketplace/css/marketplace-rtl.css')); ?>?v=<?php echo e(MarketplaceHelper::getAssetVersion()); ?>"
        rel="stylesheet"
    >
<?php endif; ?>

<?php if(File::exists($styleIntegration = Theme::getStyleIntegrationPath())): ?>
    
    <?php echo Html::style(Theme::asset()->url('css/' . basename($styleIntegration) . '?v=' . filectime($styleIntegration))); ?>

<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/vendor-dashboard/layouts/header.blade.php ENDPATH**/ ?>