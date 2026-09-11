
<div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="#subscription-invoices" class="nav-link active" data-bs-toggle="tab" role="tab">
                    <?php echo e(trans('plugins/marketplace::subscription.vendor.tab_invoices')); ?>

                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#subscription-transactions" class="nav-link" data-bs-toggle="tab" role="tab">
                    <?php echo e(trans('plugins/marketplace::subscription.vendor.tab_transactions')); ?>

                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#subscription-logs" class="nav-link" data-bs-toggle="tab" role="tab">
                    <?php echo e(trans('plugins/marketplace::subscription.vendor.tab_logs')); ?>

                </a>
            </li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane active show" id="subscription-invoices" role="tabpanel">
            <?php if($invoices->isEmpty()): ?>
                <div class="card-body text-muted">
                    <?php echo e(trans('plugins/marketplace::subscription.invoices.empty')); ?>

                </div>
            <?php else: ?>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th><?php echo e(trans('plugins/marketplace::subscription.invoices.code')); ?></th>
                                <th><?php echo e(trans('plugins/marketplace::subscription.invoices.title')); ?></th>
                                <th><?php echo e(trans('plugins/marketplace::subscription.invoices.issued_at')); ?></th>
                                <th><?php echo e(trans('plugins/marketplace::subscription.invoices.amount')); ?></th>
                                <th><?php echo e(trans('core/base::tables.status')); ?></th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($invoice->code); ?></td>
                                    <td><?php echo e($invoice->title); ?></td>
                                    <td><?php echo e(BaseHelper::formatDate($invoice->created_at)); ?></td>
                                    <td><?php echo e(format_price($invoice->amount)); ?></td>
                                    <td><?php echo $invoice->status->toHtml(); ?></td>
                                    <td>
                                        <a
                                            href="<?php echo e(route('marketplace.vendor.subscriptions.invoices.download', $invoice->getKey())); ?>"
                                            class="btn btn-sm btn-outline-primary"
                                            title="<?php echo e(trans('plugins/marketplace::subscription.invoices.download')); ?>"
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
                                            <span class="visually-hidden">
                                                <?php echo e(trans('plugins/marketplace::subscription.invoices.download')); ?>

                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>

        <div class="tab-pane" id="subscription-transactions" role="tabpanel">
            <?php if($history->isEmpty()): ?>
                <div class="card-body text-muted">
                    <?php echo e(trans('plugins/marketplace::subscription.vendor.transactions_empty')); ?>

                </div>
            <?php else: ?>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th><?php echo e(trans('plugins/marketplace::subscription.subscriptions.plan')); ?></th>
                                <th><?php echo e(trans('plugins/marketplace::subscription.subscriptions.amount')); ?></th>
                                <th><?php echo e(trans('plugins/marketplace::subscription.subscriptions.starts_at')); ?></th>
                                <th><?php echo e(trans('plugins/marketplace::subscription.subscriptions.ends_at')); ?></th>
                                <th><?php echo e(trans('core/base::tables.status')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->planName()); ?></td>
                                    <td><?php echo e(format_price($item->amount)); ?></td>
                                    <td><?php echo e($item->starts_at ? BaseHelper::formatDate($item->starts_at) : '—'); ?></td>
                                    <td>
                                        <?php if($item->isLifetime()): ?>
                                            <?php echo e(trans('plugins/marketplace::subscription.subscriptions.lifetime')); ?>

                                        <?php elseif($item->ends_at): ?>
                                            <?php echo e(BaseHelper::formatDate($item->ends_at)); ?>

                                        <?php else: ?>
                                            &mdash;
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo $item->status->toHtml(); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>

        <div class="tab-pane" id="subscription-logs" role="tabpanel">
            <?php if($logs->isEmpty()): ?>
                <div class="card-body text-muted">
                    <?php echo e(trans('plugins/marketplace::subscription.vendor.logs_empty')); ?>

                </div>
            <?php else: ?>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th><?php echo e(trans('plugins/marketplace::subscription.logs.name')); ?></th>
                                <th><?php echo e(trans('plugins/marketplace::subscription.subscriptions.plan')); ?></th>
                                <th><?php echo e(trans('core/base::tables.created_at')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($log->label()); ?></td>
                                    <td><?php echo e($log->subscription?->planName() ?: '—'); ?></td>
                                    <td><?php echo e(BaseHelper::formatDate($log->created_at)); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/vendor-dashboard/subscriptions/partials/history-tabs.blade.php ENDPATH**/ ?>