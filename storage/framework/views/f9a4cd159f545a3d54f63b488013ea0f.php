<div class="loading">
    <div class="half-circle-spinner">
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
    </div>
</div>

<input type="hidden" name="page" data-value="<?php echo e($products->currentPage()); ?>">
<input type="hidden" name="q" value="<?php echo e(BaseHelper::stringify(request()->query('q'))); ?>">

<div class="ps-shopping-product">
    <?php if($products->isNotEmpty()): ?>
        <div class="row">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="ps-product">
                        <?php echo Theme::partial('product-item', ['product' => $product, 'lazy' => false]); ?>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php else: ?>
        <div class="alert alert-warning mt-4 w-100" role="alert">
            <?php echo e(__(':total Product found', ['total' => 0])); ?>

        </div>
    <?php endif; ?>
</div>
<div class="ps-pagination">
    <?php echo $products->withQueryString()->links(); ?>

</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/views/ecommerce/includes/product-items-grid.blade.php ENDPATH**/ ?>