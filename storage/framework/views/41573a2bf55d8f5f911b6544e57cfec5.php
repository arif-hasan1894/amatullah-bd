<div class="bb-customer-page crop-avatar">
    <div class="container">
        <div class="customer-body">
            <!-- Mobile Header -->
            <div class="d-lg-none bg-white border-bottom p-3">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-3">
                        <?php if($customer = auth('customer')->user()): ?>
                            <div class="wrapper-image" style="width: 32px; height: 32px;">
                                <?php echo RvMedia::image($customer->avatar_url, $customer->name, attributes: ['class' => 'rounded-circle img-fluid']); ?>

                            </div>
                            <div>
                                <div class="fw-semibold small"><?php echo e($customer->name); ?></div>
                                <div class="text-muted" style="font-size: 0.75rem;"><?php echo e(trans('plugins/ecommerce::customer-dashboard.account_dashboard')); ?></div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <button
                        class="btn btn-outline-secondary btn-sm"
                        type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#customerSidebar"
                        aria-controls="customerSidebar"
                    >
                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-menu-2','size' => 'sm'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                    </button>
                </div>
            </div>

            <div class="row g-0">
                <!-- Desktop Sidebar -->
                <div class="col-lg-3 col-xl-3 d-none d-lg-block">
                    <div class="bb-customer-sidebar-wrapper h-100 d-flex flex-column">
                        <div class="bb-customer-sidebar flex-1">
                            <!-- User Profile Section -->
                            <?php if($customer = auth('customer')->user()): ?>
                                <div class="bb-customer-sidebar-heading">
                                    <div class="d-flex align-items-center gap-3 p-4">
                                        <div class="position-relative">
                                            <div class="wrapper-image">
                                                <?php echo RvMedia::image($customer->avatar_url, $customer->name, attributes: ['class' => 'rounded-circle border border-2 border-white shadow-sm']); ?>

                                            </div>
                                            <div class="position-absolute bottom-0 end-0 bg-success rounded-circle border border-2 border-white" style="width: 12px; height: 12px;"></div>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <div class="name fw-semibold text-truncate"><?php echo e($customer->name); ?></div>
                                            <div class="email text-muted small text-truncate"><?php echo e($customer->email); ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <!-- Navigation Section -->
                            <nav class="bb-customer-navigation px-3 pb-4">
                                <div class="nav-section">
                                    <ul class="nav nav-pills flex-column gap-1 mt-3">
                                        <?php $__currentLoopData = DashboardMenu::getAll('customer'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(! $item['name']) continue; ?>
                                            <li class="nav-item">
                                                <a
                                                    href="<?php echo e($item['url']); ?>"
                                                    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                                        'nav-link d-flex align-items-center gap-3 rounded-2 py-2 px-3',
                                                        'active' => $item['active']
                                                    ]); ?>"
                                                    title="<?php echo e($item['name']); ?>"
                                                >
                                                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => $item['icon'],'size' => 'sm'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'nav-icon flex-shrink-0']); ?>
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
                                                    <span class="nav-text"><?php echo e($item['name']); ?></span>
                                                </a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo apply_filters('ecommerce_customer_sidebar_menu_items', ''); ?>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-lg-9 col-xl-9">
                    <div class="bb-profile-content">
                        <!-- Page Header -->
                        <div class="bb-profile-header">
                            <h1 class="bb-profile-header-title h3 mb-0">
                                <?php echo $__env->yieldContent('title'); ?>
                            </h1>
                        </div>

                        <!-- Page Content -->
                        <div class="bb-profile-main">
                            <?php echo $__env->yieldContent('content'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Sidebar Offcanvas -->
    <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="customerSidebar" aria-labelledby="customerSidebarLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="customerSidebarLabel"><?php echo e(trans('plugins/ecommerce::customer-dashboard.account_menu')); ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div class="bb-customer-sidebar-wrapper h-100 d-flex flex-column">
                <div class="bb-customer-sidebar flex-1">
                    <!-- User Profile Section -->
                    <?php if($customer = auth('customer')->user()): ?>
                        <div class="bb-customer-sidebar-heading">
                            <div class="d-flex align-items-center gap-3 p-4">
                                <div class="position-relative">
                                    <div class="wrapper-image">
                                        <?php echo RvMedia::image($customer->avatar_url, $customer->name, attributes: ['class' => 'rounded-circle border border-2 border-white shadow-sm']); ?>

                                    </div>
                                    <div class="position-absolute bottom-0 end-0 bg-success rounded-circle border border-2 border-white" style="width: 12px; height: 12px;"></div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="name fw-semibold text-truncate"><?php echo e($customer->name); ?></div>
                                    <div class="email text-muted small text-truncate"><?php echo e($customer->email); ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Navigation Section -->
                    <nav class="bb-customer-navigation px-3 pb-4">
                        <div class="nav-section">
                            <ul class="nav nav-pills flex-column gap-1">
                                <?php $__currentLoopData = DashboardMenu::getAll('customer'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(! $item['name']) continue; ?>
                                    <li class="nav-item">
                                        <a
                                            href="<?php echo e($item['url']); ?>"
                                            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                                'nav-link d-flex align-items-center gap-3 rounded-2 py-2 px-3',
                                                'active' => $item['active']
                                            ]); ?>"
                                            title="<?php echo e($item['name']); ?>"
                                        >
                                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => $item['icon'],'size' => 'sm'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'nav-icon flex-shrink-0']); ?>
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
                                            <span class="nav-text"><?php echo e($item['name']); ?></span>
                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/customers/master.blade.php ENDPATH**/ ?>