<div class="row row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col">
            <?php echo $__env->make(EcommerceHelper::viewPath('includes.product-item'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php if($products instanceof \Illuminate\Pagination\LengthAwarePaginator && $products->hasPages()): ?>
    <div class="d-flex justify-content-center mt-4">
        <?php echo $products->withQueryString()->links(); ?>

    </div>
<?php endif; ?>

<?php echo $__env->make(EcommerceHelper::viewPath('includes.quick-shop-modal'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make(EcommerceHelper::viewPath('includes.quick-view-modal'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/includes/product-items.blade.php ENDPATH**/ ?>