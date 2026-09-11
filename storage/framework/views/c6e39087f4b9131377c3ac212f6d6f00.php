<?php
    /** @var \Botble\Translation\Services\GetGroupedTranslationsService $service */
    $service = app(\Botble\Translation\Services\GetGroupedTranslationsService::class);

    $currentSource = (string) request('source', '');
    $currentModule = (string) request('module', '');
    $currentGroup = (string) request('group', '');
    $currentStatus = (string) request('status', '');
    $currentKeyword = (string) request('q', '');

    $sources = $service->getSources();
    $modules = $service->getModules($currentSource !== '' ? $currentSource : null);
    $groups = collect($service->getGroupsFiltered(
        $currentSource !== '' ? $currentSource : null,
        $currentModule !== '' && in_array($currentModule, $modules, true) ? $currentModule : null,
    ))
        ->mapWithKeys(fn ($group) => [$group => $service->formatGroupLabel($group) . ' — ' . $group])
        ->all();

    $hasActiveFilters = $currentSource !== '' || $currentModule !== '' || $currentGroup !== ''
        || $currentStatus !== '' || $currentKeyword !== '';

    $localeForStatus = isset($locale['locale']) ? $locale['locale'] : 'en';

    $preserved = collect(request()->query())
        ->except(['source', 'module', 'group', 'status', 'q', 'page', 'filter_table_id', 'filter_columns', 'filter_operators', 'filter_values'])
        ->all();

    $resetUrl = url()->current() . (count($preserved) ? '?' . http_build_query($preserved) : '');
?>

<?php if (isset($component)) { $__componentOriginalc107e2f90dff5eb05519f33918d2c807 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc107e2f90dff5eb05519f33918d2c807 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::card.index','data' => ['class' => 'mb-3 translation-quick-filters']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-3 translation-quick-filters']); ?>
    <?php if (isset($component)) { $__componentOriginal4fdb92edf089f19cd17d37829580c9a6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4fdb92edf089f19cd17d37829580c9a6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::card.body.index','data' => ['class' => 'py-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::card.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'py-3']); ?>
        <form method="get" action="<?php echo e(url()->current()); ?>">
            <?php $__currentLoopData = $preserved; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(is_scalar($value)): ?>
                    <input type="hidden" name="<?php echo e($name); ?>" value="<?php echo e($value); ?>">
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="row g-2 align-items-end">
                <div class="col-12 col-xl">
                    <label for="translation-filter-q" class="form-label small text-muted mb-1">
                        <?php echo e(trans('core/table::table.search')); ?>

                    </label>
                    <div class="input-icon">
                        <span class="input-icon-addon">
                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-search'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                        </span>
                        <input
                            type="search"
                            id="translation-filter-q"
                            name="q"
                            class="form-control"
                            value="<?php echo e($currentKeyword); ?>"
                            placeholder="<?php echo e(trans('plugins/translation::translation.search_translations_placeholder')); ?>"
                            autocomplete="off"
                        >
                    </div>
                </div>

                <div class="col-6 col-md-4 col-xl-2">
                    <label for="translation-filter-source" class="form-label small text-muted mb-1">
                        <?php echo e(trans('plugins/translation::translation.source')); ?>

                    </label>
                    <select name="source" id="translation-filter-source" class="select-full" data-placeholder="<?php echo e(trans('plugins/translation::translation.all_sources')); ?>">
                        <option value=""><?php echo e(trans('plugins/translation::translation.all_sources')); ?></option>
                        <?php $__currentLoopData = $sources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($value); ?>" <?php if($currentSource === $value): echo 'selected'; endif; ?>><?php echo e($label); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="col-6 col-md-4 col-xl-2">
                    <label for="translation-filter-module" class="form-label small text-muted mb-1">
                        <?php echo e(trans('plugins/translation::translation.module')); ?>

                    </label>
                    <select name="module" id="translation-filter-module" class="select-search-full" data-placeholder="<?php echo e(trans('plugins/translation::translation.all_modules')); ?>">
                        <option value=""><?php echo e(trans('plugins/translation::translation.all_modules')); ?></option>
                        <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($value); ?>" <?php if($currentModule === $value): echo 'selected'; endif; ?>><?php echo e($label); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="col-12 col-md-4 col-xl-3">
                    <label for="translation-filter-group" class="form-label small text-muted mb-1">
                        <?php echo e(trans('plugins/translation::translation.group')); ?>

                    </label>
                    <select name="group" id="translation-filter-group" class="select-search-full" data-placeholder="<?php echo e(trans('plugins/translation::translation.all_groups')); ?>">
                        <option value=""><?php echo e(trans('plugins/translation::translation.all_groups')); ?></option>
                        <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($value); ?>" <?php if($currentGroup === $value): echo 'selected'; endif; ?>><?php echo e($label); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <?php if($localeForStatus !== 'en'): ?>
                    <div class="col-12 col-md-6 col-xl-2">
                        <label for="translation-filter-status" class="form-label small text-muted mb-1">
                            <?php echo e(trans('plugins/translation::translation.status')); ?>

                        </label>
                        <select name="status" id="translation-filter-status" class="select-full" data-placeholder="<?php echo e(trans('plugins/translation::translation.all_statuses')); ?>">
                            <option value=""><?php echo e(trans('plugins/translation::translation.all_statuses')); ?></option>
                            <option value="untranslated" <?php if($currentStatus === 'untranslated'): echo 'selected'; endif; ?>>
                                <?php echo e(trans('plugins/translation::translation.status_untranslated')); ?>

                            </option>
                        </select>
                    </div>
                <?php endif; ?>

                <div class="col-12 col-xl-auto d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-filter'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'me-1']); ?>
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
                        <?php echo e(trans('plugins/translation::translation.apply_filters')); ?>

                    </button>
                    <?php if($hasActiveFilters): ?>
                        <a
                            href="<?php echo e($resetUrl); ?>"
                            class="btn btn-outline-secondary"
                            title="<?php echo e(trans('plugins/translation::translation.reset_filters')); ?>"
                        >
                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-refresh'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                            <span class="d-none d-sm-inline ms-1"><?php echo e(trans('plugins/translation::translation.reset_filters')); ?></span>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </form>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4fdb92edf089f19cd17d37829580c9a6)): ?>
<?php $attributes = $__attributesOriginal4fdb92edf089f19cd17d37829580c9a6; ?>
<?php unset($__attributesOriginal4fdb92edf089f19cd17d37829580c9a6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4fdb92edf089f19cd17d37829580c9a6)): ?>
<?php $component = $__componentOriginal4fdb92edf089f19cd17d37829580c9a6; ?>
<?php unset($__componentOriginal4fdb92edf089f19cd17d37829580c9a6); ?>
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
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/translation/resources/views/partials/quick-filters.blade.php ENDPATH**/ ?>