<nav class="d-flex justify-items-center justify-content-between">
    <div class="flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
        <div class="me-2">
            <?php if($paginator->total()): ?>
                <p class="small text-muted">
                    <span class="fw-semibold"><?php echo e($paginator->firstItem()); ?></span>
                    <span> - </span>
                    <span class="fw-semibold"><?php echo e($paginator->lastItem()); ?></span>
                    <?php echo e(trans('core/base::tables.in')); ?>

                    <span class="fw-semibold"><?php echo e($paginator->total()); ?></span>
                    <?php echo e(trans('core/base::tables.records')); ?>

                </p>
            <?php endif; ?>
        </div>

        <div>
            <ul class="pagination pagination-sm">
                
                <?php if($paginator->onFirstPage()): ?>
                    <li
                        class="page-item disabled"
                        aria-disabled="true"
                        aria-label="<?php echo e(trans('pagination.previous')); ?>"
                    >
                        <span
                            class="page-link"
                            aria-hidden="true"
                        >&lsaquo;</span>
                    </li>
                <?php else: ?>
                    <li class="page-item">
                        <a
                            class="page-link"
                            href="<?php echo e($paginator->previousPageUrl()); ?>"
                            aria-label="<?php echo e(trans('pagination.previous')); ?>"
                            rel="prev"
                        >&lsaquo;</a>
                    </li>
                <?php endif; ?>

                
                <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php if(is_string($element)): ?>
                        <li
                            class="page-item disabled"
                            aria-disabled="true"
                        ><span class="page-link"><?php echo e($element); ?></span></li>
                    <?php endif; ?>

                    
                    <?php if(is_array($element)): ?>
                        <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($page == $paginator->currentPage()): ?>
                                <li
                                    class="page-item active"
                                    aria-current="page"
                                ><span class="page-link"><?php echo e($page); ?></span></li>
                            <?php elseif($page > $paginator->currentPage() - 3 && $page < $paginator->currentPage() + 3): ?>
                                <li class="page-item"><a
                                        class="page-link"
                                        href="<?php echo e($url); ?>"
                                    ><?php echo e($page); ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
                <?php if($paginator->hasMorePages()): ?>
                    <li class="page-item">
                        <a
                            class="page-link"
                            href="<?php echo e($paginator->nextPageUrl()); ?>"
                            aria-label="<?php echo e(trans('pagination.next')); ?>"
                            rel="next"
                        >&rsaquo;</a>
                    </li>
                <?php else: ?>
                    <li
                        class="page-item disabled"
                        aria-disabled="true"
                        aria-label="<?php echo e(trans('pagination.next')); ?>"
                    >
                        <span
                            class="page-link"
                            aria-hidden="true"
                        >&rsaquo;</span>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/shipping/items/pagination.blade.php ENDPATH**/ ?>