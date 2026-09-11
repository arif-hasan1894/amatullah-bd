<?php if($reviews->total() > 0): ?>
    <div class="bb-customer-card-list">
        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bb-customer-card-content">
                <div class="bb-customer-card-image">
                    <img
                        src="<?php echo e(RvMedia::getImageUrl($item->product->image, 'thumb', false, RvMedia::getDefaultImage())); ?>"
                        alt="<?php echo e($item->product->name); ?>"
                        class="img-fluid"
                    >
                </div>
                <div class="bb-customer-card-details">
                    <div class="bb-customer-card-name">
                        <a href="<?php echo e($item->product->url); ?>"><?php echo BaseHelper::clean($item->product->name); ?></a>
                    </div>

                    <div class="bb-customer-card-meta">
                        <div class="d-flex align-items-center mb-2">
                            <?php for($i = 1; $i <= 5; $i++): ?>
                                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-star'.e($i <= $item->star ? '-filled' : '').''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'ecommerce-icon text-warning me-1']); ?>
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
                            <?php endfor; ?>
                        </div>

                        <?php if($sku = $item->product->sku): ?>
                            <span class="d-block text-muted">(<?php echo e($sku); ?>)</span>
                        <?php endif; ?>

                        <?php if(is_plugin_active('marketplace') && $item->product->store?->id): ?>
                            <span class="d-block"><?php echo e(trans('plugins/ecommerce::customer-dashboard.sold_by')); ?>: <a href="<?php echo e($item->product->original_product->store->url); ?>" class="text-primary"><?php echo e($item->product->store->name); ?></a></span>
                        <?php endif; ?>

                        <span class="d-block text-muted"><?php echo e(trans('plugins/ecommerce::customer-dashboard.date')); ?>: <?php echo e($item->created_at->translatedFormat('M d, Y h:m')); ?></span>
                    </div>

                    <div class="bb-customer-card-description">
                        <p title="<?php echo e($item->comment); ?>"><?php echo e(Str::limit($item->comment, 200)); ?></p>
                    </div>

                    <div class="bb-customer-card-actions mt-2">
                        <?php echo Form::open([
                            'url' => route('public.reviews.destroy', $item->id),
                            'onSubmit' => 'return confirm("' . trans('plugins/ecommerce::customer-dashboard.do_you_really_want_to_delete_review') . '")',
                            'class' => 'd-inline'
                        ]); ?>

                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-outline-danger btn-sm"><?php echo e(trans('plugins/ecommerce::customer-dashboard.delete')); ?></button>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
            <?php if(!$loop->last): ?>
                <hr class="my-3">
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php else: ?>
    <div class="text-center p-4">
        <div role="alert" class="alert alert-info">
            <?php echo e(trans('plugins/ecommerce::customer-dashboard.no_reviews')); ?>

        </div>
    </div>
<?php endif; ?>

<div class="pagination tp-pagination">
    <?php echo $reviews->links(); ?>

</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/customers/product-reviews/reviewed.blade.php ENDPATH**/ ?>