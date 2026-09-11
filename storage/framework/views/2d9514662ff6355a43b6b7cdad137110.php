<tr>
    <td><?php echo e($data['name']); ?></td>
    <td>
        <?php if($data['description']): ?>
            <?php echo e($data['description']); ?>

        <?php else: ?>
            &mdash;
        <?php endif; ?>
    </td>
    <td style="width: 250px;"><?php echo e(BaseHelper::humanFilesize(get_backup_size($key))); ?></td>
    <td style="width: 200px;"><?php echo e($data['date']); ?></td>
    <td>
        <div class="btn-list justify-content-end">
            <?php if($backupManager->isDatabaseBackupAvailable($key)): ?>
                <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::button','data' => ['tag' => 'a','size' => 'sm','href' => route('backups.download.database', $key),'tooltip' => trans('plugins/backup::backup.download_database'),'icon' => 'ti ti-database','iconOnly' => true,'color' => 'success']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'a','size' => 'sm','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('backups.download.database', $key)),'tooltip' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/backup::backup.download_database')),'icon' => 'ti ti-database','icon-only' => true,'color' => 'success']); ?>
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
            <?php endif; ?>

            <?php if($backupManager->isStorageBackupAvailable($key)): ?>
                <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::button','data' => ['tag' => 'a','size' => 'sm','href' => route('backups.download.uploads.folder', $key),'tooltip' => trans('plugins/backup::backup.download_uploads_folder'),'icon' => 'ti ti-download','iconOnly' => true,'color' => 'primary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'a','size' => 'sm','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('backups.download.uploads.folder', $key)),'tooltip' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/backup::backup.download_uploads_folder')),'icon' => 'ti ti-download','icon-only' => true,'color' => 'primary']); ?>
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
            <?php endif; ?>

            <?php if($driver === 'mysql' && auth()->guard()->user()->hasPermission('backups.restore')): ?>
                <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::button','data' => ['size' => 'sm','tooltip' => trans('plugins/backup::backup.restore_tooltip'),'icon' => 'ti ti-reload','iconOnly' => true,'color' => 'info','class' => 'restoreBackup','dataSection' => route('backups.restore', $key)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','tooltip' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/backup::backup.restore_tooltip')),'icon' => 'ti ti-reload','icon-only' => true,'color' => 'info','class' => 'restoreBackup','data-section' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('backups.restore', $key))]); ?>
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
            <?php endif; ?>

            <?php if(auth()->guard()->user()->hasPermission('backups.destroy')): ?>
                <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::button','data' => ['size' => 'sm','tooltip' => trans('core/base::tables.delete_entry'),'icon' => 'ti ti-trash','iconOnly' => true,'color' => 'danger','class' => 'deleteDialog','dataSection' => route('backups.destroy', $key)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','tooltip' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/base::tables.delete_entry')),'icon' => 'ti ti-trash','icon-only' => true,'color' => 'danger','class' => 'deleteDialog','data-section' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('backups.destroy', $key))]); ?>
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
            <?php endif; ?>
        </div>
    </td>
</tr>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/backup/resources/views/partials/backup-item.blade.php ENDPATH**/ ?>