<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal0a39fdd16f40824788edeed4e460894f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0a39fdd16f40824788edeed4e460894f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'cbdd3a194c072fbc3f04e785bd9366eb::section','data' => ['title' => trans('core/setting::setting.security.title'),'description' => trans('core/setting::setting.security.description')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core-setting::section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.security.title')),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.security.description'))]); ?>
        <?php if($allSecure): ?>
            <?php if (isset($component)) { $__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::alert','data' => ['type' => 'success','title' => trans('core/setting::setting.security.status_secure'),'icon' => 'ti ti-shield-check']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'success','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.security.status_secure')),'icon' => 'ti ti-shield-check']); ?>
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
        <?php else: ?>
            <?php if (isset($component)) { $__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::alert','data' => ['type' => 'warning','title' => trans('core/setting::setting.security.status_insecure'),'icon' => 'ti ti-shield-x']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'warning','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.security.status_insecure')),'icon' => 'ti ti-shield-x']); ?>
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

        <div class="mt-4">
            <h4 class="mb-3"><?php echo e(trans('core/setting::setting.security.current_settings')); ?></h4>

            <div class="table-responsive">
                <table class="table table-vcenter card-table">
                    <thead>
                        <tr>
                            <th class="w-1"><?php echo e(trans('core/setting::setting.security.status')); ?></th>
                            <th><?php echo e(trans('core/setting::setting.security.setting')); ?></th>
                            <th><?php echo e(trans('core/setting::setting.security.current_value')); ?></th>
                            <th><?php echo e(trans('core/setting::setting.security.recommended_value')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center">
                                    <?php if($setting['is_correct']): ?>
                                        <span class="badge bg-success-lt">
                                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-check'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                    <?php else: ?>
                                        <span class="badge bg-danger-lt">
                                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-x'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <div>
                                        <div class="fw-semibold"><?php echo e($setting['label']); ?></div>
                                        <div class="text-muted small"><?php echo e($setting['description']); ?></div>
                                    </div>
                                </td>
                                <td>
                                    <?php
                                        $value = is_bool($setting['value'])
                                            ? ($setting['value']
                                                ? 'true'
                                                : 'false')
                                            : $setting['value'];
                                        $badgeClass = $setting['is_correct']
                                            ? 'badge-outline text-success'
                                            : 'badge-outline text-warning';
                                    ?>
                                    <span class="badge <?php echo e($badgeClass); ?>"><?php echo e($value); ?></span>
                                </td>
                                <td>
                                    <?php
                                        $recommended = is_bool($setting['recommended'])
                                            ? ($setting['recommended']
                                                ? 'true'
                                                : 'false')
                                            : $setting['recommended'];
                                    ?>
                                    <span class="badge badge-outline text-primary"><?php echo e($recommended); ?></span>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <?php if(!$isHttps): ?>
                <div class="mt-3">
                    <?php if (isset($component)) { $__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::alert','data' => ['type' => 'info','title' => trans('core/setting::setting.security.https_warning')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'info','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/setting::setting.security.https_warning'))]); ?>
                         <?php $__env->slot('icon', null, []); ?> 
                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-info-circle'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                         <?php $__env->endSlot(); ?>
                         <?php $__env->slot('subtitle', null, []); ?> 
                            <?php echo e(trans('core/setting::setting.security.https_warning_description')); ?>

                         <?php $__env->endSlot(); ?>
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
                </div>
            <?php endif; ?>
        </div>

        <?php if(!$allSecure): ?>
            <div class="mt-4 pt-4 border-top">
                <h3 class="mb-3">
                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-settings'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                    <?php echo e(trans('core/setting::setting.security.how_to_fix')); ?>

                </h3>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo e(trans('core/setting::setting.security.env_file_location')); ?></h4>
                        <div class="input-group mb-3">
                            <input
                                type="text"
                                id="env-path"
                                class="form-control font-monospace"
                                value="<?php echo e($envPath); ?>"
                                readonly
                            >
                            <button
                                class="btn btn-outline-secondary"
                                data-bb-toggle="clipboard"
                                data-clipboard-target="#env-path"
                                data-clipboard-message="<?php echo e(trans('core/setting::setting.security.copied')); ?>"
                            >
                                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-copy'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                <?php echo e(trans('core/setting::setting.security.copy')); ?>

                            </button>
                        </div>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo e(trans('core/setting::setting.security.add_to_env')); ?></h4>
                        <div class="bg-dark text-white p-3 rounded font-monospace">
                            <pre
                                class="mb-0 text-white"
                                id="env-settings"
                            ># <?php echo e(trans('core/setting::setting.security.required_settings')); ?>

SESSION_HTTP_ONLY=true
ENABLE_HTTP_SECURITY_HEADERS=true

# <?php echo e(trans('core/setting::setting.security.for_https_sites')); ?>

<?php if($isHttps): ?>
SESSION_SECURE_COOKIE=true
<?php else: ?>
SESSION_SECURE_COOKIE=false
<?php endif; ?>
</pre>
                        </div>
                        <button
                            class="btn btn-primary mt-3"
                            data-bb-toggle="clipboard"
                            data-clipboard-target="#env-settings"
                            data-clipboard-text="SESSION_HTTP_ONLY=true
ENABLE_HTTP_SECURITY_HEADERS=true
SESSION_SECURE_COOKIE=<?php echo e($isHttps ? 'true' : 'false'); ?>"
                            data-clipboard-message="<?php echo e(trans('core/setting::setting.security.copied')); ?>"
                        >
                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-copy'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                            <?php echo e(trans('core/setting::setting.security.copy_settings')); ?>

                        </button>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-list-check'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                            <?php echo e(trans('core/setting::setting.security.steps')); ?>

                        </h4>
                        <div class="list-group list-group-flush list-group-hoverable">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="badge bg-blue-lt">1</span>
                                    </div>
                                    <div class="col text-truncate">
                                        <?php echo e(trans('core/setting::setting.security.step_1')); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="badge bg-blue-lt">2</span>
                                    </div>
                                    <div class="col text-truncate">
                                        <?php echo e(trans('core/setting::setting.security.step_2')); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="badge bg-blue-lt">3</span>
                                    </div>
                                    <div class="col text-truncate">
                                        <?php echo e(trans('core/setting::setting.security.step_3')); ?>

                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="badge bg-blue-lt">4</span>
                                    </div>
                                    <div class="col text-truncate">
                                        <?php echo e(trans('core/setting::setting.security.step_4')); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-shield-lock'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                            <?php echo e(trans('core/setting::setting.security.security_headers_info')); ?>

                        </h4>
                        <p class="text-muted"><?php echo e(trans('core/setting::setting.security.security_headers_list')); ?></p>
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <tbody>
                                    <tr>
                                        <td>
                                            <span
                                                class="badge badge-outline text-azure font-monospace">X-Content-Type-Options:
                                                nosniff</span>
                                        </td>
                                        <td class="text-muted"><?php echo e(trans('core/setting::setting.security.header_nosniff')); ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="badge badge-outline text-azure font-monospace">X-Frame-Options:
                                                SAMEORIGIN</span>
                                        </td>
                                        <td class="text-muted"><?php echo e(trans('core/setting::setting.security.header_frame')); ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="badge badge-outline text-azure font-monospace">X-XSS-Protection: 1;
                                                mode=block</span>
                                        </td>
                                        <td class="text-muted"><?php echo e(trans('core/setting::setting.security.header_xss')); ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="badge badge-outline text-azure font-monospace">Referrer-Policy:
                                                strict-origin-when-cross-origin</span>
                                        </td>
                                        <td class="text-muted">
                                            <?php echo e(trans('core/setting::setting.security.header_referrer')); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <p class="border-top pt-4 text-sm mt-4">
                    <?php echo BaseHelper::clean(
                        trans('core/setting::setting.security.learn_more', [
                            'documentation' => sprintf(
                                '<a href="https://docs.botble.com/cms/security-cookies" target="_blank" class="hover:underline text-primary-500">%s</a>',
                                trans('core/setting::setting.security.documentation'),
                            ),
                        ]),
                    ); ?>

                </p>
            </div>
        <?php else: ?>
            <div class="mt-4 pt-4 border-top">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-shield-lock'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                            <?php echo e(trans('core/setting::setting.security.security_headers_info')); ?>

                        </h4>
                        <p class="text-muted"><?php echo e(trans('core/setting::setting.security.security_headers_list')); ?></p>
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <tbody>
                                    <tr>
                                        <td>
                                            <span
                                                class="badge badge-outline text-azure font-monospace">X-Content-Type-Options:
                                                nosniff</span>
                                        </td>
                                        <td class="text-muted">
                                            <?php echo e(trans('core/setting::setting.security.header_nosniff')); ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="badge badge-outline text-azure font-monospace">X-Frame-Options:
                                                SAMEORIGIN</span>
                                        </td>
                                        <td class="text-muted"><?php echo e(trans('core/setting::setting.security.header_frame')); ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="badge badge-outline text-azure font-monospace">X-XSS-Protection:
                                                1; mode=block</span>
                                        </td>
                                        <td class="text-muted"><?php echo e(trans('core/setting::setting.security.header_xss')); ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="badge badge-outline text-azure font-monospace">Referrer-Policy:
                                                strict-origin-when-cross-origin</span>
                                        </td>
                                        <td class="text-muted">
                                            <?php echo e(trans('core/setting::setting.security.header_referrer')); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0a39fdd16f40824788edeed4e460894f)): ?>
<?php $attributes = $__attributesOriginal0a39fdd16f40824788edeed4e460894f; ?>
<?php unset($__attributesOriginal0a39fdd16f40824788edeed4e460894f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0a39fdd16f40824788edeed4e460894f)): ?>
<?php $component = $__componentOriginal0a39fdd16f40824788edeed4e460894f; ?>
<?php unset($__componentOriginal0a39fdd16f40824788edeed4e460894f); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(BaseHelper::getAdminMasterLayoutTemplate(), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/core/setting/resources/views/security.blade.php ENDPATH**/ ?>