<?php
    use Botble\Marketplace\Enums\SubscriptionDurationUnitEnum;

    // Included/excluded checklist, following Tabler's pricing-card pattern: a green check
    // for what the plan grants and a red cross for what it withholds, rather than
    // strikethrough text, which reads as damaged copy.
    $features = ['allow_digital_products', 'allow_coupons', 'allow_product_import'];
?>

<?php $__env->startSection('content'); ?>
    <?php if($pending): ?>
        <div class="alert alert-warning d-flex align-items-center gap-2">
            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-clock'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
            <span><?php echo e(trans('plugins/marketplace::subscription.vendor.pending_description')); ?></span>
        </div>
    <?php endif; ?>

    <?php if($subscription && ! $pending): ?>
        <div class="alert alert-info d-flex align-items-center gap-2">
            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-info-circle'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
            <span><?php echo e(trans('plugins/marketplace::subscription.vendor.change_plan_warning')); ?></span>
        </div>
    <?php endif; ?>

    <div class="row row-cards g-3 align-items-stretch">
        <?php $__empty_1 = true; $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php
                $isCurrent = $subscription && $subscription->subscription_plan_id === $plan->getKey();
                $limit = $plan->getOption('product_limit');
            ?>

            <div class="col-md-6 col-xl-4 d-flex">
                
                <div class="card h-100 w-100 text-center <?php echo e($isCurrent ? 'border-primary' : ''); ?>">
                    <?php if($isCurrent): ?>
                        <div class="ribbon ribbon-top ribbon-bookmark bg-primary">
                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-check'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <div class="card-body d-flex flex-column">
                        <div class="card-title text-uppercase text-muted small fw-bold"><?php echo e($plan->name); ?></div>

                        <div class="display-5 fw-bold">
                            <?php echo e($plan->isFree()
                                ? trans('plugins/marketplace::subscription.subscriptions.free')
                                : format_price($plan->price)); ?>

                        </div>

                        <div class="text-muted small">
                            <?php if($plan->isLifetime()): ?>
                                <?php echo e(trans('plugins/marketplace::subscription.duration_units.lifetime')); ?>

                            <?php else: ?>
                                <?php echo e(trans('plugins/marketplace::subscription.plans.form.duration_value')); ?>:
                                <?php echo e($plan->duration_value); ?>

                                <?php echo e(SubscriptionDurationUnitEnum::getLabel($plan->duration_unit)); ?>

                            <?php endif; ?>
                        </div>

                        <?php if($plan->description): ?>
                            <p class="text-muted small mt-3 mb-0"><?php echo e($plan->description); ?></p>
                        <?php endif; ?>

                        <ul class="list-unstyled lh-lg mt-3 mb-0">
                            <li>
                                <?php if($limit < 0): ?>
                                    <strong><?php echo e(trans('plugins/marketplace::subscription.subscriptions.unlimited_products')); ?></strong>
                                <?php else: ?>
                                    <strong><?php echo e($limit); ?></strong>
                                    <?php echo e(Str::lower(trans('plugins/ecommerce::products.name'))); ?>

                                <?php endif; ?>
                            </li>

                            <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php ($enabled = $plan->getOption($feature) > 0); ?>
                                <li class="<?php echo e($enabled ? '' : 'text-muted'); ?>">
                                    <span class="<?php echo e($enabled ? 'text-green' : 'text-danger'); ?>">
                                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => $enabled ? 'ti ti-check' : 'ti ti-x'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
                                    </span>
                                    <?php echo e(trans('plugins/marketplace::subscription.plans.form.' . $feature)); ?>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>

                        
                        <div class="mt-auto pt-4">
                            <?php if($isCurrent): ?>
                                <span class="btn btn-outline-primary w-100 disabled">
                                    <?php echo e(trans('plugins/marketplace::subscription.vendor.current_plan')); ?>

                                </span>
                            <?php elseif($pending): ?>
                                <span class="btn btn-primary w-100 disabled">
                                    <?php echo e(trans('plugins/marketplace::subscription.vendor.subscribe')); ?>

                                </span>
                            <?php else: ?>
                                <a
                                    href="<?php echo e(route('marketplace.vendor.subscriptions.checkout', $plan->getKey())); ?>"
                                    class="btn btn-primary w-100"
                                >
                                    <?php echo e($subscription
                                        ? trans('plugins/marketplace::subscription.vendor.change_plan')
                                        : trans('plugins/marketplace::subscription.vendor.subscribe')); ?>

                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-12">
                <div class="alert alert-info mb-0"><?php echo e(trans('core/base::tables.no_data')); ?></div>
            </div>
        <?php endif; ?>
    </div>

    <?php if($subscription): ?>
        <div class="card mt-3">
            <div class="card-body d-flex flex-wrap align-items-center justify-content-between gap-3">
                <div>
                    <h3 class="mb-1"><?php echo e(trans('plugins/marketplace::subscription.vendor.current_plan')); ?>:
                        <?php echo e($subscription->planName()); ?></h3>
                    <div class="text-muted">
                        <?php if($productLimit === null): ?>
                            <?php echo e(trans('plugins/marketplace::subscription.vendor.products_used_unlimited', ['used' => $usedSlots])); ?>

                        <?php else: ?>
                            <?php echo e(trans('plugins/marketplace::subscription.vendor.products_used', [
                                'used' => $usedSlots,
                                'total' => $productLimit,
                            ])); ?>

                        <?php endif; ?>
                    </div>
                </div>
                <a href="<?php echo e(route('marketplace.vendor.subscriptions.index')); ?>" class="btn btn-outline-secondary">
                    <?php echo e(trans('plugins/marketplace::subscription.vendor.menu')); ?>

                </a>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(MarketplaceHelper::viewPath('vendor-dashboard.layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/vendor-dashboard/subscriptions/plans.blade.php ENDPATH**/ ?>