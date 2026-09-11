<?php if (! $__env->hasRenderedOnce('c8bb6378-8e64-4ec2-8ada-50057c9d768d')): $__env->markAsRenderedOnce('c8bb6378-8e64-4ec2-8ada-50057c9d768d'); ?>
    <style>
        .shortcode-lazy-loading {
            position: relative;
            min-height: 12rem;
        }

        .loading-spinner {
            align-items: center;
            background: hsla(0, 0%, 100%, 0.5);
            display: flex;
            height: 100%;
            inset-inline-start: 0;
            justify-content: center;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 1;

            &:after {
                animation: loading-spinner-rotation 0.5s linear infinite;
                border-color: var(--primary-color) transparent var(--primary-color) transparent;
                border-radius: 50%;
                border-style: solid;
                border-width: 1px;
                content: ' ';
                display: block;
                height: 40px;
                position: absolute;
                top: calc(50% - 20px);
                width: 40px;
                z-index: 1;
            }
        }

        @keyframes loading-spinner-rotation {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        
        @keyframes skeleton-loading {
            0% {
                background-position: -200% 0;
            }

            100% {
                background-position: 200% 0;
            }
        }

        .skeleton-loading-bg {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: skeleton-loading 1.5s infinite;
        }
    </style>
<?php endif; ?>

<div
    class="shortcode-lazy-loading"
    data-name="<?php echo e($name); ?>"
    data-attributes="<?php echo e(json_encode($attributes)); ?>"
    <?php if(!empty($shortcodeId)): ?> data-shortcode-id="<?php echo e($shortcodeId); ?>" data-shortcode-name="<?php echo e($name); ?>" <?php endif; ?>
>
    <?php if(!empty($loadingView) && view()->exists($loadingView)): ?>
        <?php echo view($loadingView)->render(); ?>

    <?php else: ?>
        <div class="loading-spinner"></div>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/packages/shortcode/resources/views/partials/lazy-loading-placeholder.blade.php ENDPATH**/ ?>