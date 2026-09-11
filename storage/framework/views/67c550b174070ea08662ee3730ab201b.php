<script>
    'use strict';

    window.trans = window.trans || {};

    window.trans['core/base::forms'] = {
        save_and_continue: <?php echo json_encode(trans('core/base::forms.save_and_continue'), 15, 512) ?>,
        save: <?php echo json_encode(trans('core/base::forms.save'), 15, 512) ?>,
    };

    window.trans.discount = {
        select_type_of_discount: '<?php echo e(trans('plugins/ecommerce::discount.select_type_of_discount')); ?>',
        coupon_code: '<?php echo e(trans('plugins/ecommerce::discount.coupon_code')); ?>',
        promotion: '<?php echo e(trans('plugins/ecommerce::discount.promotion')); ?>',
        create_discount_promotion: '<?php echo e(trans('plugins/ecommerce::discount.create_discount_promotion')); ?>',
        create_coupon_code: '<?php echo e(trans('plugins/ecommerce::discount.create_coupon_code')); ?>',
        generate_coupon_code: '<?php echo e(trans('plugins/ecommerce::discount.generate_coupon_code')); ?>',
        enter_promotion_name: '<?php echo e(trans('plugins/ecommerce::discount.enter_promotion_name')); ?>',
        customers_will_enter_this_coupon_code_when_they_checkout: '<?php echo e(trans('plugins/ecommerce::discount.customers_will_enter_this_coupon_code_when_they_checkout')); ?>',
        can_be_used_with_promotion: '<?php echo e(trans('plugins/ecommerce::discount.can_be_used_with_promotion')); ?>',
        can_be_used_with_flash_sale: '<?php echo e(trans('plugins/ecommerce::discount.can_be_used_with_flash_sale')); ?>',
        can_be_used_with_flash_sale_help: '<?php echo e(trans('plugins/ecommerce::discount.can_be_used_with_flash_sale_help')); ?>',
        unlimited_coupon: '<?php echo e(trans('plugins/ecommerce::discount.unlimited_coupon')); ?>',
        enter_number: '<?php echo e(trans('plugins/ecommerce::discount.enter_number')); ?>',
        apply_via_url: '<?php echo e(trans('plugins/ecommerce::discount.apply_via_url')); ?>',
        apply_via_url_description: '<?php echo e(trans('plugins/ecommerce::discount.apply_via_url_description')); ?>',
        display_at_checkout: '<?php echo e(trans('plugins/ecommerce::discount.display_at_checkout')); ?>',
        display_at_checkout_description: '<?php echo e(trans('plugins/ecommerce::discount.display_at_checkout_description')); ?>',
        description: '<?php echo e(trans('plugins/ecommerce::discount.description')); ?>',
        description_placeholder: '<?php echo e(trans('plugins/ecommerce::discount.description_placeholder')); ?>',
        coupon_type: '<?php echo e(trans('plugins/ecommerce::discount.coupon_type')); ?>',
        discount_type: '<?php echo e(trans('plugins/ecommerce::discount.discount_type')); ?>',
        percentage_discount: '<?php echo e(trans('plugins/ecommerce::discount.percentage_discount')); ?>',
        free_shipping: '<?php echo e(trans('plugins/ecommerce::discount.free_shipping')); ?>',
        same_price: '<?php echo e(trans('plugins/ecommerce::discount.same_price')); ?>',
        apply_for: '<?php echo e(trans('plugins/ecommerce::discount.apply_for')); ?>',
        apply_to: '<?php echo e(trans('plugins/ecommerce::discount.apply_to')); ?>',
        all_orders: '<?php echo e(trans('plugins/ecommerce::discount.all_orders')); ?>',
        order_amount_from: '<?php echo e(trans('plugins/ecommerce::discount.order_amount_from')); ?>',
        product_collection: '<?php echo e(trans('plugins/ecommerce::discount.product_collection')); ?>',
        product_category: '<?php echo e(trans('plugins/ecommerce::discount.product_category')); ?>',
        product: '<?php echo e(trans('plugins/ecommerce::discount.product')); ?>',
        customer: '<?php echo e(trans('plugins/ecommerce::discount.customer')); ?>',
        variant: '<?php echo e(trans('plugins/ecommerce::discount.variant')); ?>',
        once_per_customer: '<?php echo e(trans('plugins/ecommerce::discount.once_per_customer')); ?>',
        search_product: '<?php echo e(trans('plugins/ecommerce::discount.search_product')); ?>',
        no_products_found: '<?php echo e(trans('plugins/ecommerce::discount.no_products_found')); ?>',
        search_customer: '<?php echo e(trans('plugins/ecommerce::discount.search_customer')); ?>',
        no_customer_found: '<?php echo e(trans('plugins/ecommerce::discount.no_customer_found')); ?>',
        one_time_per_order: '<?php echo e(trans('plugins/ecommerce::discount.one_time_per_order')); ?>',
        one_time_per_product_in_cart: '<?php echo e(trans('plugins/ecommerce::discount.one_time_per_product_in_cart')); ?>',
        number_of_products: '<?php echo e(trans('plugins/ecommerce::discount.number_of_products')); ?>',
        selected_products: '<?php echo e(trans('plugins/ecommerce::discount.selected_products')); ?>',
        selected_customers: '<?php echo e(trans('plugins/ecommerce::discount.selected_customers')); ?>',
        time: '<?php echo e(trans('plugins/ecommerce::discount.time')); ?>',
        start_date: '<?php echo e(trans('plugins/ecommerce::discount.start_date')); ?>',
        end_date: '<?php echo e(trans('plugins/ecommerce::discount.end_date')); ?>',
        never_expired: '<?php echo e(trans('plugins/ecommerce::discount.never_expired')); ?>',
        save: '<?php echo e(trans('plugins/ecommerce::discount.save')); ?>',
        discount: '<?php echo e(trans('plugins/ecommerce::discount.discount')); ?>',
        when_shipping_fee_less_than: '<?php echo e(trans('plugins/ecommerce::discount.when_shipping_fee_less_than')); ?>',
        is: '<?php echo e(trans('plugins/ecommerce::discount.is')); ?>',
    }

    $(document).ready(function() {
        $(document).on('click', 'body', function(e) {
            let container = $('.box-search-advance');

            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.find('.panel').addClass('hidden');
            }
        });
    });
</script>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/discounts/partials/trans.blade.php ENDPATH**/ ?>