<?php if(!empty($sliders)): ?>
    <div class="simple-slider-wrapper">
        <div
            class="owl-slider owl-carousel carousel--nav inside"
            data-owl-auto="true"
            data-owl-loop="true"
            data-owl-speed="7000"
            data-owl-gap="0"
            data-owl-nav="false"
            data-owl-dots="true"
            data-owl-item="1"
            data-owl-item-xs="1"
            data-owl-item-sm="1"
            data-owl-item-md="1"
            data-owl-item-lg="1"
            data-owl-duration="1000"
            data-owl-mousedrag="on"
        >
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="slider-item">
                    <?php if($slider->link): ?>
                        <a
                            class="slider-item-overlay"
                            href="<?php echo e($slider->link); ?>"
                        >
                    <?php endif; ?>
                    <img
                        src="<?php echo e(RvMedia::getImageUrl($slider->image)); ?>"
                        alt="<?php echo e($slider->title); ?>"
                    >
                    <?php if($slider->link): ?>
                        </a>
                    <?php endif; ?>
                    <?php if($slider->title || $slider->description): ?>
                        <header class="slider-item-header">
                            <?php if($slider->title): ?>
                                <h2 class="slider-item-title"><?php echo e($slider->title); ?></h2>
                            <?php endif; ?>
                            <?php if($slider->description): ?>
                                <span class="slider-item-description"><?php echo e($slider->description); ?></span>
                            <?php endif; ?>
                        </header>
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/simple-slider/resources/views/sliders.blade.php ENDPATH**/ ?>