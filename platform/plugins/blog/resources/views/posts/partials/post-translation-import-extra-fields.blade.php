<x-core::form-group>
    <x-core::form.checkbox
        name="update_existing_post_translations"
        label="Update existing post translations only"
        helper-text="Only translation rows that already exist will be updated. Missing translations and unknown Post IDs will be ignored. Leave unchecked to create missing translation rows for existing Posts."
        value="1"
    />
</x-core::form-group>
