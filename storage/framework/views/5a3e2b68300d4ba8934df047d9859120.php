<?php echo apply_filters('ecommerce_product_variation_form_start', null, $product); ?>


<?php
    $currencies = \Botble\Ecommerce\Models\Currency::query()->oldest('order')->get();
    $defaultCurrency = get_application_currency();
    // Resolve the product's own currency via getSourceCurrency() so variations inherit the parent product's currency (the raw currency_code column is null on variation rows).
    $sourceCurrency = $product?->getSourceCurrency() ?? $originalProduct?->getSourceCurrency();
    $productCurrencyCode = old('currency_code', $sourceCurrency?->title ?? $defaultCurrency->title);
    $selectedCurrency = $currencies->firstWhere('title', $productCurrencyCode) ?? $defaultCurrency;
?>

<div class="row price-group">
    <input
        class="detect-schedule d-none"
        name="sale_type"
        type="hidden"
        value="<?php echo e(old('sale_type', $product ? $product->sale_type : 0)); ?>"
    >

    <div class="col-md-6">
        <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['label' => trans('plugins/ecommerce::products.sku'),'name' => 'sku','value' => old('sku', $product ? $product->sku : (new Botble\Ecommerce\Models\Product())->generateSku())]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.sku')),'name' => 'sku','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('sku', $product ? $product->sku : (new Botble\Ecommerce\Models\Product())->generateSku()))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $attributes = $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>

        <?php if(($isVariation && !$product) || ($product && $product->is_variation && !$product->sku)): ?>
            <?php if (isset($component)) { $__componentOriginal424617256517489644ca6a2e02d16322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal424617256517489644ca6a2e02d16322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['label' => trans('plugins/ecommerce::products.form.auto_generate_sku'),'name' => 'auto_generate_sku','value' => 1]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.form.auto_generate_sku')),'name' => 'auto_generate_sku','value' => 1]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal424617256517489644ca6a2e02d16322)): ?>
<?php $attributes = $__attributesOriginal424617256517489644ca6a2e02d16322; ?>
<?php unset($__attributesOriginal424617256517489644ca6a2e02d16322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal424617256517489644ca6a2e02d16322)): ?>
<?php $component = $__componentOriginal424617256517489644ca6a2e02d16322; ?>
<?php unset($__componentOriginal424617256517489644ca6a2e02d16322); ?>
<?php endif; ?>
        <?php endif; ?>
    </div>

    <?php
        $showCurrencySelector = empty($isVariation) && (empty($product) || !$product->is_variation);
        if ($showCurrencySelector) {
            if (is_in_admin()) {
                $showCurrencySelector = EcommerceHelper::isEnabledProductCurrencySelection();
            } else {
                $showCurrencySelector = EcommerceHelper::isEnabledProductCurrencySelection()
                    && \Botble\Marketplace\Facades\MarketplaceHelper::allowVendorManageProductCurrency();
            }
        }
    ?>
    <?php if($showCurrencySelector): ?>
        <div class="col-md-6">
            <?php if (isset($component)) { $__componentOriginal50e5e771b30c35423d2b4f118feb7c0c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.label','data' => ['for' => 'currency_code']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'currency_code']); ?>
                <?php echo e(trans('plugins/ecommerce::products.form.currency')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c)): ?>
<?php $attributes = $__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c; ?>
<?php unset($__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal50e5e771b30c35423d2b4f118feb7c0c)): ?>
<?php $component = $__componentOriginal50e5e771b30c35423d2b4f118feb7c0c; ?>
<?php unset($__componentOriginal50e5e771b30c35423d2b4f118feb7c0c); ?>
<?php endif; ?>
            <select
                name="currency_code"
                id="currency_code"
                class="form-select product-currency-selector"
            >
                <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option
                        value="<?php echo e($currency->title); ?>"
                        data-symbol="<?php echo e($currency->symbol); ?>"
                        data-is-prefix-symbol="<?php echo e($currency->is_prefix_symbol ? 1 : 0); ?>"
                        <?php if($productCurrencyCode === $currency->title): echo 'selected'; endif; ?>
                    >
                        <?php echo e($currency->title); ?> (<?php echo e($currency->symbol); ?>)
                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    <?php endif; ?>

    <div class="col-md-6">
        <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['label' => trans('plugins/ecommerce::products.form.price'),'name' => 'price','dataThousandsSeparator' => EcommerceHelper::getThousandSeparatorForInputMask(),'dataDecimalSeparator' => EcommerceHelper::getDecimalSeparatorForInputMask(),'value' => old('price', $product ? $product->getRawPrice() : ($originalProduct ? $originalProduct->getRawPrice() : 0)),'step' => 'any','class' => 'input-mask-number','groupFlat' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.form.price')),'name' => 'price','data-thousands-separator' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(EcommerceHelper::getThousandSeparatorForInputMask()),'data-decimal-separator' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(EcommerceHelper::getDecimalSeparatorForInputMask()),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('price', $product ? $product->getRawPrice() : ($originalProduct ? $originalProduct->getRawPrice() : 0))),'step' => 'any','class' => 'input-mask-number','group-flat' => true]); ?>
            <?php if($selectedCurrency->is_prefix_symbol): ?>
                 <?php $__env->slot('prepend', null, []); ?> 
                    <span class="input-group-text currency-symbol"><?php echo e($selectedCurrency->symbol); ?></span>
                 <?php $__env->endSlot(); ?>
            <?php else: ?>
                 <?php $__env->slot('append', null, []); ?> 
                    <span class="input-group-text currency-symbol"><?php echo e($selectedCurrency->symbol); ?></span>
                 <?php $__env->endSlot(); ?>
            <?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $attributes = $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
    </div>
    <div class="col-md-6">
        <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['label' => trans('plugins/ecommerce::products.form.price_sale'),'class' => 'input-mask-number','name' => 'sale_price','dataThousandsSeparator' => EcommerceHelper::getThousandSeparatorForInputMask(),'dataDecimalSeparator' => EcommerceHelper::getDecimalSeparatorForInputMask(),'value' => old('sale_price', $product ? $product->getRawSalePrice() : ($originalProduct ? $originalProduct->getRawSalePrice() : null)),'groupFlat' => true,'dataSalePercentText' => trans('plugins/ecommerce::products.form.price_sale_percent_helper')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.form.price_sale')),'class' => 'input-mask-number','name' => 'sale_price','data-thousands-separator' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(EcommerceHelper::getThousandSeparatorForInputMask()),'data-decimal-separator' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(EcommerceHelper::getDecimalSeparatorForInputMask()),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('sale_price', $product ? $product->getRawSalePrice() : ($originalProduct ? $originalProduct->getRawSalePrice() : null))),'group-flat' => true,'data-sale-percent-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.form.price_sale_percent_helper'))]); ?>
             <?php $__env->slot('helperText', null, []); ?> 
                <?php echo BaseHelper::clean(trans('plugins/ecommerce::products.form.price_sale_percent_helper', ['percent' => '<strong>' . ($product ? $product->sale_percent : 0) . '%</strong>'])); ?>

             <?php $__env->endSlot(); ?>

            <?php if($selectedCurrency->is_prefix_symbol): ?>
                 <?php $__env->slot('prepend', null, []); ?> 
                    <span class="input-group-text currency-symbol"><?php echo e($selectedCurrency->symbol); ?></span>
                 <?php $__env->endSlot(); ?>
            <?php else: ?>
                 <?php $__env->slot('append', null, []); ?> 
                    <span class="input-group-text currency-symbol"><?php echo e($selectedCurrency->symbol); ?></span>
                 <?php $__env->endSlot(); ?>
            <?php endif; ?>
             <?php $__env->slot('labelDescription', null, []); ?> 
                <a
                    class="turn-on-schedule"
                    style="<?php echo \Illuminate\Support\Arr::toCssStyles(['display: none' => old('sale_type', $product ? $product->sale_type : $originalProduct->sale_type ?? 0) == 1]) ?>"
                    href="javascript:void(0)"
                >
                    <?php echo e(trans('plugins/ecommerce::products.form.choose_discount_period')); ?>

                </a>
                <a
                    class="turn-off-schedule"
                    style="<?php echo \Illuminate\Support\Arr::toCssStyles(['display: none' => old('sale_type', $product ? $product->sale_type : $originalProduct->sale_type ?? 0) == 0]) ?>"
                    href="javascript:void(0)"
                >
                    <?php echo e(trans('plugins/ecommerce::products.form.cancel')); ?>

                </a>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $attributes = $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
    </div>

    <div class="col-md-6 scheduled-time" style="<?php echo \Illuminate\Support\Arr::toCssStyles(['display: none' => old('sale_type', $product ? $product->sale_type : $originalProduct->sale_type ?? 0) == 0]) ?>">
        <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['label' => trans('plugins/ecommerce::products.form.date.start'),'name' => 'start_date','class' => 'form-date-time','value' => old('start_date', $product ? $product->start_date : $originalProduct->start_date ?? null),'placeholder' => BaseHelper::getDateTimeFormat()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.form.date.start')),'name' => 'start_date','class' => 'form-date-time','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('start_date', $product ? $product->start_date : $originalProduct->start_date ?? null)),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(BaseHelper::getDateTimeFormat())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $attributes = $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
    </div>
    <div class="col-md-6 scheduled-time" style="<?php echo \Illuminate\Support\Arr::toCssStyles(['display: none' => old('sale_type', $product ? $product->sale_type : $originalProduct->sale_type ?? 0) == 0]) ?>">
        <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['label' => trans('plugins/ecommerce::products.form.date.end'),'name' => 'end_date','value' => old('end_date', $product ? $product->end_date : $originalProduct->end_date ?? null),'placeholder' => BaseHelper::getDateTimeFormat(),'class' => 'form-date-time']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.form.date.end')),'name' => 'end_date','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('end_date', $product ? $product->end_date : $originalProduct->end_date ?? null)),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(BaseHelper::getDateTimeFormat()),'class' => 'form-date-time']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $attributes = $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
    </div>

    <?php if(Botble\Ecommerce\Facades\EcommerceHelper::isTaxEnabled()): ?>
        <div class="col-md-12">
            <?php if (isset($component)) { $__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal88fb2b6bd120f5ac7fade6b8e409403f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.on-off.checkbox','data' => ['label' => trans('plugins/ecommerce::products.form.price_includes_tax'),'name' => 'price_includes_tax','checked' => old('price_includes_tax', $product ? $product->price_includes_tax : $originalProduct->price_includes_tax ?? false),'helperText' => trans('plugins/ecommerce::products.form.price_includes_tax_helper')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.on-off.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.form.price_includes_tax')),'name' => 'price_includes_tax','checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('price_includes_tax', $product ? $product->price_includes_tax : $originalProduct->price_includes_tax ?? false)),'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.form.price_includes_tax_helper'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal88fb2b6bd120f5ac7fade6b8e409403f)): ?>
<?php $attributes = $__attributesOriginal88fb2b6bd120f5ac7fade6b8e409403f; ?>
<?php unset($__attributesOriginal88fb2b6bd120f5ac7fade6b8e409403f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f)): ?>
<?php $component = $__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f; ?>
<?php unset($__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f); ?>
<?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="col-md-6">
        <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['label' => trans('plugins/ecommerce::products.form.cost_per_item'),'name' => 'cost_per_item','value' => old('cost_per_item', $product ? $product->getRawCostPerItem() : ($originalProduct ? $originalProduct->getRawCostPerItem() : 0)),'placeholder' => trans('plugins/ecommerce::products.form.cost_per_item_placeholder'),'step' => 'any','class' => 'input-mask-number','groupFlat' => true,'helperText' => trans('plugins/ecommerce::products.form.cost_per_item_helper')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.form.cost_per_item')),'name' => 'cost_per_item','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('cost_per_item', $product ? $product->getRawCostPerItem() : ($originalProduct ? $originalProduct->getRawCostPerItem() : 0))),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.form.cost_per_item_placeholder')),'step' => 'any','class' => 'input-mask-number','group-flat' => true,'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.form.cost_per_item_helper'))]); ?>
            <?php if($selectedCurrency->is_prefix_symbol): ?>
                 <?php $__env->slot('prepend', null, []); ?> 
                    <span class="input-group-text currency-symbol"><?php echo e($selectedCurrency->symbol); ?></span>
                 <?php $__env->endSlot(); ?>
            <?php else: ?>
                 <?php $__env->slot('append', null, []); ?> 
                    <span class="input-group-text currency-symbol"><?php echo e($selectedCurrency->symbol); ?></span>
                 <?php $__env->endSlot(); ?>
            <?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $attributes = $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
    </div>
    <input
        name="product_id"
        type="hidden"
        value="<?php echo e($product->id ?? null); ?>"
    >
    <div class="col-md-6">
        <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['label' => trans('plugins/ecommerce::products.form.barcode'),'name' => 'barcode','type' => 'text','value' => old('barcode', $product),'step' => 'any','placeholder' => trans('plugins/ecommerce::products.form.barcode_placeholder'),'required' => (bool) get_ecommerce_setting('make_product_barcode_required', false),'helperText' => trans('plugins/ecommerce::products.form.barcode_helper')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.form.barcode')),'name' => 'barcode','type' => 'text','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('barcode', $product)),'step' => 'any','placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.form.barcode_placeholder')),'required' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute((bool) get_ecommerce_setting('make_product_barcode_required', false)),'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.form.barcode_helper'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $attributes = $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
    </div>
</div>

<?php echo apply_filters('ecommerce_product_variation_form_middle', null, $product); ?>


<?php if (isset($component)) { $__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal88fb2b6bd120f5ac7fade6b8e409403f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.on-off.checkbox','data' => ['label' => trans('plugins/ecommerce::products.form.storehouse.storehouse'),'name' => 'with_storehouse_management','class' => 'storehouse-management-status','checked' => old('with_storehouse_management', $product ? $product->with_storehouse_management : $originalProduct->with_storehouse_management ?? 0) == 1]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.on-off.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.form.storehouse.storehouse')),'name' => 'with_storehouse_management','class' => 'storehouse-management-status','checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('with_storehouse_management', $product ? $product->with_storehouse_management : $originalProduct->with_storehouse_management ?? 0) == 1)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal88fb2b6bd120f5ac7fade6b8e409403f)): ?>
<?php $attributes = $__attributesOriginal88fb2b6bd120f5ac7fade6b8e409403f; ?>
<?php unset($__attributesOriginal88fb2b6bd120f5ac7fade6b8e409403f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f)): ?>
<?php $component = $__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f; ?>
<?php unset($__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal20d878510d8f6b63da7004efc7cea55f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal20d878510d8f6b63da7004efc7cea55f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.fieldset','data' => ['class' => 'storehouse-info','style' => \Illuminate\Support\Arr::toCssStyles(['display: none' => old('with_storehouse_management', $product ? $product->with_storehouse_management : $originalProduct->with_storehouse_management ?? 0) == 0])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.fieldset'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'storehouse-info','style' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssStyles(['display: none' => old('with_storehouse_management', $product ? $product->with_storehouse_management : $originalProduct->with_storehouse_management ?? 0) == 0]))]); ?>
    <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['label' => trans('plugins/ecommerce::products.form.storehouse.quantity'),'name' => 'quantity','value' => old('quantity', $product ? $product->quantity : $originalProduct->quantity ?? 0),'class' => 'input-mask-number']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.form.storehouse.quantity')),'name' => 'quantity','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('quantity', $product ? $product->quantity : $originalProduct->quantity ?? 0)),'class' => 'input-mask-number']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $attributes = $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal88fb2b6bd120f5ac7fade6b8e409403f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.on-off.checkbox','data' => ['label' => trans('plugins/ecommerce::products.form.stock.allow_order_when_out'),'name' => 'allow_checkout_when_out_of_stock','checked' => old('allow_checkout_when_out_of_stock', $product ? $product->allow_checkout_when_out_of_stock : $originalProduct->allow_checkout_when_out_of_stock ?? 0) == 1]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.on-off.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.form.stock.allow_order_when_out')),'name' => 'allow_checkout_when_out_of_stock','checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('allow_checkout_when_out_of_stock', $product ? $product->allow_checkout_when_out_of_stock : $originalProduct->allow_checkout_when_out_of_stock ?? 0) == 1)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal88fb2b6bd120f5ac7fade6b8e409403f)): ?>
<?php $attributes = $__attributesOriginal88fb2b6bd120f5ac7fade6b8e409403f; ?>
<?php unset($__attributesOriginal88fb2b6bd120f5ac7fade6b8e409403f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f)): ?>
<?php $component = $__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f; ?>
<?php unset($__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal20d878510d8f6b63da7004efc7cea55f)): ?>
<?php $attributes = $__attributesOriginal20d878510d8f6b63da7004efc7cea55f; ?>
<?php unset($__attributesOriginal20d878510d8f6b63da7004efc7cea55f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20d878510d8f6b63da7004efc7cea55f)): ?>
<?php $component = $__componentOriginal20d878510d8f6b63da7004efc7cea55f; ?>
<?php unset($__componentOriginal20d878510d8f6b63da7004efc7cea55f); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal20d878510d8f6b63da7004efc7cea55f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal20d878510d8f6b63da7004efc7cea55f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.fieldset','data' => ['class' => 'stock-status-wrapper','style' => \Illuminate\Support\Arr::toCssStyles(['display: none' => old('with_storehouse_management', $product ? $product->with_storehouse_management : $originalProduct->with_storehouse_management ?? 0) == 1])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.fieldset'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'stock-status-wrapper','style' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssStyles(['display: none' => old('with_storehouse_management', $product ? $product->with_storehouse_management : $originalProduct->with_storehouse_management ?? 0) == 1]))]); ?>
    <?php if (isset($component)) { $__componentOriginal50e5e771b30c35423d2b4f118feb7c0c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.label','data' => ['for' => 'stock_status']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'stock_status']); ?>
        <?php echo e(trans('plugins/ecommerce::products.form.stock_status')); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c)): ?>
<?php $attributes = $__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c; ?>
<?php unset($__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal50e5e771b30c35423d2b4f118feb7c0c)): ?>
<?php $component = $__componentOriginal50e5e771b30c35423d2b4f118feb7c0c; ?>
<?php unset($__componentOriginal50e5e771b30c35423d2b4f118feb7c0c); ?>
<?php endif; ?>
    <?php $__currentLoopData = Botble\Ecommerce\Enums\StockStatusEnum::labels(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginal424617256517489644ca6a2e02d16322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal424617256517489644ca6a2e02d16322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['label' => $label,'name' => 'stock_status','type' => 'radio','value' => $status,'checked' => old('stock_status', $product ? $product->stock_status : 'in_stock') == $status,'inline' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($label),'name' => 'stock_status','type' => 'radio','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($status),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('stock_status', $product ? $product->stock_status : 'in_stock') == $status),'inline' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal424617256517489644ca6a2e02d16322)): ?>
<?php $attributes = $__attributesOriginal424617256517489644ca6a2e02d16322; ?>
<?php unset($__attributesOriginal424617256517489644ca6a2e02d16322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal424617256517489644ca6a2e02d16322)): ?>
<?php $component = $__componentOriginal424617256517489644ca6a2e02d16322; ?>
<?php unset($__componentOriginal424617256517489644ca6a2e02d16322); ?>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal20d878510d8f6b63da7004efc7cea55f)): ?>
<?php $attributes = $__attributesOriginal20d878510d8f6b63da7004efc7cea55f; ?>
<?php unset($__attributesOriginal20d878510d8f6b63da7004efc7cea55f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20d878510d8f6b63da7004efc7cea55f)): ?>
<?php $component = $__componentOriginal20d878510d8f6b63da7004efc7cea55f; ?>
<?php unset($__componentOriginal20d878510d8f6b63da7004efc7cea55f); ?>
<?php endif; ?>

<?php if(
    ! EcommerceHelper::isEnabledSupportDigitalProducts()
    || (! EcommerceHelper::isDisabledPhysicalProduct() && !$product && ! $originalProduct && request()->input('product_type') != Botble\Ecommerce\Enums\ProductTypeEnum::DIGITAL)
    || (! EcommerceHelper::isDisabledPhysicalProduct() && $originalProduct && $originalProduct->isTypePhysical()) || ($product && $product->isTypePhysical())
): ?>
    <?php if (isset($component)) { $__componentOriginal20d878510d8f6b63da7004efc7cea55f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal20d878510d8f6b63da7004efc7cea55f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.fieldset','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.fieldset'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <legend>
            <h3><?php echo e(trans('plugins/ecommerce::products.form.shipping.title')); ?></h3>
        </legend>
        <div class="row">
            <div class="col-md-3 col-md-6">
                <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['label' => ''.e(trans('plugins/ecommerce::products.form.shipping.weight')).' ('.e(ecommerce_weight_unit()).')','name' => 'weight','value' => old('weight', $product ? $product->weight : $originalProduct->weight ?? 0),'class' => 'input-mask-number','groupFlat' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(trans('plugins/ecommerce::products.form.shipping.weight')).' ('.e(ecommerce_weight_unit()).')','name' => 'weight','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('weight', $product ? $product->weight : $originalProduct->weight ?? 0)),'class' => 'input-mask-number','group-flat' => true]); ?>
                     <?php $__env->slot('prepend', null, []); ?> 
                        <span class="input-group-text"><?php echo e(ecommerce_weight_unit()); ?></span>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $attributes = $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
            </div>
            <div class="col-md-3 col-md-6">
                <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['label' => ''.e(trans('plugins/ecommerce::products.form.shipping.length')).' ('.e(ecommerce_width_height_unit()).')','name' => 'length','value' => old('length', $product ? $product->length : $originalProduct->length ?? 0),'class' => 'input-mask-number','groupFlat' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(trans('plugins/ecommerce::products.form.shipping.length')).' ('.e(ecommerce_width_height_unit()).')','name' => 'length','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('length', $product ? $product->length : $originalProduct->length ?? 0)),'class' => 'input-mask-number','group-flat' => true]); ?>
                     <?php $__env->slot('prepend', null, []); ?> 
                        <span class="input-group-text"><?php echo e(ecommerce_width_height_unit()); ?></span>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $attributes = $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
            </div>
            <div class="col-md-3 col-md-6">
                <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['label' => ''.e(trans('plugins/ecommerce::products.form.shipping.wide')).' ('.e(ecommerce_width_height_unit()).')','name' => 'wide','value' => old('wide', $product ? $product->wide : $originalProduct->wide ?? 0),'class' => 'input-mask-number','groupFlat' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(trans('plugins/ecommerce::products.form.shipping.wide')).' ('.e(ecommerce_width_height_unit()).')','name' => 'wide','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('wide', $product ? $product->wide : $originalProduct->wide ?? 0)),'class' => 'input-mask-number','group-flat' => true]); ?>
                     <?php $__env->slot('prepend', null, []); ?> 
                        <span class="input-group-text"><?php echo e(ecommerce_width_height_unit()); ?></span>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $attributes = $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
            </div>
            <div class="col-md-3 col-md-6">
                <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.text-input','data' => ['label' => ''.e(trans('plugins/ecommerce::products.form.shipping.height')).' ('.e(ecommerce_width_height_unit()).')','value' => old('height', $product ? $product->height : $originalProduct->height ?? 0),'name' => 'height','class' => 'input-mask-number','groupFlat' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(trans('plugins/ecommerce::products.form.shipping.height')).' ('.e(ecommerce_width_height_unit()).')','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('height', $product ? $product->height : $originalProduct->height ?? 0)),'name' => 'height','class' => 'input-mask-number','group-flat' => true]); ?>
                     <?php $__env->slot('prepend', null, []); ?> 
                        <span class="input-group-text"><?php echo e(ecommerce_width_height_unit()); ?></span>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $attributes = $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal20d878510d8f6b63da7004efc7cea55f)): ?>
<?php $attributes = $__attributesOriginal20d878510d8f6b63da7004efc7cea55f; ?>
<?php unset($__attributesOriginal20d878510d8f6b63da7004efc7cea55f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20d878510d8f6b63da7004efc7cea55f)): ?>
<?php $component = $__componentOriginal20d878510d8f6b63da7004efc7cea55f; ?>
<?php unset($__componentOriginal20d878510d8f6b63da7004efc7cea55f); ?>
<?php endif; ?>
<?php endif; ?>

<?php if(
    EcommerceHelper::isDisabledPhysicalProduct()
    ||
    (EcommerceHelper::isEnabledSupportDigitalProducts()
    && (
        (!$product &&  !$originalProduct && request()->input('product_type') == Botble\Ecommerce\Enums\ProductTypeEnum::DIGITAL)
        || ($originalProduct && $originalProduct->isTypeDigital()) || ($product && $product->isTypeDigital())
    ))
): ?>
    <?php if(EcommerceHelper::isEnabledLicenseCodesForDigitalProducts()): ?>
    <?php if (isset($component)) { $__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal88fb2b6bd120f5ac7fade6b8e409403f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.on-off.checkbox','data' => ['label' => trans('plugins/ecommerce::products.digital_attachments.generate_license_code_after_purchasing_product'),'name' => 'generate_license_code','checked' => old('generate_license_code', $product ? $product->generate_license_code : $originalProduct->generate_license_code ?? 0),'dataBbToggle' => 'collapse','dataBbTarget' => '#license-code-options']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.on-off.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.digital_attachments.generate_license_code_after_purchasing_product')),'name' => 'generate_license_code','checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('generate_license_code', $product ? $product->generate_license_code : $originalProduct->generate_license_code ?? 0)),'data-bb-toggle' => 'collapse','data-bb-target' => '#license-code-options']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal88fb2b6bd120f5ac7fade6b8e409403f)): ?>
<?php $attributes = $__attributesOriginal88fb2b6bd120f5ac7fade6b8e409403f; ?>
<?php unset($__attributesOriginal88fb2b6bd120f5ac7fade6b8e409403f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f)): ?>
<?php $component = $__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f; ?>
<?php unset($__componentOriginal88fb2b6bd120f5ac7fade6b8e409403f); ?>
<?php endif; ?>

    <div class="collapse <?php if(old('generate_license_code', $product ? $product->generate_license_code : $originalProduct->generate_license_code ?? 0)): ?> show <?php endif; ?>" id="license-code-options">
        <?php if (isset($component)) { $__componentOriginala0a922bb70d8e2bee74cdab0a323562a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala0a922bb70d8e2bee74cdab0a323562a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form-group','data' => ['class' => 'mt-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-3']); ?>
            <?php if (isset($component)) { $__componentOriginal50e5e771b30c35423d2b4f118feb7c0c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.label','data' => ['for' => 'license_code_type','value' => trans('plugins/ecommerce::products.license_codes.type.title')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'license_code_type','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.license_codes.type.title'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c)): ?>
<?php $attributes = $__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c; ?>
<?php unset($__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal50e5e771b30c35423d2b4f118feb7c0c)): ?>
<?php $component = $__componentOriginal50e5e771b30c35423d2b4f118feb7c0c; ?>
<?php unset($__componentOriginal50e5e771b30c35423d2b4f118feb7c0c); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginald8f3cab0e02bd6920e9589a31228d9ca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.select','data' => ['name' => 'license_code_type','id' => 'license_code_type']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'license_code_type','id' => 'license_code_type']); ?>
                <option value="auto_generate" <?php if(old('license_code_type', $product ? $product->license_code_type : 'auto_generate') === 'auto_generate'): ?> selected <?php endif; ?>>
                    <?php echo e(trans('plugins/ecommerce::products.license_codes.type.auto_generate')); ?>

                </option>
                <option value="pick_from_list" <?php if(old('license_code_type', $product ? $product->license_code_type : 'auto_generate') === 'pick_from_list'): ?> selected <?php endif; ?>>
                    <?php echo e(trans('plugins/ecommerce::products.license_codes.type.pick_from_list')); ?>

                </option>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca)): ?>
<?php $attributes = $__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca; ?>
<?php unset($__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8f3cab0e02bd6920e9589a31228d9ca)): ?>
<?php $component = $__componentOriginald8f3cab0e02bd6920e9589a31228d9ca; ?>
<?php unset($__componentOriginald8f3cab0e02bd6920e9589a31228d9ca); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal1844d57dc6206b688bd5adc7dea47e7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1844d57dc6206b688bd5adc7dea47e7d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.helper-text','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.helper-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php echo e(trans('plugins/ecommerce::products.license_codes.type.description')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1844d57dc6206b688bd5adc7dea47e7d)): ?>
<?php $attributes = $__attributesOriginal1844d57dc6206b688bd5adc7dea47e7d; ?>
<?php unset($__attributesOriginal1844d57dc6206b688bd5adc7dea47e7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1844d57dc6206b688bd5adc7dea47e7d)): ?>
<?php $component = $__componentOriginal1844d57dc6206b688bd5adc7dea47e7d; ?>
<?php unset($__componentOriginal1844d57dc6206b688bd5adc7dea47e7d); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala0a922bb70d8e2bee74cdab0a323562a)): ?>
<?php $attributes = $__attributesOriginala0a922bb70d8e2bee74cdab0a323562a; ?>
<?php unset($__attributesOriginala0a922bb70d8e2bee74cdab0a323562a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0a922bb70d8e2bee74cdab0a323562a)): ?>
<?php $component = $__componentOriginala0a922bb70d8e2bee74cdab0a323562a; ?>
<?php unset($__componentOriginala0a922bb70d8e2bee74cdab0a323562a); ?>
<?php endif; ?>
    </div>

    <?php if (isset($component)) { $__componentOriginala0a922bb70d8e2bee74cdab0a323562a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala0a922bb70d8e2bee74cdab0a323562a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form-group','data' => ['class' => 'product-license-codes-management mb-5','id' => 'license-codes-management','style' => \Illuminate\Support\Arr::toCssStyles(['display: none' => !($product && $product->generate_license_code && $product->license_code_type === 'pick_from_list')])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'product-license-codes-management mb-5','id' => 'license-codes-management','style' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssStyles(['display: none' => !($product && $product->generate_license_code && $product->license_code_type === 'pick_from_list')]))]); ?>
        <?php if (isset($component)) { $__componentOriginal50e5e771b30c35423d2b4f118feb7c0c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.label','data' => ['for' => 'license_codes','class' => 'mb-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'license_codes','class' => 'mb-3']); ?>
            <?php echo e(trans('plugins/ecommerce::products.license_codes.title')); ?>

            <?php if($product && $product->is_variation): ?>
                <small class="text-muted d-block">
                    <?php echo e(trans('plugins/ecommerce::products.license_codes.variation_specific_note')); ?>

                </small>
            <?php elseif($product && $product->has_variation): ?>
                <small class="text-muted d-block">
                    <?php echo e(trans('plugins/ecommerce::products.license_codes.main_product_note')); ?>

                </small>
            <?php endif; ?>

             <?php $__env->slot('description', null, []); ?> 
                <div class="btn-list mt-3 mb-3">
                    <?php if($product && \Botble\Ecommerce\Http\Controllers\ProductLicenseCodeController::canAccessLicenseCodeManagement($product)): ?>
                        <a href="<?php echo e(route('products.license-codes.index', $product->id)); ?>"
                           class="btn btn-sm btn-primary"
                           target="_blank">
                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-external-link'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
                            <?php echo e(trans('plugins/ecommerce::products.license_codes.manage_codes')); ?>

                        </a>
                    <?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::button','data' => ['type' => 'button','class' => 'license-code-add-btn','size' => 'sm','icon' => 'ti ti-plus']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','class' => 'license-code-add-btn','size' => 'sm','icon' => 'ti ti-plus']); ?>
                        <?php echo e(trans('plugins/ecommerce::products.license_codes.add')); ?>

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

                    <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::button','data' => ['type' => 'button','class' => 'license-code-generate-btn','size' => 'sm','icon' => 'ti ti-refresh']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','class' => 'license-code-generate-btn','size' => 'sm','icon' => 'ti ti-refresh']); ?>
                        <?php echo e(trans('plugins/ecommerce::products.license_codes.generate')); ?>

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

                <?php if(get_ecommerce_setting('hide_used_license_codes_in_product_form', false) && $product && $product->licenseCodes->filter(fn($code) => $code->isUsed())->count() > 0): ?>
                    <div class="alert alert-info alert-sm mt-2">
                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-info-circle'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
                        <?php echo e(trans('plugins/ecommerce::products.license_codes.used_codes_hidden', ['count' => $product->licenseCodes->filter(fn($code) => $code->isUsed())->count()])); ?>

                    </div>
                <?php endif; ?>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c)): ?>
<?php $attributes = $__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c; ?>
<?php unset($__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal50e5e771b30c35423d2b4f118feb7c0c)): ?>
<?php $component = $__componentOriginal50e5e771b30c35423d2b4f118feb7c0c; ?>
<?php unset($__componentOriginal50e5e771b30c35423d2b4f118feb7c0c); ?>
<?php endif; ?>

        <div class="clearfix"></div>

        <div class="table-responsive">
            <?php if (isset($component)) { $__componentOriginal44c83e2eb600bf127a623cda69e3ac8b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal44c83e2eb600bf127a623cda69e3ac8b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginale99e402aa76780d965832b9f039b6b35 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale99e402aa76780d965832b9f039b6b35 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.header.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php if (isset($component)) { $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.header.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.header.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php echo e(trans('plugins/ecommerce::products.license_codes.code')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $attributes = $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $component = $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.header.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.header.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php echo e(trans('plugins/ecommerce::products.license_codes.status')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $attributes = $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $component = $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.header.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.header.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php echo e(trans('plugins/ecommerce::products.license_codes.assigned_at')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $attributes = $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $component = $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.header.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.header.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $attributes = $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $component = $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale99e402aa76780d965832b9f039b6b35)): ?>
<?php $attributes = $__attributesOriginale99e402aa76780d965832b9f039b6b35; ?>
<?php unset($__attributesOriginale99e402aa76780d965832b9f039b6b35); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale99e402aa76780d965832b9f039b6b35)): ?>
<?php $component = $__componentOriginale99e402aa76780d965832b9f039b6b35; ?>
<?php unset($__componentOriginale99e402aa76780d965832b9f039b6b35); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal4d7e52336690b9ea120a6913f2c28a6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4d7e52336690b9ea120a6913f2c28a6b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.index','data' => ['id' => 'license-codes-table-body']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'license-codes-table-body']); ?>
                <?php if($product): ?>
                    <?php
                        $hideUsedCodes = get_ecommerce_setting('hide_used_license_codes_in_product_form', false);
                        $licenseCodes = $hideUsedCodes ? $product->licenseCodes->filter(fn($code) => $code->isAvailable()) : $product->licenseCodes;
                    ?>
                    <?php $__currentLoopData = $licenseCodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $licenseCode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginal6776c17865a79e242405889703595892 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6776c17865a79e242405889703595892 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.row','data' => ['dataLicenseCodeId' => ''.e($licenseCode->id).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data-license-code-id' => ''.e($licenseCode->id).'']); ?>
                            <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <input type="text"
                                       name="license_codes[<?php echo e($licenseCode->id); ?>][code]"
                                       value="<?php echo e($licenseCode->license_code); ?>"
                                       class="form-control license-code-input"
                                    <?php echo e($licenseCode->isUsed() ? 'readonly' : ''); ?>>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <?php echo $licenseCode->status->toHtml(); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <?php if($licenseCode->assigned_at && $licenseCode->assignedOrderProduct && $licenseCode->assignedOrderProduct->order): ?>
                                    <div>
                                        <?php echo e(BaseHelper::formatDate($licenseCode->assigned_at)); ?>

                                        <br>
                                        <a href="<?php echo e(route('orders.edit', $licenseCode->assignedOrderProduct->order->id)); ?>"
                                           class="text-primary"
                                           target="_blank">
                                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-external-link'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
                                            <?php echo e(trans('plugins/ecommerce::order.view_order')); ?> #<?php echo e($licenseCode->assignedOrderProduct->order->code); ?>

                                        </a>
                                    </div>
                                <?php else: ?>
                                    <?php echo e($licenseCode->assigned_at ? BaseHelper::formatDate($licenseCode->assigned_at) : '-'); ?>

                                <?php endif; ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <?php if($licenseCode->isAvailable()): ?>
                                    <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::button','data' => ['type' => 'button','class' => 'license-code-delete-btn','size' => 'sm','color' => 'danger','icon' => 'ti ti-trash','dataLicenseCodeId' => ''.e($licenseCode->id).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','class' => 'license-code-delete-btn','size' => 'sm','color' => 'danger','icon' => 'ti ti-trash','data-license-code-id' => ''.e($licenseCode->id).'']); ?>
                                        <?php echo e(trans('core/base::tables.delete')); ?>

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
                                <?php endif; ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6776c17865a79e242405889703595892)): ?>
<?php $attributes = $__attributesOriginal6776c17865a79e242405889703595892; ?>
<?php unset($__attributesOriginal6776c17865a79e242405889703595892); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6776c17865a79e242405889703595892)): ?>
<?php $component = $__componentOriginal6776c17865a79e242405889703595892; ?>
<?php unset($__componentOriginal6776c17865a79e242405889703595892); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4d7e52336690b9ea120a6913f2c28a6b)): ?>
<?php $attributes = $__attributesOriginal4d7e52336690b9ea120a6913f2c28a6b; ?>
<?php unset($__attributesOriginal4d7e52336690b9ea120a6913f2c28a6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4d7e52336690b9ea120a6913f2c28a6b)): ?>
<?php $component = $__componentOriginal4d7e52336690b9ea120a6913f2c28a6b; ?>
<?php unset($__componentOriginal4d7e52336690b9ea120a6913f2c28a6b); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal44c83e2eb600bf127a623cda69e3ac8b)): ?>
<?php $attributes = $__attributesOriginal44c83e2eb600bf127a623cda69e3ac8b; ?>
<?php unset($__attributesOriginal44c83e2eb600bf127a623cda69e3ac8b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44c83e2eb600bf127a623cda69e3ac8b)): ?>
<?php $component = $__componentOriginal44c83e2eb600bf127a623cda69e3ac8b; ?>
<?php unset($__componentOriginal44c83e2eb600bf127a623cda69e3ac8b); ?>
<?php endif; ?>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala0a922bb70d8e2bee74cdab0a323562a)): ?>
<?php $attributes = $__attributesOriginala0a922bb70d8e2bee74cdab0a323562a; ?>
<?php unset($__attributesOriginala0a922bb70d8e2bee74cdab0a323562a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0a922bb70d8e2bee74cdab0a323562a)): ?>
<?php $component = $__componentOriginala0a922bb70d8e2bee74cdab0a323562a; ?>
<?php unset($__componentOriginala0a922bb70d8e2bee74cdab0a323562a); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginala0a922bb70d8e2bee74cdab0a323562a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala0a922bb70d8e2bee74cdab0a323562a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form-group','data' => ['class' => 'product-type-digital-management']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'product-type-digital-management']); ?>
        <?php if (isset($component)) { $__componentOriginal50e5e771b30c35423d2b4f118feb7c0c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.label','data' => ['for' => 'product_file','class' => 'mb-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'product_file','class' => 'mb-3']); ?>
            <?php echo e(trans('plugins/ecommerce::products.digital_attachments.title')); ?>


             <?php $__env->slot('description', null, []); ?> 
                <div class="btn-list">
                    <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::button','data' => ['type' => 'button','class' => 'digital_attachments_btn','size' => 'sm','icon' => 'ti ti-paperclip']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','class' => 'digital_attachments_btn','size' => 'sm','icon' => 'ti ti-paperclip']); ?>
                        <?php echo e(trans('plugins/ecommerce::products.digital_attachments.add')); ?>

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

                    <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::button','data' => ['type' => 'button','class' => 'digital_attachments_external_btn','size' => 'sm','icon' => 'ti ti-link']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','class' => 'digital_attachments_external_btn','size' => 'sm','icon' => 'ti ti-link']); ?>
                        <?php echo e(trans('plugins/ecommerce::products.digital_attachments.add_external_link')); ?>

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
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c)): ?>
<?php $attributes = $__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c; ?>
<?php unset($__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal50e5e771b30c35423d2b4f118feb7c0c)): ?>
<?php $component = $__componentOriginal50e5e771b30c35423d2b4f118feb7c0c; ?>
<?php unset($__componentOriginal50e5e771b30c35423d2b4f118feb7c0c); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal44c83e2eb600bf127a623cda69e3ac8b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal44c83e2eb600bf127a623cda69e3ac8b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php if (isset($component)) { $__componentOriginale99e402aa76780d965832b9f039b6b35 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale99e402aa76780d965832b9f039b6b35 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.header.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.header.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.header.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $attributes = $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $component = $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.header.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.header.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php echo e(trans('plugins/ecommerce::products.digital_attachments.file_name')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $attributes = $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $component = $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.header.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.header.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php echo e(trans('plugins/ecommerce::products.digital_attachments.file_size')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $attributes = $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $component = $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.header.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.header.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php echo e(trans('core/base::tables.created_at')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $attributes = $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $component = $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.header.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.header.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $attributes = $__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__attributesOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56)): ?>
<?php $component = $__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56; ?>
<?php unset($__componentOriginal9d47a2fcc66b3d4a341b30c8f4c9dd56); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale99e402aa76780d965832b9f039b6b35)): ?>
<?php $attributes = $__attributesOriginale99e402aa76780d965832b9f039b6b35; ?>
<?php unset($__attributesOriginale99e402aa76780d965832b9f039b6b35); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale99e402aa76780d965832b9f039b6b35)): ?>
<?php $component = $__componentOriginale99e402aa76780d965832b9f039b6b35; ?>
<?php unset($__componentOriginale99e402aa76780d965832b9f039b6b35); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal4d7e52336690b9ea120a6913f2c28a6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4d7e52336690b9ea120a6913f2c28a6b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php if($product && $product->productFiles->isNotEmpty()): ?>
                    <?php $__currentLoopData = $product->productFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginal6776c17865a79e242405889703595892 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6776c17865a79e242405889703595892 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <?php if (isset($component)) { $__componentOriginal424617256517489644ca6a2e02d16322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal424617256517489644ca6a2e02d16322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['name' => 'product_files['.e($file->id).']','class' => 'digital-attachment-checkbox','checked' => true,'single' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'product_files['.e($file->id).']','class' => 'digital-attachment-checkbox','checked' => true,'single' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal424617256517489644ca6a2e02d16322)): ?>
<?php $attributes = $__attributesOriginal424617256517489644ca6a2e02d16322; ?>
<?php unset($__attributesOriginal424617256517489644ca6a2e02d16322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal424617256517489644ca6a2e02d16322)): ?>
<?php $component = $__componentOriginal424617256517489644ca6a2e02d16322; ?>
<?php unset($__componentOriginal424617256517489644ca6a2e02d16322); ?>
<?php endif; ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <?php if($file->is_external_link): ?>
                                    <a href="<?php echo e($file->url); ?>" target="_blank">
                                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-link'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
                                        <?php echo e($file->basename ? Str::limit($file->basename, 50) : $file->url); ?>

                                    </a>
                                <?php else: ?>
                                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-paperclip'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
                                    <?php echo e(Str::limit($file->basename, 50)); ?>

                                <?php endif; ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <?php echo e($file->file_size ? BaseHelper::humanFileSize($file->file_size) : '-'); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <?php echo e(BaseHelper::formatDate($file->created_at)); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6776c17865a79e242405889703595892)): ?>
<?php $attributes = $__attributesOriginal6776c17865a79e242405889703595892; ?>
<?php unset($__attributesOriginal6776c17865a79e242405889703595892); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6776c17865a79e242405889703595892)): ?>
<?php $component = $__componentOriginal6776c17865a79e242405889703595892; ?>
<?php unset($__componentOriginal6776c17865a79e242405889703595892); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <?php if (isset($component)) { $__componentOriginal6776c17865a79e242405889703595892 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6776c17865a79e242405889703595892 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.row','data' => ['class' => 'digital-attachments-empty-row']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'digital-attachments-empty-row']); ?>
                        <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::table.body.cell','data' => ['colspan' => '5','class' => 'text-center text-secondary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colspan' => '5','class' => 'text-center text-secondary']); ?>
                            <?php echo e(trans('plugins/ecommerce::products.digital_attachments.no_attachments')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6776c17865a79e242405889703595892)): ?>
<?php $attributes = $__attributesOriginal6776c17865a79e242405889703595892; ?>
<?php unset($__attributesOriginal6776c17865a79e242405889703595892); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6776c17865a79e242405889703595892)): ?>
<?php $component = $__componentOriginal6776c17865a79e242405889703595892; ?>
<?php unset($__componentOriginal6776c17865a79e242405889703595892); ?>
<?php endif; ?>
                <?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4d7e52336690b9ea120a6913f2c28a6b)): ?>
<?php $attributes = $__attributesOriginal4d7e52336690b9ea120a6913f2c28a6b; ?>
<?php unset($__attributesOriginal4d7e52336690b9ea120a6913f2c28a6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4d7e52336690b9ea120a6913f2c28a6b)): ?>
<?php $component = $__componentOriginal4d7e52336690b9ea120a6913f2c28a6b; ?>
<?php unset($__componentOriginal4d7e52336690b9ea120a6913f2c28a6b); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal44c83e2eb600bf127a623cda69e3ac8b)): ?>
<?php $attributes = $__attributesOriginal44c83e2eb600bf127a623cda69e3ac8b; ?>
<?php unset($__attributesOriginal44c83e2eb600bf127a623cda69e3ac8b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44c83e2eb600bf127a623cda69e3ac8b)): ?>
<?php $component = $__componentOriginal44c83e2eb600bf127a623cda69e3ac8b; ?>
<?php unset($__componentOriginal44c83e2eb600bf127a623cda69e3ac8b); ?>
<?php endif; ?>

        <div class="digital_attachments_input">
            <input
                name="product_files_input[]"
                data-id="<?php echo e(Str::random(10)); ?>"
                type="file"
            >
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala0a922bb70d8e2bee74cdab0a323562a)): ?>
<?php $attributes = $__attributesOriginala0a922bb70d8e2bee74cdab0a323562a; ?>
<?php unset($__attributesOriginala0a922bb70d8e2bee74cdab0a323562a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0a922bb70d8e2bee74cdab0a323562a)): ?>
<?php $component = $__componentOriginala0a922bb70d8e2bee74cdab0a323562a; ?>
<?php unset($__componentOriginala0a922bb70d8e2bee74cdab0a323562a); ?>
<?php endif; ?>

    <?php if($product): ?>
        <?php if (isset($component)) { $__componentOriginal424617256517489644ca6a2e02d16322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal424617256517489644ca6a2e02d16322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::form.checkbox','data' => ['name' => 'notify_attachment_updated','label' => trans('plugins/ecommerce::products.digital_attachments.notify_attachment_updated'),'checked' => old('notify_attachment_updated', $product->notify_attachment_updated),'value' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'notify_attachment_updated','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.digital_attachments.notify_attachment_updated')),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('notify_attachment_updated', $product->notify_attachment_updated)),'value' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal424617256517489644ca6a2e02d16322)): ?>
<?php $attributes = $__attributesOriginal424617256517489644ca6a2e02d16322; ?>
<?php unset($__attributesOriginal424617256517489644ca6a2e02d16322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal424617256517489644ca6a2e02d16322)): ?>
<?php $component = $__componentOriginal424617256517489644ca6a2e02d16322; ?>
<?php unset($__componentOriginal424617256517489644ca6a2e02d16322); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if(request()->ajax()): ?>
        <?php echo $__env->make('plugins/ecommerce::products.partials.digital-product-file-template', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php if(EcommerceHelper::isEnabledLicenseCodesForDigitalProducts()): ?>
            <?php echo $__env->make('plugins/ecommerce::products.partials.license-code-template', ['isVariation' => $isVariation ?? false], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endif; ?>
    <?php else: ?>
        <?php if (! $__env->hasRenderedOnce('bc81d7e8-b290-4c76-bd4e-86ca0b4722b9')): $__env->markAsRenderedOnce('bc81d7e8-b290-4c76-bd4e-86ca0b4722b9');
$__env->startPush('footer'); ?>
            <?php echo $__env->make('plugins/ecommerce::products.partials.digital-product-file-template', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php if(EcommerceHelper::isEnabledLicenseCodesForDigitalProducts()): ?>
                <?php echo $__env->make('plugins/ecommerce::products.partials.license-code-template', ['isVariation' => $isVariation ?? false], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endif; ?>
        <?php $__env->stopPush(); endif; ?>
    <?php endif; ?>
<?php endif; ?>

<?php echo apply_filters('ecommerce_product_variation_form_end', null, $product); ?>

<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/products/partials/general.blade.php ENDPATH**/ ?>