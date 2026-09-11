<?php $__env->startPush('footer'); ?>
    <?php if (isset($component)) { $__componentOriginal9376784f974ff66f3ff18195ab0a89c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9376784f974ff66f3ff18195ab0a89c5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::modal.action','data' => ['id' => 'modal-confirm-delete-records','type' => 'danger','title' => trans('plugins/audit-log::history.empty_logs'),'description' => trans('plugins/audit-log::history.confirm_empty_logs_msg'),'submitButtonLabel' => trans('core/base::tables.delete'),'submitButtonAttrs' => ['class' => 'button-delete-records', 'data-url' => route('audit-log.empty')],'closeButtonLabel' => trans('core/base::tables.cancel')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::modal.action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'modal-confirm-delete-records','type' => 'danger','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/audit-log::history.empty_logs')),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/audit-log::history.confirm_empty_logs_msg')),'submit-button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/base::tables.delete')),'submit-button-attrs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['class' => 'button-delete-records', 'data-url' => route('audit-log.empty')]),'close-button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/base::tables.cancel'))]); ?>
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('core/table::table', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/audit-log/resources/views/table.blade.php ENDPATH**/ ?>