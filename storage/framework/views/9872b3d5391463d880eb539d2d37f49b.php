<?php if(! $data->confirmed_at): ?>
    <?php if (isset($component)) { $__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::alert','data' => ['type' => 'warning']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'warning']); ?>
        <?php echo BaseHelper::clean(
        trans('plugins/ecommerce::customer.verify_email.notification', [
            'approve_link' => Html::link(
                route('customers.verify-email', $data->id),
                trans('plugins/ecommerce::customer.verify_email.approve_here'),
                ['class' => 'verify-customer-email-button'],
            ),
        ])); ?>


        <div class="mt-2">
            <button type="button" class="btn btn-sm btn-primary resend-verification-email-button" data-customer-id="<?php echo e($data->id); ?>">
                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'mail-forward'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?> <?php echo e(trans('plugins/ecommerce::customer.resend_verification_email')); ?>

            </button>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalecda78b9fe8916cbd83b85e55a8b7a1c)): ?>
<?php $attributes = $__attributesOriginalecda78b9fe8916cbd83b85e55a8b7a1c; ?>
<?php unset($__attributesOriginalecda78b9fe8916cbd83b85e55a8b7a1c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c)): ?>
<?php $component = $__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c; ?>
<?php unset($__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c); ?>
<?php endif; ?>

    <?php $__env->startPush('footer'); ?>
        <?php if (isset($component)) { $__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldc8ac54b6bf7eb0d0560fdd5aa630687 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::modal','data' => ['id' => 'verify-customer-email-modal','type' => 'warning','title' => trans('plugins/ecommerce::customer.verify_email.confirm_heading'),'buttonId' => 'confirm-verify-customer-email-button','buttonLabel' => trans('plugins/ecommerce::customer.verify_email.confirm_button')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'verify-customer-email-modal','type' => 'warning','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::customer.verify_email.confirm_heading')),'button-id' => 'confirm-verify-customer-email-button','button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::customer.verify_email.confirm_button'))]); ?>
            <?php echo BaseHelper::clean(trans('plugins/ecommerce::customer.verify_email.confirm_description')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldc8ac54b6bf7eb0d0560fdd5aa630687)): ?>
<?php $attributes = $__attributesOriginaldc8ac54b6bf7eb0d0560fdd5aa630687; ?>
<?php unset($__attributesOriginaldc8ac54b6bf7eb0d0560fdd5aa630687); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687)): ?>
<?php $component = $__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687; ?>
<?php unset($__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal9376784f974ff66f3ff18195ab0a89c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9376784f974ff66f3ff18195ab0a89c5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::modal.action','data' => ['id' => 'resend-verification-email-modal','type' => 'info','title' => trans('plugins/ecommerce::customer.resend_verification_email'),'description' => trans('plugins/ecommerce::customer.resend_verification_email_confirmation'),'submitButtonLabel' => trans('plugins/ecommerce::customer.send'),'submitButtonAttrs' => ['id' => 'confirm-resend-verification-email-button'],'closeButtonLabel' => trans('plugins/ecommerce::customer.cancel')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::modal.action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'resend-verification-email-modal','type' => 'info','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::customer.resend_verification_email')),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::customer.resend_verification_email_confirmation')),'submit-button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::customer.send')),'submit-button-attrs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['id' => 'confirm-resend-verification-email-button']),'close-button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::customer.cancel'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9376784f974ff66f3ff18195ab0a89c5)): ?>
<?php $attributes = $__attributesOriginal9376784f974ff66f3ff18195ab0a89c5; ?>
<?php unset($__attributesOriginal9376784f974ff66f3ff18195ab0a89c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9376784f974ff66f3ff18195ab0a89c5)): ?>
<?php $component = $__componentOriginal9376784f974ff66f3ff18195ab0a89c5; ?>
<?php unset($__componentOriginal9376784f974ff66f3ff18195ab0a89c5); ?>
<?php endif; ?>

        <script>
            $(document).ready(function() {
                var customerId = null;

                $('.resend-verification-email-button').on('click', function(e) {
                    e.preventDefault();
                    customerId = $(this).data('customer-id');
                    $('#resend-verification-email-modal').modal('show');
                });

                $('#confirm-resend-verification-email-button').on('click', function(e) {
                    e.preventDefault();

                    var button = $(this);
                    var originalText = button.html();

                    button.prop('disabled', true);
                    button.html('<span class="spinner-border spinner-border-sm me-1"></span> ' + button.text());

                    $.ajax({
                        url: '<?php echo e(route('customers.resend-verification-email', ['id' => '__id__'])); ?>'.replace('__id__', customerId),
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(data) {
                            $('#resend-verification-email-modal').modal('hide');
                            if (data.error) {
                                Botble.showError(data.message);
                            } else {
                                Botble.showSuccess(data.message);
                            }
                        },
                        error: function() {
                            $('#resend-verification-email-modal').modal('hide');
                            Botble.showError('<?php echo e(trans('plugins/ecommerce::customer.error_sending_verification_email')); ?>');
                        },
                        complete: function() {
                            button.prop('disabled', false);
                            button.html(originalText);
                        }
                    });
                });
            });
        </script>
    <?php $__env->stopPush(); ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/customers/notification.blade.php ENDPATH**/ ?>