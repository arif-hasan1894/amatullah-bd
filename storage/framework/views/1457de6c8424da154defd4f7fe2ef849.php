<div class="container">
    <div class="row">
        <div class="col-12 my-3 text-center">
            <div>
                <?php if($image = Arr::get($rate, 'provider_image_75')): ?>
                    <img
                        src="<?php echo e($image); ?>"
                        alt="<?php echo e(Arr::get($rate, 'servicelevel.name')); ?>"
                        style="max-height: 40px; max-width: 55px"
                        onerror="this.style.display='none'"
                    >
                <?php endif; ?>
                <span>
                    <?php echo e(Arr::get($rate, 'servicelevel.name')); ?>

                </span>
                <?php
                    $days = Arr::get($rate, 'days', Arr::get($rate, 'estimated_days', 0));
                ?>
                <div>
                    <small
                        class="text-secondary"><?php echo e(trans('plugins/shippo::shippo.estimated_days', ['day' => $days])); ?></small>
                </div>
            </div>
        </div>
        <div class="col-12 my-2">
            <?php echo $__env->make('plugins/shippo::address', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>

        <div class="col-12 my-2">
            <div class="row">
                <?php
                    $rateCreated = Carbon\Carbon::create(Arr::get($rate, 'object_created'));
                ?>
                <div class="col-6">
                    <span class="fw-bold fs-5"><?php echo e(trans('plugins/ecommerce::shipping.shipping_fee')); ?></span>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><?php echo e(trans('plugins/ecommerce::shipping.amount')); ?></td>
                                <td><?php echo e(format_price((float) Arr::get($rate, 'amount_local'), null, true, false)); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(trans('plugins/ecommerce::payment.currency')); ?></td>
                                <td><?php echo e(Arr::get($rate, 'currency_local')); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(trans('core/base::tables.created_at')); ?></td>
                                <td><?php echo e(BaseHelper::formatDateTime($rateCreated)); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-6">
                    <?php if($cod = Arr::get($shipmentShippo, 'extra.COD')): ?>
                        <span
                            class="fw-bold"
                            style="font-size: 18px"
                        ><?php echo e(trans('plugins/ecommerce::shipping.cash_on_delivery')); ?></span>
                        <table class="table">
                            <tr>
                                <td><?php echo e(trans('plugins/ecommerce::shipping.amount')); ?></td>
                                <td><?php echo e(format_price(Arr::get($cod, 'amount'), null, true, false)); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(trans('plugins/ecommerce::payment.currency')); ?></td>
                                <td><?php echo e(Arr::get($cod, 'currency')); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo e(trans('plugins/shippo::shippo.order_amount')); ?></td>
                                <td><?php echo e(format_price($order->amount)); ?></td>
                            </tr>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-12 mt-2">
            <span class="fw-bold fs-5"><?php echo e(trans('plugins/shippo::shippo.parcel')); ?></span>
            <?php
                $parcel = Arr::get($shipmentShippo, 'parcels.0');
                $distanceUnit = Arr::get($parcel, 'distance_unit');
                $massUnit = Arr::get($parcel, 'mass_unit');
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"><?php echo e(trans('plugins/ecommerce::products.form.shipping.weight')); ?></th>
                        <th scope="col"><?php echo e(trans('plugins/ecommerce::products.form.shipping.length')); ?></th>
                        <th scope="col"><?php echo e(trans('plugins/ecommerce::products.form.shipping.wide')); ?></th>
                        <th scope="col"><?php echo e(trans('plugins/ecommerce::products.form.shipping.height')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo e(number_format(Arr::get($parcel, 'weight'), 2) . ' ' . $massUnit); ?></td>
                        <td><?php echo e(number_format(Arr::get($parcel, 'length'), 2) . ' ' . $distanceUnit); ?></td>
                        <td><?php echo e(number_format(Arr::get($parcel, 'width'), 2) . ' ' . $distanceUnit); ?></td>
                        <td><?php echo e(number_format(Arr::get($parcel, 'height'), 2) . ' ' . $distanceUnit); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <?php
            $url = route(app(\Botble\Shippo\Shippo::class)->getRoutePrefixByFactor() . 'shippo.transactions.create', $shipment->id);
            $isShowButton = true;
            if (is_in_admin(true) && Auth::check() && ! Auth::user()->hasPermission('ecommerce.shipments.edit')) {
                $isShowButton = false;
            }
        ?>

        <?php if($isShowButton): ?>
            <div class="col-12 my-3">
                <button
                    class="btn btn-primary create-transaction"
                    data-url="<?php echo e($url); ?>"
                    type="button"
                >
                    <?php echo e(Botble\Ecommerce\Enums\ShippingStatusEnum::READY_TO_BE_SHIPPED_OUT()->label()); ?>

                </button>
            </div>

            <?php if(\Carbon\Carbon::now()->subHours(24)->gt($rateCreated)): ?>
                <div class="col-12 my-3">
                    <div class="alert alert-warning">
                        <small>
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
                            <span><?php echo e(trans('plugins/shippo::shippo.note_5')); ?></span>
                        </small>
                    </div>
                    <button
                        class="btn btn-primary get-new-rates"
                        data-url="<?php echo e(route(app(\Botble\Shippo\Shippo::class)->getRoutePrefixByFactor() . 'shippo.rates', $shipment->id)); ?>"
                        type="button"
                    >
                        <?php echo e(trans('plugins/shippo::shippo.recheck_rate')); ?>

                    </button>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/shippo/resources/views/info.blade.php ENDPATH**/ ?>