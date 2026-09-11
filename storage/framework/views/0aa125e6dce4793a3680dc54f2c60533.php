<?php $__env->startSection('content'); ?>
    <?php echo apply_filters('marketplace_vendor_dashboard_before_content', '', $customer ?? auth('customer')->user()); ?>


    <?php if($totalProducts): ?>
        <div class="text-start text-sm-end mb-5">
            <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::button','data' => ['type' => 'button','color' => 'primary','outlined' => true,'class' => 'date-range-picker','dataFormatValue' => trans('plugins/ecommerce::reports.date_range_format_value', ['from' => '__from__', 'to' => '__to__']),'dataFormat' => Str::upper(config('core.base.general.date_format.js.date')),'dataHref' => route('marketplace.vendor.dashboard'),'dataStartDate' => $data['startDate'],'dataEndDate' => $data['endDate'],'icon' => 'ti ti-calendar']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','color' => 'primary','outlined' => true,'class' => 'date-range-picker','data-format-value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::reports.date_range_format_value', ['from' => '__from__', 'to' => '__to__'])),'data-format' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Str::upper(config('core.base.general.date_format.js.date'))),'data-href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('marketplace.vendor.dashboard')),'data-start-date' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data['startDate']),'data-end-date' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data['endDate']),'icon' => 'ti ti-calendar']); ?>
                <?php echo e(trans('plugins/ecommerce::reports.date_range_format_value', [
                    'from' => BaseHelper::formatDate($data['startDate']),
                    'to' => BaseHelper::formatDate($data['endDate']),
                ])); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $attributes = $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $component = $__componentOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
        </div>
    <?php endif; ?>

    <section
        class="ps-dashboard report-chart-content"
        id="report-chart"
    >
        <?php echo $__env->make(MarketplaceHelper::viewPath('vendor-dashboard.partials.dashboard-content'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </section>

    <?php echo apply_filters('marketplace_vendor_dashboard_after_content', '', $customer ?? auth('customer')->user()); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('footer'); ?>
    <script>
        'use strict';

        var BotbleVariables = BotbleVariables || {};
        BotbleVariables.languages = BotbleVariables.languages || {};
        BotbleVariables.languages.reports = <?php echo json_encode(trans('plugins/ecommerce::reports.ranges'), JSON_HEX_APOS); ?>

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(MarketplaceHelper::viewPath('vendor-dashboard.layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/marketplace/resources/views/themes/vendor-dashboard/index.blade.php ENDPATH**/ ?>