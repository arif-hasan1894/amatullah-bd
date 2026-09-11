<?php echo Theme::partial('header'); ?>

<main>
    <div class="ps-breadcrumb">
        <div class="ps-container">
            <?php echo Theme::partial('breadcrumbs'); ?>

        </div>
    </div>

    <div class="ps-container">
        <div class="mt-40 mb-40">
            <?php echo Theme::content(); ?>

        </div>
    </div>
</main>

<?php echo Theme::partial('footer'); ?>

<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/layouts/default.blade.php ENDPATH**/ ?>