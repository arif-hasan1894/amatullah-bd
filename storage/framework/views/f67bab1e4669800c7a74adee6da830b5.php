<div class="bank-transfer-info">
    <div class="bank-transfer-info__content">
        <div class="bank-transfer-info__icon">
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
        </div>
        <div class="bank-transfer-info__details">
            <div class="bank-transfer-info__text">
                <?php echo BaseHelper::clean($bankInfo); ?>

            </div>
            <p class="bank-transfer-info__amount"><?php echo BaseHelper::clean(
                __('Bank transfer amount: <strong>:amount</strong>', ['amount' => format_price($orderAmount)]),
            ); ?></p>
            <p class="bank-transfer-info__description"><?php echo BaseHelper::clean(
                __('Bank transfer description: <strong>Payment for order :code</strong>', ['code' => $orderCode]),
            ); ?></p>
        </div>
    </div>
</div>

<?php echo $__env->make('plugins/ecommerce::orders.partials.payment-proof-upload', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/orders/partials/bank-transfer-info.blade.php ENDPATH**/ ?>