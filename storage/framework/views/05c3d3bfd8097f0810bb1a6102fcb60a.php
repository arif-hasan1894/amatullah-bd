<section class="order-tracking">
    
    <?php echo $form->renderForm(); ?>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <?php if($order): ?>
                    <?php echo $__env->make(EcommerceHelper::viewPath('includes.order-tracking-detail'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php elseif(request()->filled(['order_id', EcommerceHelper::isOrderTrackingUsingPhone() ? 'phone' : 'email'])): ?>
                    <p class="text-center text-danger"><?php echo e(__('Order not found!')); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/order-tracking.blade.php ENDPATH**/ ?>