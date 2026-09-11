<!DOCTYPE html>
<html <?php echo Theme::htmlAttributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge"
    >
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <meta
        name="format-detection"
        content="telephone=no"
    >
    <meta
        name="apple-mobile-web-app-capable"
        content="yes"
    >

    <?php if($favicon = theme_option('favicon')): ?>
        <?php echo e(Html::favicon(
            RvMedia::getImageUrl($favicon),
            ['type' => rescue(fn () => RvMedia::getMimeType($favicon), 'image/x-icon')]
        )); ?>

    <?php endif; ?>

    <meta
        name="csrf-token"
        content="<?php echo e(csrf_token()); ?>"
    >

    <title><?php echo e(page_title()->getTitle(false)); ?></title>

    <style>
        :root {
            --primary-font: '<?php echo e(theme_option('primary_font', 'Muli')); ?>', sans-serif;
            --primary-color: <?php echo e(theme_option('primary_color', '#fab528')); ?>;
        }
    </style>

    <?php echo $__env->yieldContent('header', view(MarketplaceHelper::viewPath('vendor-dashboard.layouts.header'))); ?>

    <script>
        window.siteUrl = "<?php echo e(BaseHelper::getHomepageUrl()); ?>";
        window.siteEditorLocale = "<?php echo e(apply_filters('cms_site_editor_locale', App::getLocale())); ?>";
    </script>

    <script type="text/javascript">
        'use strict';
        window.trans = Object.assign(window.trans || {}, JSON.parse('<?php echo addslashes(json_encode(trans('plugins/marketplace::marketplace'))); ?>'));

        var BotbleVariables = BotbleVariables || {};
        BotbleVariables.languages = {
            tables: <?php echo json_encode(trans('core/base::tables'), JSON_HEX_APOS); ?>,
            notices_msg: <?php echo json_encode(trans('core/base::notices'), JSON_HEX_APOS); ?>,
            pagination: <?php echo json_encode(trans('pagination'), JSON_HEX_APOS); ?>,
            system: {
                character_remain: '<?php echo e(trans('plugins/marketplace::marketplace.forms.character_remain')); ?>'
            }
        };

        var RV_MEDIA_URL = {
            'media_upload_from_editor': '<?php echo e(route('marketplace.vendor.upload-from-editor')); ?>'
        };
    </script>

    <?php echo $__env->yieldPushContent('header'); ?>
</head>

<body <?php if(session('locale_direction', 'ltr') == 'rtl'): ?> dir="rtl" <?php endif; ?>>

<?php echo $__env->yieldContent('body', view(MarketplaceHelper::viewPath('vendor-dashboard.layouts.body'))); ?>

<?php echo $__env->yieldPushContent('pre-footer'); ?>

<?php if(session()->has('status') ||
        session()->has('success_msg') ||
        session()->has('error_msg') ||
        (isset($errors) && $errors->count() > 0) ||
        isset($error_msg)): ?>
    <script type="text/javascript">
        'use strict';
        window.noticeMessages = [];
        <?php if(session()->has('success_msg')): ?>
        noticeMessages.push({
            'type': 'success',
            'message': "<?php echo addslashes(session('success_msg')); ?>"
        });
        <?php endif; ?>
        <?php if(session()->has('status')): ?>
        noticeMessages.push({
            'type': 'success',
            'message': "<?php echo addslashes(session('status')); ?>"
        });
        <?php endif; ?>
        <?php if(session()->has('error_msg')): ?>
        noticeMessages.push({
            'type': 'error',
            'message': "<?php echo addslashes(session('error_msg')); ?>"
        });
        <?php endif; ?>
        <?php if(isset($error_msg)): ?>
        noticeMessages.push({
            'type': 'error',
            'message': "<?php echo addslashes($error_msg); ?>"
        });
        <?php endif; ?>
        <?php if(isset($errors)): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        noticeMessages.push({
            'type': 'error',
            'message': "<?php echo addslashes($error); ?>"
        });
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </script>
<?php endif; ?>

<?php echo Assets::renderFooter(); ?>

<?php echo $__env->yieldContent('footer', view(MarketplaceHelper::viewPath('vendor-dashboard.layouts.footer'))); ?>

<?php echo $__env->yieldPushContent('scripts'); ?>
<?php echo $__env->yieldPushContent('footer'); ?>
</body>

</html>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/vendor-dashboard/layouts/master.blade.php ENDPATH**/ ?>