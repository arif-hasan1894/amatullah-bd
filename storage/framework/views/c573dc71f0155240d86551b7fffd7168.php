<table style="width: 100%; border-collapse: collapse; margin: 20px 0;">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr style="border-bottom: 1px solid #e5e7eb;">
            <td style="padding: 16px 8px; vertical-align: middle;">
                <div style="font-size: 15px; font-weight: 500; color: #111827; margin-bottom: 8px;">
                    <?php echo e($product->name); ?>

                </div>
                <a href="<?php echo e(route('public.product.review', $product->slug)); ?>" style="font-size: 13px; color: #2563eb; text-decoration: none;">
                    <?php echo e(trans('plugins/ecommerce::review.write_review_button')); ?> →
                </a>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/emails/partials/product-review-list.blade.php ENDPATH**/ ?>