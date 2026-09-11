<div class="ps-newsletter mt-40">
    <div class="ps-container newsletter-form">
        <form class="ps-form--newsletter" method="post" action="<?php echo e(route('public.newsletter.subscribe')); ?>">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-xl-5">
                    <div class="ps-form__left">
                        <h3><?php echo BaseHelper::clean($title); ?></h3>
                        <?php if($description): ?>
                            <p><?php echo BaseHelper::clean($description); ?></p>
                        <?php endif; ?>
                        <?php if($subtitle): ?>
                            <p><?php echo BaseHelper::clean($subtitle); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="ps-form__right">
                        <?php echo csrf_field(); ?>
                        <div class="form-group--nest">
                            <input class="form-control" name="email" type="email" placeholder="<?php echo e(__('Email address')); ?>">
                            <button class="ps-btn" type="submit"><?php echo e(__('Subscribe')); ?></button>
                        </div>

                        <?php echo apply_filters('form_extra_fields_render', null, \Botble\Newsletter\Forms\Fronts\NewsletterForm::class); ?>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/partials/short-codes/newsletter-form.blade.php ENDPATH**/ ?>