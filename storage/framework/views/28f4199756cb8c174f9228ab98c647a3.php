<div class="ps-page--comming-soon">
    <?php if($image): ?>
        <img src="<?php echo e(RvMedia::getImageUrl($image)); ?>" alt="image">
        <?php echo RvMedia::image($image, __('Image'), 'small'); ?>

    <?php endif; ?>
    <figure>
        <figcaption><?php echo e(__('NEW STORE WE BE LAUNCHED IN')); ?>:</figcaption>
        <ul class="ps-countdown" data-time="<?php echo e($time); ?>">
            <li><span class="days"></span>
                <p><?php echo e(__('Days')); ?></p>
            </li>
            <li><span class="hours"></span>
                <p><?php echo e(__('Hours')); ?></p>
            </li>
            <li><span class="minutes"></span>
                <p><?php echo e(__('Minutes')); ?></p>
            </li>
            <li><span class="seconds"></span>
                <p><?php echo e(__('Seconds')); ?></p>
            </li>
        </ul>
    </figure>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/partials/short-codes/coming-soon.blade.php ENDPATH**/ ?>