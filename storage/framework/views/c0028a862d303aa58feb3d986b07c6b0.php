<div class="mx-2">
    <?php if(! $isSuccessful): ?>
        <?php $__currentLoopData = $result['files']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="mb-1 mt-2">
                <span class="px-1 bg-red text-white uppercase">File</span>
                <span class="ml-1"><?php echo e(ltrim(str_replace(base_path(), '', $file['name']), DIRECTORY_SEPARATOR)); ?></span>
            </div>

            <div class="flex max-w-150">
                <span>Rules</span>
                <span class="flex-1 content-repeat-[.] text-gray ml-1"></span>
                <span class="ml-1">
                    <?php $__currentLoopData = $file['appliedFixers']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fixer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="text-red ml-1"><?php echo e($fixer . ($loop->last ? '' : ', ')); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </span>
            </div>

            <div class="flex space-x-1 mt-1">
                <span class="flex-1 content-repeat-[─] text-gray"></span>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class="mb-2"></div>
    <?php endif; ?>

    <div class="flex space-x-1 mb-2">
        <span class="font-bold">
            Checked <span class="text-yellow"><?php echo e(count($result['files'])); ?></span> files in <span class="text-yellow"><?php echo e($result['time']['total'] ?? 0); ?></span> seconds.
            Using memory <span class="text-yellow"><?php echo e($result['memory']); ?></span> MB.
        </span>
    </div>

    <?php if(! $isSuccessful): ?>
        <div class="mb-1">
            <span class="px-1 bg-yellow text-white uppercase">Warn</span>
            <span class="ml-1">
                Run <span class="text-yellow">./vendor/bin/pint --dirty --test -v</span> to see coding standard detail issues.
            </span>
        </div>
        <div class="mb-1">
            <span class="px-1 bg-yellow text-white uppercase">Warn</span>
            <span class="ml-1">
                Run <span class="text-yellow">./vendor/bin/pint --dirty</span> to fix coding standard issues.
            </span>
        </div>
    <?php else: ?>
        <div class="mb-1">
            <span class="px-1 bg-green text-white uppercase">Success</span>
            <span class="ml-1">Your code is perfect, no syntax error found!</span>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/vendor/botble/git-commit-checker/resources/views/summary.blade.php ENDPATH**/ ?>