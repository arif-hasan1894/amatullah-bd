<?php if(MarketplaceHelper::isEnabledMessagingSystem() && (! auth('customer')->check() || $store->id != auth('customer')->user()->store?->id)): ?>
    <div class="mb-4 row">
        <div class="col-md-6">
            <h3 class="fs-4"><?php echo e(trans('plugins/marketplace::store.email_store', ['store' => $store->name])); ?></h3>
            <p><?php echo e(trans('plugins/marketplace::store.contact_warning_message')); ?></p>
            <?php echo $contactForm->renderForm(); ?>

        </div>
    </div>

    <?php echo $__env->make(MarketplaceHelper::viewPath('includes.contact-form-script'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/includes/contact.blade.php ENDPATH**/ ?>