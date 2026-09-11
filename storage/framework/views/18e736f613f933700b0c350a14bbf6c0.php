<div class="dashboard-stat2 bordered">
    <div class="display">
        <div class="number">
            <h3 class="font-blue-sharp">
                <span
                    data-counter="counterup"
                    data-value="<?php echo e($count['orders']); ?>"
                >0</span>
            </h3>
            <small><?php echo e(trans('plugins/ecommerce::reports.count.orders')); ?></small>
        </div>
        <div class="icon">
            <i class="icon-basket"></i>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/reports/partials/count-orders.blade.php ENDPATH**/ ?>