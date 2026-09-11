<div class="ps-contact-form">
    <div class="container">
        <h3><?php echo e(__('Get In Touch')); ?></h3>

        <?php echo $form
                ->setFormOption('class', 'ps-form--contact-us contact-form')
                ->setFormInputClass('form-control')
                ->setFormLabelClass('d-none visually-hidden')
                ->modify(
                    'submit',
                    'submit',
                    Botble\Base\Forms\FieldOptions\ButtonFieldOption::make()
                        ->cssClass('ps-btn')
                        ->label(__('Send message'))
                        ->wrapperAttributes(['class' => 'form-group submit'])
                        ->toArray(),
                    true
                )
                ->renderForm(); ?>


    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/partials/short-codes/contact-form.blade.php ENDPATH**/ ?>