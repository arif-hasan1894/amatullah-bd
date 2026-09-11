<?php $__env->startSection('content'); ?>
    <?php echo Form::open(['class' => 'form-import-data', 'files' => 'true']); ?>

    <div class="row justify-content-center">
        <div class="col-xxl-6 col-xl-8 col-lg-10 col-12">
            <div class="widget meta-boxes mb-4">
                <div class="widget-title pl-2">
                    <h4><?php echo e(trans('plugins/ecommerce::shipping.rule.item.bulk-import.menu')); ?></h4>
                </div>
                <div class="widget-body">
                    <div class="form-group mb-3 <?php if($errors->has('type')): ?> has-error <?php endif; ?>">
                        <label
                            class="form-label required"
                            for="type"
                        >
                            <?php echo e(trans('plugins/ecommerce::bulk-import.import_types.name')); ?>

                        </label>
                        <?php echo Form::customSelect(
                            'type',
                            [
                                'overwrite' => trans('plugins/ecommerce::shipping.rule.item.bulk-import.overwrite'),
                                'add_new' => trans('plugins/ecommerce::shipping.rule.item.bulk-import.add_new'),
                                'skip' => trans('plugins/ecommerce::shipping.rule.item.bulk-import.skip'),
                            ],
                            null,
                            ['required' => true],
                        ); ?>

                        <?php echo Form::error('type', $errors); ?>

                    </div>
                    <div class="form-group mb-3 <?php if($errors->has('file')): ?> has-error <?php endif; ?>">
                        <label
                            class="form-label required"
                            for="input-group-file"
                        >
                            <?php echo e(trans('plugins/ecommerce::bulk-import.choose_file')); ?>

                        </label>
                        <?php echo Form::file('file', [
                            'id' => 'input-group-file',
                            'class' => 'form-control',
                            'required' => true,
                            'aria-describedby' => 'input-group-addon',
                        ]); ?>

                        <label
                            class="d-block mt-1 help-block"
                            for="input-group-file"
                        >
                            <?php echo e(trans('plugins/ecommerce::bulk-import.choose_file_with_mime', ['types' => implode(', ', config('plugins.ecommerce.general.bulk-import.mimes', []))])); ?>

                        </label>

                        <?php echo Form::error('file', $errors); ?>

                        <div class="mt-3 text-center p-2 border bg-body-tertiary">
                            <a
                                class="download-template"
                                data-url="<?php echo e(route('ecommerce.shipping-rule-items.bulk-import.download-template')); ?>"
                                data-extension="csv"
                                data-filename="template_shipping_rule_items_import.csv"
                                data-downloading="<i class='fas fa-spinner fa-spin'></i> <?php echo e(trans('plugins/ecommerce::bulk-import.downloading')); ?>"
                                href="#"
                            >
                                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-file-type-csv'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                <?php echo e(trans('plugins/ecommerce::bulk-import.download-csv-file')); ?>

                            </a> &nbsp; | &nbsp;
                            <a
                                class="download-template"
                                data-url="<?php echo e(route('ecommerce.shipping-rule-items.bulk-import.download-template')); ?>"
                                data-extension="xlsx"
                                data-filename="template_shipping_rule_items_import.xlsx"
                                data-downloading="<i class='fas fa-spinner fa-spin'></i> <?php echo e(trans('plugins/ecommerce::bulk-import.downloading')); ?>"
                                href="#"
                            >
                                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-file-excel'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                <?php echo e(trans('plugins/ecommerce::bulk-import.download-excel-file')); ?>

                            </a>
                        </div>
                    </div>
                    <div class="form-group mb-3 d-grid">
                        <button
                            class="btn btn-info"
                            id="input-group-addon"
                            data-choose-file="<?php echo e(trans('plugins/ecommerce::bulk-import.please_choose_the_file')); ?>"
                            data-loading-text="<?php echo e(trans('plugins/ecommerce::bulk-import.loading_text')); ?>"
                            data-complete-text="<?php echo e(trans('plugins/ecommerce::bulk-import.imported_successfully')); ?>"
                            type="submit"
                        >
                            <?php echo e(trans('plugins/ecommerce::bulk-import.start_import')); ?>

                        </button>
                    </div>
                </div>
            </div>
            <div class="hidden main-form-message">
                <p id="imported-message"></p>
                <div class="show-errors hidden">
                    <h3 class="text-warning text-center"><?php echo e(trans('plugins/ecommerce::bulk-import.failures')); ?></h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#<?php echo e(trans('plugins/ecommerce::bulk-import.row')); ?></th>
                                <th scope="col"><?php echo e(trans('plugins/ecommerce::bulk-import.attribute')); ?></th>
                                <th scope="col"><?php echo e(trans('plugins/ecommerce::bulk-import.errors')); ?></th>
                            </tr>
                        </thead>
                        <tbody id="imported-listing">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php echo Form::close(); ?>


    <div class="widget meta-boxes">
        <div class="widget-title pl-2">
            <h4 class="text-info"><?php echo e(trans('plugins/ecommerce::bulk-import.template')); ?></h4>
        </div>
        <div class="widget-body">
            <div class="table-responsive">
                <table class="table text-start table-striped table-bordered">
                    <thead>
                        <tr>
                            <?php $__currentLoopData = $headings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heading): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <th><?php echo e($heading); ?></th>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <?php $__currentLoopData = $headings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td><?php echo e(Arr::get($product, $k)); ?></td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="widget meta-boxes mt-4">
        <div class="widget-title pl-2">
            <h4 class="text-info"><?php echo e(trans('plugins/ecommerce::bulk-import.rules')); ?></h4>
        </div>
        <div class="widget-body">
            <table class="table text-start table-bordered">
                <thead>
                    <tr>
                        <th scope="col"><?php echo e(trans('plugins/ecommerce::bulk-import.column')); ?></th>
                        <th scope="col"><?php echo e(trans('plugins/ecommerce::bulk-import.rules')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $rules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $rule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e(Arr::get($headings, $k)); ?></th>
                            <td>(<?php echo e($rule); ?>)</td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('footer'); ?>
    <?php if (isset($component)) { $__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0e6b0152aee5342533433c1a5b9b4cb1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '8def1252668913628243c4d363bee1ef::custom-template','data' => ['id' => 'failure-template']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::custom-template'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'failure-template']); ?>
        <tr>
            <td scope="row">__row__</td>
            <td>__attribute__</td>
            <td>__errors__</td>
        </tr>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0e6b0152aee5342533433c1a5b9b4cb1)): ?>
<?php $attributes = $__attributesOriginal0e6b0152aee5342533433c1a5b9b4cb1; ?>
<?php unset($__attributesOriginal0e6b0152aee5342533433c1a5b9b4cb1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1)): ?>
<?php $component = $__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1; ?>
<?php unset($__componentOriginal0e6b0152aee5342533433c1a5b9b4cb1); ?>
<?php endif; ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(BaseHelper::getAdminMasterLayoutTemplate(), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/shipping/bulk-import/index.blade.php ENDPATH**/ ?>