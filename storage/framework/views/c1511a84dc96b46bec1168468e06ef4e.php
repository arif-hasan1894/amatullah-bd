<?php $__env->startSection('title', theme_option('ecommerce_checkout_seo_title') ?: __('Checkout')); ?>

<?php $__env->startSection('content'); ?>
    <?php if(Cart::instance('cart')->isNotEmpty()): ?>
        <?php if(is_plugin_active('payment')): ?>
            <?php echo $__env->make('plugins/payment::partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endif; ?>

        <?php echo $checkoutForm->renderForm(); ?>


        <?php if(is_plugin_active('payment')): ?>
            <?php echo $__env->make('plugins/payment::partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endif; ?>
    <?php else: ?>
        <div class="container">
            <div class="alert alert-warning my-5">
                <span><?php echo BaseHelper::clean(__('No products in cart. :link!', ['link' => Html::link(BaseHelper::getHomepageUrl(), __('Back to shopping'))])); ?></span>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('footer'); ?>
    <script type="text/javascript" src="<?php echo e(asset('vendor/core/core/base/libraries/jquery-compat/jquery4-compat.js')); ?>?v=<?php echo e(EcommerceHelper::getAssetVersion()); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('vendor/core/core/js-validation/js/js-validation.js')); ?>?v=<?php echo e(EcommerceHelper::getAssetVersion()); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('plugins/ecommerce::orders.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/orders/checkout.blade.php ENDPATH**/ ?>