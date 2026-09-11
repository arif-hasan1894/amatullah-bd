{{-- AMATULLAH_PRODUCT_PRICE_IMPORT_UI_V1 --}}
<div class="mb-3">
    <x-core::form.checkbox
        name="update_existing_product_prices"
        label="Update existing product prices"
        helper-text="Update only non-empty price values supplied in the file. Blank cost, price, or sale price cells preserve the current value. Unknown product IDs are ignored."
        :checked="old('update_existing_product_prices', false)"
    />
</div>
