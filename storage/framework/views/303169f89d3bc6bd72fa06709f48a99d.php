<div
    class="permissions-tree"
    id="checkboxes-permisstions"
    data-name="foo"
>
    <?php $__currentLoopData = $children['root']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyOne => $elOne): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <ul
            class="parent_tree m-0 p-0 list-unstyled"
            id="node<?php echo e($keyOne); ?>"
        >
            <li class="permissions-item list-unstyled">
                <div class="permissions-header">
                    <?php if (isset($component)) { $__componentOriginal424617256517489644ca6a2e02d16322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal424617256517489644ca6a2e02d16322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['id' => 'checkbox_one_'.e($keyOne).'','class' => 'check-success','name' => 'flags[]','value' => ''.e($flags[$elOne]['flag']).'','checked' => ''.e(in_array($flags[$elOne]['flag'], $active)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'checkbox_one_'.e($keyOne).'','class' => 'check-success','name' => 'flags[]','value' => ''.e($flags[$elOne]['flag']).'','checked' => ''.e(in_array($flags[$elOne]['flag'], $active)).'']); ?>
                         <?php $__env->slot('label', null, []); ?> 
                            <?php if (isset($component)) { $__componentOriginal86e87e37d100cbb441f5e9e293185347 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal86e87e37d100cbb441f5e9e293185347 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::badge','data' => ['lite' => true,'color' => 'success','label' => $flags[$elOne]['name']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['lite' => true,'color' => 'success','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($flags[$elOne]['name'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal86e87e37d100cbb441f5e9e293185347)): ?>
<?php $attributes = $__attributesOriginal86e87e37d100cbb441f5e9e293185347; ?>
<?php unset($__attributesOriginal86e87e37d100cbb441f5e9e293185347); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal86e87e37d100cbb441f5e9e293185347)): ?>
<?php $component = $__componentOriginal86e87e37d100cbb441f5e9e293185347; ?>
<?php unset($__componentOriginal86e87e37d100cbb441f5e9e293185347); ?>
<?php endif; ?>
                         <?php $__env->endSlot(); ?>
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
                </div>
                <?php if(isset($children[$elOne])): ?>
                    <ul
                        class="row permissions-body <?php echo e(isset($children[$elOne]) && count($children[$elOne]) > 0 ? 'has-children' : 'single-node'); ?>">
                        <?php $__currentLoopData = $children[$elOne]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyTwo => $elTwo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li
                                class="list-unstyled col-4 m-0"
                                style="background-color: inherit"
                                id="node_sub_<?php echo e($keyOne); ?>_<?php echo e($keyTwo); ?>"
                            >
                                <?php if (isset($component)) { $__componentOriginal424617256517489644ca6a2e02d16322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal424617256517489644ca6a2e02d16322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['id' => 'checkbox_two_'.e($keyOne).'_'.e($keyTwo).'','name' => 'flags[]','value' => ''.e($flags[$elTwo]['flag']).'','checked' => ''.e(in_array($flags[$elTwo]['flag'], $active)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'checkbox_two_'.e($keyOne).'_'.e($keyTwo).'','name' => 'flags[]','value' => ''.e($flags[$elTwo]['flag']).'','checked' => ''.e(in_array($flags[$elTwo]['flag'], $active)).'']); ?>
                                     <?php $__env->slot('label', null, []); ?> 
                                        <?php if (isset($component)) { $__componentOriginal86e87e37d100cbb441f5e9e293185347 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal86e87e37d100cbb441f5e9e293185347 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::badge','data' => ['lite' => true,'color' => 'primary','label' => $flags[$elTwo]['name']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['lite' => true,'color' => 'primary','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($flags[$elTwo]['name'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal86e87e37d100cbb441f5e9e293185347)): ?>
<?php $attributes = $__attributesOriginal86e87e37d100cbb441f5e9e293185347; ?>
<?php unset($__attributesOriginal86e87e37d100cbb441f5e9e293185347); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal86e87e37d100cbb441f5e9e293185347)): ?>
<?php $component = $__componentOriginal86e87e37d100cbb441f5e9e293185347; ?>
<?php unset($__componentOriginal86e87e37d100cbb441f5e9e293185347); ?>
<?php endif; ?>
                                     <?php $__env->endSlot(); ?>
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
                                <?php if(isset($children[$elTwo])): ?>
                                    <ul class="list-unstyled">
                                        <?php $__currentLoopData = $children[$elTwo]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyThree => $elThree): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li
                                                style="background-color: inherit"
                                                id="node_sub_sub_<?php echo e($keyThree); ?>"
                                            >
                                                <?php if (isset($component)) { $__componentOriginal424617256517489644ca6a2e02d16322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal424617256517489644ca6a2e02d16322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['id' => 'checkbox_three_'.e($keyThree).'','class' => 'check-yellow','name' => 'flags[]','value' => ''.e($flags[$elThree]['flag']).'','checked' => ''.e(in_array($flags[$elThree]['flag'], $active)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'checkbox_three_'.e($keyThree).'','class' => 'check-yellow','name' => 'flags[]','value' => ''.e($flags[$elThree]['flag']).'','checked' => ''.e(in_array($flags[$elThree]['flag'], $active)).'']); ?>
                                                     <?php $__env->slot('label', null, ['class' => 'small']); ?> 
                                                        <?php if (isset($component)) { $__componentOriginal86e87e37d100cbb441f5e9e293185347 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal86e87e37d100cbb441f5e9e293185347 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::badge','data' => ['lite' => true,'color' => 'yellow','label' => $flags[$elThree]['name']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['lite' => true,'color' => 'yellow','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($flags[$elThree]['name'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal86e87e37d100cbb441f5e9e293185347)): ?>
<?php $attributes = $__attributesOriginal86e87e37d100cbb441f5e9e293185347; ?>
<?php unset($__attributesOriginal86e87e37d100cbb441f5e9e293185347); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal86e87e37d100cbb441f5e9e293185347)): ?>
<?php $component = $__componentOriginal86e87e37d100cbb441f5e9e293185347; ?>
<?php unset($__componentOriginal86e87e37d100cbb441f5e9e293185347); ?>
<?php endif; ?>
                                                     <?php $__env->endSlot(); ?>
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
                                                <?php if(isset($children[$elThree])): ?>
                                                    <ul class="list-unstyled">
                                                        <?php $__currentLoopData = $children[$elThree]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyFour => $elFour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li
                                                                style="background-color: inherit"
                                                                id="node_grand_child<?php echo e($keyFour); ?>"
                                                            >
                                                                <?php if (isset($component)) { $__componentOriginal424617256517489644ca6a2e02d16322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal424617256517489644ca6a2e02d16322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['id' => 'checkbox_four_'.e($keyFour).'','name' => 'flags[]','value' => ''.e($flags[$elFour]['flag']).'','checked' => ''.e(in_array($flags[$elFour]['flag'], $active)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'checkbox_four_'.e($keyFour).'','name' => 'flags[]','value' => ''.e($flags[$elFour]['flag']).'','checked' => ''.e(in_array($flags[$elFour]['flag'], $active)).'']); ?>
                                                                     <?php $__env->slot('label', null, []); ?> 
                                                                        <small><?php echo e($flags[$elFour]['name']); ?></small>
                                                                     <?php $__env->endSlot(); ?>
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
                                                                <?php if(isset($children[$elFour])): ?>
                                                                    <ul class="list-unstyled">
                                                                        <?php $__currentLoopData = $children[$elFour]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyFive => $elFive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <li
                                                                                style="background-color: inherit"
                                                                                id="node<?php echo e($grandChildrenKey); ?>"
                                                                            >
                                                                                <?php if (isset($component)) { $__componentOriginal424617256517489644ca6a2e02d16322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal424617256517489644ca6a2e02d16322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['id' => 'checkbox_five_'.e($keyFive).'','name' => 'flags[]','value' => ''.e($flags[$elFour]['flag']).'','checked' => ''.e(in_array($flags[$elFour]['flag'], $active)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'checkbox_five_'.e($keyFive).'','name' => 'flags[]','value' => ''.e($flags[$elFour]['flag']).'','checked' => ''.e(in_array($flags[$elFour]['flag'], $active)).'']); ?>
                                                                                     <?php $__env->slot('label', null, []); ?> <?php echo e($flags[$elFour]['name']); ?> <?php $__env->endSlot(); ?>
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
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </ul>
                                                                <?php endif; ?>
                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>
            </li>
        </ul>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/core/acl/resources/views/roles/permissions.blade.php ENDPATH**/ ?>