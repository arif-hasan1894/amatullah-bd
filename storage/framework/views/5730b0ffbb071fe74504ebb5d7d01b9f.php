<div class="page-content-wraper">
    <?php echo Theme::breadcrumb()->render(); ?>


    <?php echo $__env->make(EcommerceHelper::viewPath('customers.product-reviews.icons'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <section class="content-page product-reviews-page">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7 col-12">
                <div class="my-5">
                    <?php echo $__env->make(EcommerceHelper::viewPath('customers.product-reviews.form'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
                <div class="my-5">
                    <a
                        class="btn btn-secondary px-5"
                        href="<?php echo e(BaseHelper::getHomepageUrl()); ?>"
                    ><?php echo e(trans('plugins/ecommerce::ecommerce.go_back_home')); ?></a>
                </div>
            </div>
        </div>
    </section>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/product-review.blade.php ENDPATH**/ ?>