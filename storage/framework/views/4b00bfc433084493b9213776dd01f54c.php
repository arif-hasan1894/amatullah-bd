<div
    class="table-shipping-rule-items table-responsive"
    data-url="<?php echo e(route('ecommerce.shipping-rule-items.items', $rule->id)); ?>"
>
    <table class="table table-striped table-bordered mt-2 table-shipping-rule-<?php echo e($rule->id); ?>">
        <?php
            $orderBy = BaseHelper::stringify(request()->input('order_by'));
            $orderDir = BaseHelper::stringify(request()->input('order_dir'));
            $columns = [
                'id' => [
                    'title' => '#',
                    'width' => 0,
                ],
                'name' => [
                    'title' => trans('plugins/ecommerce::shipping.rule.item.tables.name'),
                ],
                'state' => [
                    'title' => trans('plugins/ecommerce::shipping.rule.item.tables.state'),
                ],
                'city' => [
                    'title' => trans('plugins/ecommerce::shipping.rule.item.tables.city'),
                ],
                'zip_code' => [
                    'title' => trans('plugins/ecommerce::shipping.rule.item.tables.zip_range'),
                ],
                'adjustment_price' => [
                    'title' => trans('plugins/ecommerce::shipping.rule.item.tables.adjustment_price'),
                ],
                'is_enabled' => [
                    'title' => trans('plugins/ecommerce::shipping.rule.item.tables.is_enabled'),
                ],
                'created_at' => [
                    'title' => trans('core/base::tables.created_at'),
                    'width' => '100',
                ],
                'operations' => [
                    'title' => trans('core/base::tables.operations'),
                    'width' => '120',
                    'class' => 'text-center',
                    'order' => false,
                ],
            ];
            $hasOperations = Auth::user()->hasAnyPermission(['ecommerce.shipping-rule-items.edit', 'ecommerce.shipping-rule-items.destroy']);
            if (!$hasOperations) {
                Arr::forget($columns, 'operations');
            }
        ?>
        <thead>
            <tr>
                <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th
                        class="<?php echo e(Arr::get($column, 'class')); ?>"
                        scope="col"
                        width="<?php echo e(Arr::get($column, 'width')); ?>"
                        <?php if(Arr::get($column, 'order', true)): ?> data-column="<?php echo e($key); ?>"
                            data-dir="<?php echo e($orderBy == $key ? ($orderDir == 'DESC' ? 'DESC' : 'ASC') : ''); ?>" <?php endif; ?>
                    >
                        <span><?php echo e(Arr::get($column, 'title')); ?></span>
                    </th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($total)): ?>
                <?php $__empty_1 = true; $__currentLoopData = $items ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php echo $__env->make('plugins/ecommerce::shipping.items.table-item', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td
                            class="text-center"
                            colspan="100%"
                        >
                            <a
                                class="d-block py-4 shipping-rule-load-items p-3"
                                href="<?php echo e(route('ecommerce.shipping-rule-items.items', $rule->id)); ?>"
                            >
                                <span><?php echo e(trans('plugins/ecommerce::shipping.rule.item.load_data_table', ['total' => $total])); ?></span>
                            </a>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endif; ?>
            <tr class="tr-no-data">
                <td colspan="100%">
                    <div class="dashboard_widget_msg">
                        <p
                            class="smiley"
                            aria-hidden="true"
                        ></p>
                        <p><?php echo e($message ?? trans('core/base::tables.no_data')); ?></p>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <?php if(
        !empty($items) &&
            $items instanceof Illuminate\Pagination\LengthAwarePaginator &&
            $items->withQueryString() &&
            ($limit = $items->perPage())): ?>
        <div class="row g-0 mt-3">
            <div class="col-auto">
                <div class="number-record">
                    <input
                        class="form-control numb pe-1"
                        type="number"
                        value="<?php echo e($limit); ?>"
                        step="5"
                        min="5"
                        max="<?php echo e($items->total()); ?>"
                    >
                </div>
            </div>
            <div class="col">
                <div class="d-flex justify-content-end ">
                    <?php echo $items->links('plugins/ecommerce::shipping.items.pagination'); ?>

                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/shipping/items/table.blade.php ENDPATH**/ ?>