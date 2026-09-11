<?php
    Assets::addScripts(['dropzone'])->addStyles(['dropzone']);
?>

<style>
    .dropzone {
        border-radius: 5px;
        border: 1px dashed rgb(0, 135, 247);
    }

    .dropzone .dz-preview:not(.dz-processing) .dz-progress {
        display: none;
    }

    .dropzone .dz-message {
        margin: 50px 0;
    }

    .dropzone.dz-clickable * {
        cursor: move;
    }
</style>
<script>
    'use strict';
    Dropzone.autoDiscover = false;

    $(document).ready(function() {
        var dropzone = new Dropzone('#<?php echo e($id); ?>-upload', {
            previewTemplate: document.querySelector('#preview-template').innerHTML,
            parallelUploads: 1,
            thumbnailHeight: 120,
            thumbnailWidth: 120,
            addRemoveLinks: true,
            filesizeBase: 1000,
            uploadMultiple: <?php echo e(setting('media_chunk_enabled') == '1' ? 'false' : 'true'); ?>,
            chunking: <?php echo e(setting('media_chunk_enabled') == '1' ? 'true' : 'false'); ?>,
            forceChunking: true, // forces chunking when file.size < chunkSize
            parallelChunkUploads: false, // allows chunks to be uploaded in parallel (this is independent of the parallelUploads option)
            chunkSize: <?php echo e(setting('media_chunk_size', config('core.media.media.chunk.chunk_size'))); ?>, // chunk size 1,000,000 bytes (~1MB)
            retryChunks: true, // retry chunks on failure
            retryChunksLimit: 3, // retry maximum of 3 times (default is 3)
            timeout: 0, // MB,
            maxFilesize: <?php echo e(MarketplaceHelper::maxFilesizeUploadByVendor()); ?>, // MB
            maxFiles: <?php echo e(MarketplaceHelper::maxProductImagesUploadByVendor()); ?>, // max files upload,
            paramName: 'file',
            acceptedFiles: 'image/*',
            url: '<?php echo e(route('marketplace.vendor.upload')); ?>',
            sending: function(file, xhr, formData) {
                formData.append('_token', '<?php echo e(csrf_token()); ?>');
            },
            thumbnail: function(file, dataUrl) {
                if (file.previewElement) {
                    file.previewElement.classList.remove('dz-file-preview');
                    var images = file.previewElement.querySelectorAll('[data-dz-thumbnail]');
                    for (var i = 0; i < images.length; i++) {
                        var thumbnailElement = images[i];
                        thumbnailElement.alt = file.name;
                        thumbnailElement.src = dataUrl;
                    }
                    setTimeout(function() {
                        file.previewElement.classList.add('dz-image-preview');
                    }, 1);

                    if (file.url) {
                        $(file.previewElement).append(
                            '<input type="hidden" name="<?php echo e($name); ?>[]" value="' + file
                            .url + '" />');
                    }
                }
            },
            success: function(file, response) {
                if (response.error) {
                    Botble.showError(response.message);
                } else {
                    if (<?php echo e(setting('media_chunk_enabled') == '1' ? 'true' : 'false'); ?>) {
                        response = JSON.parse(file.xhr.response);
                    }
                }

                $(file.previewElement).append(
                    '<input type="hidden" name="<?php echo e($name); ?>[]" value="' + response.data
                    .url + '" />');

                $('.dz-sortable').sortable();
            },
            removedfile: function(file) {
                if (!confirm('<?php echo e(trans('plugins/marketplace::marketplace.forms.confirm_delete_image')); ?>')) {
                    return false;
                }
                dropzone.options.maxFiles = dropzone.options.maxFiles + 1;
                $('.dz-message.needsclick').hide();
                if (dropzone.options.maxFiles ===
                    <?php echo e(MarketplaceHelper::maxProductImagesUploadByVendor()); ?>) {
                    $('.dz-message.needsclick').show();
                }

                return file.previewElement != null ? file.previewElement.parentNode.removeChild(file
                    .previewElement) : void 0;
            }
        });

        <?php if($values): ?>
            var files = [];
            <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                files.push({
                    name: '<?php echo e(File::name($item)); ?>',
                    size: '<?php echo e(Storage::exists($item) ? Storage::size($item) : 0); ?>',
                    url: '<?php echo e($item); ?>',
                    full_url: '<?php echo e(RvMedia::getImageUrl($item, 'thumb')); ?>'
                });
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            $.each(files, function(key, file) {
                dropzone.options.addedfile.call(dropzone, file);
                dropzone.options.thumbnail.call(dropzone, file, file.full_url);
                dropzone.options.maxFiles = dropzone.options.maxFiles - 1;
            });

            $('.dz-sortable').sortable();
        <?php endif; ?>
    });
</script>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/vendor-dashboard/forms/partials/custom-images-script.blade.php ENDPATH**/ ?>