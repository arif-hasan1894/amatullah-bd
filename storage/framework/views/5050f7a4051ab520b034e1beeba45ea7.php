<?php echo '<' . '?' . 'xml version="1.0" encoding="UTF-8"?>' . "\n"; ?>

<rdf:RDF
    xmlns="http://rorweb.com/0.1/"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
>
    <Resource rdf:about="sitemap">
        <title><?php echo e($channel['title']); ?></title>
        <url><?php echo e($channel['link']); ?></url>
        <type>sitemap</type>
    </Resource>
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <Resource>
            <url><?php echo e($item['loc']); ?></url>
            <title><?php echo e($item['title']); ?></title>
            <updated><?php echo e(date('Y-m-d\TH:i:sP', strtotime($item['lastmod']))); ?></updated>
            <updatePeriod><?php echo e($item['freq']); ?></updatePeriod>
            <sortOrder><?php echo e($item['priority']); ?></sortOrder>
            <resourceOf rdf:resource="sitemap" />
        </Resource>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</rdf:RDF>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/sitemap/resources/views/ror-rdf.blade.php ENDPATH**/ ?>