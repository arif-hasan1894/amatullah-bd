<tr class="shipping-rule-item-<?php echo e($item->id); ?>">
    <th scope="row"><?php echo e($item->id); ?></th>
    <td><?php echo e($item->name ?: $item->name_item); ?></td>
    <?php if($item->state_name): ?>
        <td><?php echo e($item->state_name); ?></td>
    <?php else: ?>
        <td>&mdash;</td>
    <?php endif; ?>
    <?php if($item->city_name): ?>
        <td><?php echo e($item->city_name); ?></td>
    <?php else: ?>
        <td>&mdash;</td>
    <?php endif; ?>
    <td>
        <?php if($item->zip_code_from): ?>
            <?php if($item->zip_code_to && $item->zip_code_from !== $item->zip_code_to): ?>
                <?php echo e($item->zip_code_from); ?> - <?php echo e($item->zip_code_to); ?>

            <?php else: ?>
                <?php echo e($item->zip_code_from); ?>

            <?php endif; ?>
        <?php elseif($item->zip_code): ?>
            <?php echo e($item->zip_code); ?>

        <?php else: ?>
            &mdash;
        <?php endif; ?>
    </td>
    <td>
        <?php echo e(($item->adjustment_price < 0 ? '-' : '') . format_price($item->adjustment_price)); ?>

        <?php echo Html::tag('small', '(' . format_price(max($item->adjustment_price + $item->shippingRule->price, 0)) . ')', [
            'class' => 'text-info ms-1',
        ]); ?>

    </td>
    <td>
        <?php if($item->is_enabled): ?>
            <?php echo Html::tag('span', trans('core/base::base.yes'), ['class' => 'text-primary']); ?>

        <?php else: ?>
            <?php echo Html::tag('span', trans('core/base::base.no'), ['class' => 'text-secondary']); ?>

        <?php endif; ?>
    </td>
    <td><?php echo e(BaseHelper::formatDate($item->created_at)); ?></td>
    <?php if($hasOperations): ?>
        <td class="text-center">
            <?php if(Auth::user()->hasPermission('ecommerce.shipping-rule-items.edit')): ?>
                <button
                    class="btn btn-icon btn-sm btn-primary px-2 py-1 btn-shipping-rule-item-trigger"
                    data-url="<?php echo e(route('ecommerce.shipping-rule-items.edit', $item->id)); ?>"
                    type="button"
                >
                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-pencil'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                </button>
            <?php endif; ?>

            <?php if(Auth::user()->hasPermission('ecommerce.shipping-rule-items.destroy')): ?>
                <button
                    class="btn btn-icon btn-sm btn-danger px-2 py-1 btn-confirm-delete-rule-item-modal-trigger"
                    data-section="<?php echo e(route('ecommerce.shipping-rule-items.destroy', $item->id)); ?>"
                    data-name="<?php echo e($item->name ?: $item->name_item); ?>"
                    type="button"
                >
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
                </button>
            <?php endif; ?>
        </td>
    <?php endif; ?>
</tr>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/shipping/items/table-item.blade.php ENDPATH**/ ?>