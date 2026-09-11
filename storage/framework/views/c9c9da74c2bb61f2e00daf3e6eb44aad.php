<?php if($flashSale && $flashSale->end_date->isFuture()): ?>
    <div class="ps-deal-of-day">
        <div class="ps-container">
            <div class="ps-section__header">
                <div class="ps-block--countdown-deal">
                    <div class="ps-block__left">
                        <h3><?php echo isset($title) ? BaseHelper::clean($title) : $flashSale->name; ?></h3>
                    </div>
                    <div class="ps-block__right">
                        <figure>
                            <figcaption><?php echo e(__('End in')); ?>:</figcaption>
                            <ul class="ps-countdown" data-time="<?php echo e($flashSale->end_date); ?>">
                                <li><span class="days"></span></li>
                                <li><span class="hours"></span></li>
                                <li><span class="minutes"></span></li>
                                <li><span class="seconds"></span></li>
                            </ul>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--nav owl-slider"
                     data-owl-auto="false"
                     data-owl-loop="false"
                     data-owl-speed="10000"
                     data-owl-gap="30"
                     data-owl-nav="true"
                     data-owl-dots="true"
                     data-owl-item="7"
                     data-owl-item-xs="2"
                     data-owl-item-sm="3"
                     data-owl-item-md="4"
                     data-owl-item-lg="5"
                     data-owl-item-xl="6"
                     data-owl-duration="1000"
                     data-owl-mousedrag="on"
                >
                    <?php $__currentLoopData = $flashSale->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(! EcommerceHelper::showOutOfStockProducts() && $product->isOutOfStock()) continue; ?>
                        <div class="ps-product ps-product--inner">
                            <?php echo Theme::partial('flash-sale-product', compact('product', 'flashSale')); ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/partials/short-codes/flash-sale.blade.php ENDPATH**/ ?>