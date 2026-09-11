<div class="ps-shopping ps-tab-root">
    <div class="bg-light py-2 mb-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3 d-xl-none px-2 px-sm-3">
                    <div class="header__filter d-xl-none mx-auto mb-3 mb-sm-0">
                        <button id="products-filter-sidebar" type="button">
                            <i class="icon-equalizer"></i><span class="ms-2"><?php echo e(__('Filter')); ?></span>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-xl-6 d-none d-md-block">
                    <div class="products-found pt-2">
                        <strong><?php echo e($products->total()); ?></strong><span class="ms-1"><?php echo e(__('Products found')); ?></span>
                    </div>
                </div>
                <div class="col-12 col-sm-6 px-2 px-sm-3">
                    <div class="d-flex justify-content-center justify-content-sm-end">
                        <?php echo $__env->make(Theme::getThemeNamespace() . '::views/ecommerce/includes/sort', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <div class="ps-shopping__view ms-2">
                            <ul class="products-layout mb-0 p-0">
                                <li <?php if(request()->get('layout') != 'list'): ?> class="active" <?php endif; ?>><a href="#grid" data-layout="grid"><i class="icon-grid"></i></a></li>
                                <li <?php if(request()->get('layout') == 'list'): ?> class="active" <?php endif; ?>><a href="#list" data-layout="list"><i class="icon-list4"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-tabs ps-products-listing bb-product-items-wrapper">
        <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.product-items'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo apply_filters('ecommerce_after_product_listing'); ?>

    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/views/ecommerce/includes/products-list.blade.php ENDPATH**/ ?>