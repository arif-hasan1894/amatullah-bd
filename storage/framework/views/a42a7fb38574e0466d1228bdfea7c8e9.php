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

        .export-progress-indicator {
            display: none;
            padding: 1rem;
            margin-top: 1rem;
            border: 1px solid #dee2e6;
            border-radius: 6px;
            background: #f8f9fa;
        }

        .export-progress-bar {
            height: 6px;
            background: #e9ecef;
            border-radius: 3px;
            overflow: hidden;
            margin: 0.5rem 0;
        }

        .export-progress-fill {
            height: 100%;
            background: #0d6efd;
            border-radius: 3px;
            transition: width 0.3s ease;
            width: 0%;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.6; }
        }

        .pulse-animation {
            animation: pulse 2s infinite;
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
        <div class="col-md-6">
            <div class="mb-3">
                <?php if (isset($component)) { $__componentOriginal424617256517489644ca6a2e02d16322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal424617256517489644ca6a2e02d16322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['name' => 'use_chunked_export','value' => 1,'label' => trans('plugins/ecommerce::products.export.use_chunked_export'),'checked' => true,'helperText' => trans('plugins/ecommerce::products.export.use_chunked_export_helper')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'use_chunked_export','value' => 1,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.export.use_chunked_export')),'checked' => true,'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.export.use_chunked_export_helper'))]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['name' => 'optimize_memory','value' => 1,'label' => trans('plugins/ecommerce::products.export.optimize_memory'),'checked' => true,'helperText' => trans('plugins/ecommerce::products.export.optimize_memory_helper')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'optimize_memory','value' => 1,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.export.optimize_memory')),'checked' => true,'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.export.optimize_memory_helper'))]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['name' => 'use_streaming','value' => 1,'label' => trans('plugins/ecommerce::products.export.use_streaming'),'checked' => $isLargeExport,'helperText' => trans('plugins/ecommerce::products.export.use_streaming_helper')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'use_streaming','value' => 1,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.export.use_streaming')),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isLargeExport),'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.export.use_streaming_helper'))]); ?>
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

            <?php if($totalItems >= 1000): ?>
                <div class="mb-3">
                    <?php if (isset($component)) { $__componentOriginal424617256517489644ca6a2e02d16322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal424617256517489644ca6a2e02d16322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['name' => 'use_multi_file','value' => 1,'label' => trans('plugins/ecommerce::products.export.use_multi_file'),'checked' => $totalItems > 20000,'helperText' => trans('plugins/ecommerce::products.export.use_multi_file_helper')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'use_multi_file','value' => 1,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.export.use_multi_file')),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($totalItems > 20000),'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.export.use_multi_file_helper'))]); ?>
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
            <?php endif; ?>

            <?php if($isLargeExport): ?>
                <div class="alert alert-success d-block">
                    <strong><?php echo e(trans('plugins/ecommerce::products.export.streaming_enabled_title')); ?></strong><br>
                    <small><?php echo e(trans('plugins/ecommerce::products.export.streaming_enabled_message')); ?></small>
                </div>
            <?php endif; ?>

            <?php if($totalItems >= 1000 && $totalItems > 20000): ?>
                <div class="alert alert-info d-block mt-2">
                    <strong><?php echo e(trans('plugins/ecommerce::products.export.multi_file_enabled_title')); ?></strong><br>
                    <small><?php echo e(trans('plugins/ecommerce::products.export.multi_file_enabled_message', ['count' => number_format(ceil($totalItems / 10000))])); ?></small>
                </div>
            <?php endif; ?>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <?php if (isset($component)) { $__componentOriginal424617256517489644ca6a2e02d16322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal424617256517489644ca6a2e02d16322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['name' => 'include_variations','value' => 1,'label' => trans('plugins/ecommerce::products.export.include_variations'),'checked' => true,'helperText' => trans('plugins/ecommerce::products.export.include_variations_helper')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'include_variations','value' => 1,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.export.include_variations')),'checked' => true,'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.export.include_variations_helper'))]); ?>
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
<?php $component->withAttributes(['for' => 'chunk_size']); ?><?php echo e(trans('plugins/ecommerce::products.export.chunk_size')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['type' => 'number','name' => 'chunk_size','id' => 'chunk_size','value' => ''.e($isLargeExport ? 300 : 400).'','min' => '50','max' => '5000']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'number','name' => 'chunk_size','id' => 'chunk_size','value' => ''.e($isLargeExport ? 300 : 400).'','min' => '50','max' => '5000']); ?>
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
                    <?php echo e(trans('plugins/ecommerce::products.export.chunk_size_helper')); ?>

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
                        <span><?php echo e(trans('plugins/ecommerce::products.export.recommended_range')); ?></span>
                        <span id="chunk-recommendation">
                            <?php if($isLargeExport): ?>
                                <?php echo e(trans('plugins/ecommerce::products.export.range_large_export')); ?>

                            <?php elseif($isMediumExport): ?>
                                <?php echo e(trans('plugins/ecommerce::products.export.range_medium_export')); ?>

                            <?php else: ?>
                                <?php echo e(trans('plugins/ecommerce::products.export.range_small_export')); ?>

                            <?php endif; ?>
                        </span>
                    </div>
                    <div class="progress" style="height: 4px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%"></div>
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

            <?php if($totalItems >= 1000): ?>
                <?php if (isset($component)) { $__componentOriginala0a922bb70d8e2bee74cdab0a323562a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala0a922bb70d8e2bee74cdab0a323562a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form-group','data' => ['class' => 'mt-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-3']); ?>
                    <?php if (isset($component)) { $__componentOriginal50e5e771b30c35423d2b4f118feb7c0c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.label','data' => ['for' => 'records_per_file']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'records_per_file']); ?><?php echo e(trans('plugins/ecommerce::products.export.records_per_file')); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['type' => 'number','name' => 'records_per_file','id' => 'records_per_file','value' => '10000','min' => '1000','max' => '50000']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'number','name' => 'records_per_file','id' => 'records_per_file','value' => '10000','min' => '1000','max' => '50000']); ?>
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
                        <?php echo e(trans('plugins/ecommerce::products.export.records_per_file_helper')); ?>

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
                            <span><?php echo e(trans('plugins/ecommerce::products.export.estimated_files')); ?></span>
                            <span id="file-count-estimate"><?php echo e(ceil($totalItems / 10000)); ?></span>
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
            <?php endif; ?>
        </div>
    </div>

    <div class="export-progress-indicator" id="export-progress">
        <div class="d-flex align-items-center justify-content-between mb-2">
            <span class="fw-medium"><?php echo e(trans('plugins/ecommerce::products.export.export_progress')); ?></span>
            <span class="text-muted small" id="progress-text"><?php echo e(trans('plugins/ecommerce::products.export.preparing_export')); ?></span>
        </div>
        <div class="export-progress-bar">
            <div class="export-progress-fill" id="progress-fill"></div>
        </div>
        <div class="d-flex justify-content-between mt-2 small text-muted">
            <span id="progress-items"><?php echo e(trans('plugins/ecommerce::products.export.items_processed', ['count' => 0])); ?></span>
            <span id="progress-time"><?php echo e(trans('plugins/ecommerce::products.export.estimated_time_calculating')); ?></span>
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
                    <h5 class="mb-2"><?php echo e(trans('plugins/ecommerce::products.export.large_dataset_warning_title')); ?></h5>
                    <p class="mb-3"><?php echo e(trans('plugins/ecommerce::products.export.large_dataset_specific_message', ['count' => number_format($totalItems)])); ?></p>

                    <div class="export-recommendation-grid">
                        <div class="export-recommendation-item bg-white">
                            <strong class="d-block"><?php echo e(trans('plugins/ecommerce::products.export.format_label')); ?></strong>
                            <span class="text-muted small"><?php echo e(trans('plugins/ecommerce::products.export.csv_recommended')); ?></span>
                        </div>

                        <div class="export-recommendation-item bg-white">
                            <strong class="d-block"><?php echo e(trans('plugins/ecommerce::products.export.chunk_label')); ?></strong>
                            <span class="text-muted small"><?php echo e(trans('plugins/ecommerce::products.export.chunk_recommended')); ?></span>
                        </div>

                        <div class="export-recommendation-item bg-white">
                            <strong class="d-block"><?php echo e(trans('plugins/ecommerce::products.export.time_label')); ?></strong>
                            <span class="text-muted small"><?php echo e(trans('plugins/ecommerce::products.export.time_estimate')); ?></span>
                        </div>
                    </div>

                    <div class="alert alert-warning mt-3 mb-0">
                        <strong><?php echo e(trans('plugins/ecommerce::products.export.pro_tip')); ?></strong>
                        <?php echo e(trans('plugins/ecommerce::products.export.pro_tip_message')); ?>

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
            <h6 class="mb-1"><?php echo e(trans('plugins/ecommerce::products.export.medium_dataset_detected')); ?></h6>
            <p class="mb-0"><?php echo e(trans('plugins/ecommerce::products.export.medium_dataset_message', ['count' => number_format($totalItems)])); ?></p>
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
            const form = document.querySelector('.data-synchronize-export-form');
            const chunkSizeInput = document.getElementById('chunk_size');
            const recordsPerFileInput = document.getElementById('records_per_file');
            const fileCountEstimate = document.getElementById('file-count-estimate');
            const multiFileCheckbox = document.querySelector('input[name="use_multi_file"]');
            const progressIndicator = document.getElementById('export-progress');
            const progressFill = document.getElementById('progress-fill');
            const progressText = document.getElementById('progress-text');
            const progressItems = document.getElementById('progress-items');
            const progressTime = document.getElementById('progress-time');
            const totalItems = <?php echo e($totalItems); ?>;
            const isLargeExport = <?php echo e($isLargeExport ? 'true' : 'false'); ?>;

            if (chunkSizeInput) {
                chunkSizeInput.addEventListener('input', function() {
                    const value = parseInt(this.value);
                    const recommendation = document.getElementById('chunk-recommendation');
                    const progressBar = this.parentElement.nextElementSibling.querySelector('.progress-bar');

                    let recommendedMin, recommendedMax, color, width;

                    if (isLargeExport) {
                        recommendedMin = 200;
                        recommendedMax = 500;
                    } else if (totalItems > 1000) {
                        recommendedMin = 300;
                        recommendedMax = 800;
                    } else {
                        recommendedMin = 500;
                        recommendedMax = 1000;
                    }

                    if (value >= recommendedMin && value <= recommendedMax) {
                        color = 'bg-success';
                        width = '80%';
                        recommendation.textContent = '<?php echo e(trans('plugins/ecommerce::products.export.optimal_range')); ?>';
                    } else if (value < recommendedMin) {
                        color = 'bg-warning';
                        width = '40%';
                        recommendation.textContent = '<?php echo e(trans('plugins/ecommerce::products.export.too_small_slow')); ?>';
                    } else {
                        color = 'bg-danger';
                        width = '20%';
                        recommendation.textContent = '<?php echo e(trans('plugins/ecommerce::products.export.too_large_timeouts')); ?>';
                    }

                    progressBar.className = `progress-bar ${color}`;
                    progressBar.style.width = width;
                });
            }

            if (recordsPerFileInput && fileCountEstimate) {
                recordsPerFileInput.addEventListener('input', function() {
                    const recordsPerFile = parseInt(this.value) || 10000;
                    const estimatedFiles = Math.ceil(totalItems / recordsPerFile);
                    fileCountEstimate.textContent = estimatedFiles;
                });
            }

            if (totalItems > 20000 && multiFileCheckbox) {
                multiFileCheckbox.checked = true;
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
                        excelLabel.style.position = 'relative';

                        const overlay = document.createElement('div');
                        overlay.style.cssText = `
                            pointer-events: none;
                        `;
                        excelLabel.appendChild(overlay);

                        const warningText = document.createElement('small');
                        warningText.className = 'text-warning d-block mt-1';
                        warningText.innerHTML = '<i class="fas fa-exclamation-triangle me-1"></i><?php echo e(trans('plugins/ecommerce::products.export.excel_disabled_warning', ['count' => number_format($totalItems)])); ?>';
                        excelLabel.appendChild(warningText);
                    }

                    const wrapper = excelRadio.closest('.form-check-group');
                    if (wrapper) {
                        wrapper.style.display = 'flex';
                        wrapper.style.alignItems = 'flex-start';
                    }

                    csvRadio.checked = true;
                    csvRadio.dispatchEvent(new Event('change', { bubbles: true }));

                    const streamingCheckbox = document.querySelector('input[name="use_streaming"]');
                    const chunkedCheckbox = document.querySelector('input[name="use_chunked_export"]');
                    const memoryCheckbox = document.querySelector('input[name="optimize_memory"]');

                    if (streamingCheckbox) streamingCheckbox.checked = true;
                    if (chunkedCheckbox) chunkedCheckbox.checked = true;
                    if (memoryCheckbox) memoryCheckbox.checked = true;
                }
            <?php endif; ?>

            form.addEventListener('submit', function(e) {
                const submitButton = form.querySelector('button[type="submit"]');

                progressIndicator.style.display = 'block';
                submitButton.disabled = true;
                submitButton.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i><?php echo e(trans('plugins/ecommerce::products.export.starting_export')); ?>';

                let progress = 0;
                const progressInterval = setInterval(() => {
                    progress += Math.random() * 10;
                    if (progress > 90) progress = 90;

                    progressFill.style.width = progress + '%';
                    progressText.textContent = progress < 30 ? '<?php echo e(trans('plugins/ecommerce::products.export.preparing_export')); ?>' :
                                             progress < 60 ? '<?php echo e(trans('plugins/ecommerce::products.export.processing_data')); ?>' :
                                             '<?php echo e(trans('plugins/ecommerce::products.export.finalizing_export')); ?>';

                    const processedItems = Math.floor((progress / 100) * totalItems);
                    progressItems.textContent = `${processedItems.toLocaleString()} <?php echo e(trans('plugins/ecommerce::products.export.items_processed_suffix')); ?>`;

                    const estimatedTime = Math.max(0, Math.floor((100 - progress) * 2));
                    progressTime.textContent = `<?php echo e(trans('plugins/ecommerce::products.export.estimated_time_prefix')); ?> ${estimatedTime}<?php echo e(trans('plugins/ecommerce::products.export.seconds_remaining')); ?>`;
                }, 1000);

                window.addEventListener('beforeunload', () => {
                    clearInterval(progressInterval);
                });

                setTimeout(() => {
                    progressFill.style.width = '100%';
                    progressText.textContent = '<?php echo e(trans('plugins/ecommerce::products.export.export_completed')); ?>';
                    progressItems.textContent = `${totalItems.toLocaleString()} <?php echo e(trans('plugins/ecommerce::products.export.items_processed_suffix')); ?>`;
                    progressTime.textContent = '<?php echo e(trans('plugins/ecommerce::products.export.download_starting')); ?>';
                    clearInterval(progressInterval);
                }, 10000);
            });

            const originalRestore = window.restoreFormValues;
            window.restoreFormValues = function() {
                if (originalRestore) {
                    originalRestore();
                }

                <?php if($isLargeExport): ?>
                    const csvRadio = document.querySelector('input[name="format"][value="csv"]');
                    const streamingCheckbox = document.querySelector('input[name="use_streaming"]');
                    const chunkedCheckbox = document.querySelector('input[name="use_chunked_export"]');
                    const memoryCheckbox = document.querySelector('input[name="optimize_memory"]');

                    if (csvRadio) {
                        csvRadio.checked = true;
                    }

                    if (streamingCheckbox) {
                        streamingCheckbox.checked = true;
                        streamingCheckbox.value = '1';
                    }
                    
                    if (chunkedCheckbox) {
                        chunkedCheckbox.checked = true;
                        chunkedCheckbox.value = '1';
                    }

                    if (memoryCheckbox) {
                        memoryCheckbox.checked = true;
                        memoryCheckbox.value = '1';
                    }
                <?php endif; ?>
            };

            const tooltipElements = document.querySelectorAll('[data-bs-toggle="tooltip"]');
            if (typeof bootstrap !== 'undefined' && bootstrap.Tooltip) {
                tooltipElements.forEach(el => new bootstrap.Tooltip(el));
            }
        });
    </script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('packages/data-synchronize::export', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/products/export.blade.php ENDPATH**/ ?>