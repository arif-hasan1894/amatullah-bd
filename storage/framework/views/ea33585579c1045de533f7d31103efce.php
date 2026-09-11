<?php $__env->startSection('content'); ?>
    <h3 class="alert-heading"><?php echo e(SeoHelper::getTitle()); ?></h3>

    <div class="alert alert-warning mb-0 mt-3" role="alert">
        <p class="mb-0"><?php echo e(trans('plugins/marketplace::marketplace.wait_for_approval')); ?></p>
    </div>

    <div class="mt-4">
        <h5 class="mb-3"><?php echo e(trans('plugins/marketplace::marketplace.vendor_information')); ?></h5>
        <ul class="list-group">
            <li class="list-group-item"><strong><?php echo e(trans('plugins/marketplace::store.store_name')); ?>:</strong> <?php echo e($store->name); ?></li>
            <li class="list-group-item"><strong><?php echo e(trans('plugins/marketplace::store.forms.store_owner')); ?>:</strong> <?php echo e($store->customer->name); ?></li>
            <li class="list-group-item"><strong><?php echo e(trans('plugins/marketplace::store.forms.phone')); ?>:</strong> <?php echo e($store->phone); ?></li>
            <?php if(MarketplaceHelper::getSetting('requires_vendor_documentations_verification', true)): ?>
                <?php if($store->certificate_file && Storage::disk('local')->exists($store->certificate_file)): ?>
                    <li class="list-group-item">
                        <strong><?php echo e(trans('plugins/marketplace::marketplace.uploaded_certificate')); ?>: </strong>
                        <a href="<?php echo e(route('marketplace.vendor.become-vendor.download-certificate')); ?>" target="_blank" class="text-primary"><?php echo e(trans('plugins/marketplace::marketplace.view_certificate')); ?></a>
                    </li>
                <?php endif; ?>
                <?php if($store->government_id_file && Storage::disk('local')->exists($store->government_id_file)): ?>
                    <li class="list-group-item">
                        <strong><?php echo e(trans('plugins/marketplace::marketplace.uploaded_government_id')); ?>: </strong>
                        <a href="<?php echo e(route('marketplace.vendor.become-vendor.download-government-id')); ?>" target="_blank" class="text-primary"><?php echo e(trans('plugins/marketplace::marketplace.view_government_id')); ?></a>
                    </li>
                <?php endif; ?>
            <?php endif; ?>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(EcommerceHelper::viewPath('customers.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/approving-vendor.blade.php ENDPATH**/ ?>