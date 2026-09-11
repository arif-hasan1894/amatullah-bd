<?php if(app(Botble\Shippo\Shippo::class)->canCreateTransaction($shipment)): ?>
    <?php
        $url = route(app(\Botble\Shippo\Shippo::class)->getRoutePrefixByFactor() . 'shippo.show', $shipment->id);
    ?>
    <button
        class="btn btn-primary"
        data-bs-toggle="modal"
        data-bs-target="#shippo-view-n-create-transaction"
        data-url="<?php echo e($url); ?>"
        type="button"
    >
        <img
            src="<?php echo e(url('vendor/core/plugins/shippo/images/icon.svg')); ?>"
            alt="shippo"
            height="16"
            class="me-1"
            style="filter: brightness(0) invert(1);"
        >
        <span><?php echo e(trans('plugins/shippo::shippo.transaction.view_and_create')); ?></span>
    </button>

    <div
        class="modal fade"
        id="shippo-view-n-create-transaction"
        aria-labelledby="shippo-view-n-create-transaction-label"
        aria-hidden="true"
        tabindex="-1"
    >
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5
                        class="modal-title"
                        id="shippo-view-n-create-transaction-label"
                    ><?php echo e(trans('plugins/shippo::shippo.transaction.view_and_create')); ?></h5>
                    <button
                        class="btn-close"
                        data-bs-dismiss="modal"
                        type="button"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body"></div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if($shipment->label_url): ?>
    <a
        class="btn btn-success"
        href="<?php echo e($shipment->label_url); ?>"
        target="_blank"
        rel="noopener noreferrer"
    >
        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-printer'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        <span><?php echo e(trans('plugins/shippo::shippo.print_label')); ?></span>
    </a>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/shippo/resources/views/buttons.blade.php ENDPATH**/ ?>