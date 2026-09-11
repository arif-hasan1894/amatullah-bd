<?php $__env->startSection('content'); ?>
    <?php echo Form::open(['id' => 'marketplace-vendor-discount']); ?>

    <div id="main-discount">
        <discount-vendor-component
            currency="<?php echo e(get_application_currency()->symbol); ?>"
            generate-url=<?php echo e(route('marketplace.vendor.discounts.generate-coupon')); ?>

            cancel-url=<?php echo e(route('marketplace.vendor.discounts.index')); ?>

        >
        </discount-vendor-component>
    </div>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('pre-footer'); ?>
    <script>
        'use strict';

        window.trans = window.trans || {};

        window.trans.discount = JSON.parse('<?php echo addslashes(json_encode(trans('plugins/ecommerce::discount'))); ?>');

        window.trans.enums = {
            'typeOptions': <?php echo json_encode(MarketplaceHelper::discountTypes()); ?>

        };
    </script>

    <?php echo $jsValidation; ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make(MarketplaceHelper::viewPath('vendor-dashboard.layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/vendor-dashboard/discounts/create.blade.php ENDPATH**/ ?>