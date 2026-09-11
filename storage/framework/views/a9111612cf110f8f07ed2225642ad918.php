 <div class="ui-select-wrapper form-group <?php echo e(Arr::get($selectAttributes, 'wrapper_class') ?: ''); ?>">
     <?php
         Arr::set($selectAttributes, 'class', Arr::get($selectAttributes, 'class') . ' ui-select');
     ?>
     <select
         name="<?php echo e($name); ?>"
         <?php echo Html::attributes($selectAttributes); ?>

     >
         <?php echo $__env->make('core/base::forms.partials.nested-select-option', [
             'options' => $choices,
             'indent' => null,
             'selected' => $selected,
         ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
     </select>

     <svg class="svg-next-icon svg-next-icon-size-16">
         <svg
             xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 20 20"
         >
             <path d="M10 16l-4-4h8l-4 4zm0-12L6 8h8l-4-4z"></path>
         </svg>
     </svg>
 </div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/core/base/resources/views/forms/partials/nested-select-dropdown.blade.php ENDPATH**/ ?>