<?php if($clientId = setting('ads_google_adsense_unit_client_id')): ?>
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="<?php echo e($clientId); ?>"
         data-ad-slot="<?php echo e($slotId); ?>"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ads/resources/views/partials/google-adsense/unit-ads-slot.blade.php ENDPATH**/ ?>