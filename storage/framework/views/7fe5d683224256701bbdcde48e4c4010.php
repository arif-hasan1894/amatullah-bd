<div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['discount', 'is-discount-disabled' => $item->isExpired()]); ?>">
    <?php if($item->isExpired()): ?>
        <span class="discount-expired show"><?php echo e(trans('plugins/ecommerce::discount.expired')); ?></span>
    <?php endif; ?>
    <div class="discount-inner">
        <p class="discount-code">
            <?php if($isCoupon): ?>
                <span class="text-uppercase"><?php echo e(trans('plugins/ecommerce::discount.coupon_code')); ?></span>:
                <b><?php echo e($item->code); ?></b>
                <?php if (isset($component)) { $__componentOriginalbebf22e2ca96656cef629606ef6bb458 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbebf22e2ca96656cef629606ef6bb458 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::copy','data' => ['copyableState' => $item->code,'class' => 'text-white']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::copy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['copyableState' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->code),'class' => 'text-white']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbebf22e2ca96656cef629606ef6bb458)): ?>
<?php $attributes = $__attributesOriginalbebf22e2ca96656cef629606ef6bb458; ?>
<?php unset($__attributesOriginalbebf22e2ca96656cef629606ef6bb458); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbebf22e2ca96656cef629606ef6bb458)): ?>
<?php $component = $__componentOriginalbebf22e2ca96656cef629606ef6bb458; ?>
<?php unset($__componentOriginalbebf22e2ca96656cef629606ef6bb458); ?>
<?php endif; ?>
            <?php else: ?>
                <span class="text-uppercase"><?php echo e(trans('plugins/ecommerce::discount.discount_promotion')); ?></span>:
                <?php echo e($item->title); ?>

            <?php endif; ?>
        </p>
        <p class="discount-desc">
            <?php echo BaseHelper::clean(get_discount_description($item)); ?>

        </p>
        <?php if($isCoupon): ?>
            <p class="<?php echo \Illuminate\Support\Arr::toCssClasses(['discount-desc' => $item->isExpired(), 'discount-text-color' => ! $item->isExpired()]); ?>">
                (<?php echo e(trans('plugins/ecommerce::discount.coupon_code')); ?>

                <strong>
                    <?php if($item->can_use_with_promotion): ?>
                        <?php echo e(trans('plugins/ecommerce::discount.can')); ?>

                    <?php else: ?>
                        <?php echo e(trans('plugins/ecommerce::discount.cannot')); ?>

                    <?php endif; ?>
                </strong>
                <?php echo e(trans('plugins/ecommerce::discount.use_with_promotion')); ?>).
            </p>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/discounts/detail.blade.php ENDPATH**/ ?>