<?php if(EcommerceHelper::isReviewEnabled() && (!EcommerceHelper::hideRatingWhenNoReviews() || $product->reviews_count > 0)): ?>
    <div class="product-rating d-flex align-items-center mb-3">
        <div class="product-rating-icon">
            <?php echo $__env->make(EcommerceHelper::viewPath('includes.rating-star'), ['avg' => $product->reviews_avg], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
        <div class="product-rating-text ms-2 fs-6">
            <a href="<?php echo e($product->url); ?>#product-review" data-bb-toggle="scroll-to-review" class="text-decoration-none">
                <span class="d-none d-sm-block"><?php echo e(trans('plugins/ecommerce::review.count_reviews_with_parentheses', ['count' => number_format($product->reviews_count)])); ?></span>
                <span class="d-block d-sm-none"><?php echo e(trans('plugins/ecommerce::review.count_only', ['count' => number_format($product->reviews_count)])); ?></span>
            </a>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/includes/rating.blade.php ENDPATH**/ ?>