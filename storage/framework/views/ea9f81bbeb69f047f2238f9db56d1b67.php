<div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th></th>
                <th><?php echo e(trans('plugins/shippo::shippo.from_address')); ?></th>
                <th><?php echo e(trans('plugins/shippo::shippo.to_address')); ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"><?php echo e(trans('plugins/ecommerce::payment.full_name')); ?></td>
                <td><?php echo e(Arr::get($shipmentShippo, 'address_from.name')); ?></td>
                <td><?php echo e(Arr::get($shipmentShippo, 'address_to.name')); ?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo e(trans('plugins/ecommerce::payment.email')); ?></td>
                <td><?php echo e(Arr::get($shipmentShippo, 'address_from.email')); ?></td>
                <td><?php echo e(Arr::get($shipmentShippo, 'address_to.email')); ?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo e(trans('plugins/ecommerce::payment.phone')); ?></td>
                <td><?php echo e(Arr::get($shipmentShippo, 'address_from.phone')); ?></td>
                <td><?php echo e(Arr::get($shipmentShippo, 'address_to.phone')); ?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo e(trans('plugins/ecommerce::order.country')); ?></td>
                <td><?php echo e(Arr::get($shipmentShippo, 'address_from.country')); ?></td>
                <td><?php echo e(Arr::get($shipmentShippo, 'address_to.country')); ?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo e(trans('plugins/ecommerce::order.state')); ?></td>
                <td><?php echo e(Arr::get($shipmentShippo, 'address_from.state')); ?></td>
                <td><?php echo e(Arr::get($shipmentShippo, 'address_to.state')); ?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo e(trans('plugins/ecommerce::order.city')); ?></td>
                <td><?php echo e(Arr::get($shipmentShippo, 'address_from.city')); ?></td>
                <td><?php echo e(Arr::get($shipmentShippo, 'address_to.city')); ?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo e(trans('plugins/ecommerce::payment.address')); ?></td>
                <td><?php echo e(Arr::get($shipmentShippo, 'address_from.street1')); ?></td>
                <td><?php echo e(Arr::get($shipmentShippo, 'address_to.street1')); ?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo e(trans('plugins/ecommerce::order.zip_code')); ?></td>
                <td><?php echo e(Arr::get($shipmentShippo, 'address_from.zip')); ?></td>
                <td><?php echo e(Arr::get($shipmentShippo, 'address_to.zip')); ?></td>
            </tr>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/shippo/resources/views/address.blade.php ENDPATH**/ ?>