<section class="section--blog">
    <div class="section__content">
        <section class="section--auth">
            <div class="form__header">
                <h3><?php echo e(trans('plugins/ecommerce::products.download_product_with_external_links', ['name' => $orderProduct->product_name])); ?>

                </h3>
                <p><?php echo e(trans('plugins/ecommerce::ecommerce.you_can_now_download_it_by_clicking_the_links_belo')); ?></p>
            </div>
            <ol class="list-group list-group-numbered list-group-flush">
                <?php $__currentLoopData = $externalProductFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productFile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item">
                        <a
                            href="<?php echo e($productFile->url); ?>"
                            target="_blank"
                        ><?php echo e($productFile->file_name ?: $productFile->url); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
        </section>
    </div>
</section>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/download-external-links.blade.php ENDPATH**/ ?>