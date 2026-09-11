<?php if(EcommerceHelper::isCustomerRegistrationEnabled()): ?>
<div class="mt-3 text-center">
    <?php echo e(__("Don't have an account?")); ?><a href="<?php echo e(route('customer.register')); ?>" class="ms-1 text-decoration-underline"><?php echo e(__('Register now')); ?></a>
</div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/customers/includes/register-link.blade.php ENDPATH**/ ?>