<div class="box-table-shipping input-shipping-sync-wrapper box-table-shipping-item-<?php echo e($rule ? $rule->id : 0); ?> mb-2">
    <div class="accordion" id="accordion-rule-<?php echo e($rule->id); ?>">
        <div class="accordion-item">
            <div class="accordion-header" id="heading-rule-<?php echo e($rule->id); ?>">
                <button
                    class="accordion-button collapsed px-3 py-2"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapse-rule-<?php echo e($rule->id); ?>"
                    type="button"
                    aria-expanded="false"
                    aria-controls="collapse-rule-<?php echo e($rule->id); ?>"
                >
                    <div class="w-100 d-flex justify-content-between align-items-center">
                        <div>
                            <span class="fw-bold label-rule-item-name"><?php echo e($rule->name); ?></span>
                            <div class="small">
                                <?php if($rule->type->allowRuleItems()): ?>
                                    <span><?php echo e($rule->type->label()); ?></span>
                                <?php else: ?>
                                    <span class="<?php echo \Illuminate\Support\Arr::toCssClasses(['rule-to-value-missing', 'hidden' => $rule->to]); ?>">
                                        <?php echo e(trans('plugins/ecommerce::shipping.greater_than')); ?>

                                    </span>
                                    <span class="from-value-label"><?php echo e($rule->type->toUnitText($rule->from)); ?></span>
                                    <span class="<?php echo \Illuminate\Support\Arr::toCssClasses(['rule-to-value-wrap', 'hidden' => !$rule->to]); ?>">
                                        <span class="m-1">-</span>
                                        <span class="to-value-label"><?php echo e($rule->type->toUnitText($rule->to)); ?></span>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="me-3">
                            <span class="rule-price-item"><?php echo e(format_price($rule->price ?? 0)); ?></span>
                        </div>
                    </div>
                </button>
            </div>
            <div
                class="accordion-collapse collapse"
                id="collapse-rule-<?php echo e($rule->id); ?>"
                data-bs-parent="#accordion-rule-<?php echo e($rule->id); ?>"
                aria-labelledby="heading-rule-<?php echo e($rule->id); ?>"
            >
                <div class="accordion-body shipping-detail-information">
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
                        <?php echo $__env->make('plugins/ecommerce::shipping.rules.form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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

                    <?php if($rule && $rule->type->allowRuleItems() && Auth::user()->hasPermission('ecommerce.settings.shipping')): ?>
                        <?php echo $__env->make('plugins/ecommerce::shipping.items.index', [
                            'total' => $rule->items_count,
                        ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/shipping/rules/item.blade.php ENDPATH**/ ?>