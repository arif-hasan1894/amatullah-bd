<?php if(! empty($pageName)): ?>
    <div class="bb-product-listing-page-description">
        <div class="bb-block__header">
            <h1 class="h1"><?php echo e($pageName); ?></h1>
        </div>

        <?php if(! empty($pageDescription)): ?>
            <div class="bb-block__content ck-content">
                <?php echo $pageDescription; ?>

            </div>
        <?php endif; ?>
    </div>
<?php else: ?>
    <div class="bb-product-listing-page-description"></div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/includes/product-listing-page-description.blade.php ENDPATH**/ ?>