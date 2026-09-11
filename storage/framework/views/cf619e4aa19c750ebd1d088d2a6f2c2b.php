<ul <?php echo $options; ?>>
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $id = 'menu-id-' . strtolower(Str::slug(str_replace('\\', ' ', $model::class))) . '-' . $row->id;
        ?>

        <li>
            <?php if (isset($component)) { $__componentOriginal424617256517489644ca6a2e02d16322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal424617256517489644ca6a2e02d16322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['label' => $row->name,'name' => 'menu_id','id' => $id,'value' => $row->id,'dataTitle' => ''.e($row->name).'','dataReferenceId' => ''.e($row->id).'','dataReferenceType' => ''.e($model::class).'','dataMenuId' => ''.e(BaseHelper::stringify(request()->route('menu'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($row->name),'name' => 'menu_id','id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($id),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($row->id),'data-title' => ''.e($row->name).'','data-reference-id' => ''.e($row->id).'','data-reference-type' => ''.e($model::class).'','data-menu-id' => ''.e(BaseHelper::stringify(request()->route('menu'))).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal424617256517489644ca6a2e02d16322)): ?>
<?php $attributes = $__attributesOriginal424617256517489644ca6a2e02d16322; ?>
<?php unset($__attributesOriginal424617256517489644ca6a2e02d16322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal424617256517489644ca6a2e02d16322)): ?>
<?php $component = $__componentOriginal424617256517489644ca6a2e02d16322; ?>
<?php unset($__componentOriginal424617256517489644ca6a2e02d16322); ?>
<?php endif; ?>

            <?php if($row->children): ?>
                <?php echo Menu::generateSelect([
                    'model' => $model,
                    'items' => $row->children,
                    'class' => 'list-unstyled',
                ]); ?>

            <?php endif; ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/menu/resources/views/partials/select.blade.php ENDPATH**/ ?>