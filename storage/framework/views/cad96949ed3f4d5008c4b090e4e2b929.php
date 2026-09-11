<div class="list-group-item">
    <?php echo Form::input(
        'radio',
        'shipping_option',
        Arr::get($item, 'servicelevel.token'),
        array_merge($attributes, [
            'class' => 'magic-radio',
            'id' => 'shipping-method-shippo-' . $index,
        ]),
    ); ?>

    <label for="shipping-method-shippo-<?php echo e($index); ?>">
        <div>
            <?php if($image = Arr::get($item, 'provider_image_75')): ?>
                <img
                    src="<?php echo e($image); ?>"
                    alt="<?php echo e(Arr::get($item, 'servicelevel.name')); ?>"
                    style="max-height: 40px; max-width: 55px"
                    onerror="this.style.display='none'"
                >
            <?php endif; ?>
            <span>
                <?php echo e(Arr::get($item, 'servicelevel.name')); ?> -
                <?php echo e(format_price($item['price'])); ?>

            </span>
            <?php if($item['price'] != $order->shipping_amount && ($deviant = $order->shipping_amount - $item['price'])): ?>
                <small class="<?php echo e($deviant > 0 ? 'text-success' : 'text-warning'); ?>">
                    (<span><?php echo e($deviant > 0 ? '-' : '+'); ?></span><span><?php echo e(format_price($deviant)); ?></span>)
                </small>
            <?php endif; ?>
        </div>
        <?php if($days = Arr::get($item, 'days', Arr::get($item, 'estimated_days', 0))): ?>
            <div>
                <small
                    class="text-secondary"><?php echo e(trans('plugins/shippo::shippo.estimated_days', ['day' => $days])); ?></small>
            </div>
        <?php endif; ?>
    </label>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/shippo/resources/views/rate.blade.php ENDPATH**/ ?>