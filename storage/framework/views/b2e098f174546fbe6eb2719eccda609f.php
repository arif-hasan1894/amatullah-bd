<?php
    Theme::layout('blog-sidebar')
?>

<?php if($posts->isNotEmpty()): ?>
    <?php echo $__env->make(Theme::getThemeNamespace() . '::views.loop', compact('posts'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/views/tag.blade.php ENDPATH**/ ?>