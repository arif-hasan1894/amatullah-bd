<?php echo Form::open([
    'url' => route(app(\Botble\Shippo\Shippo::class)->getRoutePrefixByFactor() . 'shippo.update-rate', $shipment->id),
    'class' => 'update-rate-shipment',
]); ?>

<div class="payment-checkout-form mt-3">
    <?php if($rate): ?>
        <div class="list-group list_payment_method">
            <?php echo $__env->make('plugins/shippo::rate', [
                'index' => 'selected',
                'item' => $rate,
                'attributes' => [
                    'checked' => true,
                ],
            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    <?php else: ?>
        <div>
            <p><?php echo e(trans('plugins/shippo::shippo.carrier_could_not_be_found')); ?></p>
        </div>
    <?php endif; ?>
    <div
        class="accordion mt-3 <?php if($rate): ?> opacity-75 <?php endif; ?>"
        id="accordion-rates"
    >
        <div class="accordion-item">
            <h2
                class="accordion-header"
                id="heading-new-rates"
            >
                <button
                    class="accordion-button collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapse-new-rates"
                    type="button"
                    aria-expanded="false"
                    aria-controls="collapse-new-rates"
                >
                    <?php echo e(trans('plugins/shippo::shippo.view_other_exchange_rates', ['count' => count($rates)])); ?>

                </button>
            </h2>
            <div
                class="accordion-collapse collapse"
                id="collapse-new-rates"
                data-bs-parent="#accordion-rates"
                aria-labelledby="heading-new-rates"
            >
                <div class="accordion-body">
                    <div class="list-group list_payment_method">
                        <?php $__currentLoopData = $rates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $__env->make('plugins/shippo::rate', [
                                'index' => $loop->index,
                                'attributes' => [
                                    'disabled' => $rate ? 'disabled' : false,
                                ],
                            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<button
    class="btn btn-primary mt-2"
    type="submit"
><?php echo e(trans('plugins/shippo::shippo.update_rate')); ?></button>
<?php echo Form::close(); ?>

<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/shippo/resources/views/rates.blade.php ENDPATH**/ ?>