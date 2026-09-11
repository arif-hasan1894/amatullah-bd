 <section class="ps-section--account crop-avatar customer-page bb-customer-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="ps-section__left">
                    <aside class="ps-widget--account-dashboard">
                        <div class="ps-widget__content">
                            <ul>
                                <?php $__currentLoopData = DashboardMenu::getAll('customer'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="nav-item text-truncate" id="<?php echo e($item['id']); ?>">
                                        <a
                                            class="nav-link
                                            <?php if($item['active']): ?> active <?php endif; ?>"
                                                href="<?php echo e($item['url']); ?>"
                                                aria-current="<?php if($item['active']): ?> true <?php else: ?> false <?php endif; ?>"
                                            title="<?php echo e(__($item['name'])); ?>"
                                            >
                                            <?php if($item['icon']): ?>
                                                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => $item['icon']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                            <?php endif; ?>
                                            <?php echo e(__($item['name'])); ?>

                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="ps-section__right">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/views/ecommerce/customers/master.blade.php ENDPATH**/ ?>