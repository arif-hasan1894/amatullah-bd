<?php if($config['name'] || $config['content']): ?>
    <div class="panel panel-default">
        <?php if($config['name']): ?>
            <div class="panel-title">
                <h3><?php echo BaseHelper::clean($config['name']); ?></h3>
            </div>
        <?php endif; ?>

        <?php if($config['content']): ?>
            <div class="panel-content">
                <div><?php echo BaseHelper::clean(shortcode()->compile($config['content'])); ?></div>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/widget/resources/views/widgets/text/frontend.blade.php ENDPATH**/ ?>