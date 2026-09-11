<?php $__env->startSection('content'); ?>
    <div class="form-content-area">
        <?php if($showStart): ?>
            <?php echo Form::open(Arr::except($formOptions, ['template'])); ?>

        <?php endif; ?>

        <?php do_action(BASE_ACTION_TOP_FORM_CONTENT_NOTIFICATION, request(), $form->getModel()) ?>
        <div class="max-width-1200">
            <div class="flexbox-grid no-pd-none">

                <div class="flexbox-content">
                    <?php do_action(BASE_ACTION_META_BOXES, 'main', $form->getModel()) ?>
                    <div class="widget meta-boxes">
                        <div class="widget-title">
                            <h4>
                                <span><?php echo e(trans('core/base::forms.basic_info_title')); ?></span>
                            </h4>
                        </div>
                        <div class="widget-body">
                            <?php if($showFields): ?>
                                <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($field->getName() == $form->getBreakFieldPoint()): ?>
                                        <?php break; ?>

                                    <?php else: ?>
                                        <?php unset($fields[$key]); ?>
                                    <?php endif; ?>
                                    <?php if(!in_array($field->getName(), $exclude)): ?>
                                        <?php echo $field->render(); ?>

                                        <?php if(defined('BASE_FILTER_SLUG_AREA') && $field->getName() == SlugHelper::getColumnNameToGenerateSlug($form->getModel())): ?>
                                            <?php echo apply_filters(BASE_FILTER_SLUG_AREA, null, $form->getModel()); ?>

                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php $__currentLoopData = $form->getMetaBoxes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $metaBox): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $form->getMetaBox($key); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php do_action(BASE_ACTION_META_BOXES, 'advanced', $form->getModel()) ?>
                </div>
                <div class="flexbox-content flexbox-right">
                    <div class="d-flex flex-column-reverse flex-md-column">
                        <div class="form-actions-wrapper">
                            <?php echo $form->getActionButtons(); ?>

                        </div>
                        <div class="form-side-meta-boxes">
                            <?php do_action(BASE_ACTION_META_BOXES, 'top', $form->getModel()) ?>

                            <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(!in_array($field->getName(), $exclude)): ?>
                                    <?php if(in_array($field->getType(), ['hidden', \Botble\Base\Forms\Fields\HiddenField::class])): ?>
                                        <?php echo $field->render(); ?>

                                    <?php else: ?>
                                        <div class="widget meta-boxes">
                                            <div class="widget-title">
                                                <h4><?php echo Form::customLabel($field->getName(), $field->getOption('label'), $field->getOption('label_attr')); ?></h4>
                                            </div>
                                            <div class="widget-body">
                                                <?php echo $field->render([], false); ?>

                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php do_action(BASE_ACTION_META_BOXES, 'side', $form->getModel()) ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php if($showEnd): ?>
                <?php echo Form::close(); ?>

            <?php endif; ?>
        <?php $__env->stopSection(); ?>

        <?php if($form->getValidatorClass()): ?>
            <?php if($form->isUseInlineJs()): ?>
                <?php echo Assets::scriptToHtml('jquery'); ?>

                <?php echo Assets::scriptToHtml('form-validation'); ?>

                <?php echo $form->renderValidatorJs(); ?>

            <?php else: ?>
                <?php $__env->startPush('footer'); ?>
                    <?php echo $form->renderValidatorJs(); ?>

                <?php $__env->stopPush(); ?>
            <?php endif; ?>
        <?php endif; ?>

<?php echo $__env->make($layout ?? BaseHelper::getAdminMasterLayoutTemplate(), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/dev.amatullah.bd/platform/core/base/resources/views/forms/form-limit-size.blade.php ENDPATH**/ ?>