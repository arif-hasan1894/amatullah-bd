<?php
    $categories = ProductCategoryHelper::getProductCategoriesWithUrl();
    $categoriesRequest = (array) request()->input('categories', []);
    $categoryId = Arr::get($categoriesRequest, 0);
    $coverImage = $store->getMetaData('background', true);
?>

<div class="bb-shop-detail">
    <div class="container">
        <?php echo $__env->make(MarketplaceHelper::viewPath('includes.store-detail-banner'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <?php echo $__env->make(MarketplaceHelper::viewPath('includes.store-filters'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="bb-product-items-wrapper">
                    <?php echo $__env->make(MarketplaceHelper::viewPath('stores.items'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/store.blade.php ENDPATH**/ ?>