<?php
    Theme::layout('blog-sidebar')
?>

<?php if($posts->count() > 0): ?>
    <?php echo $__env->make(Theme::getThemeNamespace() . '::views.loop', compact('posts'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/views/category.blade.php ENDPATH**/ ?>