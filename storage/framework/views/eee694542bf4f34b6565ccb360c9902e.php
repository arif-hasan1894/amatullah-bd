<?php $__env->startPush('header'); ?>
    <style>
        /* The vendor dashboard theme never defines Bootstrap's .table-responsive, so the
           wrapper computes to overflow-x: visible and a wide table pushes the whole page
           sideways instead of scrolling inside its own box. The page then clips content at
           the right edge — most visibly once the browser is zoomed in. Scope the missing
           rule here rather than shipping a global one. */
        .vendor-subscription-page .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="vendor-subscription-page">
    <?php if($pending): ?>
        <div class="card mb-3">
            <div class="card-body text-center">
                <h3><?php echo e(trans('plugins/marketplace::subscription.vendor.pending_title')); ?></h3>
                <p class="text-muted mb-0">
                    <?php echo e(trans('plugins/marketplace::subscription.vendor.pending_description')); ?>

                </p>
            </div>
        </div>
    <?php elseif($latest && $latest->status == \Botble\Marketplace\Enums\SubscriptionStatusEnum::REJECTED): ?>
        <div class="alert alert-danger">
            <?php echo e(trans('plugins/marketplace::subscription.vendor.rejected_reason', ['reason' => $latest->rejected_reason])); ?>

        </div>
    <?php endif; ?>

    <div class="card mb-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title mb-0"><?php echo e(trans('plugins/marketplace::subscription.vendor.current_plan')); ?></h4>
            <a href="<?php echo e(route('marketplace.vendor.subscriptions.plans')); ?>" class="btn btn-primary btn-sm">
                <?php echo e($subscription ? trans('plugins/marketplace::subscription.vendor.change_plan') : trans('plugins/marketplace::subscription.vendor.choose_plan')); ?>

            </a>
        </div>
        <div class="card-body">
            <?php if($subscription): ?>
                <dl class="row mb-0">
                    <dt class="col-sm-4"><?php echo e(trans('plugins/marketplace::subscription.subscriptions.plan')); ?></dt>
                    <dd class="col-sm-8"><?php echo e($subscription->planName()); ?></dd>

                    <dt class="col-sm-4"><?php echo e(trans('plugins/marketplace::subscription.subscriptions.ends_at')); ?></dt>
                    <dd class="col-sm-8">
                        <?php if($subscription->isLifetime()): ?>
                            <?php echo e(trans('plugins/marketplace::subscription.vendor.never_expires')); ?>

                        <?php else: ?>
                            <span title="<?php echo e(BaseHelper::formatDate($subscription->ends_at)); ?>">
                                <?php echo e(trans('plugins/marketplace::subscription.vendor.expires_on', ['date' => BaseHelper::formatDate($subscription->ends_at)])); ?>

                            </span>
                            <span class="text-muted">
                                (<?php echo e(trans(
                                    $subscription->auto_renew
                                        ? 'plugins/marketplace::subscription.vendor.renews_in'
                                        : 'plugins/marketplace::subscription.vendor.expires_in',
                                    ['time' => $subscription->ends_at->diffForHumans()]
                                )); ?>)
                            </span>
                        <?php endif; ?>
                    </dd>

                    <dt class="col-sm-4"><?php echo e(trans('plugins/ecommerce::products.name')); ?></dt>
                    <dd class="col-sm-8">
                        <?php if($productLimit === null): ?>
                            <?php echo e(trans('plugins/marketplace::subscription.vendor.products_used_unlimited', ['used' => $usedSlots])); ?>

                        <?php else: ?>
                            <?php echo e(trans('plugins/marketplace::subscription.vendor.products_used', ['used' => $usedSlots, 'total' => $productLimit])); ?>

                            <div class="progress mt-1" style="height: 6px;">
                                <div
                                    class="progress-bar <?php echo e($usedSlots >= $productLimit ? 'bg-danger' : 'bg-primary'); ?>"
                                    role="progressbar"
                                    style="width: <?php echo e($productLimit > 0 ? min(100, round($usedSlots / $productLimit * 100)) : 100); ?>%"
                                ></div>
                            </div>
                        <?php endif; ?>
                    </dd>
                </dl>

                <?php if(! $subscription->isLifetime()): ?>
                    <form method="POST" action="<?php echo e(route('marketplace.vendor.subscriptions.auto-renew')); ?>" class="mt-3">
                        <?php echo csrf_field(); ?>
                        <div class="form-check">
                            <input type="hidden" name="auto_renew" value="0">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                id="auto-renew"
                                name="auto_renew"
                                value="1"
                                onchange="this.form.submit()"
                                <?php if($subscription->auto_renew): echo 'checked'; endif; ?>
                            >
                            <label class="form-check-label" for="auto-renew">
                                <?php echo e(trans('plugins/marketplace::subscription.vendor.auto_renew_label')); ?>

                            </label>
                        </div>
                    </form>
                <?php endif; ?>
            <?php else: ?>
                <p class="mb-0 text-muted"><?php echo e(trans('plugins/marketplace::subscription.vendor.no_plan')); ?></p>
            <?php endif; ?>
        </div>
    </div>

    <?php if($subscription): ?>
        <?php echo $__env->make(MarketplaceHelper::viewPath('vendor-dashboard.subscriptions.partials.plan-details'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    <?php echo $__env->make(MarketplaceHelper::viewPath('vendor-dashboard.subscriptions.partials.history-tabs'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php if($canCancel): ?>
        <?php echo $__env->make(MarketplaceHelper::viewPath('vendor-dashboard.subscriptions.partials.cancel'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(MarketplaceHelper::viewPath('vendor-dashboard.layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/vendor-dashboard/subscriptions/index.blade.php ENDPATH**/ ?>