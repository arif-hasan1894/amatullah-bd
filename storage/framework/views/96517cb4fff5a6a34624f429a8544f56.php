<?php $__env->startSection('title', trans('plugins/ecommerce::invoice.name')); ?>

<?php $__env->startSection('content'); ?>
    <div class="bb-customer-content-wrapper">
        <?php if($invoices->isNotEmpty()): ?>
            <div class="customer-list-invoice">
                <div class="bb-customer-card-list invoice-cards">
                <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bb-customer-card invoice-card">
                        <div class="bb-customer-card-header">
                            <div class="d-flex justify-content-between align-items-center gap-3">
                                <div class="flex-grow-1">
                                    <h3 class="bb-customer-card-title mb-2">
                                        <?php echo e(trans('plugins/ecommerce::customer-dashboard.invoice_code', ['code' => $invoice->code])); ?>

                                    </h3>
                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                        <div class="bb-customer-card-status">
                                            <?php echo BaseHelper::clean($invoice->status->toHtml()); ?>

                                        </div>
                                        <span class="text-muted" style="font-size: 0.75rem;">•</span>
                                        <span class="text-muted" style="font-size: 0.75rem;">
                                            <?php echo e($invoice->created_at->translatedFormat('M d, Y')); ?>

                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bb-customer-card-body">
                            <div class="bb-customer-card-info">
                                <div class="row g-3">
                                    <div class="col-6 col-sm-4">
                                        <div class="info-item">
                                            <span class="label"><?php echo e(trans('plugins/ecommerce::customer-dashboard.total_amount')); ?></span>
                                            <span class="value"><?php echo e(format_price($invoice->amount)); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                        <div class="info-item">
                                            <span class="label"><?php echo e(trans('plugins/ecommerce::customer-dashboard.items')); ?></span>
                                            <span class="value"><?php echo e($invoice->items_count); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="info-item">
                                            <span class="label"><?php echo e(trans('plugins/ecommerce::customer-dashboard.payment')); ?></span>
                                            <span class="value">
                                                <?php if(is_plugin_active('payment') && $invoice->payment->id && $invoice->payment->payment_channel->displayName()): ?>
                                                    <?php echo e($invoice->payment->payment_channel->displayName()); ?>

                                                <?php else: ?>
                                                    <?php echo e(trans('plugins/ecommerce::customer-dashboard.n_a')); ?>

                                                <?php endif; ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bb-customer-card-footer">
                            <a
                                class="btn btn-primary btn-sm"
                                href="<?php echo e(route('customer.invoices.show', $invoice->id)); ?>"
                            >
                                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-eye'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                <span><?php echo e(trans('plugins/ecommerce::customer-dashboard.view_details')); ?></span>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

                <?php if($invoices->hasPages()): ?>
                    <div class="d-flex justify-content-center mt-4">
                        <?php echo $invoices->links(); ?>

                    </div>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <?php echo $__env->make(EcommerceHelper::viewPath('customers.partials.empty-state'), [
                'title' => trans('plugins/ecommerce::customer-dashboard.no_invoices_yet'),
                'subtitle' => trans('plugins/ecommerce::customer-dashboard.no_invoices_description'),
                'actionUrl' => route('public.products'),
                'actionLabel' => trans('plugins/ecommerce::customer-dashboard.start_shopping_now'),
            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(EcommerceHelper::viewPath('customers.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/customers/invoices/list.blade.php ENDPATH**/ ?>