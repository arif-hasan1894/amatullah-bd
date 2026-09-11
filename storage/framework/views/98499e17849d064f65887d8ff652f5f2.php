<section
    class="content-page single-product-content pt-50 pb-50"
    id="product-detail-page"
>
    <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-detail'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="card product-detail-tabs mt-5">
        <ul class="nav nav-pills nav-fill bb-product-content-tabs p-4 pb-0">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" aria-current="page" href="#tab-description"><?php echo e(trans('plugins/ecommerce::products.description')); ?></a>
            </li>

            <?php if(EcommerceHelper::isProductSpecificationEnabled() && $product->specificationAttributes->where('pivot.hidden', false)->isNotEmpty()): ?>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" aria-current="page" href="#tab-specification"><?php echo e(trans('plugins/ecommerce::products.specification')); ?></a>
                </li>
            <?php endif; ?>

            <?php if(EcommerceHelper::isReviewEnabled()): ?>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-reviews"><?php echo e(trans('plugins/ecommerce::review.reviews_with_number', [
                        'number' => $product->reviews_count > 1 ? sprintf('(%s)', $product->reviews_count) : null
                    ])); ?>

                    </a>
                </li>
            <?php endif; ?>
        </ul>

        <div class="bb-product-content-tabs-wrapper tab-content container p-4">
            <div
                class="tab-pane fade in active show"
                id="tab-description"
                role="tabpanel"
                aria-labelledby="nav-description-tab"
                tabindex="0"
            >
                <div class="ck-content">
                    <?php echo BaseHelper::clean($product->content); ?>

                </div>
            </div>

            <?php if(EcommerceHelper::isProductSpecificationEnabled() && $product->specificationAttributes->where('pivot.hidden', false)->isNotEmpty()): ?>
                <div class="tab-pane fade" id="tab-specification" role="tabpanel" aria-labelledby="nav-specification-tab" tabindex="1">
                    <div class="tp-product-details-additional-info">
                        <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-specification'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(EcommerceHelper::isReviewEnabled()): ?>
                <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="nav-review-tab" tabindex="2">
                    <div class="tp-product-details-review-wrapper pt-60" id="product-reviews">
                        <?php echo $__env->make(EcommerceHelper::viewPath('includes.reviews'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php
        $relatedProducts = get_related_products($product);
    ?>

    <?php if($relatedProducts->isNotEmpty()): ?>
        <div class="container mt-5">
            <h2><?php echo e(trans('plugins/ecommerce::products.related_products')); ?></h2>

            <div class="row">
                <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-items'), ['products' => $relatedProducts], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
        </div>
    <?php endif; ?>
</section>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/product.blade.php ENDPATH**/ ?>