<div class="ps-product-list mt-40 mb-40">
    <div class="ps-container">
        <div class="ps-section__header">
            <h3><?php echo e($shortcode->title); ?></h3>
            <ul class="ps-section__links">
                <li><a href="<?php echo e(route('public.stores')); ?>"><?php echo e(__('View All')); ?></a></li>
            </ul>
        </div>
        <div class="ps-section__content">
            <section class="ps-store-list">
                <?php echo $__env->make(Theme::getThemeNamespace('views.marketplace.includes.store-items'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </section>
        </div>
    </div>
</div>

<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/partials/short-codes/marketplace/stores.blade.php ENDPATH**/ ?>