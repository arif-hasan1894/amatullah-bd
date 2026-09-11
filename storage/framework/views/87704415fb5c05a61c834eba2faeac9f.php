<?php if(!empty($locales)): ?>
    <div class="table-responsive">
        <table class="table text-start table-striped table-bordered">
            <tbody>
                <?php $__currentLoopData = $locales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($locale['name']); ?> - <?php echo e($locale['locale']); ?></td>
                        <td
                            class="text-center"
                            style="white-space: nowrap; width: 1%;"
                        >
                            <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::button','data' => ['type' => 'button','color' => 'primary','class' => 'btn-import-remote-locale','dataUrl' => ''.e(route('translations.locales.download-remote-locale', $locale['locale'])).'','icon' => 'ti ti-download']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','color' => 'primary','class' => 'btn-import-remote-locale','data-url' => ''.e(route('translations.locales.download-remote-locale', $locale['locale'])).'','icon' => 'ti ti-download']); ?>
                                <?php echo e(trans('plugins/translation::translation.download_locale')); ?>

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
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <span class="d-inline-block"><?php echo e(trans('core/base::tables.no_data')); ?></span>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/translation/resources/views/partials/available-remote-locales.blade.php ENDPATH**/ ?>