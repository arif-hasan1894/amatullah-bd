<div class="ps-contact-info">
    <div class="container">
        <div class="ps-section__header">
            <h3><?php echo BaseHelper::clean($title); ?></h3>
        </div>
        <div class="ps-section__content">
            <div class="row">
                <?php for($i = 1; $i <= 6; $i++): ?>
                    <?php if($boxTitle = theme_option('contact_info_box_' . $i . '_title')): ?>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="ps-block--contact-info">
                                <h4><?php echo e($boxTitle); ?></h4>
                                <?php
                                    $boxValue = theme_option('contact_info_box_' . $i . '_details');
                                    $boxSubtitle = theme_option('contact_info_box_' . $i . '_subtitle');
                                ?>

                                <?php if($boxValue || $boxSubtitle): ?>
                                    <p>
                                        <span class="d-block"><?php echo e(filter_var($boxSubtitle, FILTER_VALIDATE_EMAIL) ? Html::mailto($boxSubtitle) : $boxSubtitle); ?></span>
                                        <span><?php echo e(filter_var($boxValue, FILTER_VALIDATE_EMAIL) ? Html::mailto($boxValue) : $boxValue); ?></span>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/partials/short-codes/contact-info-boxes.blade.php ENDPATH**/ ?>