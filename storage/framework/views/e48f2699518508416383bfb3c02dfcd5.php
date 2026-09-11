<aside class="widget widget--blog widget--search">
    <form class="ps-form--widget-search" action="<?php echo e(route('public.search')); ?>" method="GET">
        <input class="form-control" name="q" value="<?php echo e(BaseHelper::stringify(request()->query('q'))); ?>" type="text" placeholder="<?php echo e(__('Search...')); ?>">
        <button type="submit" aria-label="<?php echo e(__('Search')); ?>"><i class="icon-magnifier" aria-hidden="true"></i></button>
    </form>
</aside>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/widgets/blog-search/templates/frontend.blade.php ENDPATH**/ ?>