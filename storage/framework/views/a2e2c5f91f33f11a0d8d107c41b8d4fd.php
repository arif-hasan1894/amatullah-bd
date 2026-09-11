<?php echo '<' . '?' . 'xml version="1.0" encoding="UTF-8"?>' . "\n"; ?>

<?php if(null != $style): ?>
    <?php echo '<' . '?' . 'xml-stylesheet href="' . asset($style) . '" type="text/xsl"?>' . "\n"; ?>

<?php endif; ?>
<urlset
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:news="http://www.google.com/schemas/sitemap-news/0.9"
    xmlns:xhtml="http://www.w3.org/1999/xhtml"
>
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <url>
            <loc><?php echo e($item['loc']); ?></loc>
            <?php if($item['lastmod'] !== null): ?>
                <lastmod><?php echo e(date('Y-m-d\TH:i:sP', strtotime($item['lastmod']))); ?></lastmod>
            <?php endif; ?>
            <?php if(!empty($item['alternates'])): ?>
                <?php $__currentLoopData = $item['alternates']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alternate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <xhtml:link
                        href="<?php echo e($alternate['url']); ?>"
                        rel="alternate"
                        media="<?php echo e($alternate['media']); ?>"
                    />
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <news:news>
                <news:publication>
                    <news:name><?php echo e($item['googlenews']['sitename']); ?></news:name>
                    <news:language><?php echo e($item['googlenews']['language']); ?></news:language>
                </news:publication>
                <news:publication_date>
                    <?php echo e(date('Y-m-d\TH:i:sP', strtotime($item['googlenews']['publication_date']))); ?>

                </news:publication_date>
                <news:title><?php echo e($item['title']); ?></news:title>
                <?php if(isset($item['googlenews']['access'])): ?>
                    <news:access><?php echo e($item['googlenews']['access']); ?></news:access>
                <?php endif; ?>

                <?php if(isset($item['googlenews']['keywords'])): ?>
                    <news:keywords><?php echo e(implode(',', $item['googlenews']['keywords'])); ?></news:keywords>
                <?php endif; ?>

                <?php if(isset($item['googlenews']['genres'])): ?>
                    <news:genres><?php echo e(implode(',', $item['googlenews']['genres'])); ?></news:genres>;
                <?php endif; ?>

                <?php if(isset($item['googlenews']['stock_tickers'])): ?>
                    <news:stock_tickers><?php echo e(implode(',', $item['googlenews']['stock_tickers'])); ?></news:stock_tickers>
                <?php endif; ?>
            </news:news>
        </url>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</urlset>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/sitemap/resources/views/google-news.blade.php ENDPATH**/ ?>