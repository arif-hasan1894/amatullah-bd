<div class="variation-form-wrapper">
    <form action="">
        <?php echo $__env->make('plugins/ecommerce::products.partials.product-attribute-sets', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <?php echo $__env->make('plugins/ecommerce::products.partials.general', [
            'product' => $product,
            'originalProduct' => $originalProduct,
            'isVariation' => true,
        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <div class="variation-images">
            <?php echo Form::customImages('images', isset($product) ? $product->images : []); ?>

        </div>
    </form>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/vendor-dashboard/products/product-variation-form.blade.php ENDPATH**/ ?>