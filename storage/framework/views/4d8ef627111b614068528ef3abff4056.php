<?php
    $tabs = [
        'profile' => [
            'title' => trans('plugins/ecommerce::customer-dashboard.profile'),
            'route' => 'customer.edit-account',
        ],
        'change-password' => [
            'title' => trans('plugins/ecommerce::customer-dashboard.change_password'),
            'route' => 'customer.change-password',
        ],
    ];
?>

<?php $__env->startSection('content'); ?>
    <ul class="nav nav-tabs nav-fill" role="tablist">
        <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="nav-item" role="presentation">
                <a
                    href="<?php echo e(route($tab['route'])); ?>"
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses(['nav-link', 'active' => Route::is($tab['route'])]); ?>"
                    role="tab"
                    aria-controls="<?php echo e($key); ?>-tab-pane"
                    aria-selected="<?php echo e(Route::is($tab['route']) ? 'true' : 'false'); ?>"
                >
                    <?php echo e($tab['title']); ?>

                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <div class="tab-content">
        <div class="tab-pane fade show active pt-4" role="tabpanel">
            <?php echo $__env->yieldContent('account-content'); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(EcommerceHelper::viewPath('customers.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/customers/layouts/account-settings.blade.php ENDPATH**/ ?>