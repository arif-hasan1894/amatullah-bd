<div
    id="select-post-language"
    class="gap-2 mb-4 d-flex align-items-center"
>
    <?php echo language_flag($currentLanguage->lang_flag, $currentLanguage->lang_name, 24); ?>


    <select
        name="language"
        id="post_lang_choice"
        class="form-select"
    >
        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(!array_key_exists(json_encode([$language->lang_code]), $related)): ?>
                <option
                    value="<?php echo e($language->lang_code); ?>"
                    <?php if($language->lang_code == $currentLanguage->lang_code): ?> selected="selected" <?php endif; ?>
                    data-flag="<?php echo e($language->lang_flag); ?>"
                ><?php echo e($language->lang_name); ?></option>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<?php if(count($languages) > 1): ?>
    <div>
        <h4><?php echo e(trans('plugins/language::language.translations')); ?></h4>
        <div id="list-others-language">
            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($language->lang_code === $currentLanguage->lang_code) continue; ?>

                <?php if(array_key_exists($language->lang_code, $related)): ?>
                    <a
                        href="<?php echo e(Route::has($route['edit']) ? route($route['edit'], $related[$language->lang_code]) : '#'); ?>"
                        class="gap-2 d-flex align-items-center text-decoration-none"
                    >
                        <?php echo language_flag($language->lang_flag, $language->lang_name); ?>

                        <?php echo e($language->lang_name); ?> <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-edit'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                    </a>
                <?php else: ?>
                    <a
                        href="<?php echo e(Route::has($route['create']) ? route($route['create']) : '#'); ?>?<?php echo e(http_build_query(array_merge($queryParams, [Language::refLangKey() => $language->lang_code]))); ?>"
                        class="gap-2 d-flex align-items-center text-decoration-none"
                    >
                        <?php echo language_flag($language->lang_flag, $language->lang_name); ?>

                        <?php echo e($language->lang_name); ?> <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-plus'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                    </a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <input
        type="hidden"
        id="lang_meta_created_from"
        name="ref_from"
        value="<?php echo e(Language::getRefFrom()); ?>"
    >
    <input
        type="hidden"
        id="reference_id"
        value="<?php echo e($queryParams['ref_from']); ?>"
    >
    <input
        type="hidden"
        id="reference_type"
        value="<?php echo e($args[1]); ?>"
    >
    <input
        type="hidden"
        id="route_create"
        value="<?php echo e(Route::has($route['create']) ? route($route['create']) : '#'); ?>"
    >
    <input
        type="hidden"
        id="route_edit"
        value="<?php echo e(Route::has($route['edit']) ? route($route['edit'], $queryParams['ref_from']) : '#'); ?>"
    >
    <input
        type="hidden"
        id="language_flag_path"
        value="<?php echo e(BASE_LANGUAGE_FLAG_PATH); ?>"
    >

    <div data-change-language-route="<?php echo e(route('languages.change.item.language')); ?>"></div>

    <?php if (isset($component)) { $__componentOriginal9376784f974ff66f3ff18195ab0a89c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9376784f974ff66f3ff18195ab0a89c5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::modal.action','data' => ['id' => 'confirm-change-language-modal','type' => 'warning','title' => trans('plugins/language::language.confirm-change-language'),'description' => BaseHelper::clean(trans('plugins/language::language.confirm-change-language-message')),'submitButtonAttrs' => ['id' => 'confirm-change-language-button'],'submitButtonLabel' => trans('plugins/language::language.confirm-change-language-btn')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::modal.action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'confirm-change-language-modal','type' => 'warning','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/language::language.confirm-change-language')),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(BaseHelper::clean(trans('plugins/language::language.confirm-change-language-message'))),'submit-button-attrs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['id' => 'confirm-change-language-button']),'submit-button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/language::language.confirm-change-language-btn'))]); ?>
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
<?php endif; ?>

<?php $__env->startPush('header'); ?>
    <meta
        name="<?php echo e(Language::refFromKey()); ?>"
        content="<?php echo e($queryParams['ref_from']); ?>"
    >
    <meta
        name="<?php echo e(Language::refLangKey()); ?>"
        content="<?php echo e($currentLanguage->lang_code); ?>"
    >
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/language/resources/views/language-box.blade.php ENDPATH**/ ?>