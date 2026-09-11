{{-- AMATULLAH_PRODUCT_SPEC_UPDATE_EXISTING_DEFINITIVE --}}
<div class="mb-3">
    <x-core::form.checkbox
        name="update_existing_product_specifications"
        :label="trans('plugins/ecommerce::product-specification.import.update_existing_product_specifications')"
        :helper-text="trans('plugins/ecommerce::product-specification.import.update_existing_product_specifications_description')"
        :checked="old('update_existing_product_specifications', false)"
    />
</div>
