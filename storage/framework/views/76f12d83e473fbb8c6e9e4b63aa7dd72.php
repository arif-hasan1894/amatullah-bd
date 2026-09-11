
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('consent', 'default', {
        'ad_storage': 'denied',
        'analytics_storage': 'denied',
        'ad_user_data': 'denied',
        'ad_personalization': 'denied',
        'functionality_storage': 'denied',
        'personalization_storage': 'denied',
        'security_storage': 'granted',
        'wait_for_update': 500
    });

    (function () {
        var name = <?php echo json_encode($cookieName, 15, 512) ?>;

        var entry = document.cookie.split('; ').find(function (row) {
            return row.indexOf(name + '=') === 0;
        });

        if (! entry) {
            return;
        }

        // setCookie() writes the raw JSON, but tolerate an encoded value too so
        // consent stored by an older release still restores instead of silently
        // downgrading the visitor to "denied".
        var raw = entry.slice(name.length + 1);
        var categories;

        try {
            categories = JSON.parse(raw);
        } catch (e) {
            try {
                categories = JSON.parse(decodeURIComponent(raw));
            } catch (e2) {
                return;
            }
        }

        if (! categories || typeof categories !== 'object') {
            return;
        }

        var marketing = categories.marketing ? 'granted' : 'denied';

        gtag('consent', 'update', {
            'ad_storage': marketing,
            'analytics_storage': categories.analytics ? 'granted' : 'denied',
            'ad_user_data': marketing,
            'ad_personalization': marketing
        });
    })();
</script>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/cookie-consent/resources/views/partials/head-scripts.blade.php ENDPATH**/ ?>