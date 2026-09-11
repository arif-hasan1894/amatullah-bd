<dd><?php echo e($tax->company_name); ?></dd>

<dd><?php echo e($tax->company_tax_code); ?></dd>

<dd>
    <a href="mailto:<?php echo e($tax->company_email); ?>">
        <span>
            <i class="cursor-pointer mr5"></i>
            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-mail'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'cursor-pointer mr5']); ?>
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
        <span dir="ltr"><?php echo e($tax->company_email); ?></span>
    </a>
</dd>

<dd>
    <div><?php echo e($tax->company_address); ?></div>

    <div>
        <a
            class="hover-underline"
            href="https://maps.google.com/?q=<?php echo e($tax->company_address); ?>"
            target="_blank"
        ><?php echo e(trans('plugins/ecommerce::order.see_on_maps')); ?></a>
    </div>
</dd>

<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/orders/tax-information/detail.blade.php ENDPATH**/ ?>