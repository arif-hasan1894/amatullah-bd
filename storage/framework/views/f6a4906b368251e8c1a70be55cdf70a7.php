<?php if(!$isNotDefaultLanguage): ?>
    <?php if (isset($component)) { $__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0e6b0152aee5342533433c1a5b9b4cb1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::custom-template','data' => ['id' => 'product_attribute_template']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::custom-template'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'product_attribute_template']); ?>
        <?php if (isset($component)) { $__componentOriginal6776c17865a79e242405889703595892 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6776c17865a79e242405889703595892 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.row','data' => ['dataId' => '__id__']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data-id' => '__id__']); ?>
            <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => ['width' => '5%']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => '5%']); ?>
                <?php if (isset($component)) { $__componentOriginal9166fadad4bef341ac183689b0de8726 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9166fadad4bef341ac183689b0de8726 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.radio','data' => ['name' => 'related_attribute_is_default','value' => '__position__','checked' => false,'single' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'related_attribute_is_default','value' => '__position__','__checked__' => true,'single' => true,'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9166fadad4bef341ac183689b0de8726)): ?>
<?php $attributes = $__attributesOriginal9166fadad4bef341ac183689b0de8726; ?>
<?php unset($__attributesOriginal9166fadad4bef341ac183689b0de8726); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9166fadad4bef341ac183689b0de8726)): ?>
<?php $component = $__componentOriginal9166fadad4bef341ac183689b0de8726; ?>
<?php unset($__componentOriginal9166fadad4bef341ac183689b0de8726); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <input type="text" name="swatch-title" class="form-control" value="__title__">
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <input type="text" name="swatch-value" data-bb-color-picker style="display: none" value="__color__">
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => ['width' => '5%']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => '5%']); ?>
                <?php if (isset($component)) { $__componentOriginal76cffb64887e6cc5d66bf632725c28d8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76cffb64887e6cc5d66bf632725c28d8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.image','data' => ['allowThumb' => true,'name' => 'swatch-image','value' => '__image__','action' => 'select-image']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['allow-thumb' => true,'name' => 'swatch-image','value' => '__image__','action' => 'select-image']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal76cffb64887e6cc5d66bf632725c28d8)): ?>
<?php $attributes = $__attributesOriginal76cffb64887e6cc5d66bf632725c28d8; ?>
<?php unset($__attributesOriginal76cffb64887e6cc5d66bf632725c28d8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal76cffb64887e6cc5d66bf632725c28d8)): ?>
<?php $component = $__componentOriginal76cffb64887e6cc5d66bf632725c28d8; ?>
<?php unset($__componentOriginal76cffb64887e6cc5d66bf632725c28d8); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <a href="javascript:(0)" class="remove-item text-decoration-none text-danger">
                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-trash'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6776c17865a79e242405889703595892)): ?>
<?php $attributes = $__attributesOriginal6776c17865a79e242405889703595892; ?>
<?php unset($__attributesOriginal6776c17865a79e242405889703595892); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6776c17865a79e242405889703595892)): ?>
<?php $component = $__componentOriginal6776c17865a79e242405889703595892; ?>
<?php unset($__componentOriginal6776c17865a79e242405889703595892); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0e6b0152aee5342533433c1a5b9b4cb1)): ?>
<?php $attributes = $__attributesOriginal0e6b0152aee5342533433c1a5b9b4cb1; ?>
<?php unset($__attributesOriginal0e6b0152aee5342533433c1a5b9b4cb1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1)): ?>
<?php $component = $__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1; ?>
<?php unset($__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1); ?>
<?php endif; ?>
    <textarea
        class="d-none"
        id="deleted_attributes"
        name="deleted_attributes"
    ></textarea>
<?php endif; ?>

<textarea
    class="d-none"
    id="attributes"
    name="attributes"
><?php echo json_encode($attributes); ?></textarea>

<?php if (isset($component)) { $__componentOriginal44c83e2eb600bf127a623cda69e3ac8b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal44c83e2eb600bf127a623cda69e3ac8b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.index','data' => ['class' => 'swatches-container text-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'swatches-container text-center']); ?>
    <?php if (isset($component)) { $__componentOriginale99e402aa76780d965832b9f039b6b35 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale99e402aa76780d965832b9f039b6b35 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.header.index','data' => ['class' => 'header']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'header']); ?>
        <?php if(! $isNotDefaultLanguage): ?>
            <?php if (isset($component)) { $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.header.cell','data' => ['width' => '5%']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.header.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => '5%']); ?>
                <?php echo e(trans('plugins/ecommerce::product-attribute-sets.is_default')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $attributes = $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $component = $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.header.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.header.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php echo e(trans('plugins/ecommerce::product-attribute-sets.title')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $attributes = $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $component = $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>

        <?php if(! $isNotDefaultLanguage): ?>
            <?php if (isset($component)) { $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.header.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.header.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php echo e(trans('plugins/ecommerce::product-attribute-sets.color')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $attributes = $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $component = $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.header.cell','data' => ['width' => '5%']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.header.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => '5%']); ?>
                <?php echo e(trans('plugins/ecommerce::product-attribute-sets.image')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $attributes = $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $component = $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.header.cell','data' => ['width' => '5%']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.header.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => '5%']); ?>
                <?php echo e(trans('plugins/ecommerce::product-attribute-sets.remove')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $attributes = $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $component = $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
        <?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale99e402aa76780d965832b9f039b6b35)): ?>
<?php $attributes = $__attributesOriginale99e402aa76780d965832b9f039b6b35; ?>
<?php unset($__attributesOriginale99e402aa76780d965832b9f039b6b35); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale99e402aa76780d965832b9f039b6b35)): ?>
<?php $component = $__componentOriginale99e402aa76780d965832b9f039b6b35; ?>
<?php unset($__componentOriginale99e402aa76780d965832b9f039b6b35); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal4d7e52336690b9ea120a6913f2c28a6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4d7e52336690b9ea120a6913f2c28a6b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.index','data' => ['class' => 'swatches-list']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'swatches-list']); ?>
        <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginal6776c17865a79e242405889703595892 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6776c17865a79e242405889703595892 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.row','data' => ['dataId' => ''.e($attribute->id).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data-id' => ''.e($attribute->id).'']); ?>
                <?php if(! $isNotDefaultLanguage): ?>
                    <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php if (isset($component)) { $__componentOriginal9166fadad4bef341ac183689b0de8726 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9166fadad4bef341ac183689b0de8726 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.radio','data' => ['name' => 'related_attribute_is_default','value' => $attribute->order,'checked' => $attribute->is_default,'single' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'related_attribute_is_default','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->order),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->is_default),'single' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9166fadad4bef341ac183689b0de8726)): ?>
<?php $attributes = $__attributesOriginal9166fadad4bef341ac183689b0de8726; ?>
<?php unset($__attributesOriginal9166fadad4bef341ac183689b0de8726); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9166fadad4bef341ac183689b0de8726)): ?>
<?php $component = $__componentOriginal9166fadad4bef341ac183689b0de8726; ?>
<?php unset($__componentOriginal9166fadad4bef341ac183689b0de8726); ?>
<?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
                <?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <input class="form-control" name="swatch-title" type="text" value="<?php echo e($attribute->title); ?>" />
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>

                <?php if(!$isNotDefaultLanguage): ?>
                    <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <input data-bb-color-picker style="display: none" name="swatch-value" type="text" value="<?php echo e($attribute->color); ?>" />
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php if (isset($component)) { $__componentOriginal76cffb64887e6cc5d66bf632725c28d8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76cffb64887e6cc5d66bf632725c28d8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.image','data' => ['allowThumb' => true,'name' => 'swatch-image','value' => $attribute->image,'action' => 'select-image','allowAddFromUrl' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['allow-thumb' => true,'name' => 'swatch-image','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attribute->image),'action' => 'select-image','allow-add-from-url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal76cffb64887e6cc5d66bf632725c28d8)): ?>
<?php $attributes = $__attributesOriginal76cffb64887e6cc5d66bf632725c28d8; ?>
<?php unset($__attributesOriginal76cffb64887e6cc5d66bf632725c28d8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal76cffb64887e6cc5d66bf632725c28d8)): ?>
<?php $component = $__componentOriginal76cffb64887e6cc5d66bf632725c28d8; ?>
<?php unset($__componentOriginal76cffb64887e6cc5d66bf632725c28d8); ?>
<?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <a href="javascript:(0)" class="remove-item text-decoration-none text-danger">
                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-trash'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
                <?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6776c17865a79e242405889703595892)): ?>
<?php $attributes = $__attributesOriginal6776c17865a79e242405889703595892; ?>
<?php unset($__attributesOriginal6776c17865a79e242405889703595892); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6776c17865a79e242405889703595892)): ?>
<?php $component = $__componentOriginal6776c17865a79e242405889703595892; ?>
<?php unset($__componentOriginal6776c17865a79e242405889703595892); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4d7e52336690b9ea120a6913f2c28a6b)): ?>
<?php $attributes = $__attributesOriginal4d7e52336690b9ea120a6913f2c28a6b; ?>
<?php unset($__attributesOriginal4d7e52336690b9ea120a6913f2c28a6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4d7e52336690b9ea120a6913f2c28a6b)): ?>
<?php $component = $__componentOriginal4d7e52336690b9ea120a6913f2c28a6b; ?>
<?php unset($__componentOriginal4d7e52336690b9ea120a6913f2c28a6b); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal44c83e2eb600bf127a623cda69e3ac8b)): ?>
<?php $attributes = $__attributesOriginal44c83e2eb600bf127a623cda69e3ac8b; ?>
<?php unset($__attributesOriginal44c83e2eb600bf127a623cda69e3ac8b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44c83e2eb600bf127a623cda69e3ac8b)): ?>
<?php $component = $__componentOriginal44c83e2eb600bf127a623cda69e3ac8b; ?>
<?php unset($__componentOriginal44c83e2eb600bf127a623cda69e3ac8b); ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/product-attributes/sets/list.blade.php ENDPATH**/ ?>