<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'name' => null,
    'options' => [],
    'value' => null,
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
    'name' => null,
    'options' => [],
    'value' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $id = sprintf('%s-%s', $attributes->get('id', $name), uniqid());
    $numberItemsPerRow = 3;
    $imagePaddingTop = null;

    if ($numberItemsPerRowAttr = Arr::get($attributes, 'number_items_per_row')) {
        $numberItemsPerRow = $numberItemsPerRowAttr;
    }

    if (!($isWithoutAspectRatio = Arr::get($attributes, 'without_aspect_ratio'))) {
        $ratio = null;

        if (Arr::has($attributes, 'ratio')) {
            $ratio = Arr::get($attributes, 'ratio');
        }

        if ($ratio) {
            $imagePaddingTop = match ($ratio) {
                '1:1' => 100,
                '3:4' => 75,
                '4:3' => 125,
                '16:9' => 56.25,
                '9:16' => 178,
                '16:10' => 62.5,
                '10:16' => 160,
                default => null,
            };
        }
    }

    $col = min($numberItemsPerRow, 12);
?>

<div class="row g-2 row-cols-sm-<?php echo e(intval(round($col / 2))); ?> row-cols-md-<?php echo e($col); ?>">
    <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $label = Arr::get($option, 'label');
            $image = Arr::get($option, 'image', asset('vendor/core/core/base/images/ui-selector-placeholder.jpg'));
        ?>

        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['ui-selector mb-3', 'without-ratio' => $isWithoutAspectRatio]); ?>">
            <label
                for="<?php echo e($id); ?>-<?php echo e($key); ?>"
                class="form-imagecheck form-imagecheck-tick mb-2"
            >
                <input
                    <?php echo e($attributes->merge(['id' => "$id-$key", 'name' => $name, 'type' => 'radio', 'value' => $key, 'class' => 'form-imagecheck-input', 'checked' => $key == old($name, $value)])); ?>

                >
                <span
                    class="form-imagecheck-figure"
                    style="<?php echo \Illuminate\Support\Arr::toCssStyles(["padding-top:$imagePaddingTop%" => $imagePaddingTop]) ?>"
                >
                    <img
                        src="<?php echo e($image); ?>"
                        alt="<?php echo e($label); ?>"
                        class="form-imagecheck-image"
                    >
                </span>
            </label>

            <?php if($label): ?>
                <label
                    for="<?php echo e($id); ?>-<?php echo e($key); ?>"
                    class="cursor-pointer text-center form-check-label"
                >
                    <?php echo e($label); ?>

                </label>
            <?php endif; ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/core/base/resources/views/components/form/image-check.blade.php ENDPATH**/ ?>