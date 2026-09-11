<aside class="widget widget--blog widget--categories">
    <h3 class="widget__title"><?php echo e($config['name']); ?></h3>
    <div class="widget__content">
        <ul>
            <?php $__currentLoopData = app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->advancedGet(['condition' => ['status' => \Botble\Base\Enums\BaseStatusEnum::PUBLISHED], 'take' => $config['number_display'], 'with' => ['slugable'], 'withCount' => ['posts']]); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e($category->url); ?>"><?php echo e($category->name); ?> (<?php echo e($category->posts_count); ?>)</a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</aside>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/widgets/blog-categories/templates/frontend.blade.php ENDPATH**/ ?>