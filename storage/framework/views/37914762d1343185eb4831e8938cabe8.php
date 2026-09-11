<header class="navbar-expand-md">
    <div
        class="collapse navbar-collapse"
        id="navbar-menu"
    >
        <div class="navbar">
            <div class="<?php echo e(AdminAppearance::getContainerWidth()); ?>">
                <div class="row flex-fill align-items-center">
                    <div class="col">
                        <?php echo $__env->make('core/base::layouts.horizontal.partials.navbar-nav', [
                            'autoClose' => 'outside',
                        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH /var/www/dev.amatullah.bd/platform/core/base/resources/views/layouts/horizontal/partials/header-expand.blade.php ENDPATH**/ ?>