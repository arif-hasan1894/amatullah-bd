<?php $__env->startSection('content'); ?>
    <?php echo $form->renderForm(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('footer'); ?>
    <?php if (isset($component)) { $__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldc8ac54b6bf7eb0d0560fdd5aa630687 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::modal','data' => ['id' => 'generate-thumbnails-modal','title' => trans('core/setting::setting.generate_thumbnails'),'type' => 'warning','hasForm' => true,'formAction' => route('settings.media.generate-thumbnails'),'dataTotalFiles' => 0,'dataChunkLimit' => RvMedia::getConfig('generate_thumbnails_chunk_limit'),'dataBsBackdrop' => 'static','dataBsKeyboard' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'generate-thumbnails-modal','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.generate_thumbnails')),'type' => 'warning','has-form' => true,'form-action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('settings.media.generate-thumbnails')),'data-total-files' => 0,'data-chunk-limit' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(RvMedia::getConfig('generate_thumbnails_chunk_limit')),'data-bs-backdrop' => 'static','data-bs-keyboard' => 'false']); ?>
        <p><?php echo e(trans('core/setting::setting.generate_thumbnails_description')); ?></p>

        <?php if (isset($component)) { $__componentOriginal424617256517489644ca6a2e02d16322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal424617256517489644ca6a2e02d16322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['label' => trans('core/setting::setting.generate_thumbnails_override'),'helperText' => trans('core/setting::setting.generate_thumbnails_override_helper'),'name' => 'override_existing','checked' => false,'id' => 'override_existing']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.generate_thumbnails_override')),'helper_text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.generate_thumbnails_override_helper')),'name' => 'override_existing','checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'id' => 'override_existing']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal424617256517489644ca6a2e02d16322)): ?>
<?php $attributes = $__attributesOriginal424617256517489644ca6a2e02d16322; ?>
<?php unset($__attributesOriginal424617256517489644ca6a2e02d16322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal424617256517489644ca6a2e02d16322)): ?>
<?php $component = $__componentOriginal424617256517489644ca6a2e02d16322; ?>
<?php unset($__componentOriginal424617256517489644ca6a2e02d16322); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['label' => trans('core/setting::setting.generate_thumbnails_batch_size'),'helperText' => trans('core/setting::setting.generate_thumbnails_batch_size_helper'),'name' => 'batch_size','type' => 'number','value' => RvMedia::getConfig('generate_thumbnails_chunk_limit'),'min' => '10','max' => '1000','step' => '10','id' => 'generate_thumbnails_batch_size']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.generate_thumbnails_batch_size')),'helper_text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.generate_thumbnails_batch_size_helper')),'name' => 'batch_size','type' => 'number','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(RvMedia::getConfig('generate_thumbnails_chunk_limit')),'min' => '10','max' => '1000','step' => '10','id' => 'generate_thumbnails_batch_size']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['label' => trans('core/setting::setting.generate_thumbnails_start_offset'),'helperText' => trans('core/setting::setting.generate_thumbnails_start_offset_helper'),'name' => 'start_offset','type' => 'number','value' => '0','min' => '0','step' => '1','id' => 'generate_thumbnails_start_offset']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.generate_thumbnails_start_offset')),'helper_text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.generate_thumbnails_start_offset_helper')),'name' => 'start_offset','type' => 'number','value' => '0','min' => '0','step' => '1','id' => 'generate_thumbnails_start_offset']); ?>
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

        <div id="generate-thumbnails-progress" class="d-none mt-3">
            <div class="d-flex justify-content-between mb-1">
                <small class="text-muted" id="generate-thumbnails-progress-text"></small>
                <small class="text-muted" id="generate-thumbnails-progress-percent"></small>
            </div>
            <div class="progress">
                <div
                    class="progress-bar"
                    id="generate-thumbnails-progress-bar"
                    role="progressbar"
                    style="width: 0%"
                ></div>
            </div>
            <div id="generate-thumbnails-error-log" class="mt-2 d-none">
                <small class="text-danger" id="generate-thumbnails-error-text"></small>
            </div>
        </div>

         <?php $__env->slot('footer', null, []); ?> 
            <button
                type="button"
                class="btn btn-warning"
                id="generate-thumbnails-button"
            ><?php echo e(trans('core/setting::setting.generate')); ?></button>
            <button
                type="button"
                class="btn btn-primary"
                data-bs-dismiss="modal"
            ><?php echo e(trans('core/base::base.close')); ?></button>
         <?php $__env->endSlot(); ?>
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make(BaseHelper::getAdminMasterLayoutTemplate(), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/core/setting/resources/views/media.blade.php ENDPATH**/ ?>