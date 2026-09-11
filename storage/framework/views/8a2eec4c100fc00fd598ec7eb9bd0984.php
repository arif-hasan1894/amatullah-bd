<?php if($products->isNotEmpty()): ?>
    <div class="ps-panel__content">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="ps-product ps-product--wide ps-product--search-result">
                <div class="ps-product__thumbnail">
                    <a href="<?php echo e($product->url); ?>">
                        <?php echo RvMedia::image($product->image, $product->name, 'small'); ?>

                    </a>
                </div>
                    <div class="ps-product__content">
                    <a class="ps-product__title" href="<?php echo e($product->url); ?>"><?php echo BaseHelper::clean($product->name); ?></a>
                    <?php if(EcommerceHelper::isReviewEnabled()): ?>
                        <?php if($product->reviews_avg > 0): ?>
                            <div class="rating_wrap">
                                <div class="rating">
                                    <div class="product_rate" style="width: <?php echo e($product->reviews_avg * 20); ?>%"></div>
                                </div>
                                <span class="rating_num">(<?php echo e($product->reviews_count); ?>)</span>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php echo Theme::partial('product-price', [
                        'product' => $product,
                        'priceWrapperTag' => 'p',
                        'priceWrapperClass' => 'ps-product__price',
                    ]); ?>

                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="ps-panel__footer text-center"><a href="<?php echo e(route('public.products', ['q' => $query])); ?>"><?php echo e(__('See all results')); ?></a></div>
<?php else: ?>
    <div class="text-center"><?php echo e(__('No products found.')); ?></a></div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/partials/ajax-search-results.blade.php ENDPATH**/ ?>