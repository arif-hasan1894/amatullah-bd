<?php $__env->startSection('title', trans('plugins/ecommerce::invoice.heading') . ' - ' . $invoice->code); ?>

<?php $__env->startSection('content'); ?>
    <div class="bb-customer-content-wrapper">
        <div class="bb-invoice-detail-wrapper">
            <!-- Invoice Information Section -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="bb-order-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="bb-order-info-section">
                                    <h5 class="bb-section-title mb-3"><?php echo e(trans('plugins/ecommerce::invoice.heading')); ?></h5>
                                    <div class="bb-order-info-list">
                                        <div class="bb-order-info-item">
                                            <span class="label"><?php echo e(trans('plugins/ecommerce::invoice.detail.code')); ?>:</span>
                                            <span class="value fw-bold"><?php echo e($invoice->code); ?></span>
                                        </div>
                                        <?php if($invoice->created_at): ?>
                                            <div class="bb-order-info-item">
                                                <span class="label"><?php echo e(trans('plugins/ecommerce::invoice.detail.issue_at')); ?>:</span>
                                                <span class="value"><?php echo e($invoice->created_at->translatedFormat('d M Y H:i:s')); ?></span>
                                            </div>
                                        <?php endif; ?>
                                        <div class="bb-order-info-item">
                                            <span class="label"><?php echo e(trans('plugins/ecommerce::invoice.payment_status')); ?>:</span>
                                            <span class="value"><?php echo BaseHelper::clean($invoice->status->toHtml()); ?></span>
                                        </div>
                                        <?php if(is_plugin_active('payment') && $invoice->payment->id && $invoice->payment->payment_channel->displayName()): ?>
                                            <div class="bb-order-info-item">
                                                <span class="label"><?php echo e(trans('plugins/ecommerce::invoice.payment_method')); ?>:</span>
                                                <span class="value"><?php echo e($invoice->payment->payment_channel->displayName()); ?></span>
                                            </div>
                                        <?php endif; ?>
                                        <?php if($invoice->reference && $invoice->reference->code): ?>
                                            <div class="bb-order-info-item">
                                                <span class="label"><?php echo e(trans('plugins/ecommerce::invoice.order')); ?>:</span>
                                                <span class="value">
                                                    <a href="<?php echo e(route('customer.orders.view', $invoice->reference->id)); ?>"><?php echo e($invoice->reference->code); ?></a>
                                                </span>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bb-order-address-section">
                                    <h5 class="bb-section-title mb-3"><?php echo e(trans('plugins/ecommerce::invoice.detail.invoice_to')); ?></h5>
                                    <div class="bb-order-info-list">
                                        <?php if($invoice->customer_name): ?>
                                            <div class="bb-order-info-item">
                                                <span class="label"><?php echo e(trans('plugins/ecommerce::ecommerce.full_name')); ?>:</span>
                                                <span class="value"><?php echo e($invoice->customer_name); ?></span>
                                            </div>
                                        <?php endif; ?>
                                        <?php if($invoice->customer_email): ?>
                                            <div class="bb-order-info-item">
                                                <span class="label"><?php echo e(trans('plugins/ecommerce::ecommerce.email')); ?>:</span>
                                                <span class="value"><?php echo e($invoice->customer_email); ?></span>
                                            </div>
                                        <?php endif; ?>
                                        <?php if($invoice->customer_phone): ?>
                                            <div class="bb-order-info-item">
                                                <span class="label"><?php echo e(trans('plugins/ecommerce::ecommerce.phone')); ?>:</span>
                                                <span class="value"><?php echo e($invoice->customer_phone); ?></span>
                                            </div>
                                        <?php endif; ?>
                                        <?php if($invoice->customer_address): ?>
                                            <div class="bb-order-info-item">
                                                <span class="label"><?php echo e(trans('plugins/ecommerce::ecommerce.address')); ?>:</span>
                                                <span class="value"><?php echo e($invoice->customer_address); ?></span>
                                            </div>
                                        <?php endif; ?>
                                        <?php if($invoice->customer_tax_id): ?>
                                            <div class="bb-order-info-item">
                                                <span class="label"><?php echo e(trans('plugins/ecommerce::invoice.detail.tax_id')); ?>:</span>
                                                <span class="value"><?php echo e($invoice->customer_tax_id); ?></span>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Invoice Items Section -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="bb-section-title mb-3"><?php echo e(trans('plugins/ecommerce::invoice.detail.description')); ?></h5>
                    <div class="bb-order-products">
                        <div class="bb-order-product-cards mb-3">
                            <?php $__currentLoopData = $invoice->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="bb-order-product-card">
                                    <div class="bb-order-product-card-content">
                                        <div class="bb-order-product-card-details flex-grow-1">
                                            <div class="bb-order-product-card-header">
                                                <div class="bb-order-product-card-name">
                                                    <?php echo e($item->name); ?>

                                                </div>
                                            </div>
                                            <?php if($item->description): ?>
                                                <div class="bb-order-product-card-meta">
                                                    <small class="text-muted"><?php echo e($item->description); ?></small>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="bb-order-product-card-info">
                                            <div class="bb-order-product-card-price">
                                                <div class="bb-order-product-card-price-item">
                                                    <span class="label"><?php echo e(trans('plugins/ecommerce::invoice.detail.quantity')); ?>:</span>
                                                    <span class="value"><?php echo e($item->qty); ?></span>
                                                </div>
                                                <div class="bb-order-product-card-price-item total">
                                                    <span class="label"><?php echo e(trans('plugins/ecommerce::invoice.detail.amount')); ?>:</span>
                                                    <span class="value"><?php echo e(format_price($item->amount)); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <div class="bb-order-totals">
                            <div class="bb-order-total-item">
                                <span class="label"><?php echo e(trans('plugins/ecommerce::invoice.detail.sub_total')); ?>:</span>
                                <span class="value"><?php echo e(format_price($invoice->sub_total)); ?></span>
                            </div>

                            <?php if((float) $invoice->tax_amount > 0): ?>
                                <div class="bb-order-total-item">
                                    <span class="label"><?php echo e(trans('plugins/ecommerce::invoice.detail.tax')); ?>:</span>
                                    <span class="value"><?php echo e(format_price($invoice->tax_amount)); ?></span>
                                </div>
                            <?php endif; ?>

                            <?php if((float) $invoice->shipping_amount > 0): ?>
                                <div class="bb-order-total-item">
                                    <span class="label"><?php echo e(trans('plugins/ecommerce::invoice.detail.shipping_fee')); ?>:</span>
                                    <span class="value"><?php echo e(format_price($invoice->shipping_amount)); ?></span>
                                </div>
                            <?php endif; ?>

                            <?php if((float) ($invoice->shipping_tax_amount ?? 0) > 0): ?>
                                <div class="bb-order-total-item">
                                    <span class="label"><?php echo e(trans('plugins/ecommerce::order.shipping_tax')); ?>:</span>
                                    <span class="value"><?php echo e(format_price($invoice->shipping_tax_amount)); ?></span>
                                </div>
                            <?php endif; ?>

                            <?php if((float) ($invoice->payment_fee ?? 0) > 0): ?>
                                <div class="bb-order-total-item">
                                    <span class="label"><?php echo e(trans('plugins/payment::payment.payment_fee')); ?>:</span>
                                    <span class="value"><?php echo e(format_price($invoice->payment_fee)); ?></span>
                                </div>
                            <?php endif; ?>

                            <?php if((float) $invoice->discount_amount > 0): ?>
                                <div class="bb-order-total-item">
                                    <span class="label"><?php echo e(trans('plugins/ecommerce::invoice.detail.discount')); ?>:</span>
                                    <span class="value">-<?php echo e(format_price($invoice->discount_amount)); ?></span>
                                </div>
                            <?php endif; ?>

                            <div class="bb-order-total-item grand-total">
                                <span class="label"><?php echo e(trans('plugins/ecommerce::invoice.detail.grand_total')); ?>:</span>
                                <span class="value"><?php echo e(format_price($invoice->amount)); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Company Information Section -->
            <?php if($invoice->company_name || $invoice->company_logo): ?>
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="bb-section-title mb-3"><?php echo e(trans('plugins/ecommerce::invoice.detail.invoice_for')); ?></h5>
                        <div class="d-flex align-items-center gap-3">
                            <?php if($invoice->company_logo): ?>
                                <img
                                    src="<?php echo e(RvMedia::getImageUrl($invoice->company_logo)); ?>"
                                    alt="<?php echo e($invoice->company_name); ?>"
                                    style="max-height: 60px;"
                                    class="rounded"
                                >
                            <?php endif; ?>
                            <?php if($invoice->company_name): ?>
                                <div>
                                    <strong><?php echo e($invoice->company_name); ?></strong>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Action Buttons -->
            <div class="bb-order-actions d-flex flex-wrap gap-2">
                <a
                    class="btn btn-primary"
                    href="<?php echo e(route('customer.invoices.generate_invoice', ['id' => $invoice->id, 'type' => 'print'])); ?>"
                    target="_blank"
                >
                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-printer'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                    <?php echo e(trans('plugins/ecommerce::invoice.print')); ?>

                </a>
                <a
                    class="btn btn-success"
                    href="<?php echo e(route('customer.invoices.generate_invoice', ['id' => $invoice->id, 'type' => 'download'])); ?>"
                    target="_blank"
                >
                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-download'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                    <?php echo e(trans('plugins/ecommerce::invoice.download')); ?>

                </a>
                <a
                    class="btn btn-secondary"
                    href="<?php echo e(route('customer.invoices.index')); ?>"
                >
                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-arrow-left'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                    <?php echo e(trans('plugins/ecommerce::invoice.back_to_invoices')); ?>

                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(EcommerceHelper::viewPath('customers.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/customers/invoices/detail.blade.php ENDPATH**/ ?>