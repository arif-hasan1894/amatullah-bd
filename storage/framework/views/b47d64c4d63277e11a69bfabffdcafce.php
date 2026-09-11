<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalc5e06ddc74706a8a30b3529d286e11fa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc5e06ddc74706a8a30b3529d286e11fa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '766be9a31b02d85b4410065d426a1ede::intro','data' => ['title' => trans('plugins/ecommerce::review.intro.title'),'subtitle' => trans('plugins/ecommerce::review.intro.description'),'actionUrl' => route('reviews.create'),'actionLabel' => trans('plugins/ecommerce::review.create_review')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('plugins-ecommerce::intro'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::review.intro.title')),'subtitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::review.intro.description')),'action-url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('reviews.create')),'action-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::review.create_review'))]); ?>
         <?php $__env->slot('icon', null, []); ?> 
            <img
                src="<?php echo e(asset('vendor/core/plugins/ecommerce/images/empty-customer.png')); ?>"
                alt="image"
            >
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc5e06ddc74706a8a30b3529d286e11fa)): ?>
<?php $attributes = $__attributesOriginalc5e06ddc74706a8a30b3529d286e11fa; ?>
<?php unset($__attributesOriginalc5e06ddc74706a8a30b3529d286e11fa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc5e06ddc74706a8a30b3529d286e11fa)): ?>
<?php $component = $__componentOriginalc5e06ddc74706a8a30b3529d286e11fa; ?>
<?php unset($__componentOriginalc5e06ddc74706a8a30b3529d286e11fa); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(BaseHelper::getAdminMasterLayoutTemplate(), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/reviews/intro.blade.php ENDPATH**/ ?>