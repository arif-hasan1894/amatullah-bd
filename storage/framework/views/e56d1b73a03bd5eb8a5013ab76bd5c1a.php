<?php echo '<' . '?' . 'xml version="1.0" encoding="UTF-8"?>' . "\n"; ?>

<?php if(null != $style): ?>
    <?php echo '<' . '?' . 'xml-stylesheet href="' . asset($style) . '" type="text/xsl"?>' . "\n"; ?>

<?php endif; ?>
<urlset
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:mobile="http://www.google.com/schemas/sitemap-mobile/1.0"
>
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <url>
            <loc><?php echo e($item['loc']); ?></loc>
            <mobile:mobile />
        </url>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</urlset>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/sitemap/resources/views/xml-mobile.blade.php ENDPATH**/ ?>