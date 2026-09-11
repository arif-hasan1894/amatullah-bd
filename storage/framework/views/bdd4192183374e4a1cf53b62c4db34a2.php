<?php if (isset($component)) { $__componentOriginal4fdb92edf089f19cd17d37829580c9a6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4fdb92edf089f19cd17d37829580c9a6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::card.body.index','data' => ['class' => 'p-0']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::card.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'p-0']); ?>
    <div class="list-search-data">
        <div class="list-group list-group-flush overflow-auto" style="max-height: 25rem;">
            <?php if(!$availableProducts->isEmpty()): ?>
                <?php $__currentLoopData = $availableProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $availableProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a
                        href="javascript:void(0);"
                        class="<?php echo \Illuminate\Support\Arr::toCssClasses(['list-group-item list-group-item-action', 'selectable-item' => !$includeVariation]); ?>"
                        <?php if(!$includeVariation): ?>
                            data-name="<?php echo e($availableProduct->name); ?>"
                            data-image="<?php echo e(RvMedia::getImageUrl($availableProduct->image, 'thumb', false, RvMedia::getDefaultImage())); ?>"
                            data-id="<?php echo e($availableProduct->id); ?>"
                            data-url="<?php echo e(route('products.edit', $availableProduct->id)); ?>"
                            data-price="<?php echo e($availableProduct->price); ?>"
                        <?php endif; ?>
                    >
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="avatar" style="background-image: url('<?php echo e(RvMedia::getImageUrl($availableProduct->image, 'thumb', false, RvMedia::getDefaultImage())); ?>')"></span>
                            </div>
                            <div class="col text-truncate">
                                <h4 class="text-body d-block mb-0"><?php echo e($availableProduct->name); ?></h4>
                            </div>
                            <?php if($includeVariation): ?>
                                <div class="col-auto">
                                    <ul>
                                        <?php $__currentLoopData = $availableProduct->variations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li
                                                class="product-variant selectable-item"
                                                data-name="<?php echo e($availableProduct->name); ?>"
                                                data-image="<?php echo e(RvMedia::getImageUrl($variation->product->image, 'thumb', false, RvMedia::getDefaultImage())); ?>"
                                                data-id="<?php echo e($variation->product->id); ?>"
                                                data-url="<?php echo e(route('products.edit', $availableProduct->id)); ?>"
                                                data-price="<?php echo e($availableProduct->price); ?>"
                                            >
                                                <a
                                                    class="color_green float-start"
                                                    href="#"
                                                >
                                                <span>
                                                    <?php $__currentLoopData = $variation->variationItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $variationItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php echo e($variationItem->attribute->title); ?>

                                                        <?php if(!$loop->last): ?>
                                                            /
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </span>
                                                </a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="p-3">
                    <p class="text-muted my-0"><?php echo e(__('plugins/ecommerce::products.form.no_results')); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4fdb92edf089f19cd17d37829580c9a6)): ?>
<?php $attributes = $__attributesOriginal4fdb92edf089f19cd17d37829580c9a6; ?>
<?php unset($__attributesOriginal4fdb92edf089f19cd17d37829580c9a6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4fdb92edf089f19cd17d37829580c9a6)): ?>
<?php $component = $__componentOriginal4fdb92edf089f19cd17d37829580c9a6; ?>
<?php unset($__componentOriginal4fdb92edf089f19cd17d37829580c9a6); ?>
<?php endif; ?>

<?php if($availableProducts->hasPages()): ?>
    <?php if (isset($component)) { $__componentOriginal00609f0158ec6107e317b89bf18d2d23 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal00609f0158ec6107e317b89bf18d2d23 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::card.footer.index','data' => ['class' => 'pb-0 d-flex justify-content-end']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::card.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'pb-0 d-flex justify-content-end']); ?>
        <?php echo e($availableProducts->links()); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal00609f0158ec6107e317b89bf18d2d23)): ?>
<?php $attributes = $__attributesOriginal00609f0158ec6107e317b89bf18d2d23; ?>
<?php unset($__attributesOriginal00609f0158ec6107e317b89bf18d2d23); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal00609f0158ec6107e317b89bf18d2d23)): ?>
<?php $component = $__componentOriginal00609f0158ec6107e317b89bf18d2d23; ?>
<?php unset($__componentOriginal00609f0158ec6107e317b89bf18d2d23); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/products/partials/panel-search-data.blade.php ENDPATH**/ ?>