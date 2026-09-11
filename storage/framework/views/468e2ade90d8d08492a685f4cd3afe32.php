<div
    class="modal fade"
    id="product-review-modal"
    aria-labelledby="product-review-modal-label"
    aria-hidden="true"
    tabindex="-1"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header position-absolute border-0 top-0 end-0">
                <button
                    class="btn-close"
                    data-dismiss="modal"
                    data-bs-dismiss="modal"
                    type="button"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body modal-dialog-scrollable">
                <?php echo $__env->make(EcommerceHelper::viewPath('customers.product-reviews.form'), ['product' => null], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/themes/customers/product-reviews/modal.blade.php ENDPATH**/ ?>