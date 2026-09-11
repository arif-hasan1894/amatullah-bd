<?php if($storeSocialLinks = MarketplaceHelper::getAllowedSocialLinks()): ?>
    <div class="col-lg-12">
        <div class="row">
            <?php $__currentLoopData = $storeSocialLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label" for="social_links_<?php echo e($key); ?>"><?php echo e($item['title']); ?></label>
                        <div class="input-group mb-3">
                            <?php if(Arr::get($item, 'url')): ?>
                                <span class="input-group-text px-2"><?php echo e(Arr::get($item, 'url')); ?></span>
                            <?php endif; ?>
                            <?php echo Form::text('social_links[' . $key . ']', Arr::get($model->getMetaData('social_links', true) ?: [], $key, ''), [
                                'class' => 'form-control',
                                'placeholder' => Arr::get($item, 'placeholder', '{username}'),
                                'id' => 'social_links_' . $key,
                            ]); ?>

                            <span class="input-group-text">
                                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-brand-' . Arr::get($item, 'icon')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/partials/extra-content.blade.php ENDPATH**/ ?>