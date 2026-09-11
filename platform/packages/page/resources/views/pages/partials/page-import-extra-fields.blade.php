<x-core::form-group>
    <x-core::form.checkbox
        name="update_existing_pages"
        label="Update existing pages only"
        helper-text="Existing Pages are matched by slug first, then exact name. Unmatched rows are ignored. Leave unchecked to create missing Pages."
        value="1"
    />
</x-core::form-group>
