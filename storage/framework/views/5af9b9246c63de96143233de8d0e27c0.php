<div class="table">
    <table>
        <tr>
            <th style="text-align: left">
                <?php echo e(trans('plugins/ecommerce::products.product_image')); ?>

            </th>
            <th style="text-align: left">
                <?php echo e(trans('plugins/ecommerce::products.product_name')); ?>

            </th>
            <th style="text-align: left">
                <?php echo e(trans('plugins/ecommerce::products.license_codes.codes')); ?>

            </th>
        </tr>

        <?php $__currentLoopData = $order->digitalProducts(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if($orderProduct->license_code && !$orderProduct->product_file_internal_count && !$orderProduct->product_file_external_count && EcommerceHelper::isEnabledLicenseCodesForDigitalProducts()): ?>
                <tr>
                    <td>
                        <img
                            src="<?php echo e(RvMedia::getImageUrl($orderProduct->product_image, 'thumb')); ?>"
                            alt="<?php echo e($orderProduct->product_image); ?>"
                            width="50"
                        >
                    </td>
                    <td>
                        <span><?php echo e($orderProduct->product_name); ?></span>
                        <?php if($attributes = Arr::get($orderProduct->options, 'attributes')): ?>
                            <span class="bb-text-muted"><?php echo e($attributes); ?></span>
                        <?php endif; ?>

                        <?php if($orderProduct->product_options_implode): ?>
                            <span class="bb-text-muted"><?php echo e($orderProduct->product_options_implode); ?></span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if($orderProduct->license_code): ?>
                            <?php
                                $licenseCodes = $orderProduct->license_codes_array;
                                $hasMultipleCodes = count($licenseCodes) > 1;
                            ?>
                            <?php if($hasMultipleCodes): ?>
                                <div style="display: flex; flex-direction: column; gap: 4px;">
                                    <?php $__currentLoopData = $licenseCodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div>
                                            <span style="color: #6c757d; margin-right: 4px;"><?php echo e($index + 1); ?>.</span>
                                            <code style="background-color: #f8f9fa; padding: 8px 12px; border-radius: 4px; font-family: monospace; font-size: 14px; font-weight: bold; color: #495057;">
                                                <?php echo e($code); ?>

                                            </code>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php else: ?>
                                <code style="background-color: #f8f9fa; padding: 8px 12px; border-radius: 4px; font-family: monospace; font-size: 14px; font-weight: bold; color: #495057;">
                                    <?php echo e($licenseCodes[0] ?? $orderProduct->license_code); ?>

                                </code>
                            <?php endif; ?>
                        <?php else: ?>
                            <span style="color: #6c757d;"><?php echo e(__('N/A')); ?></span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table><br>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/emails/partials/digital-product-license-codes.blade.php ENDPATH**/ ?>