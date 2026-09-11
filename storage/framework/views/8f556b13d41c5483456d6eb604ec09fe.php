<?php
    $menuItems = DashboardMenu::getAll();
    $otherItems = $menuItems->splice(
        match (AdminAppearance::getContainerWidth()) {
            'container-3xl' => 8,
            'container-fluid' => 10,
            default => 7,
        },
    );
    $otherIcon = BaseHelper::renderIcon('ti ti-dots');
?>

<ul class="<?php echo \Illuminate\Support\Arr::toCssClasses(['navbar-nav', $navbarClass ?? null]); ?>">
    <?php $__currentLoopData = $menuItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('core/base::layouts.partials.navbar-nav-item', [
            'menu' => $menu,
            'autoClose' => $autoClose,
            'isNav' => true,
        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__currentLoopData = $otherItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('core/base::layouts.partials.navbar-nav-item', [
            'menu' => [...$menu, 'class' => 'd-flex d-md-none'],
            'autoClose' => $autoClose,
            'isNav' => true,
        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php echo $__env->renderWhen($otherItems->isNotEmpty(), 'core/base::layouts.partials.navbar-nav-item', [
        'menu' => [
            'id' => 'others',
            'icon' => false,
            'name' => $otherIcon,
            'title' => trans('core/base::base.panel.others'),
            'children' => $otherItems->all(),
            'url' => '#',
            'active' => $otherItems->contains('active', true),
            'priority' => 9999,
            'class' => 'd-none d-md-flex',
        ],
        'autoClose' => $autoClose,
        'isNav' => true,
        'align' => 'end',
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1])); ?>
</ul>
<?php /**PATH /var/www/dev.amatullah.bd/platform/core/base/resources/views/layouts/horizontal/partials/navbar-nav.blade.php ENDPATH**/ ?>