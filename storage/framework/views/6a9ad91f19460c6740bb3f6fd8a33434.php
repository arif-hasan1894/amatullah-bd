<?php
    $totalItems = 0;
    $counters = $exporter->getCounters();
    foreach ($counters as $counter) {
        if (str_contains(strtolower($counter->getLabel()), 'total')) {
            $value = str_replace(',', '', $counter->getValue());
            if (is_numeric($value) && $value > $totalItems) {
                $totalItems = (int) $value;
            }
        }
    }
    $isLargeExport = $totalItems > 10000;
    $isMediumExport = $totalItems > 1000 && $totalItems <= 10000;
?>

<?php $__env->startPush('header'); ?>
    <style>
        .export-recommendation-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            margin: 1rem 0;
        }

        .export-recommendation-item {
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 6px;
        }

        @media (max-width: 768px) {
            .export-recommendation-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('export_extra_filters_after'); ?>
    <div class="row mb-3">
        <div class="col-md-4">
            <?php if (isset($component)) { $__componentOriginald8f3cab0e02bd6920e9589a31228d9ca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.select','data' => ['name' => 'import_type','label' => trans('plugins/location::location.export.import_type'),'options' => [
                    '' => trans('plugins/location::location.export.all_types'),
                    'country' => trans('plugins/location::location.import_type.country'),
                    'state' => trans('plugins/location::location.import_type.state'),
                    'city' => trans('plugins/location::location.import_type.city'),
                ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'import_type','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/location::location.export.import_type')),'options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
                    '' => trans('plugins/location::location.export.all_types'),
                    'country' => trans('plugins/location::location.import_type.country'),
                    'state' => trans('plugins/location::location.import_type.state'),
                    'city' => trans('plugins/location::location.import_type.city'),
                ])]); ?>
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
        </div>
        <div class="col-md-4">
            <?php if (isset($component)) { $__componentOriginald8f3cab0e02bd6920e9589a31228d9ca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.select','data' => ['name' => 'status','label' => trans('core/base::forms.status'),'options' => [
                    '' => trans('plugins/location::location.export.all_status'),
                    'published' => trans('core/base::enums.statuses.published'),
                    'draft' => trans('core/base::enums.statuses.draft'),
                    'pending' => trans('core/base::enums.statuses.pending'),
                ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'status','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/base::forms.status')),'options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
                    '' => trans('plugins/location::location.export.all_status'),
                    'published' => trans('core/base::enums.statuses.published'),
                    'draft' => trans('core/base::enums.statuses.draft'),
                    'pending' => trans('core/base::enums.statuses.pending'),
                ])]); ?>
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
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <div class="mb-3">
                <?php if (isset($component)) { $__componentOriginal424617256517489644ca6a2e02d16322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal424617256517489644ca6a2e02d16322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['name' => 'use_chunked_export','value' => 1,'label' => trans('plugins/location::location.export.use_chunked_export'),'checked' => true,'helperText' => trans('plugins/location::location.export.use_chunked_export_helper')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'use_chunked_export','value' => 1,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/location::location.export.use_chunked_export')),'checked' => true,'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/location::location.export.use_chunked_export_helper'))]); ?>
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
            </div>

            <div class="mb-3">
                <?php if (isset($component)) { $__componentOriginal424617256517489644ca6a2e02d16322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal424617256517489644ca6a2e02d16322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['name' => 'optimize_memory','value' => 1,'label' => trans('plugins/location::location.export.optimize_memory'),'checked' => true,'helperText' => trans('plugins/location::location.export.optimize_memory_helper')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'optimize_memory','value' => 1,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/location::location.export.optimize_memory')),'checked' => true,'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/location::location.export.optimize_memory_helper'))]); ?>
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
            </div>

            <div class="mb-3">
                <?php if (isset($component)) { $__componentOriginal424617256517489644ca6a2e02d16322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal424617256517489644ca6a2e02d16322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['name' => 'use_streaming','value' => 1,'label' => trans('plugins/location::location.export.use_streaming'),'checked' => $isLargeExport,'helperText' => trans('plugins/location::location.export.use_streaming_helper')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'use_streaming','value' => 1,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/location::location.export.use_streaming')),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isLargeExport),'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/location::location.export.use_streaming_helper'))]); ?>
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
            </div>

            <?php if($isLargeExport): ?>
                <div class="alert alert-success d-block">
                    <strong><?php echo e(trans('plugins/location::location.export.streaming_enabled_title')); ?></strong><br>
                    <small><?php echo e(trans('plugins/location::location.export.streaming_enabled_message')); ?></small>
                </div>
            <?php endif; ?>
        </div>

        <div class="col-md-6">
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
                <?php if (isset($component)) { $__componentOriginal50e5e771b30c35423d2b4f118feb7c0c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.label','data' => ['for' => 'chunk_size']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'chunk_size']); ?><?php echo e(trans('plugins/location::location.export.chunk_size')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c)): ?>
<?php $attributes = $__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c; ?>
<?php unset($__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal50e5e771b30c35423d2b4f118feb7c0c)): ?>
<?php $component = $__componentOriginal50e5e771b30c35423d2b4f118feb7c0c; ?>
<?php unset($__componentOriginal50e5e771b30c35423d2b4f118feb7c0c); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['type' => 'number','name' => 'chunk_size','id' => 'chunk_size','value' => ''.e($isLargeExport ? 200 : 300).'','min' => '50','max' => '1000']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'number','name' => 'chunk_size','id' => 'chunk_size','value' => ''.e($isLargeExport ? 200 : 300).'','min' => '50','max' => '1000']); ?>
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
                    <?php echo e(trans('plugins/location::location.export.chunk_size_helper')); ?>

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

                <div class="mt-2">
                    <div class="d-flex justify-content-between small text-muted mb-1">
                        <span><?php echo e(trans('plugins/location::location.export.recommended_range')); ?></span>
                        <span id="chunk-recommendation">
                            <?php if($isLargeExport): ?>
                                <?php echo e(trans('plugins/location::location.export.range_large_export')); ?>

                            <?php elseif($isMediumExport): ?>
                                <?php echo e(trans('plugins/location::location.export.range_medium_export')); ?>

                            <?php else: ?>
                                <?php echo e(trans('plugins/location::location.export.range_small_export')); ?>

                            <?php endif; ?>
                        </span>
                    </div>
                    <div
                        class="progress"
                        style="height: 4px;"
                    >
                        <div
                            class="progress-bar bg-success"
                            role="progressbar"
                            style="width: 60%"
                        ></div>
                    </div>
                </div>
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
        </div>
    </div>

    <?php if($isLargeExport): ?>
        <?php if (isset($component)) { $__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::alert','data' => ['type' => 'warning','class' => 'mb-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'warning','class' => 'mb-4']); ?>
            <div>
                <h5 class="mb-2"><?php echo e(trans('plugins/location::location.export.large_dataset_warning_title')); ?></h5>
                <p class="mb-3">
                    <?php echo e(trans('plugins/location::location.export.large_dataset_specific_message', ['count' => number_format($totalItems)])); ?>

                </p>

                <div class="export-recommendation-grid">
                    <div class="export-recommendation-item bg-white">
                        <strong class="d-block"><?php echo e(trans('plugins/location::location.export.format_label')); ?></strong>
                        <span
                            class="text-muted small"><?php echo e(trans('plugins/location::location.export.csv_recommended')); ?></span>
                    </div>

                    <div class="export-recommendation-item bg-white">
                        <strong class="d-block"><?php echo e(trans('plugins/location::location.export.chunk_label')); ?></strong>
                        <span
                            class="text-muted small"><?php echo e(trans('plugins/location::location.export.chunk_recommended')); ?></span>
                    </div>

                    <div class="export-recommendation-item bg-white">
                        <strong class="d-block"><?php echo e(trans('plugins/location::location.export.time_label')); ?></strong>
                        <span
                            class="text-muted small"><?php echo e(trans('plugins/location::location.export.time_estimate')); ?></span>
                    </div>
                </div>

                <div class="alert alert-warning mt-3 mb-0">
                    <strong><?php echo e(trans('plugins/location::location.export.pro_tip')); ?></strong>
                    <?php echo e(trans('plugins/location::location.export.pro_tip_message')); ?>

                </div>
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
    <?php elseif($isMediumExport): ?>
        <?php if (isset($component)) { $__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::alert','data' => ['type' => 'info','class' => 'mb-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'info','class' => 'mb-4']); ?>
            <h6 class="mb-1"><?php echo e(trans('plugins/location::location.export.medium_dataset_detected')); ?></h6>
            <p class="mb-0">
                <?php echo e(trans('plugins/location::location.export.medium_dataset_message', ['count' => number_format($totalItems)])); ?>

            </p>
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
    <?php endif; ?>

    <?php $__env->startPush('footer'); ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const chunkSizeInput = document.getElementById('chunk_size');
                const totalItems = <?php echo e($totalItems); ?>;
                const isLargeExport = <?php echo e($isLargeExport ? 'true' : 'false'); ?>;

                if (chunkSizeInput) {
                    chunkSizeInput.addEventListener('input', function() {
                        const value = parseInt(this.value);
                        const recommendation = document.getElementById('chunk-recommendation');
                        const progressBar = this.parentElement.querySelector('.progress-bar');

                        let recommendedMin, recommendedMax, color, width;

                        if (isLargeExport) {
                            recommendedMin = 150;
                            recommendedMax = 300;
                        } else if (totalItems > 1000) {
                            recommendedMin = 200;
                            recommendedMax = 500;
                        } else {
                            recommendedMin = 300;
                            recommendedMax = 700;
                        }

                        if (value >= recommendedMin && value <= recommendedMax) {
                            color = 'bg-success';
                            width = '80%';
                            recommendation.textContent =
                                '<?php echo e(trans('plugins/location::location.export.optimal_range')); ?>';
                        } else if (value < recommendedMin) {
                            color = 'bg-warning';
                            width = '40%';
                            recommendation.textContent =
                                '<?php echo e(trans('plugins/location::location.export.too_small_slow')); ?>';
                        } else {
                            color = 'bg-danger';
                            width = '20%';
                            recommendation.textContent =
                                '<?php echo e(trans('plugins/location::location.export.too_large_timeouts')); ?>';
                        }

                        progressBar.className = `progress-bar ${color}`;
                        progressBar.style.width = width;
                    });
                }

                <?php if($isLargeExport): ?>
                    const excelRadio = document.querySelector('input[name="format"][value="xlsx"]');
                    const csvRadio = document.querySelector('input[name="format"][value="csv"]');

                    if (excelRadio && csvRadio) {
                        excelRadio.disabled = true;

                        const excelLabel = excelRadio.closest('label');
                        if (excelLabel) {
                            excelLabel.style.opacity = '0.8';
                            excelLabel.style.cursor = 'not-allowed';

                            const warningText = document.createElement('small');
                            warningText.className = 'text-warning d-block mt-1';
                            warningText.innerHTML =
                                '<i class="fas fa-exclamation-triangle me-1"></i><?php echo e(trans('plugins/location::location.export.excel_disabled_warning', ['count' => number_format($totalItems)])); ?>';
                            excelLabel.appendChild(warningText);
                        }

                        csvRadio.checked = true;
                        csvRadio.dispatchEvent(new Event('change', {
                            bubbles: true
                        }));

                        const streamingCheckbox = document.querySelector('input[name="use_streaming"]');
                        const chunkedCheckbox = document.querySelector('input[name="use_chunked_export"]');
                        const memoryCheckbox = document.querySelector('input[name="optimize_memory"]');

                        if (streamingCheckbox) streamingCheckbox.checked = true;
                        if (chunkedCheckbox) chunkedCheckbox.checked = true;
                        if (memoryCheckbox) memoryCheckbox.checked = true;
                    }
                <?php endif; ?>
            });
        </script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('packages/data-synchronize::export', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/location/resources/views/export.blade.php ENDPATH**/ ?>