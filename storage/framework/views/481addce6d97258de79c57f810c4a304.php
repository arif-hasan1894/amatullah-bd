
<div class="card mt-3 border-danger">
    <div class="card-header">
        <h4 class="card-title mb-0 text-danger">
            <?php echo e(trans('plugins/marketplace::subscription.vendor.cancel_title')); ?>

        </h4>
    </div>
    <div class="card-body">
        <p class="text-muted"><?php echo e(trans('plugins/marketplace::subscription.vendor.cancel_description')); ?></p>

        <form method="POST" action="<?php echo e(route('marketplace.vendor.subscriptions.cancel')); ?>" class="row g-2 align-items-end">
            <?php echo csrf_field(); ?>
            <div class="col-sm-auto">
                <label class="form-label" for="cancel-confirmation">
                    <?php echo e(trans('plugins/marketplace::subscription.vendor.cancel_confirm_label', [
                        'word' => trans('plugins/marketplace::subscription.vendor.cancel_confirm_word'),
                    ])); ?>

                </label>
                
                <input
                    type="text"
                    class="form-control"
                    id="cancel-confirmation"
                    name="confirmation"
                    placeholder="<?php echo e(trans('plugins/marketplace::subscription.vendor.cancel_confirm_word')); ?>"
                    autocomplete="off"
                    required
                >
            </div>
            <div class="col-sm-auto">
                <button type="submit" class="btn btn-danger">
                    <?php echo e(trans('plugins/marketplace::subscription.vendor.cancel')); ?>

                </button>
            </div>
        </form>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/vendor-dashboard/subscriptions/partials/cancel.blade.php ENDPATH**/ ?>