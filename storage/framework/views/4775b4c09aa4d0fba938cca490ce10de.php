<style>
    .site-notice {
        position: fixed;
        bottom: 1.5rem;
        left: 50%;
        transform: translateX(-50%);
        padding: 0;
        z-index: 99999;
        display: none;
        width: auto;
        max-width: calc(100% - 3rem);
        border-radius: 16px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.12), 0 2px 6px rgba(0, 0, 0, 0.08);
    }

    .site-notice.site-notice--visible {
        display: block;
    }

    .site-notice .site-notice-body {
        padding: 18px 24px;
        border-radius: 16px;
    }

    .site-notice .site-notice__inner {
        display: flex;
        align-items: center;
        gap: 1.25rem;
        flex-wrap: nowrap;
    }

    .site-notice .site-notice__message {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin: 0;
        line-height: 1.5;
        font-size: 14px;
        flex: 1;
        min-width: 200px;
    }

    .site-notice .site-notice__message::before {
        content: '';
        flex-shrink: 0;
        width: 36px;
        height: 36px;
        background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='36' height='36' viewBox='0 0 24 24' fill='none' stroke='%236366f1' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='M12 2a10 10 0 1 0 10 10 4 4 0 0 1-5-5 4 4 0 0 1-5-5'/><path d='M8.5 8.5v.01'/><path d='M16 15.5v.01'/><path d='M12 12v.01'/><path d='M11 17v.01'/><path d='M7 14v.01'/></svg>");
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }

    .site-notice .site-notice__message a {
        color: inherit;
        text-decoration: underline;
    }

    .site-notice .site-notice__message a:hover {
        text-decoration: none;
    }

    .site-notice .site-notice__actions {
        display: flex;
        gap: 0.5rem;
        flex-shrink: 0;
        flex-wrap: wrap;
        justify-content: flex-end;
    }

    [dir="rtl"] .site-notice .site-notice__actions {
        justify-content: flex-start;
    }

    .site-notice .site-notice__actions button {
        padding: 10px 20px;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 13px;
        font-weight: 600;
        min-width: 110px;
        text-align: center;
    }

    .site-notice .site-notice__actions button:hover {
        transform: translateY(-1px);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .site-notice .site-notice__actions button:active {
        transform: translateY(0);
    }

    .site-notice .site-notice__categories {
        display: none;
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px solid rgba(0, 0, 0, 0.08);
    }

    .site-notice .site-notice__categories .cookie-category {
        margin-bottom: 0.75rem;
        padding: 0.75rem;
        border: 1px solid rgba(0, 0, 0, 0.08);
        border-radius: 8px;
    }

    .site-notice .site-notice__categories .cookie-category__label {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: 0.5rem;
        cursor: pointer;
    }

    .site-notice .site-notice__categories .cookie-category__label input[type="checkbox"] {
        margin: 0;
        padding: 0;
        border: none;
        border-radius: 0;
        box-shadow: none;
        font-size: initial;
        height: initial;
        width: auto;
    }

    .site-notice .site-notice__categories .cookie-category__label input[type="checkbox"]:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    .site-notice .site-notice__categories .cookie-category__name {
        font-weight: bold;
    }

    .site-notice .site-notice__categories .cookie-category__description {
        margin: 0;
        font-size: 0.9em;
        opacity: 0.8;
    }

    .site-notice .site-notice__categories .site-notice__save {
        margin-top: 1rem;
        padding: 0.75rem 0 0;
    }

    .site-notice .site-notice__categories .site-notice__save .site-notice__save-button {
        padding: 8px 16px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        font-size: 13px;
        min-width: 110px;
    }

    @media (max-width: 767px) {
        .site-notice {
            left: 0.75rem;
            right: 0.75rem;
            bottom: 0.75rem;
            transform: none;
            max-width: none;
        }

        .site-notice .site-notice-body {
            padding: 14px 16px;
        }

        .site-notice .site-notice__inner {
            flex-direction: column;
            align-items: stretch;
            gap: 0.75rem;
        }

        [dir="rtl"] .site-notice .site-notice__inner {
            flex-direction: column;
        }

        .site-notice .site-notice__message::before {
            width: 28px;
            height: 28px;
        }

        .site-notice .site-notice__actions {
            justify-content: stretch;
        }

        .site-notice .site-notice__actions button {
            flex: 1;
            min-width: 0;
        }
    }
</style>

<div
    class="js-site-notice site-notice"
    style="background-color: <?php echo e(theme_option('cookie_consent_background_color', '#000')); ?>; color: <?php echo e(theme_option('cookie_consent_text_color', '#fff')); ?>;"
    dir="<?php echo e(BaseHelper::siteLanguageDirection()); ?>"
    data-nosnippet
>
    <div class="site-notice-body">
        <div class="site-notice__inner">
            <div class="site-notice__message">
                <span>
                    <?php echo BaseHelper::clean(
                        theme_option('cookie_consent_message', trans('plugins/cookie-consent::cookie-consent.message')),
                    ); ?>

                    <?php if(
                        ($learnMoreUrl = theme_option('cookie_consent_learn_more_url')) &&
                            ($learnMoreText = theme_option('cookie_consent_learn_more_text'))): ?>
                        <a
                            href="<?php echo e(Str::startsWith($learnMoreUrl, ['http://', 'https://']) ? $learnMoreUrl : BaseHelper::getHomepageUrl() . '/' . ltrim($learnMoreUrl, '/')); ?>"><?php echo e($learnMoreText); ?></a>
                    <?php endif; ?>
                </span>
            </div>

            <div class="site-notice__actions">
                <?php if(theme_option('cookie_consent_show_reject_button', 'no') == 'yes'): ?>
                    <button
                        class="js-site-notice-reject site-notice__reject"
                        style="background-color: <?php echo e(theme_option('cookie_consent_text_color', '#fff')); ?>; color: <?php echo e(theme_option('cookie_consent_background_color', '#000')); ?>; border: 1px solid <?php echo e(theme_option('cookie_consent_background_color', '#000')); ?>;"
                    >
                        <?php echo e(trans('plugins/cookie-consent::cookie-consent.reject_text')); ?>

                    </button>
                <?php endif; ?>
                <?php if(
                    !empty($cookieConsentConfig['cookie_categories']) &&
                        theme_option('cookie_consent_show_customize_button', 'no') == 'yes'): ?>
                    <button
                        class="js-site-notice-customize site-notice__customize"
                        style="background-color: <?php echo e(theme_option('cookie_consent_text_color', '#fff')); ?>; color: <?php echo e(theme_option('cookie_consent_background_color', '#000')); ?>; border: 1px solid <?php echo e(theme_option('cookie_consent_background_color', '#000')); ?>;"
                    >
                        <?php echo e(trans('plugins/cookie-consent::cookie-consent.customize_text')); ?>

                    </button>
                <?php endif; ?>
                <button
                    class="js-site-notice-agree site-notice__agree"
                    style="background-color: <?php echo e(theme_option('cookie_consent_background_color', '#000')); ?>; color: <?php echo e(theme_option('cookie_consent_text_color', '#fff')); ?>; border: 1px solid <?php echo e(theme_option('cookie_consent_background_color', '#000')); ?>;"
                >
                    <?php echo e(theme_option('cookie_consent_button_text', trans('plugins/cookie-consent::cookie-consent.button_text'))); ?>

                </button>
            </div>
        </div>

        <?php if(!empty($cookieConsentConfig['cookie_categories'])): ?>
            <div class="site-notice__categories">
                <?php $__currentLoopData = $cookieConsentConfig['cookie_categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="cookie-category">
                        <label class="cookie-category__label">
                            <input
                                type="checkbox"
                                name="cookie_category[]"
                                value="<?php echo e($key); ?>"
                                class="js-cookie-category"
                                <?php if($category['required']): ?> checked disabled <?php endif; ?>
                            >
                            <span
                                class="cookie-category__name"><?php echo e(trans('plugins/cookie-consent::cookie-consent.cookie_categories.' . $key . '.name')); ?></span>
                        </label>
                        <p class="cookie-category__description">
                            <?php echo e(trans('plugins/cookie-consent::cookie-consent.cookie_categories.' . $key . '.description')); ?>

                        </p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="site-notice__save">
                    <button
                        class="js-site-notice-save site-notice__save-button"
                        style="background-color: <?php echo e(theme_option('cookie_consent_background_color', '#000')); ?>; color: <?php echo e(theme_option('cookie_consent_text_color', '#fff')); ?>; border: 1px solid <?php echo e(theme_option('cookie_consent_background_color', '#000')); ?>;"
                    >
                        <?php echo e(trans('plugins/cookie-consent::cookie-consent.save_text')); ?>

                    </button>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php echo $__env->make('plugins/cookie-consent::partials.scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/cookie-consent/resources/views/styles/floating.blade.php ENDPATH**/ ?>