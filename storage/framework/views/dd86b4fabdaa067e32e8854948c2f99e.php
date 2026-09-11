<?php echo '<' . '?' . 'xml version="1.0" encoding="UTF-8"?>' . "\n"; ?>

<rss
    version="2.0"
    xmlns:ror="http://rorweb.com/0.1/"
>
    <channel>
        <title><?php echo e($channel['title']); ?></title>
        <link><?php echo e($channel['link']); ?></link>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <item>
                <link><?php echo e($item['loc']); ?></link>
                <title><?php echo e($item['title']); ?></title>
                <ror:updated><?php echo e(date('Y-m-d\TH:i:sP', strtotime($item['lastmod']))); ?></ror:updated>
                <ror:updatePeriod><?php echo e($item['freq']); ?></ror:updatePeriod>
                <ror:sortOrder><?php echo e($item['priority']); ?></ror:sortOrder>
                <ror:resourceOf>sitemap</ror:resourceOf>
            </item>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </channel>
</rss>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/sitemap/resources/views/ror-rss.blade.php ENDPATH**/ ?>