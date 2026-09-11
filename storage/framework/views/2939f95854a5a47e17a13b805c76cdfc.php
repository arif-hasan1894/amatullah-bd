<div class="col-lg-9 order-2 order-lg-1">
    <div class="row">
        <div class="col-md-8 mb-2">
            <div class="rp-card rp-card-sale-report">
                <div class="rp-card-header">
                    <h5><?php echo e(trans('plugins/ecommerce::reports.sales_reports')); ?></h5>
                </div>

                <div class="rp-card__content">
                    <div id='sales-report-chart'>
                        <sales-reports-chart
                            url="<?php echo e(route('marketplace.vendor.chart.month')); ?>"
                            date_from='<?php echo e($count['startDate']->toDateString()); ?>'
                            date_to='<?php echo e($count['endDate']->toDateString()); ?>'
                        ></sales-reports-chart>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="rp-card rp-card-earning">
                <div class="rp-card-header">
                    <h5><?php echo e(trans('plugins/ecommerce::reports.earnings')); ?></h5>
                </div>
                <div class="rp-card-content">
                    <?php if(collect($count['revenues'])->count()): ?>
                        <div class="rp-card-chart position-relative">
                            <revenue-chart
                                :data="<?php echo e(json_encode(collect($count['revenues'])->map(function ($value) {return Arr::only($value, ['label', 'value', 'color']);}))); ?>"
                            ></revenue-chart>
                            <div class="rp-card-information">
                                <i class="fas fa-wallet"></i>
                                <?php $__currentLoopData = collect($count['revenues'])->where('status'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <strong><?php echo e(format_price($item['value'])); ?></strong>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <small><?php echo e(trans('plugins/ecommerce::reports.total_earnings')); ?></small>
                            </div>
                        </div>
                        <div class="rp-card-status">
                            <?php $__currentLoopData = $count['revenues']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p>
                                    <small>
                                        <small><i
                                                class="fas fa-circle me-2"
                                                style="color: <?php echo e(Arr::get($item, 'color')); ?>"
                                            ></i></small>
                                    </small>
                                    <strong><?php echo e(format_price($item['value'])); ?></strong>
                                    <span><?php echo e($item['label']); ?></span>
                                </p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php else: ?>
                        <div>
                            <?php echo $__env->make('core/dashboard::partials.no-data', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 order-1 order-lg-2 mb-3">
    <section class="rp-card-report-statics">
        <div class="rp-card-header">
            <h5 class="font-weight-bold"><?php echo e(trans('plugins/ecommerce::reports.statistics')); ?></h5>
        </div>
        <div class="rp-card-content row row-cols-md-2 row-cols-lg-1 row-cols-1">
            <div class="col my-2">
                <div class="d-flex rounded px-2 py-3 h-100 position-relative bg-yellow-opacity">
                    <div class="block-left d-flex me-1">
                        <span class="align-self-center bg-white p-1"><i
                                class="fas fa-shopping-bag fa-2x m-2"></i></span>
                    </div>
                    <div class="block-content mx-3">
                        <p class="mb-1"><?php echo e(trans('plugins/ecommerce::reports.orders')); ?></p>
                        <h5><?php echo e($count['orders']); ?></h5>
                    </div>
                    <?php if(Auth::user()->hasPermission('orders.index')): ?>
                        <a
                            class="stretched-link"
                            href="<?php echo e(route('orders.index')); ?>"
                        ></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col my-2">
                <div class="d-flex rounded px-2 py-3 h-100 bg-blue-opacity">
                    <div class="block-left d-flex me-1">
                        <span class="align-self-center bg-white p-1"><i
                                class="fas fa-hand-holding-usd fa-2x m-2"></i></span>
                    </div>
                    <div class="block-content mx-3">
                        <p class="mb-1"><?php echo e(trans('plugins/ecommerce::reports.revenue')); ?></p>
                        <h5><?php echo e(format_price(collect($count['revenues'])->where('status')->sum('value'))); ?></h5>
                    </div>
                </div>
            </div>
            <div class="col my-2">
                <div class=" d-flex rounded px-2 py-3 h-100 position-relative bg-green-opacity">
                    <div class="block-left d-flex me-1">
                        <span class="align-self-center bg-white p-1"><i class="fas fa-database fa-2x m-2"></i></span>
                    </div>
                    <div class="block-content mx-3">
                        <p class="mb-1"><?php echo e(trans('plugins/ecommerce::reports.products')); ?></p>
                        <h5><?php echo e($count['products']); ?></h5>
                    </div>
                    <?php if(Auth::user()->hasPermission('products.index')): ?>
                        <a
                            class="stretched-link"
                            href="<?php echo e(route('products.index')); ?>"
                        ></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col my-2">
                <div class="d-flex rounded px-2 py-3 h-100 position-relative bg-red-pink-opacity">
                    <div class="block-left d-flex me-1">
                        <span class="align-self-center bg-white p-1"><i class="fas fa-users fa-2x m-2"></i></span>
                    </div>
                    <div class="block-content mx-3">
                        <p class="mb-1"><?php echo e(trans('plugins/ecommerce::reports.customers')); ?></p>
                        <h5><?php echo e($count['customers']); ?></h5>
                    </div>
                    <?php if(Auth::user()->hasPermission('customers.index')): ?>
                        <a
                            class="stretched-link"
                            href="<?php echo e(route('customers.index')); ?>"
                        ></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/reports/partials/content.blade.php ENDPATH**/ ?>