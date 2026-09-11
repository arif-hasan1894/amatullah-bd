<?php $__env->startSection('content'); ?>
    <?php
        $hasMoreThanOneLanguage = count(\Botble\Base\Supports\Language::getAvailableLocales()) > 1;
    ?>
    <?php if (isset($component)) { $__componentOriginalc107e2f90dff5eb05519f33918d2c807 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc107e2f90dff5eb05519f33918d2c807 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::card.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php if (isset($component)) { $__componentOriginalf7ec4b8ef3fc6db54b9665bd653222c4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf7ec4b8ef3fc6db54b9665bd653222c4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::card.header.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::card.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php if (isset($component)) { $__componentOriginale3e0c938b7d6f2d28b70fc6709c6b9a5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale3e0c938b7d6f2d28b70fc6709c6b9a5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::tab.index','data' => ['class' => 'card-header-tabs']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::tab'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'card-header-tabs']); ?>
                <?php if (isset($component)) { $__componentOriginalb01dabf26578858fdcffedb4ad1d59fd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb01dabf26578858fdcffedb4ad1d59fd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::tab.item','data' => ['id' => 'information-tab','label' => trans('plugins/marketplace::store.store'),'isActive' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::tab.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'information-tab','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/marketplace::store.store')),'is-active' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb01dabf26578858fdcffedb4ad1d59fd)): ?>
<?php $attributes = $__attributesOriginalb01dabf26578858fdcffedb4ad1d59fd; ?>
<?php unset($__attributesOriginalb01dabf26578858fdcffedb4ad1d59fd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb01dabf26578858fdcffedb4ad1d59fd)): ?>
<?php $component = $__componentOriginalb01dabf26578858fdcffedb4ad1d59fd; ?>
<?php unset($__componentOriginalb01dabf26578858fdcffedb4ad1d59fd); ?>
<?php endif; ?>
                <?php if($store && $store->customer->is_vendor): ?>
                    <?php echo $__env->make('plugins/marketplace::customers.tax-info-tab', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('plugins/marketplace::customers.payout-info-tab', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php if($hasMoreThanOneLanguage): ?>
                        <?php if (isset($component)) { $__componentOriginalb01dabf26578858fdcffedb4ad1d59fd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb01dabf26578858fdcffedb4ad1d59fd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::tab.item','data' => ['id' => 'tab_preferences','label' => trans('plugins/marketplace::store.preferences')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::tab.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'tab_preferences','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/marketplace::store.preferences'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb01dabf26578858fdcffedb4ad1d59fd)): ?>
<?php $attributes = $__attributesOriginalb01dabf26578858fdcffedb4ad1d59fd; ?>
<?php unset($__attributesOriginalb01dabf26578858fdcffedb4ad1d59fd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb01dabf26578858fdcffedb4ad1d59fd)): ?>
<?php $component = $__componentOriginalb01dabf26578858fdcffedb4ad1d59fd; ?>
<?php unset($__componentOriginalb01dabf26578858fdcffedb4ad1d59fd); ?>
<?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
                <?php echo apply_filters(BASE_FILTER_REGISTER_CONTENT_TABS, null, $store); ?>

                <?php echo apply_filters('marketplace_vendor_settings_register_content_tabs', null, $store); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale3e0c938b7d6f2d28b70fc6709c6b9a5)): ?>
<?php $attributes = $__attributesOriginale3e0c938b7d6f2d28b70fc6709c6b9a5; ?>
<?php unset($__attributesOriginale3e0c938b7d6f2d28b70fc6709c6b9a5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3e0c938b7d6f2d28b70fc6709c6b9a5)): ?>
<?php $component = $__componentOriginale3e0c938b7d6f2d28b70fc6709c6b9a5; ?>
<?php unset($__componentOriginale3e0c938b7d6f2d28b70fc6709c6b9a5); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf7ec4b8ef3fc6db54b9665bd653222c4)): ?>
<?php $attributes = $__attributesOriginalf7ec4b8ef3fc6db54b9665bd653222c4; ?>
<?php unset($__attributesOriginalf7ec4b8ef3fc6db54b9665bd653222c4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf7ec4b8ef3fc6db54b9665bd653222c4)): ?>
<?php $component = $__componentOriginalf7ec4b8ef3fc6db54b9665bd653222c4; ?>
<?php unset($__componentOriginalf7ec4b8ef3fc6db54b9665bd653222c4); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal4fdb92edf089f19cd17d37829580c9a6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4fdb92edf089f19cd17d37829580c9a6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::card.body.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::card.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php if (isset($component)) { $__componentOriginalc3d323522182f9489a35c0fa1b349dec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3d323522182f9489a35c0fa1b349dec = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::tab.content','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::tab.content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginal98abe6467e067b33cedd28cf82bdc43d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal98abe6467e067b33cedd28cf82bdc43d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::tab.pane','data' => ['id' => 'information-tab','isActive' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::tab.pane'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'information-tab','is-active' => true]); ?>
                    <?php echo $form; ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal98abe6467e067b33cedd28cf82bdc43d)): ?>
<?php $attributes = $__attributesOriginal98abe6467e067b33cedd28cf82bdc43d; ?>
<?php unset($__attributesOriginal98abe6467e067b33cedd28cf82bdc43d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal98abe6467e067b33cedd28cf82bdc43d)): ?>
<?php $component = $__componentOriginal98abe6467e067b33cedd28cf82bdc43d; ?>
<?php unset($__componentOriginal98abe6467e067b33cedd28cf82bdc43d); ?>
<?php endif; ?>
                <?php if($store && $store->customer->is_vendor): ?>
                    <?php echo $__env->make('plugins/marketplace::customers.tax-form', ['model' => $store->customer], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('plugins/marketplace::customers.payout-form', ['model' => $store->customer], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                    <?php if($hasMoreThanOneLanguage): ?>
                        <?php if (isset($component)) { $__componentOriginal98abe6467e067b33cedd28cf82bdc43d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal98abe6467e067b33cedd28cf82bdc43d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::tab.pane','data' => ['id' => 'tab_preferences']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::tab.pane'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'tab_preferences']); ?>
                            <?php echo \Botble\Marketplace\Forms\Vendor\LanguageSettingForm::createFromModel($store->customer)->renderForm(); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal98abe6467e067b33cedd28cf82bdc43d)): ?>
<?php $attributes = $__attributesOriginal98abe6467e067b33cedd28cf82bdc43d; ?>
<?php unset($__attributesOriginal98abe6467e067b33cedd28cf82bdc43d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal98abe6467e067b33cedd28cf82bdc43d)): ?>
<?php $component = $__componentOriginal98abe6467e067b33cedd28cf82bdc43d; ?>
<?php unset($__componentOriginal98abe6467e067b33cedd28cf82bdc43d); ?>
<?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
                <?php echo apply_filters(BASE_FILTER_REGISTER_CONTENT_TAB_INSIDE, null, $store); ?>

                <?php echo apply_filters('marketplace_vendor_settings_register_content_tab_inside', null, $store); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc3d323522182f9489a35c0fa1b349dec)): ?>
<?php $attributes = $__attributesOriginalc3d323522182f9489a35c0fa1b349dec; ?>
<?php unset($__attributesOriginalc3d323522182f9489a35c0fa1b349dec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3d323522182f9489a35c0fa1b349dec)): ?>
<?php $component = $__componentOriginalc3d323522182f9489a35c0fa1b349dec; ?>
<?php unset($__componentOriginalc3d323522182f9489a35c0fa1b349dec); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4fdb92edf089f19cd17d37829580c9a6)): ?>
<?php $attributes = $__attributesOriginal4fdb92edf089f19cd17d37829580c9a6; ?>
<?php unset($__attributesOriginal4fdb92edf089f19cd17d37829580c9a6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4fdb92edf089f19cd17d37829580c9a6)): ?>
<?php $component = $__componentOriginal4fdb92edf089f19cd17d37829580c9a6; ?>
<?php unset($__componentOriginal4fdb92edf089f19cd17d37829580c9a6); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc107e2f90dff5eb05519f33918d2c807)): ?>
<?php $attributes = $__attributesOriginalc107e2f90dff5eb05519f33918d2c807; ?>
<?php unset($__attributesOriginalc107e2f90dff5eb05519f33918d2c807); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc107e2f90dff5eb05519f33918d2c807)): ?>
<?php $component = $__componentOriginalc107e2f90dff5eb05519f33918d2c807; ?>
<?php unset($__componentOriginalc107e2f90dff5eb05519f33918d2c807); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($layout ?? BaseHelper::getAdminMasterLayoutTemplate(), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/stores/form.blade.php ENDPATH**/ ?>