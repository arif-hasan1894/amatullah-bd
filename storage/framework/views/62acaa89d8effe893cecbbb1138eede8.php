<?php
    $status = setting('shipping_shippo_status', 0);
    $testKey = setting('shipping_shippo_test_key') ?: '';
    $prodKey = setting('shipping_shippo_production_key') ?: '';
    $test = setting('shipping_shippo_sandbox', 1) ?: 0;
    $logging = setting('shipping_shippo_logging', 1) ?: 0;
    $cacheResponse = setting('shipping_shippo_cache_response', 1) ?: 0;
    $webhook = setting('shipping_shippo_webhooks', 1) ?: 0;
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
    <?php if (isset($component)) { $__componentOriginal44c83e2eb600bf127a623cda69e3ac8b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal44c83e2eb600bf127a623cda69e3ac8b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.index','data' => ['striped' => false,'hover' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['striped' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'hover' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
        <?php if (isset($component)) { $__componentOriginal4d7e52336690b9ea120a6913f2c28a6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4d7e52336690b9ea120a6913f2c28a6b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => ['class' => 'border-end','style' => 'width: 5%']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'border-end','style' => 'width: 5%']); ?>
                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-truck-delivery'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => ['style' => 'width: 20%']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'width: 20%']); ?>
                <img
                    class="filter-black"
                    src="<?php echo e(url('vendor/core/plugins/shippo/images/logo-dark.svg')); ?>"
                    alt="Shippo"
                >
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <a href="https://goshippo.com/" target="_blank" class="fw-semibold">Shippo</a>
                <p class="mb-0"><?php echo e(trans('plugins/shippo::shippo.description')); ?></p>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal6776c17865a79e242405889703595892 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6776c17865a79e242405889703595892 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.row','data' => ['class' => 'bg-white']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-white']); ?>
                <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => ['colspan' => '3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colspan' => '3']); ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['payment-name-label-group', 'd-none' => ! $status]); ?>">
                                <span class="payment-note v-a-t"><?php echo e(trans('plugins/payment::payment.use')); ?>:</span>
                                <label class="ws-nm inline-display method-name-label">Shippo</label>
                            </div>
                        </div>

                        <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::button','data' => ['dataBsToggle' => 'collapse','href' => '#collapse-shipping-method-shippo','ariaExpanded' => 'false','ariaControls' => 'collapse-shipping-method-shippo']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data-bs-toggle' => 'collapse','href' => '#collapse-shipping-method-shippo','aria-expanded' => 'false','aria-controls' => 'collapse-shipping-method-shippo']); ?>
                            <?php if($status): ?>
                                <?php echo e(trans('core/base::layouts.settings')); ?>

                            <?php else: ?>
                                <?php echo e(trans('core/base::forms.edit')); ?>

                            <?php endif; ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $attributes = $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $component = $__componentOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
                    </div>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6776c17865a79e242405889703595892)): ?>
<?php $attributes = $__attributesOriginal6776c17865a79e242405889703595892; ?>
<?php unset($__attributesOriginal6776c17865a79e242405889703595892); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6776c17865a79e242405889703595892)): ?>
<?php $component = $__componentOriginal6776c17865a79e242405889703595892; ?>
<?php unset($__componentOriginal6776c17865a79e242405889703595892); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal6776c17865a79e242405889703595892 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6776c17865a79e242405889703595892 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.row','data' => ['class' => 'collapse','id' => 'collapse-shipping-method-shippo']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'collapse','id' => 'collapse-shipping-method-shippo']); ?>
                <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => ['class' => 'border-left','colspan' => '3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'border-left','colspan' => '3']); ?>
                    <?php if (isset($component)) { $__componentOriginald83dae5750a07af1a413e54a0071b325 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald83dae5750a07af1a413e54a0071b325 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.index','data' => ['url' => route('ecommerce.shipments.shippo.settings.update')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('ecommerce.shipments.shippo.settings.update'))]); ?>
                        <div class="row">
                            <div class="col-sm-6">
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
                                     <?php $__env->slot('title', null, []); ?> 
                                        <?php echo e(trans('plugins/shippo::shippo.note_0')); ?>

                                     <?php $__env->endSlot(); ?>

                                    <ul class="ps-3">
                                        <li style="list-style-type: circle;">
                                            <span><?php echo BaseHelper::clean(
                                                trans('plugins/shippo::shippo.note_1', ['link' => 'https://docs.botble.com/farmart/1.x/usage-location']),
                                            ); ?></span>
                                        </li>
                                        <li style="list-style-type: circle;">
                                            <span><?php echo e(trans('plugins/shippo::shippo.note_2')); ?></span>
                                        </li>
                                        <li style="list-style-type: circle;">
                                            <span><?php echo BaseHelper::clean(trans('plugins/shippo::shippo.note_3', ['link' => route('ecommerce.settings.shipping')])); ?></span>
                                        </li>
                                        <li style="list-style-type: circle;">
                                            <span><?php echo BaseHelper::clean(
                                                trans('plugins/shippo::shippo.note_6', ['link' => 'https://goshippo.com/docs/reference#parcels-extras']),
                                            ); ?></span>
                                        </li>
                                        <?php if(is_plugin_active('marketplace')): ?>
                                            <li style="list-style-type: circle;">
                                                <span><?php echo e(trans('plugins/shippo::shippo.note_4')); ?></span>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
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

                                <?php if (isset($component)) { $__componentOriginal50e5e771b30c35423d2b4f118feb7c0c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.label','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                    <?php echo e(trans('plugins/shippo::shippo.configuration_instruction', ['name' => 'Shippo'])); ?>

                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c)): ?>
<?php $attributes = $__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c; ?>
<?php unset($__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal50e5e771b30c35423d2b4f118feb7c0c)): ?>
<?php $component = $__componentOriginal50e5e771b30c35423d2b4f118feb7c0c; ?>
<?php unset($__componentOriginal50e5e771b30c35423d2b4f118feb7c0c); ?>
<?php endif; ?>

                                <div>
                                    <p><?php echo e(trans('plugins/shippo::shippo.configuration_requirement', ['name' => 'Shippo'])); ?>:</p>

                                    <ol>
                                        <li>
                                            <p>
                                                <a href="https://apps.goshippo.com/join" target="_blank">
                                                    <?php echo e(trans('plugins/shippo::shippo.service_registration', ['name' => 'Shippo'])); ?>

                                                </a>
                                            </p>
                                        </li>
                                        <li>
                                            <p><?php echo e(trans('plugins/shippo::shippo.after_service_registration_msg', ['name' => 'Shippo'])); ?></p>
                                        </li>
                                        <li>
                                            <p><?php echo e(trans('plugins/shippo::shippo.enter_api_key')); ?></p>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <p class="text-muted">
                                    <?php echo e(trans('plugins/shippo::shippo.please_provide_information')); ?>

                                    <a href="https://goshippo.com/" target="_blank">Shippo</a>:
                                </p>

                                <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['name' => 'shipping_shippo_test_key','label' => trans('plugins/shippo::shippo.test_api_token'),'placeholder' => '<API-KEY>','disabled' => BaseHelper::hasDemoModeEnabled(),'value' => BaseHelper::hasDemoModeEnabled() ? Str::mask($testKey, '*', 10) : $testKey]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'shipping_shippo_test_key','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/shippo::shippo.test_api_token')),'placeholder' => '<API-KEY>','disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(BaseHelper::hasDemoModeEnabled()),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(BaseHelper::hasDemoModeEnabled() ? Str::mask($testKey, '*', 10) : $testKey)]); ?>
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

                                <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['name' => 'shipping_shippo_production_key','label' => trans('plugins/shippo::shippo.live_api_token'),'placeholder' => '<API-KEY>','disabled' => BaseHelper::hasDemoModeEnabled(),'value' => BaseHelper::hasDemoModeEnabled() ? Str::mask($prodKey, '*', 10) : $prodKey]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'shipping_shippo_production_key','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/shippo::shippo.live_api_token')),'placeholder' => '<API-KEY>','disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(BaseHelper::hasDemoModeEnabled()),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(BaseHelper::hasDemoModeEnabled() ? Str::mask($prodKey, '*', 10) : $prodKey)]); ?>
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

                                <?php if (isset($component)) { $__componentOriginala0a922bb70d8e2bee74cdab0a323562a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala0a922bb70d8e2bee74cdab0a323562a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form-group','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                    <?php if (isset($component)) { $__componentOriginal4070fdbc26e7b18576b904e0a79085a0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4070fdbc26e7b18576b904e0a79085a0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.toggle','data' => ['name' => 'shipping_shippo_sandbox','checked' => $test,'label' => trans('plugins/shippo::shippo.sandbox_mode')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.toggle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'shipping_shippo_sandbox','checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($test),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/shippo::shippo.sandbox_mode'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4070fdbc26e7b18576b904e0a79085a0)): ?>
<?php $attributes = $__attributesOriginal4070fdbc26e7b18576b904e0a79085a0; ?>
<?php unset($__attributesOriginal4070fdbc26e7b18576b904e0a79085a0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4070fdbc26e7b18576b904e0a79085a0)): ?>
<?php $component = $__componentOriginal4070fdbc26e7b18576b904e0a79085a0; ?>
<?php unset($__componentOriginal4070fdbc26e7b18576b904e0a79085a0); ?>
<?php endif; ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala0a922bb70d8e2bee74cdab0a323562a)): ?>
<?php $attributes = $__attributesOriginala0a922bb70d8e2bee74cdab0a323562a; ?>
<?php unset($__attributesOriginala0a922bb70d8e2bee74cdab0a323562a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0a922bb70d8e2bee74cdab0a323562a)): ?>
<?php $component = $__componentOriginala0a922bb70d8e2bee74cdab0a323562a; ?>
<?php unset($__componentOriginala0a922bb70d8e2bee74cdab0a323562a); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginala0a922bb70d8e2bee74cdab0a323562a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala0a922bb70d8e2bee74cdab0a323562a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form-group','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                    <?php if (isset($component)) { $__componentOriginal4070fdbc26e7b18576b904e0a79085a0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4070fdbc26e7b18576b904e0a79085a0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.toggle','data' => ['name' => 'shipping_shippo_status','checked' => $status,'label' => trans('plugins/shippo::shippo.activate')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.toggle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'shipping_shippo_status','checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($status),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/shippo::shippo.activate'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4070fdbc26e7b18576b904e0a79085a0)): ?>
<?php $attributes = $__attributesOriginal4070fdbc26e7b18576b904e0a79085a0; ?>
<?php unset($__attributesOriginal4070fdbc26e7b18576b904e0a79085a0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4070fdbc26e7b18576b904e0a79085a0)): ?>
<?php $component = $__componentOriginal4070fdbc26e7b18576b904e0a79085a0; ?>
<?php unset($__componentOriginal4070fdbc26e7b18576b904e0a79085a0); ?>
<?php endif; ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala0a922bb70d8e2bee74cdab0a323562a)): ?>
<?php $attributes = $__attributesOriginala0a922bb70d8e2bee74cdab0a323562a; ?>
<?php unset($__attributesOriginala0a922bb70d8e2bee74cdab0a323562a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0a922bb70d8e2bee74cdab0a323562a)): ?>
<?php $component = $__componentOriginala0a922bb70d8e2bee74cdab0a323562a; ?>
<?php unset($__componentOriginala0a922bb70d8e2bee74cdab0a323562a); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginala0a922bb70d8e2bee74cdab0a323562a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala0a922bb70d8e2bee74cdab0a323562a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form-group','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                    <?php if (isset($component)) { $__componentOriginal4070fdbc26e7b18576b904e0a79085a0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4070fdbc26e7b18576b904e0a79085a0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.toggle','data' => ['name' => 'shipping_shippo_logging','checked' => $logging,'label' => trans('plugins/shippo::shippo.logging')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.toggle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'shipping_shippo_logging','checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($logging),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/shippo::shippo.logging'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4070fdbc26e7b18576b904e0a79085a0)): ?>
<?php $attributes = $__attributesOriginal4070fdbc26e7b18576b904e0a79085a0; ?>
<?php unset($__attributesOriginal4070fdbc26e7b18576b904e0a79085a0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4070fdbc26e7b18576b904e0a79085a0)): ?>
<?php $component = $__componentOriginal4070fdbc26e7b18576b904e0a79085a0; ?>
<?php unset($__componentOriginal4070fdbc26e7b18576b904e0a79085a0); ?>
<?php endif; ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala0a922bb70d8e2bee74cdab0a323562a)): ?>
<?php $attributes = $__attributesOriginala0a922bb70d8e2bee74cdab0a323562a; ?>
<?php unset($__attributesOriginala0a922bb70d8e2bee74cdab0a323562a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0a922bb70d8e2bee74cdab0a323562a)): ?>
<?php $component = $__componentOriginala0a922bb70d8e2bee74cdab0a323562a; ?>
<?php unset($__componentOriginala0a922bb70d8e2bee74cdab0a323562a); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginala0a922bb70d8e2bee74cdab0a323562a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala0a922bb70d8e2bee74cdab0a323562a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form-group','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                    <?php if (isset($component)) { $__componentOriginal4070fdbc26e7b18576b904e0a79085a0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4070fdbc26e7b18576b904e0a79085a0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.toggle','data' => ['name' => 'shipping_shippo_cache_response','checked' => $cacheResponse,'label' => trans('plugins/shippo::shippo.cache_response')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.toggle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'shipping_shippo_cache_response','checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($cacheResponse),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/shippo::shippo.cache_response'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4070fdbc26e7b18576b904e0a79085a0)): ?>
<?php $attributes = $__attributesOriginal4070fdbc26e7b18576b904e0a79085a0; ?>
<?php unset($__attributesOriginal4070fdbc26e7b18576b904e0a79085a0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4070fdbc26e7b18576b904e0a79085a0)): ?>
<?php $component = $__componentOriginal4070fdbc26e7b18576b904e0a79085a0; ?>
<?php unset($__componentOriginal4070fdbc26e7b18576b904e0a79085a0); ?>
<?php endif; ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala0a922bb70d8e2bee74cdab0a323562a)): ?>
<?php $attributes = $__attributesOriginala0a922bb70d8e2bee74cdab0a323562a; ?>
<?php unset($__attributesOriginala0a922bb70d8e2bee74cdab0a323562a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0a922bb70d8e2bee74cdab0a323562a)): ?>
<?php $component = $__componentOriginala0a922bb70d8e2bee74cdab0a323562a; ?>
<?php unset($__componentOriginala0a922bb70d8e2bee74cdab0a323562a); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginala0a922bb70d8e2bee74cdab0a323562a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala0a922bb70d8e2bee74cdab0a323562a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form-group','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                    <?php if (isset($component)) { $__componentOriginal4070fdbc26e7b18576b904e0a79085a0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4070fdbc26e7b18576b904e0a79085a0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.toggle','data' => ['name' => 'shipping_shippo_webhooks','checked' => $webhook,'label' => trans('plugins/shippo::shippo.webhooks')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.toggle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'shipping_shippo_webhooks','checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($webhook),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/shippo::shippo.webhooks'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4070fdbc26e7b18576b904e0a79085a0)): ?>
<?php $attributes = $__attributesOriginal4070fdbc26e7b18576b904e0a79085a0; ?>
<?php unset($__attributesOriginal4070fdbc26e7b18576b904e0a79085a0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4070fdbc26e7b18576b904e0a79085a0)): ?>
<?php $component = $__componentOriginal4070fdbc26e7b18576b904e0a79085a0; ?>
<?php unset($__componentOriginal4070fdbc26e7b18576b904e0a79085a0); ?>
<?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginal1844d57dc6206b688bd5adc7dea47e7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1844d57dc6206b688bd5adc7dea47e7d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.helper-text','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.helper-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        <a
                                            class="text-warning fw-bold"
                                            href="https://goshippo.com/docs/webhooks"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                        >
                                            <span>Webhooks</span>
                                            <i class="fas fa-external-link-alt"></i>
                                        </a>
                                        <div>URL: <i><?php echo e(route('shippo.webhooks', ['_token' => '__API_TOKEN__'])); ?></i>
                                        </div>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1844d57dc6206b688bd5adc7dea47e7d)): ?>
<?php $attributes = $__attributesOriginal1844d57dc6206b688bd5adc7dea47e7d; ?>
<?php unset($__attributesOriginal1844d57dc6206b688bd5adc7dea47e7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1844d57dc6206b688bd5adc7dea47e7d)): ?>
<?php $component = $__componentOriginal1844d57dc6206b688bd5adc7dea47e7d; ?>
<?php unset($__componentOriginal1844d57dc6206b688bd5adc7dea47e7d); ?>
<?php endif; ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala0a922bb70d8e2bee74cdab0a323562a)): ?>
<?php $attributes = $__attributesOriginala0a922bb70d8e2bee74cdab0a323562a; ?>
<?php unset($__attributesOriginala0a922bb70d8e2bee74cdab0a323562a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0a922bb70d8e2bee74cdab0a323562a)): ?>
<?php $component = $__componentOriginala0a922bb70d8e2bee74cdab0a323562a; ?>
<?php unset($__componentOriginala0a922bb70d8e2bee74cdab0a323562a); ?>
<?php endif; ?>

                                <?php if (isset($component)) { $__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal88fb2b6bd120f5ac7fade6b8e409403f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.on-off.checkbox','data' => ['name' => 'shipping_shippo_validate','label' => trans('plugins/shippo::shippo.check_validate_token'),'checked' => setting('shipping_shippo_validate')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.on-off.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'shipping_shippo_validate','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/shippo::shippo.check_validate_token')),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('shipping_shippo_validate'))]); ?>
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

                                <?php if(! empty($logFiles)): ?>
                                    <div class="form-group mb-3">
                                        <p class="mb-0"><?php echo e(trans('plugins/shippo::shippo.log_files')); ?>: </p>
                                        <ul class="list-unstyled">
                                            <?php $__currentLoopData = $logFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logFile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a
                                                        href="<?php echo e(route('ecommerce.shipments.shippo.view-log', $logFile)); ?>"
                                                        target="_blank"
                                                    ><strong>- <?php echo e($logFile); ?> <i
                                                                class="fa fa-external-link"></i></strong></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

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
                                    <?php echo e(trans('plugins/shippo::shippo.not_available_in_cod_payment_method')); ?>

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

                                <?php if(app()->environment('demo')): ?>
                                    <?php if (isset($component)) { $__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::alert','data' => ['type' => 'danger']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'danger']); ?>
                                        <?php echo e(trans('plugins/shippo::shippo.disabled_in_demo_mode')); ?>

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
                                <?php else: ?>
                                    <div class="text-end">
                                        <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::button','data' => ['type' => 'submit','color' => 'primary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','color' => 'primary']); ?>
                                            <?php echo e(trans('core/base::forms.update')); ?>

                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $attributes = $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $component = $__componentOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald83dae5750a07af1a413e54a0071b325)): ?>
<?php $attributes = $__attributesOriginald83dae5750a07af1a413e54a0071b325; ?>
<?php unset($__attributesOriginald83dae5750a07af1a413e54a0071b325); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald83dae5750a07af1a413e54a0071b325)): ?>
<?php $component = $__componentOriginald83dae5750a07af1a413e54a0071b325; ?>
<?php unset($__componentOriginald83dae5750a07af1a413e54a0071b325); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6776c17865a79e242405889703595892)): ?>
<?php $attributes = $__attributesOriginal6776c17865a79e242405889703595892; ?>
<?php unset($__attributesOriginal6776c17865a79e242405889703595892); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6776c17865a79e242405889703595892)): ?>
<?php $component = $__componentOriginal6776c17865a79e242405889703595892; ?>
<?php unset($__componentOriginal6776c17865a79e242405889703595892); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4d7e52336690b9ea120a6913f2c28a6b)): ?>
<?php $attributes = $__attributesOriginal4d7e52336690b9ea120a6913f2c28a6b; ?>
<?php unset($__attributesOriginal4d7e52336690b9ea120a6913f2c28a6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4d7e52336690b9ea120a6913f2c28a6b)): ?>
<?php $component = $__componentOriginal4d7e52336690b9ea120a6913f2c28a6b; ?>
<?php unset($__componentOriginal4d7e52336690b9ea120a6913f2c28a6b); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal44c83e2eb600bf127a623cda69e3ac8b)): ?>
<?php $attributes = $__attributesOriginal44c83e2eb600bf127a623cda69e3ac8b; ?>
<?php unset($__attributesOriginal44c83e2eb600bf127a623cda69e3ac8b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44c83e2eb600bf127a623cda69e3ac8b)): ?>
<?php $component = $__componentOriginal44c83e2eb600bf127a623cda69e3ac8b; ?>
<?php unset($__componentOriginal44c83e2eb600bf127a623cda69e3ac8b); ?>
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
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/shippo/resources/views/settings.blade.php ENDPATH**/ ?>