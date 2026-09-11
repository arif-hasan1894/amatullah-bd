<?php
    $checkoutOrderAmount = $orderAmount ?? Cart::instance('cart')->rawTotal();
    $isOrderFree = $checkoutOrderAmount == 0;
    $checkoutButtonText = $isOrderFree
        ? trans('plugins/ecommerce::ecommerce.complete_order')
        : trans('plugins/ecommerce::ecommerce.checkout');
    $showTerms = Theme::termAndPrivacyPolicyUrl() && get_ecommerce_setting('show_terms_and_policy_checkbox', true);
    $showAcceptanceMessage = get_ecommerce_setting('checkout_acceptance_message_enabled', false);
    $appliedCode = session()->get('applied_coupon_code');
    $appliedDiscount = isset($discounts) && $appliedCode ? $discounts->firstWhere('code', $appliedCode) : null;
    $hasCoupons = isset($discounts) && $discounts->isNotEmpty();
?>

<div class="mobile-checkout-footer checkout-section checkout-section--footer">
    <?php if($showAcceptanceMessage): ?>
        <div class="mobile-checkout-footer__acceptance">
            <?php echo e(trans('plugins/ecommerce::ecommerce.checkout_acceptance_message')); ?>

        </div>
    <?php endif; ?>

    <?php if($showTerms): ?>
        <div class="mobile-checkout-footer__terms">
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    name="agree_terms_and_policy"
                    id="agree_terms_and_policy"
                    value="1"
                    data-error-message="<?php echo e(trans('plugins/ecommerce::ecommerce.agree_terms_and_policy_error')); ?>"
                    <?php echo e(get_ecommerce_setting('terms_and_policy_checkbox_checked_by_default', false) ? 'checked' : ''); ?>

                >
                <label class="form-check-label" for="agree_terms_and_policy">
                    <?php echo BaseHelper::clean(__('I agree to the :link', ['link' => Html::link(Theme::termAndPrivacyPolicyUrl(), __('Terms and Privacy Policy'), attributes: ['target' => '_blank'])])); ?>

                </label>
            </div>
        </div>
    <?php endif; ?>

    <div class="mobile-checkout-footer__actions">
        <a href="<?php echo e(route('public.cart')); ?>" class="btn mobile-checkout-footer__btn-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/>
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
            </svg>
        </a>

        <button
            type="button"
            class="btn mobile-checkout-footer__btn-secondary mobile-checkout-footer__coupon-btn <?php echo e($appliedDiscount ? 'has-coupon' : ''); ?>"
            data-bs-toggle="offcanvas"
            data-bs-target="#mobile-coupon-sheet"
        >
            <?php if($appliedDiscount): ?>
                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-discount-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-check'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'coupon-applied-icon']); ?>
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
            <?php elseif($hasCoupons): ?>
                <img width="20" height="20" src="<?php echo e(asset('vendor/core/plugins/ecommerce/images/coupon-code.gif')); ?>" alt="">
                <span class="coupon-count"><?php echo e($discounts->count()); ?></span>
            <?php else: ?>
                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-ticket'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
            <?php endif; ?>
        </button>

        <?php if(EcommerceHelper::isValidToProcessCheckout()): ?>
            <button
                class="btn payment-checkout-btn payment-checkout-btn-step mobile-checkout-btn"
                data-processing-text="<?php echo e(__('Processing. Please wait...')); ?>"
                data-error-header="<?php echo e(__('Error')); ?>"
                type="submit"
            >
                <?php echo e($checkoutButtonText); ?>

            </button>
        <?php else: ?>
            <span class="btn payment-checkout-btn-step mobile-checkout-btn disabled">
                <?php echo e($checkoutButtonText); ?>

            </span>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/orders/partials/mobile-checkout-footer.blade.php ENDPATH**/ ?>