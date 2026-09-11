<?php if(isset($products) && $products): ?>
    <p><?php echo e(__('Product(s)')); ?>:</p>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $cartItem = $product->cartItem;
        ?>

        <?php if(!empty($product)): ?>
            <?php echo $__env->make('plugins/ecommerce::orders.checkout.product', [
                'product' => $product,
                'cartItem' => $cartItem,
                'key' => $cartItem->rowId,
            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <hr class="border-dark-subtle" />
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/orders/checkout/products.blade.php ENDPATH**/ ?>