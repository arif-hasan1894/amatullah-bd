<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'type' => 'info',
    'title' => null,
    'description' => null,
    'isActionModal' => 'false',
    'url' => null,
    'method' => null,
    'payload' => null,
    'confirmText' => trans('core/base::base.yes'),
    'cancelText' => trans('core/base::base.no'),
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'type' => 'info',
    'title' => null,
    'description' => null,
    'isActionModal' => 'false',
    'url' => null,
    'method' => null,
    'payload' => null,
    'confirmText' => trans('core/base::base.yes'),
    'cancelText' => trans('core/base::base.no'),
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div
    <?php echo e($attributes->merge([
        'data-bb-toggle' => 'modal',
        'data-type' => $type,
        'data-action-modal' => $isActionModal,
        'data-url' => $url,
        'data-method' => $method,
        'data-payload' => json_encode($payload),
        'data-confirm-text' => $confirmText,
        'data-cancel-text' => $cancelText,
    ])); ?>

    class="d-inline-block"
>
    <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::button','data' => ['type' => 'button','color' => $type]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','color' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($type)]); ?>
        <?php echo e($slot); ?>

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

    <?php if($title): ?>
        <div class="modal-replace-title d-none">
            <?php echo e($title); ?>

        </div>
    <?php endif; ?>

    <?php if($description): ?>
        <div class="modal-replace-description d-none">
            <?php echo e($description); ?>

        </div>
    <?php endif; ?>
</div>

<?php if (isset($component)) { $__componentOriginalfb144919ac07f7c55f77d7bc7627573b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfb144919ac07f7c55f77d7bc7627573b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::modal.push-once','data' => ['type' => $type]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::modal.push-once'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($type)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfb144919ac07f7c55f77d7bc7627573b)): ?>
<?php $attributes = $__attributesOriginalfb144919ac07f7c55f77d7bc7627573b; ?>
<?php unset($__attributesOriginalfb144919ac07f7c55f77d7bc7627573b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfb144919ac07f7c55f77d7bc7627573b)): ?>
<?php $component = $__componentOriginalfb144919ac07f7c55f77d7bc7627573b; ?>
<?php unset($__componentOriginalfb144919ac07f7c55f77d7bc7627573b); ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/core/base/resources/views/components/modal/action-button.blade.php ENDPATH**/ ?>