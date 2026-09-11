<?php echo Theme::partial('header'); ?>

<main>
    <div class="ps-breadcrumb">
        <div class="ps-container">
            <?php echo Theme::partial('breadcrumbs'); ?>

        </div>
    </div>

    <?php echo Theme::content(); ?>

</main>

<?php echo Theme::partial('footer'); ?>

<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/layouts/full-width.blade.php ENDPATH**/ ?>