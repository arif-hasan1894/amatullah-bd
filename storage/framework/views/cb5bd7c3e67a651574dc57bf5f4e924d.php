<?php $__env->startPush('header'); ?>
    <style>
        /* PaymentMethods::render() emits a bare .list-group of radio + label + description
           + full-size instruction artwork. The storefront constrains it in its own
           stylesheet; the vendor dashboard has no equivalent rule, so scope one here. */
        .vendor-subscription-payment-methods .list_payment_method {
            gap: .5rem;
            display: flex;
            flex-direction: column;
        }

        .vendor-subscription-payment-methods .list_payment_method > .list-group-item,
        .vendor-subscription-payment-methods .list_payment_method > li {
            border: 1px solid var(--bs-border-color, #dee2e6) !important;
            border-radius: var(--bs-border-radius, .375rem) !important;
            padding: .875rem 1rem;
            background: transparent;
        }

        /* Make the chosen method obvious at a glance. */
        .vendor-subscription-payment-methods .list_payment_method > li:has(input:checked),
        .vendor-subscription-balance-option:has(input:checked) {
            border-color: var(--bs-primary, #0d6efd) !important;
            background-color: var(--bs-primary-bg-subtle, #cfe2ff);
        }

        /* The component wraps each method's details in a Bootstrap .collapse that the
           storefront's checkout JS opens on selection. That script is not loaded here,
           so drive it from the checked state instead — otherwise a vendor picking Bank
           transfer never sees the account number they are supposed to pay into. */
        .vendor-subscription-payment-methods .list_payment_method > li:has(input:checked) .payment_collapse_wrap {
            display: block !important;
        }

        /* Radio and its label on one line; the stock markup stacks them. */
        .vendor-subscription-payment-methods .list-group-item label {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            margin-bottom: 0;
            font-weight: 500;
            cursor: pointer;
            /* Comfortable hit area without changing the visual box. */
            min-height: 1.5rem;
        }

        .vendor-subscription-payment-methods .list-group-item input[type='radio'] {
            flex: none;
            margin: 0;
        }

        .vendor-subscription-payment-methods .list-group-item p,
        .vendor-subscription-payment-methods .list-group-item .text-muted {
            margin: .375rem 0 0 1.5rem;
            font-size: .8125rem;
        }

        /* Decorative instruction artwork ships at full resolution. Keep it as a small
           thumbnail so it informs without dominating the card. */
        .vendor-subscription-balance-option {
            border: 1px solid var(--bs-border-color, #dee2e6);
            border-radius: var(--bs-border-radius, .375rem);
            padding: .875rem 1rem;
        }

        .vendor-subscription-payment-methods img {
            display: block;
            max-width: 120px;
            max-height: 64px;
            width: auto;
            height: auto;
            margin: .625rem 0 0 1.5rem;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('marketplace.vendor.subscriptions.process-checkout', $plan->getKey())); ?>">
        <?php echo csrf_field(); ?>

        <div class="row">
            <div class="col-lg-7">
                <?php if (! ($plan->isFree())): ?>
                    <div class="card mb-3">
                        <div class="card-header">
                            <h4 class="card-title mb-0"><?php echo e(trans('plugins/marketplace::subscription.billing.title')); ?></h4>
                        </div>
                        <div class="card-body">
                            <?php if($taxEnabled): ?>
                                <p class="text-muted small"><?php echo e(trans('plugins/marketplace::subscription.billing.description_tax')); ?></p>
                            <?php endif; ?>

                            
                            <?php echo $billingForm->renderForm([], false, true, false); ?>


                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" id="billing-save-address" name="billing_save_address" value="1">
                                <label class="form-check-label" for="billing-save-address">
                                    <?php echo e(trans('plugins/marketplace::subscription.billing.save_as_default')); ?>

                                </label>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="card mb-3">
                    <div class="card-header">
                        <h4 class="card-title mb-0"><?php echo e(trans('plugins/payment::payment.payment_method')); ?></h4>
                    </div>
                    <div class="card-body">
                        <?php if($plan->isFree()): ?>
                            <p class="mb-0 text-muted"><?php echo e(trans('plugins/marketplace::subscription.subscriptions.free')); ?></p>
                        <?php else: ?>
                            <?php if($canPayWithBalance): ?>
                                
                                <div class="vendor-subscription-balance-option mb-2">
                                    <label class="d-inline-flex align-items-center gap-2 mb-0 fw-medium" for="payment-balance">
                                        <input
                                            class="form-check-input flex-none m-0"
                                            type="radio"
                                            name="payment_method"
                                            id="payment-balance"
                                            value="balance"
                                        >
                                        <span><?php echo e(trans('plugins/marketplace::subscription.vendor.pay_with_balance', ['balance' => format_price($balance)])); ?></span>
                                    </label>
                                </div>
                            <?php endif; ?>

                            <?php ($gateways = trim(\Botble\Payment\Facades\PaymentMethods::render())); ?>

                            
                            <div class="vendor-subscription-payment-methods">
                                <ul class="list-group list_payment_method">
                                    <?php echo $gateways; ?>

                                </ul>
                            </div>

                            
                            <?php if(! $gateways && ! $canPayWithBalance): ?>
                                <div class="alert alert-warning mb-0">
                                    <?php echo e(trans('plugins/marketplace::subscription.vendor.no_payment_methods')); ?>

                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h4><?php echo e($plan->name); ?></h4>
                        <dl class="row mb-3">
                            <dt class="col-6"><?php echo e(trans('plugins/marketplace::subscription.subscriptions.amount')); ?></dt>
                            <dd class="col-6 text-end">
                                <?php echo e($plan->isFree() ? trans('plugins/marketplace::subscription.subscriptions.free') : format_price($plan->price)); ?>

                            </dd>

                            <?php if($taxAmount > 0): ?>
                                <dt class="col-6">
                                    <?php echo e(trans('plugins/marketplace::subscription.billing.tax')); ?>

                                    <span class="text-muted">(<?php echo e(rtrim(rtrim(number_format($taxRate, 2), '0'), '.')); ?>%)</span>
                                </dt>
                                <dd class="col-6 text-end"><?php echo e(format_price($taxAmount)); ?></dd>

                                <dt class="col-6 border-top pt-2"><?php echo e(trans('plugins/marketplace::subscription.billing.total')); ?></dt>
                                <dd class="col-6 text-end border-top pt-2 fw-bold"><?php echo e(format_price($total)); ?></dd>
                            <?php elseif($taxEnabled && ! $plan->isFree()): ?>
                                
                                <dd class="col-12 text-muted small">
                                    <?php echo e(trans('plugins/marketplace::subscription.billing.tax_calculated_on_submit')); ?>

                                </dd>
                            <?php endif; ?>
                        </dl>

                        <?php if(! $plan->isLifetime()): ?>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="auto-renew" name="auto_renew" value="1">
                                <label class="form-check-label" for="auto-renew">
                                    <?php echo e(trans('plugins/marketplace::subscription.vendor.auto_renew_label')); ?>

                                </label>
                            </div>
                        <?php endif; ?>

                        <button type="submit" class="btn btn-primary w-100">
                            <?php echo e(trans('plugins/marketplace::subscription.vendor.subscribe')); ?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(MarketplaceHelper::viewPath('vendor-dashboard.layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/vendor-dashboard/subscriptions/checkout.blade.php ENDPATH**/ ?>