<div class="bb-empty">
    <div class="text-center py-5">
        <!-- Empty State Icon -->
        <div class="bb-empty-img mb-4">
            <div class="bg-light rounded-circle p-4 d-inline-flex">
                <?php if (isset($component)) { $__componentOriginala9983255947c858702b4b71234b2f274 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9983255947c858702b4b71234b2f274 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '766be9a31b02d85b4410065d426a1ede::empty-state','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('plugins-ecommerce::empty-state'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala9983255947c858702b4b71234b2f274)): ?>
<?php $attributes = $__attributesOriginala9983255947c858702b4b71234b2f274; ?>
<?php unset($__attributesOriginala9983255947c858702b4b71234b2f274); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala9983255947c858702b4b71234b2f274)): ?>
<?php $component = $__componentOriginala9983255947c858702b4b71234b2f274; ?>
<?php unset($__componentOriginala9983255947c858702b4b71234b2f274); ?>
<?php endif; ?>
            </div>
        </div>

        <!-- Empty State Content -->
        <div class="bb-empty-content">
            <h3 class="bb-empty-title h5 mb-2"><?php echo e($title); ?></h3>
            <p class="bb-empty-subtitle text-muted mb-4">
                <?php echo e($subtitle); ?>

            </p>

            <!-- Empty State Action -->
            <?php if(isset($actionUrl) && isset($actionLabel)): ?>
                <div class="bb-empty-action">
                    <a href="<?php echo e($actionUrl); ?>" class="btn btn-primary">
                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-plus'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                        <?php echo e($actionLabel); ?>

                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/customers/partials/empty-state.blade.php ENDPATH**/ ?>