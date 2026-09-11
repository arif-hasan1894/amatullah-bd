<?php if (isset($component)) { $__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal88fb2b6bd120f5ac7fade6b8e409403f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.on-off.checkbox','data' => ['label' => trans('plugins/newsletter::newsletter.settings.enable_newsletter_contacts_list_api'),'name' => 'enable_newsletter_contacts_list_api','checked' => setting('enable_newsletter_contacts_list_api', false),'helperText' => trans('plugins/newsletter::newsletter.settings.enable_newsletter_contacts_list_api_helper'),'dataBbToggle' => 'collapse','dataBbTarget' => '#newsletter-settings','class' => 'mb-0','wrapper' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.on-off.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/newsletter::newsletter.settings.enable_newsletter_contacts_list_api')),'name' => 'enable_newsletter_contacts_list_api','checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('enable_newsletter_contacts_list_api', false)),'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/newsletter::newsletter.settings.enable_newsletter_contacts_list_api_helper')),'data-bb-toggle' => 'collapse','data-bb-target' => '#newsletter-settings','class' => 'mb-0','wrapper' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal88fb2b6bd120f5ac7fade6b8e409403f)): ?>
<?php $attributes = $__attributesOriginal88fb2b6bd120f5ac7fade6b8e409403f; ?>
<?php unset($__attributesOriginal88fb2b6bd120f5ac7fade6b8e409403f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f)): ?>
<?php $component = $__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f; ?>
<?php unset($__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal20d878510d8f6b63da7004efc7cea55f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal20d878510d8f6b63da7004efc7cea55f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.fieldset','data' => ['dataBbValue' => '1','class' => 'mt-3','id' => 'newsletter-settings','style' => \Illuminate\Support\Arr::toCssStyles(['display: none;' => !setting('enable_newsletter_contacts_list_api', false)])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.fieldset'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data-bb-value' => '1','class' => 'mt-3','id' => 'newsletter-settings','style' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssStyles(['display: none;' => !setting('enable_newsletter_contacts_list_api', false)]))]); ?>
    <?php if (isset($component)) { $__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::alert','data' => ['type' => 'info','class' => 'mb-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'info','class' => 'mb-3']); ?>
        <p class="mb-2"><strong>Mailchimp Integration</strong></p>
        <p class="mb-0"><?php echo BaseHelper::clean(trans('plugins/newsletter::newsletter.settings.mailchimp_api_key_instruction')); ?></p>
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

    <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['name' => 'newsletter_mailchimp_api_key','dataCounter' => '120','label' => trans('plugins/newsletter::newsletter.settings.mailchimp_api_key'),'value' => setting('newsletter_mailchimp_api_key'),'placeholder' => trans('plugins/newsletter::newsletter.settings.mailchimp_api_key'),'helperText' => trans('plugins/newsletter::newsletter.settings.mailchimp_api_key_helper')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'newsletter_mailchimp_api_key','data-counter' => '120','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/newsletter::newsletter.settings.mailchimp_api_key')),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('newsletter_mailchimp_api_key')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/newsletter::newsletter.settings.mailchimp_api_key')),'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/newsletter::newsletter.settings.mailchimp_api_key_helper'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $attributes = $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>

    <?php if(empty($mailchimpContactList)): ?>
        <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['name' => 'newsletter_mailchimp_list_id','dataCounter' => '120','label' => trans('plugins/newsletter::newsletter.settings.mailchimp_list_id'),'value' => setting('newsletter_mailchimp_list_id'),'placeholder' => trans('plugins/newsletter::newsletter.settings.mailchimp_list_id'),'helperText' => trans('plugins/newsletter::newsletter.settings.mailchimp_list_id_helper')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'newsletter_mailchimp_list_id','data-counter' => '120','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/newsletter::newsletter.settings.mailchimp_list_id')),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('newsletter_mailchimp_list_id')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/newsletter::newsletter.settings.mailchimp_list_id')),'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/newsletter::newsletter.settings.mailchimp_list_id_helper'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $attributes = $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
    <?php else: ?>
        <?php if (isset($component)) { $__componentOriginal313dc16e9eae1fddcd9f019e2957acd6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal313dc16e9eae1fddcd9f019e2957acd6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'cbdd3a194c072fbc3f04e785bd9366eb::select','data' => ['name' => 'newsletter_mailchimp_list_id','label' => trans('plugins/newsletter::newsletter.settings.mailchimp_list'),'options' => $mailchimpContactList,'value' => setting('newsletter_mailchimp_list_id'),'helperText' => trans('plugins/newsletter::newsletter.settings.mailchimp_list_helper')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core-setting::select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'newsletter_mailchimp_list_id','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/newsletter::newsletter.settings.mailchimp_list')),'options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($mailchimpContactList),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('newsletter_mailchimp_list_id')),'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/newsletter::newsletter.settings.mailchimp_list_helper'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal313dc16e9eae1fddcd9f019e2957acd6)): ?>
<?php $attributes = $__attributesOriginal313dc16e9eae1fddcd9f019e2957acd6; ?>
<?php unset($__attributesOriginal313dc16e9eae1fddcd9f019e2957acd6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal313dc16e9eae1fddcd9f019e2957acd6)): ?>
<?php $component = $__componentOriginal313dc16e9eae1fddcd9f019e2957acd6; ?>
<?php unset($__componentOriginal313dc16e9eae1fddcd9f019e2957acd6); ?>
<?php endif; ?>
    <?php endif; ?>

    <hr class="my-4">

    <?php if (isset($component)) { $__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::alert','data' => ['type' => 'info','class' => 'mb-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'info','class' => 'mb-3']); ?>
        <p class="mb-2"><strong>SendGrid Integration</strong></p>
        <p class="mb-0"><?php echo BaseHelper::clean(trans('plugins/newsletter::newsletter.settings.sendgrid_api_key_instruction')); ?></p>
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

    <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['name' => 'newsletter_sendgrid_api_key','dataCounter' => '120','label' => trans('plugins/newsletter::newsletter.settings.sendgrid_api_key'),'value' => setting('newsletter_sendgrid_api_key'),'placeholder' => trans('plugins/newsletter::newsletter.settings.sendgrid_api_key'),'helperText' => trans('plugins/newsletter::newsletter.settings.sendgrid_api_key_helper')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'newsletter_sendgrid_api_key','data-counter' => '120','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/newsletter::newsletter.settings.sendgrid_api_key')),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('newsletter_sendgrid_api_key')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/newsletter::newsletter.settings.sendgrid_api_key')),'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/newsletter::newsletter.settings.sendgrid_api_key_helper'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $attributes = $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>

    <?php if(empty($sendGridContactList)): ?>
        <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['name' => 'newsletter_sendgrid_list_id','dataCounter' => '120','label' => trans('plugins/newsletter::newsletter.settings.sendgrid_list_id'),'value' => setting('newsletter_sendgrid_list_id'),'placeholder' => trans('plugins/newsletter::newsletter.settings.sendgrid_list_id'),'helperText' => trans('plugins/newsletter::newsletter.settings.sendgrid_list_id_helper')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'newsletter_sendgrid_list_id','data-counter' => '120','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/newsletter::newsletter.settings.sendgrid_list_id')),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('newsletter_sendgrid_list_id')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/newsletter::newsletter.settings.sendgrid_list_id')),'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/newsletter::newsletter.settings.sendgrid_list_id_helper'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $attributes = $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
    <?php else: ?>
        <?php if (isset($component)) { $__componentOriginald8f3cab0e02bd6920e9589a31228d9ca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.select','data' => ['name' => 'newsletter_sendgrid_list_id','label' => trans('plugins/newsletter::newsletter.settings.sendgrid_list'),'options' => $sendGridContactList,'value' => setting('newsletter_sendgrid_list_id'),'helperText' => trans('plugins/newsletter::newsletter.settings.sendgrid_list_helper')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'newsletter_sendgrid_list_id','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/newsletter::newsletter.settings.sendgrid_list')),'options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sendGridContactList),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('newsletter_sendgrid_list_id')),'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/newsletter::newsletter.settings.sendgrid_list_helper'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca)): ?>
<?php $attributes = $__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca; ?>
<?php unset($__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8f3cab0e02bd6920e9589a31228d9ca)): ?>
<?php $component = $__componentOriginald8f3cab0e02bd6920e9589a31228d9ca; ?>
<?php unset($__componentOriginald8f3cab0e02bd6920e9589a31228d9ca); ?>
<?php endif; ?>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal20d878510d8f6b63da7004efc7cea55f)): ?>
<?php $attributes = $__attributesOriginal20d878510d8f6b63da7004efc7cea55f; ?>
<?php unset($__attributesOriginal20d878510d8f6b63da7004efc7cea55f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20d878510d8f6b63da7004efc7cea55f)): ?>
<?php $component = $__componentOriginal20d878510d8f6b63da7004efc7cea55f; ?>
<?php unset($__componentOriginal20d878510d8f6b63da7004efc7cea55f); ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/newsletter/resources/views/partials/newsletter-contacts-list-api-fields.blade.php ENDPATH**/ ?>