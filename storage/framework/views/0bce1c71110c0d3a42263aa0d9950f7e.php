<div class="ps-compare ps-section--shopping pt-40">
    <div class="container">
        <div class="ps-section__header">
            <h1><?php echo e(__('Compare Product')); ?></h1>
        </div>
        <div class="ps-section__content">
            <?php if($products->isNotEmpty()): ?>
                <div class="table-responsive">
                    <table class="table ps-table--compare">
                        <tbody>
                            <tr>
                                <td class="heading" rowspan="2"><?php echo e(__('Product')); ?></td>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td>
                                        <a class="js-remove-from-compare-button" href="#" data-url="<?php echo e(route('public.compare.remove', $product->id)); ?>"><?php echo e(__('Remove')); ?></a>
                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>

                            <tr>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td>
                                        <div class="ps-product--compare">
                                            <div class="ps-product__thumbnail">
                                                <a href="<?php echo e($product->original_product->url); ?>">
                                                    <?php echo RvMedia::image($product->image, $product->name, 'thumb'); ?>

                                                </a>
                                            </div>
                                            <div class="ps-product__content"><a href="<?php echo e($product->original_product->url); ?>"><?php echo BaseHelper::clean($product->name); ?></a></div>
                                        </div>
                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>

                            <?php if(EcommerceHelper::isReviewEnabled()): ?>
                                <tr>
                                    <td class="heading"><?php echo e(__('Rating')); ?></td>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <td>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width: <?php echo e($product->reviews_avg * 20); ?>%"></div>
                                                </div>
                                                <span class="rating_num">(<?php echo e($product->reviews_count); ?>)</span>
                                            </div>
                                        </td>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tr>
                            <?php endif; ?>

                            <tr>
                                <td class="heading"><?php echo e(__('Price')); ?></td>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td>
                                        <?php echo Theme::partial('product-price', [
                                            'product' => $product,
                                            'priceWrapperTag' => 'h4',
                                            'priceWrapperClass' => 'price',
                                            'showSalePercentage' => true,
                                        ]); ?>

                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>

                            <tr>
                                <td class="heading"><?php echo e(__('Description')); ?></td>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td>
                                        <?php echo BaseHelper::clean($product->description); ?>

                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>

                            <?php $__currentLoopData = $attributeSets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attributeSet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($attributeSet->is_comparable): ?>
                                    <tr>
                                        <td class="heading">
                                            <?php echo e($attributeSet->title); ?>

                                        </td>

                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $attributes = app(\Botble\Ecommerce\Repositories\Interfaces\ProductInterface::class)->getRelatedProductAttributes($product)->where('attribute_set_id', $attributeSet->id)->sortBy('order');
                                            ?>

                                            <?php if($attributes->count()): ?>
                                                <?php if($attributeSet->display_layout == 'dropdown'): ?>
                                                    <td>
                                                        <?php echo e($attributes->pluck('title')->implode(', ')); ?>

                                                    </td>
                                                <?php elseif($attributeSet->display_layout == 'text'): ?>
                                                    <td>
                                                        <div class="attribute-values">
                                                            <ul class="text-swatch attribute-swatch color-swatch">
                                                                <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <li class="attribute-swatch-item" style="display: inline-block">
                                                                        <label>
                                                                            <input class="form-control product-filter-item" type="radio" disabled>
                                                                            <span style="cursor: default"><?php echo e($attribute->title); ?></span>
                                                                        </label>
                                                                    </li>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                <?php else: ?>
                                                    <td>
                                                        <div class="attribute-values">
                                                            <ul class="visual-swatch color-swatch attribute-swatch">
                                                            <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li class="attribute-swatch-item" style="display: inline-block">
                                                                    <div class="custom-radio">
                                                                        <label>
                                                                            <input class="form-control product-filter-item" type="radio" disabled>
                                                                            <span style="<?php echo e($attribute->image ? 'background-image: url(' . RvMedia::getImageUrl($attribute->image) . ');' : 'background-color: ' . $attribute->color . ';'); ?>; cursor: default;"></span>
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <td>&mdash;</td>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php if(EcommerceHelper::isCartEnabled()): ?>
                                <tr>
                                    <td class="heading"></td>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <td>
                                            <div class="ps-product p-0 border-0">
                                                <div class="ps-product__actions mw-100 justify-content-end">
                                                    <a class="ps-btn add-to-cart-button" data-id="<?php echo e($product->id); ?>" href="#" data-url="<?php echo e(route('public.cart.add-to-cart')); ?>" <?php echo EcommerceHelper::jsAttributes('add-to-cart', $product, additional: ['data-bb-toggle' => 'none']); ?>><?php echo e(__('Add To Cart')); ?></a>
                                                </div>
                                            </div>
                                        </td>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <p class="text-center"><?php echo e(__('No products in compare list!')); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/views/ecommerce/compare.blade.php ENDPATH**/ ?>