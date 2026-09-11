<?php $__currentLoopData = $customFields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customField): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($loop->index % 2 == 0): ?>
        <div class="row">
    <?php endif; ?>
    <?php if($customField->type == \Botble\Contact\Enums\CustomFieldType::TEXT): ?>
        <div class="col-md-6">
            <div class="form-group mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="contact_custom_fields[<?php echo e($customField->getKey()); ?>]"
                    placeholder="<?php echo e($customField->name); ?>"
                >
            </div>
        </div>
    <?php elseif($customField->type == \Botble\Contact\Enums\CustomFieldType::NUMBER): ?>
        <div class="col-md-6">
            <div class="form-group mb-3">
                <input
                    type="number"
                    class="form-control"
                    name="contact_custom_fields[<?php echo e($customField->getKey()); ?>]"
                    placeholder="<?php echo e($customField->name); ?>"
                >
            </div>
        </div>
    <?php elseif($customField->type == \Botble\Contact\Enums\CustomFieldType::TEXTAREA): ?>
        <div class="col-md-6">
            <div class="form-group mb-3">
                <textarea
                    class="form-control"
                    name="contact_custom_fields[<?php echo e($customField->getKey()); ?>]"
                    rows="5"
                    placeholder="<?php echo e($customField->name); ?>"
                ></textarea>
            </div>
        </div>
    <?php elseif($customField->type == \Botble\Contact\Enums\CustomFieldType::DROPDOWN): ?>
        <?php if(!$customField->options->filter(fn($option) => !empty($option->label))) continue; ?>
        <div class="col-md-6">
            <div class="form-group mb-3">
                <select
                    class="form-select"
                    name="contact_custom_fields[<?php echo e($customField->getKey()); ?>]"
                >
                    <option value=""><?php echo e($customField->name); ?></option>
                    <?php $__currentLoopData = $customField->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($option->label); ?>"><?php echo e($option->label); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
    <?php elseif($customField->type == \Botble\Contact\Enums\CustomFieldType::CHECKBOX): ?>
        <?php if(!$customField->options->filter(fn($option) => !empty($option->label))) continue; ?>
        <div class="col-md-12">
            <div class="form-group mb-3">
                <strong class="font-sm-bold color-grey-900"><?php echo e($customField->name); ?></strong>
                <div class="row mt-10 box-cb-form">
                    <?php $__currentLoopData = $customField->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-3">
                                <?php ($id = Str::kebab("{$customField->name}-{$loop->index}")); ?>
                                <input
                                    class="cd-form"
                                    type="checkbox"
                                    name="contact_custom_fields[<?php echo e($customField->getKey()); ?>][]"
                                    value="<?php echo e($option->value); ?>"
                                    id="cb-<?php echo e($id); ?>"
                                />
                                <label for="cb-<?php echo e($id); ?>">
                                    <?php echo e($option->label); ?>

                                </label>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if($loop->index % 2 != 0): ?>
        </div>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/contact/resources/views/forms/old-version-support.blade.php ENDPATH**/ ?>