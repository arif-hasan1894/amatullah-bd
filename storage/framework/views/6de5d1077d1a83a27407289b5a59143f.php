<?php if($crumbs = Theme::breadcrumb()->getCrumbs()): ?>
    <nav
        class="d-inline-block"
        aria-label="breadcrumb"
    >
        <ol class="breadcrumb">
            <?php $__currentLoopData = $crumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $crumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($i != count($crumbs) - 1): ?>
                    <li class="breadcrumb-item">
                        <a
                            href="<?php echo e($crumb['url']); ?>"
                            title="<?php echo e($crumb['label']); ?>"
                        >
                            <?php echo e($crumb['label']); ?>

                        </a>
                    </li>
                <?php else: ?>
                    <li class="breadcrumb-item active">
                        <span>
                            <?php echo e($crumb['label']); ?>

                        </span>
                    </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ol>
    </nav>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/theme/resources/views/partials/breadcrumb.blade.php ENDPATH**/ ?>