<div class="ps-page--single ps-page--vendor">
    <section class="ps-store-list">
        <div class="container">
            <div class="ps-section__header">
                <h3><?php echo e(__('Our Stores')); ?></h3>
            </div>
            <div class="ps-section__content">
                <div class="ps-section__search row">
                    <div class="col-md-4">
                        <form action="<?php echo e(route('public.stores')); ?>" method="get">
                            <div class="mb-3">
                                <button type="submit" aria-label="<?php echo e(__('Search')); ?>"><i class="icon-magnifier" aria-hidden="true"></i></button>
                                <input class="form-control" name="q" value="<?php echo e(BaseHelper::stringify(request()->query('q'))); ?>" type="text" placeholder="<?php echo e(__('Search vendor...')); ?>">
                            </div>
                        </form>
                    </div>
                </div>

                <?php echo $__env->make(Theme::getThemeNamespace('views.marketplace.includes.store-items'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                <div class="ps-pagination">
                    <?php echo $stores->withQueryString()->links(); ?>

                </div>
            </div>
        </div>
    </section>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/views/marketplace/stores.blade.php ENDPATH**/ ?>