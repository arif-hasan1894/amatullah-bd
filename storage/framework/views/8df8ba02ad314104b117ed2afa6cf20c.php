<?php $__env->startSection('export_extra_filters_after'); ?>
    <?php
        use Botble\Base\Enums\BaseStatusEnum;
        use Botble\Blog\Models\Category;

        $statuses = BaseStatusEnum::labels();
        $categories = Category::query()->pluck('name', 'id')->toArray();
    ?>

    <div class="row mb-3">
        <div class="col-md-3">
            <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['name' => 'limit','type' => 'number','label' => trans('plugins/blog::posts.export.limit'),'placeholder' => trans('plugins/blog::posts.export.limit_placeholder'),'min' => '1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'limit','type' => 'number','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/blog::posts.export.limit')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/blog::posts.export.limit_placeholder')),'min' => '1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $attributes = $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
        </div>
        <div class="col-md-3">
            <?php if (isset($component)) { $__componentOriginald8f3cab0e02bd6920e9589a31228d9ca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.select','data' => ['name' => 'status','label' => trans('core/base::forms.status'),'options' => ['' => trans('plugins/blog::posts.export.all_status')] + $statuses]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'status','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/base::forms.status')),'options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['' => trans('plugins/blog::posts.export.all_status')] + $statuses)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca)): ?>
<?php $attributes = $__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca; ?>
<?php unset($__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8f3cab0e02bd6920e9589a31228d9ca)): ?>
<?php $component = $__componentOriginald8f3cab0e02bd6920e9589a31228d9ca; ?>
<?php unset($__componentOriginald8f3cab0e02bd6920e9589a31228d9ca); ?>
<?php endif; ?>
        </div>
        <div class="col-md-3">
            <?php if (isset($component)) { $__componentOriginald8f3cab0e02bd6920e9589a31228d9ca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.select','data' => ['name' => 'is_featured','label' => trans('plugins/blog::posts.is_featured'),'options' => [
                    '' => trans('plugins/blog::posts.export.all_featured'),
                    '1' => trans('core/base::base.yes'),
                    '0' => trans('core/base::base.no'),
                ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'is_featured','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/blog::posts.is_featured')),'options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
                    '' => trans('plugins/blog::posts.export.all_featured'),
                    '1' => trans('core/base::base.yes'),
                    '0' => trans('core/base::base.no'),
                ])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca)): ?>
<?php $attributes = $__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca; ?>
<?php unset($__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8f3cab0e02bd6920e9589a31228d9ca)): ?>
<?php $component = $__componentOriginald8f3cab0e02bd6920e9589a31228d9ca; ?>
<?php unset($__componentOriginald8f3cab0e02bd6920e9589a31228d9ca); ?>
<?php endif; ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <?php if (isset($component)) { $__componentOriginald8f3cab0e02bd6920e9589a31228d9ca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.select','data' => ['name' => 'category_id','label' => trans('plugins/blog::posts.category'),'options' => ['' => trans('plugins/blog::posts.export.all_categories')] + $categories]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'category_id','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/blog::posts.category')),'options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['' => trans('plugins/blog::posts.export.all_categories')] + $categories)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca)): ?>
<?php $attributes = $__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca; ?>
<?php unset($__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8f3cab0e02bd6920e9589a31228d9ca)): ?>
<?php $component = $__componentOriginald8f3cab0e02bd6920e9589a31228d9ca; ?>
<?php unset($__componentOriginald8f3cab0e02bd6920e9589a31228d9ca); ?>
<?php endif; ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <label
                for="start_date"
                class="form-label"
            ><?php echo e(trans('plugins/blog::posts.export.start_date')); ?></label>

            <?php echo Form::datePicker('start_date', null, [
                'placeholder' => trans('plugins/blog::posts.export.start_date_placeholder'),
            ]); ?>

        </div>
        <div class="col-md-3">
            <label
                for="end_date"
                class="form-label"
            ><?php echo e(trans('plugins/blog::posts.export.end_date')); ?></label>

            <?php echo Form::datePicker('end_date', null, [
                'placeholder' => trans('plugins/blog::posts.export.end_date_placeholder'),
            ]); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('packages/data-synchronize::export', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/blog/resources/views/posts/export.blade.php ENDPATH**/ ?>