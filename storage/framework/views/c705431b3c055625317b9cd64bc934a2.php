<?php
    use Botble\Ecommerce\Models\ProductSpecificationAttributeTranslation;
?>

<p class="text-secondary mb-0 p-3">
    <?php echo e(trans('plugins/ecommerce::product-specification.product.specification_table.description')); ?>

</p>

<div class="specification-table"></div>

<script>
    $(() => {
        $(document)
            .on('change', '#specification_table_id', function() {
                const $this = $(this);
                const $form = $this.closest('form');
                const $table = $this.val();

                if ($table) {
                    $.ajax({
                        url: '<?php echo e($getTableUrl); ?>',
                        data: {
                            table: $table,
                            <?php if($model): ?>
                                product: '<?php echo e($model->getKey()); ?>',
                                ref_lang: '<?php echo e(request()->input('ref_lang')); ?>',
                            <?php endif; ?>
                        },
                        success: function(response) {
                            if (response.data) {
                                $form.find('.specification-table').html(response.data);
                                $('.product-specification-table p').hide();

                                <?php if(ProductSpecificationAttributeTranslation::isEditingDefaultLanguage()): ?>
                                    $form.find('.specification-table table tbody').sortable({
                                        update: function() {
                                            $(this).find('tr').each(function(index) {
                                                $(this).find('input[name$="[order]"]').val(index);
                                            });
                                        },
                                    });
                                <?php endif; ?>
                            }
                        },
                    });
                } else {
                    $form.find('.specification-table').html('');
                    $('.product-specification-table p').show();
                }
            });

        $('#specification_table_id').trigger('change');
    });
</script>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/products/partials/specification-table/content.blade.php ENDPATH**/ ?>