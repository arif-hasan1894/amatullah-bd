<div class="ps-download-app">
    <div class="ps-container">
        <div class="ps-block--download-app">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-block__thumbnail">
                            <?php echo RvMedia::image($screenshot, __('Screenshot')); ?>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-block__content">
                            <h3><?php echo BaseHelper::clean($title); ?></h3>
                            <?php if($description): ?>
                                <p><?php echo BaseHelper::clean($description); ?></p>
                            <?php endif; ?>
                            <?php if($subtitle): ?>
                                <p><?php echo BaseHelper::clean($subtitle); ?></p>
                            <?php endif; ?>
                            <form class="ps-form--download-app" action="<?php echo e(route('public.ajax.send-download-app-links')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="form-group--nest">
                                    <input class="form-control" type="email" name="email" placeholder="<?php echo e(__('Email Address')); ?>">

                                    <button class="ps-btn" type="submit"><?php echo e(__('Subscribe')); ?></button>
                                </div>

                                <?php if($extraFields = apply_filters('form_extra_fields_render', null, \Botble\Newsletter\Forms\Fronts\NewsletterForm::class)): ?>
                                    <div style="margin-top: 15px;"><?php echo $extraFields; ?></div>
                                <?php endif; ?>
                            </form>
                            <?php if($androidAppUrl || $iosAppUrl): ?>
                                <p class="download-link">
                                    <?php if($androidAppUrl): ?>
                                        <a href="<?php echo e((string) $androidAppUrl); ?>"><img src="<?php echo e(Theme::asset()->url('img/google-play.png')); ?>" alt="<?php echo e(__('Google Play')); ?>" width="127" height="43" loading="lazy"></a>
                                    <?php endif; ?>

                                    <?php if($iosAppUrl): ?>
                                        <a href="<?php echo e((string) $iosAppUrl); ?>"><img src="<?php echo e(Theme::asset()->url('img/app-store.png')); ?>" alt="<?php echo e(__('App Store')); ?>" width="128" height="43" loading="lazy"></a>
                                    <?php endif; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/partials/short-codes/download-app.blade.php ENDPATH**/ ?>