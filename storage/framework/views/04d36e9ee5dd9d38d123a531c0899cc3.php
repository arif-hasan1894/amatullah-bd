<?php
    use Botble\Ecommerce\Models\SpecificationTable;

    $version = EcommerceHelper::getAssetVersion();

    Theme::asset()->add('front-ecommerce-css', 'vendor/core/plugins/ecommerce/css/front-ecommerce.css', version: $version);
    Theme::asset()->add('front-compare-css', 'vendor/core/plugins/ecommerce/css/front-compare.css', version: $version);
    Theme::asset()->container('footer')->add('front-compare-js', 'vendor/core/plugins/ecommerce/js/front-compare.js', ['jquery'], version: $version);

    $hasProducts = $products->isNotEmpty();
    $hasSpecGroups = ($specGroups ?? collect())->isNotEmpty();
    $hasAttributeSets = $attributeSets->isNotEmpty();
    $maxProducts = $maxProducts ?? 4;
    $emptySlots = max(0, $maxProducts - $products->count());
    $shareUrl = $shareUrl ?? route('public.compare');
?>

<section class="compare-area pt-50 pb-50">
    <div class="container">
        <?php if($hasProducts): ?>
            <header class="compare-header mb-4">
                <h1 class="compare-page-title">
                    <?php echo e(trans('plugins/ecommerce::products.compare.heading')); ?>

                    <?php if($products->count() >= 2): ?>
                        <span class="compare-page-title-products">
                            <?php echo e($products->pluck('name')->implode(' ' . trans('plugins/ecommerce::products.compare.vs_separator') . ' ')); ?>

                        </span>
                    <?php endif; ?>
                </h1>
            </header>

            <div class="compare-toolbar d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
                <div class="compare-toolbar-info text-muted small">
                    <?php echo e(trans('plugins/ecommerce::products.compare.slot_count', ['count' => $products->count(), 'max' => $maxProducts])); ?>

                </div>
                <div class="compare-toolbar-actions d-flex flex-wrap gap-2 align-items-center">
                    <?php if($hasSpecGroups || $hasAttributeSets): ?>
                        <label class="compare-diff-toggle d-inline-flex align-items-center gap-2 mb-0">
                            <input type="checkbox" class="form-check-input mt-0" data-bb-toggle="compare-diff-only">
                            <span><?php echo e(trans('plugins/ecommerce::products.compare.highlight_differences')); ?></span>
                        </label>
                    <?php endif; ?>
                    <?php if($products->count() >= 2): ?>
                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bb-toggle="compare-copy-link" data-url="<?php echo e(url($shareUrl)); ?>">
                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-link'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                            <?php echo e(trans('plugins/ecommerce::products.compare.copy_share_link')); ?>

                        </button>
                    <?php endif; ?>
                </div>
            </div>

            <div class="compare-table table-responsive">
                <table
                    class="table compare-grid text-center"
                    data-max-products="<?php echo e($maxProducts); ?>"
                    data-copy-success-text="<?php echo e(trans('plugins/ecommerce::products.compare.link_copied')); ?>"
                >
                    <colgroup>
                        <col class="compare-col-label">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <col class="compare-col-product">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php for($i = 0; $i < $emptySlots; $i++): ?>
                            <col class="compare-col-empty">
                        <?php endfor; ?>
                    </colgroup>

                    <thead class="compare-sticky-head">
                    <tr>
                        <th class="compare-row-label" aria-label="<?php echo e(trans('plugins/ecommerce::products.product')); ?>"></th>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td class="compare-product-cell" data-product-id="<?php echo e($product->id); ?>">
                                <button
                                    type="button"
                                    class="compare-product-remove"
                                    data-bb-toggle="remove-from-compare"
                                    data-url="<?php echo e(route('public.compare.remove', $product->id)); ?>"
                                    aria-label="<?php echo e(trans('plugins/ecommerce::ecommerce.remove')); ?>"
                                    title="<?php echo e(trans('plugins/ecommerce::ecommerce.remove')); ?>"
                                >
                                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-x'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                <div class="compare-thumb">
                                    <a href="<?php echo e($product->url); ?>" tabindex="-1">
                                        <?php echo e(RvMedia::image($product->image, $product->name, 'thumb')); ?>

                                    </a>
                                </div>
                                <h4 class="compare-product-title">
                                    <a href="<?php echo e($product->url); ?>"><?php echo e($product->name); ?></a>
                                </h4>
                                <div class="compare-product-price">
                                    <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-price'), [
                                        'priceWrapperClassName' => 'compare-price',
                                        'priceClassName' => '',
                                        'priceOriginalWrapperClassName' => '',
                                        'priceOriginalClassName' => 'old-price',
                                    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                </div>
                                <?php
                                    $savingsPercent = $product->price > 0 && $product->front_sale_price < $product->price
                                        ? (int) round((($product->price - $product->front_sale_price) / $product->price) * 100)
                                        : 0;
                                ?>
                                <?php if($savingsPercent >= 1): ?>
                                    <div class="compare-savings-badge" aria-label="<?php echo e(trans('plugins/ecommerce::products.compare.savings_aria', ['percent' => $savingsPercent])); ?>">
                                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-discount-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                        <?php echo e(trans('plugins/ecommerce::products.compare.savings_off', ['percent' => $savingsPercent])); ?>

                                    </div>
                                <?php endif; ?>
                                <div class="compare-product-stock">
                                    <span class="<?php echo \Illuminate\Support\Arr::toCssClasses(['compare-stock-badge', 'compare-stock-out' => $product->isOutOfStock(), 'compare-stock-in' => ! $product->isOutOfStock()]); ?>">
                                        <span class="compare-stock-dot" aria-hidden="true"></span>
                                        <?php if($product->isOutOfStock()): ?>
                                            <?php echo e(trans('plugins/ecommerce::ecommerce.out_of_stock')); ?>

                                        <?php else: ?>
                                            <?php echo e(trans('plugins/ecommerce::ecommerce.in_stock')); ?>

                                        <?php endif; ?>
                                    </span>
                                </div>
                                <div class="compare-product-actions">
                                    <button
                                        type="button"
                                        class="btn btn-primary w-100"
                                        data-bb-toggle="add-to-cart"
                                        data-url="<?php echo e(route('public.cart.add-to-cart')); ?>"
                                        data-id="<?php echo e($product->original_product->id); ?>"
                                        <?php echo EcommerceHelper::jsAttributes('add-to-cart', $product); ?>

                                    >
                                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-shopping-cart-plus'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                        <?php echo e(trans('plugins/ecommerce::ecommerce.add_to_cart_1')); ?>

                                    </button>
                                </div>
                            </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php for($i = 0; $i < $emptySlots; $i++): ?>
                            <td class="compare-empty-slot">
                                <?php echo $__env->make(EcommerceHelper::viewPath('includes.compare-add-slot'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            </td>
                        <?php endfor; ?>
                    </tr>
                    </thead>

                    <tbody>
                    <?php if($hasSpecGroups): ?>
                        <?php $__currentLoopData = $specGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="compare-group-row">
                                <th colspan="<?php echo e(1 + $maxProducts); ?>" class="compare-group-title text-start">
                                    <?php echo e($group['group']->name); ?>

                                </th>
                            </tr>
                            <?php $__currentLoopData = $group['attributes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="compare-spec-row" data-spec-row>
                                    <th class="compare-row-label text-start"><?php echo e($attribute->name); ?></th>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $data = SpecificationTable::getAttributeDisplayData($product, $attribute);
                                            $value = trim((string) ($data['displayValue'] ?? ''));
                                        ?>
                                        <td class="compare-spec-value" data-spec-value="<?php echo e($value); ?>">
                                            <?php if($value !== ''): ?>
                                                <?php echo BaseHelper::clean($value); ?>

                                            <?php else: ?>
                                                <span class="text-muted">—</span>
                                            <?php endif; ?>
                                        </td>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php for($i = 0; $i < $emptySlots; $i++): ?>
                                        <td class="compare-empty-cell text-muted">—</td>
                                    <?php endfor; ?>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                    <?php if($hasAttributeSets): ?>
                        <tr class="compare-group-row">
                            <th colspan="<?php echo e(1 + $maxProducts); ?>" class="compare-group-title text-start">
                                <?php echo e(trans('plugins/ecommerce::products.compare.additional_attributes')); ?>

                            </th>
                        </tr>
                        <?php $__currentLoopData = $attributeSets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attributeSet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="compare-spec-row" data-spec-row>
                                <th class="compare-row-label text-start"><?php echo e($attributeSet->title); ?></th>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $rendered = trim((string) render_product_attributes_view_only($product, $attributeSet));
                                    ?>
                                    <td class="compare-spec-value" data-spec-value="<?php echo e(strip_tags($rendered)); ?>">
                                        <?php if($rendered !== ''): ?>
                                            <?php echo $rendered; ?>

                                        <?php else: ?>
                                            <span class="text-muted">—</span>
                                        <?php endif; ?>
                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php for($i = 0; $i < $emptySlots; $i++): ?>
                                    <td class="compare-empty-cell text-muted">—</td>
                                <?php endfor; ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                    <tr class="compare-spec-row" data-spec-row>
                        <th class="compare-row-label text-start"><?php echo e(trans('plugins/ecommerce::products.sku')); ?></th>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td class="compare-spec-value"><?php echo e($product->sku ? '#' . $product->sku : '—'); ?></td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php for($i = 0; $i < $emptySlots; $i++): ?>
                            <td class="compare-empty-cell text-muted">—</td>
                        <?php endfor; ?>
                    </tr>

                    <?php if(EcommerceHelper::isReviewEnabled()): ?>
                        <tr class="compare-spec-row" data-spec-row>
                            <th class="compare-row-label text-start"><?php echo e(trans('plugins/ecommerce::review.rating')); ?></th>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <td class="compare-spec-value">
                                    <?php if(! EcommerceHelper::hideRatingWhenNoReviews() || $product->reviews_count > 0): ?>
                                        <div class="compare-rating d-flex justify-content-center">
                                            <?php echo $__env->make(EcommerceHelper::viewPath('includes.rating-star'), ['avg' => $product->reviews_avg, 'size' => 80], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                        </div>
                                    <?php else: ?>
                                        <span class="text-muted">—</span>
                                    <?php endif; ?>
                                </td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php for($i = 0; $i < $emptySlots; $i++): ?>
                                <td class="compare-empty-cell text-muted">—</td>
                            <?php endfor; ?>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <?php echo $__env->make(EcommerceHelper::viewPath('includes.empty-state'), [
                'icon' => 'ti ti-arrows-left-right',
                'title' => trans('plugins/ecommerce::ecommerce.your_compare_list_is_empty'),
                'description' => trans('plugins/ecommerce::products.compare.empty_description'),
                'label' => trans('plugins/ecommerce::products.compare.browse_products'),
            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endif; ?>

        <?php if($hasProducts && $emptySlots > 0): ?>
            <?php echo $__env->make(EcommerceHelper::viewPath('includes.compare-picker-modal'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endif; ?>
    </div>
</section>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/compare.blade.php ENDPATH**/ ?>