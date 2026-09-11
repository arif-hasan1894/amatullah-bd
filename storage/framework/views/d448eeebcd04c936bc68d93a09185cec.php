<?php
    $currentMainFilterUrl = $store->url;
    $showCategoriesFilter = false;
    
    if (\Botble\Marketplace\Facades\MarketplaceHelper::isEnabledVendorCategoriesFilter()) {
        $categories = \Botble\Marketplace\Facades\MarketplaceHelper::getCategoriesForVendor($store->id);
        $showCategoriesFilter = $categories->isNotEmpty();
    }
    
    $categoriesRequest = (array) request()->input('categories', []);
    $categoryId = Arr::get($categoriesRequest, 0);
?>

<div class="bb-filter-offcanvas-area">
    <div class="bb-filter-offcanvas-wrapper">
        <div class="bb-filter-offcanvas-close">
            <button type="button" class="bb-filter-offcanvas-close-btn" data-bb-toggle="toggle-filter-sidebar">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M18 6l-12 12" />
                    <path d="M6 6l12 12" />
                </svg>
                <?php echo e(trans('core/base::forms.close')); ?>

            </button>
        </div>

        <div class="bb-shop-sidebar">
            <form action="<?php echo e(URL::current()); ?>" method="GET" class="bb-product-form-filter">
                <?php echo $__env->make(EcommerceHelper::viewPath('includes.filters.filter-hidden-fields'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <input name="categories[]" type="hidden" value="<?php echo e($categoryId); ?>">

                <?php echo $__env->make(EcommerceHelper::viewPath('includes.filters.search'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php if($showCategoriesFilter): ?>
                    <?php echo $__env->make(EcommerceHelper::viewPath('includes.filters.categories'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/includes/store-filters.blade.php ENDPATH**/ ?>