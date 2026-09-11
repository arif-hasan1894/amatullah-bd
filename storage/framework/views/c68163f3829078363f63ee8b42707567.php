<p class="text-muted">
    <?php if($isActivated): ?>
        <?php echo e(trans('plugins/marketplace::store.control.block_help')); ?>

    <?php else: ?>
        <?php echo BaseHelper::clean(trans('plugins/marketplace::store.control.blocked_help', ['reason' => "<strong>$blockReason</strong>"])); ?>

    <?php endif; ?>
</p>

<?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::button','data' => ['type' => 'button','color' => $isActivated ? 'danger' : 'info','size' => 'sm','dataBsToggle' => 'modal','dataBsTarget' => '#vendor-control-modal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isActivated ? 'danger' : 'info'),'size' => 'sm','data-bs-toggle' => 'modal','data-bs-target' => '#vendor-control-modal']); ?>
    <?php if($isActivated): ?>
        <?php echo e(trans('plugins/marketplace::store.control.block')); ?>

    <?php else: ?>
        <?php echo e(trans('plugins/marketplace::store.control.unblock')); ?>

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
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/customers/control.blade.php ENDPATH**/ ?>