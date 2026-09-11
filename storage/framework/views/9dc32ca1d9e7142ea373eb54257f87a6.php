<?php
    /** Quota options render as a number (or "Unlimited"); flags render as yes/no. */
    $quotas = ['product_limit', 'featured_product_limit', 'listing_priority'];
?>

<div class="card mb-3">
    <div class="card-header">
        <h4 class="card-title mb-0"><?php echo e(trans('plugins/marketplace::subscription.vendor.plan_details')); ?></h4>
    </div>
    <div class="table-responsive">
        <table class="table table-vcenter card-table">
            <tbody>
                <?php $__currentLoopData = \Botble\Marketplace\Models\SubscriptionPlan::defaultOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option => $default): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php ($value = $subscription->option($option)); ?>
                    <tr>
                        <td><?php echo e(trans('plugins/marketplace::subscription.plans.form.' . $option)); ?></td>
                        <td class="text-end">
                            <?php if(in_array($option, $quotas, true)): ?>
                                <?php echo e($value < 0 ? trans('plugins/marketplace::subscription.vendor.unlimited') : $value); ?>

                            <?php elseif($value): ?>
                                <span class="badge bg-green text-green-fg">
                                    <?php echo e(trans('plugins/marketplace::subscription.vendor.included')); ?>

                                </span>
                            <?php else: ?>
                                <span class="badge bg-secondary text-secondary-fg">
                                    <?php echo e(trans('plugins/marketplace::subscription.vendor.not_included')); ?>

                                </span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/vendor-dashboard/subscriptions/partials/plan-details.blade.php ENDPATH**/ ?>