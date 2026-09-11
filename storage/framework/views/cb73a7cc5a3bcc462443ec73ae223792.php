<div class="dashboard-stat2 bordered">
    <div class="display">
        <div class="number">
            <h3 class="font-green-sharp">
                <span
                    data-counter="counterup"
                    data-value="<?php echo e(format_price($count['revenue'])); ?>"
                >0</span>
            </h3>
            <small><?php echo e(trans('plugins/ecommerce::reports.count.revenue')); ?></small>
        </div>
        <div class="icon">
            <i class="far fa-money-bill-alt"></i>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/reports/partials/count-sell.blade.php ENDPATH**/ ?>