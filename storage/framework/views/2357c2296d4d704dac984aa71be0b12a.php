<div class="ps-page--shop">
    <div class="ps-layout--shop">
        <div class="ps-layout__left">
            <div class="screen-darken"></div>
            <div class="ps-layout__left-container">
                <div class="ps-filter__header d-block d-xl-none">
                    <h3><?php echo e(__('Filter Products')); ?></h3><a class="ps-btn--close ps-btn--no-border" href="#"></a>
                </div>
                <div class="ps-layout__left-content">
                    <?php echo $__env->make(Theme::getThemeNamespace() . '::views.ecommerce.includes.filters', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
            </div>
        </div>
        <div class="ps-layout__right">
            <div class="ps-block--shop-features">
                <div class="ps-block__header">
                    <h1 class="h1"><?php echo e($brand->name); ?></h1>
                </div>
                <?php if($brand->description): ?>
                    <div class="ps-block__content">
                        <div class="ps-section__content">
                            <?php echo BaseHelper::clean($brand->description); ?>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.products-list'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/views/ecommerce/brand.blade.php ENDPATH**/ ?>