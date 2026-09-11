<div class="ps-faqs pt-40 pb-40">
    <div class="container">
        <div class="ps-section__header">
            <h1><?php echo BaseHelper::clean($title); ?></h1>
        </div>
        <div class="ps-section__content">
                <div class="ps-table--faqs">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="faq-group">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <h4 class="heading"><?php echo e($category->name); ?></h4>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <?php $__currentLoopData = $category->faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="faq-item">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <p class="question"><?php echo e($faq->question); ?></p>
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                                <p class="answer"><?php echo BaseHelper::clean($faq->answer); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/themes/amatullah/partials/short-codes/faq.blade.php ENDPATH**/ ?>