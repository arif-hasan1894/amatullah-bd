<div class="customer-billing-address-form">
    <?php
        $oldSessionAddressId = null;
        $billingAddressSameAsShippingAddress = old('billing_address_same_as_shipping_address', Arr::get($sessionCheckoutData, 'billing_address_same_as_shipping_address', true));
        $showAddBillingCheckbox = ! $isShowAddressForm && ! (auth('customer')->check() && $isAvailableAddress);
        $addBillingInfoChecked = $showAddBillingCheckbox ? old('add_billing_info', Arr::get($sessionCheckoutData, 'add_billing_info', false)) : false;
    ?>
    <div class="mb-3 form-group">
        <input
            name="billing_address_same_as_shipping_address"
            type="hidden"
            value="0"
        >
        <?php if($isShowAddressForm): ?>
            <label class="form-check">
                <input
                    id="billing_address_same_as_shipping_address"
                    name="billing_address_same_as_shipping_address"
                    type="checkbox"
                    value="1"
                    class="form-check-input"
                    <?php if($billingAddressSameAsShippingAddress): echo 'checked'; endif; ?>
                >
                <span
                    class="form-check-label"
                ><?php echo e(__('Same as shipping information')); ?></span>
            </label>
        <?php elseif(auth('customer')->check() && $isAvailableAddress): ?>
            <input
                name="billing_address_same_as_shipping_address"
                type="hidden"
                value="1"
                id="billing_address_same_as_shipping_address_select"
            >
            <?php
                $oldSessionAddressId = old('address.address_id', $sessionAddressId);
            ?>
            <div class="select--arrow form-input-wrapper">
                <select
                    class="form-control"
                    id="billing_address_id"
                    name="address[address_id]"
                >
                    <option value=""><?php echo e(trans('plugins/ecommerce::order.enter_new_billing_address')); ?></option>
                    <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option
                            value="<?php echo e($address->id); ?>"
                            <?php if($oldSessionAddressId == $address->id): echo 'selected'; endif; ?>
                        ><?php echo e($address->name ? $address->name . ' - ' : ''); ?><?php echo e($address->full_address); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-chevron-down'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
            </div>
            <br>
        <?php elseif($showAddBillingCheckbox): ?>
            <input
                name="billing_address_same_as_shipping_address"
                type="hidden"
                value="1"
                id="billing_address_same_as_shipping_address_hidden"
            >
            <label class="form-check">
                <input
                    id="add_billing_info_checkbox"
                    name="add_billing_info"
                    type="checkbox"
                    value="1"
                    class="form-check-input"
                    <?php if($addBillingInfoChecked): echo 'checked'; endif; ?>
                >
                <span
                    class="form-check-label"
                ><?php echo e(trans('plugins/ecommerce::order.add_billing_information')); ?></span>
            </label>
        <?php endif; ?>
    </div>

    <div
        class="billing-address-form-wrapper"
        <?php if(
            ($oldSessionAddressId && $oldSessionAddressId != 'new') ||
                ($isShowAddressForm && $billingAddressSameAsShippingAddress) ||
                ($showAddBillingCheckbox && ! $addBillingInfoChecked)): ?> style="display: none" <?php endif; ?>
    >
        <div class="form-group mb-3 <?php $__errorArgs = ['billing_address.name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <div class="form-input-wrapper">
                <input
                    class="form-control"
                    id="billing-address-name"
                    name="billing_address[name]"
                    autocomplete="family-name"
                    type="text"
                    value="<?php echo e(old('billing_address.name', Arr::get($sessionCheckoutData, 'billing_address.name')) ?: (auth('customer')->check() ? auth('customer')->user()->name : null)); ?>"
                >
                <label for='billing-address-name'><?php echo e(__('Full Name')); ?></label>
            </div>
            <?php echo Form::error('billing_address.name', $errors); ?>

        </div>

        <div class="row">
            <div class="col-lg-7 col-12">
                <div class="form-group  <?php $__errorArgs = ['billing_address.email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <div class="form-input-wrapper">
                        <input
                            class="form-control"
                            id="billing-address-email"
                            name="billing_address[email]"
                            autocomplete="email"
                            type="email"
                            value="<?php echo e(old('billing_address.email', Arr::get($sessionCheckoutData, 'billing_address.email')) ?: (auth('customer')->check() ? auth('customer')->user()->email : null)); ?>"
                        >
                        <label for='billing-address-email'><?php echo e(__('Email')); ?></label>
                    </div>
                    <?php echo Form::error('billing_address.email', $errors); ?>

                </div>
            </div>
            <?php
                $phoneCountryCodeEnabled = setting('phone_number_enable_country_code', true);
                $billingPhoneValue = old('billing_address.phone', Arr::get($sessionCheckoutData, 'billing_address.phone')) ?: (auth('customer')->check() ? auth('customer')->user()->phone : null);
            ?>
            <div class="col-lg-5 col-12">
                <div class="form-group  <?php $__errorArgs = ['billing_address.phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <div class="phone-input-wrapper">
                        <?php if($phoneCountryCodeEnabled): ?>
                            <input
                                class="form-control js-phone-number-mask"
                                id="billing-address-phone"
                                name="billing_address[phone_display]"
                                autocomplete="phone"
                                type="tel"
                                data-country-code-selection="true"
                                value="<?php echo e($billingPhoneValue); ?>"
                                placeholder="<?php echo e(trans('plugins/ecommerce::addresses.phone_placeholder')); ?>"
                            >
                            <input
                                type="hidden"
                                name="billing_address[phone]"
                                id="billing-address-phone-full"
                                class="js-phone-number-full"
                                data-phone-field="billing_address[phone_display]"
                                value="<?php echo e($billingPhoneValue); ?>"
                            >
                        <?php else: ?>
                            <input
                                class="form-control js-phone-number-mask"
                                id="billing-address-phone"
                                name="billing_address[phone]"
                                autocomplete="phone"
                                type="tel"
                                value="<?php echo e($billingPhoneValue); ?>"
                                placeholder="<?php echo e(trans('plugins/ecommerce::addresses.phone_placeholder')); ?>"
                            >
                        <?php endif; ?>
                        <label for="billing-address-phone"><?php echo e(__('Phone')); ?></label>
                    </div>
                    <?php echo Form::error('billing_address.phone', $errors); ?>

                </div>
            </div>
        </div>

        <div class="form-group mb-3 <?php $__errorArgs = ['billing_address.country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <?php if(EcommerceHelper::isUsingInMultipleCountries()): ?>
                <div class="select--arrow form-input-wrapper">
                    <select
                        class="form-control"
                        id="billing-address-country"
                        name="billing_address[country]"
                        data-form-parent=".customer-billing-address-form"
                        data-type="country"
                        autocomplete="country"
                    >
                        <?php $__currentLoopData = EcommerceHelper::getAvailableCountries(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $countryCode => $countryName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option
                                value="<?php echo e($countryCode); ?>"
                                <?php if(old('billing_address.country', Arr::get($sessionCheckoutData, 'billing_address.country')) == $countryCode): ?> selected <?php endif; ?>
                            ><?php echo e($countryName); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-chevron-down'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
                    <label for='billing-address-country'><?php echo e(__('Country')); ?></label>
                </div>
            <?php else: ?>
                <input
                    id="billing-address-country"
                    name="billing_address[country]"
                    type="hidden"
                    value="<?php echo e(EcommerceHelper::getFirstCountryId()); ?>"
                >
            <?php endif; ?>
            <?php echo Form::error('billing_address.country', $errors); ?>

        </div>

        <div class="row">
            <div class="col-sm-6 col-12">
                <div class="form-group mb-3 <?php $__errorArgs = ['billing_address.state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <?php if(EcommerceHelper::loadCountriesStatesCitiesFromPluginLocation()): ?>
                        <div class="select--arrow form-input-wrapper">
                            <select
                                class="form-control"
                                id="billing-address-state"
                                name="billing_address[state]"
                                data-form-parent=".customer-billing-address-form"
                                data-type="state"
                                autocomplete="state"
                                data-url="<?php echo e(route('ajax.states-by-country')); ?>"
                            >
                                <option value=""><?php echo e(__('Select state...')); ?></option>
                                <?php if(old('billing_address.country', Arr::get($sessionCheckoutData, 'billing_address.country')) ||
                                        !EcommerceHelper::isUsingInMultipleCountries()): ?>
                                    <?php $__currentLoopData = EcommerceHelper::getAvailableStatesByCountry(old('billing_address.country', Arr::get($sessionCheckoutData, 'billing_address.country'))); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stateId => $stateName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            value="<?php echo e($stateId); ?>"
                                            <?php if(old('billing_address.state', Arr::get($sessionCheckoutData, 'billing_address.state')) == $stateId): ?> selected <?php endif; ?>
                                        ><?php echo e($stateName); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-chevron-down'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
                            <label for='billing-address-state'><?php echo e(__('State')); ?></label>
                        </div>
                    <?php else: ?>
                        <div class="form-input-wrapper">
                            <input
                                class="form-control"
                                id="billing-address-state"
                                name="billing_address[state]"
                                type="text"
                                autocomplete="state"
                                value="<?php echo e(old('billing_address.state', Arr::get($sessionCheckoutData, 'billing_address.state'))); ?>"
                            >
                            <label for='billing-address-state'><?php echo e(__('State')); ?></label>
                        </div>
                    <?php endif; ?>
                    <?php echo Form::error('billing_address.state', $errors); ?>

                </div>
            </div>

            <div class="col-sm-6 col-12">
                <div class="form-group  <?php $__errorArgs = ['billing_address.city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <?php if(EcommerceHelper::useCityFieldAsTextField()): ?>
                        <div class="form-input-wrapper">
                            <input
                                class="form-control"
                                id="billing-address-city"
                                name="billing_address[city]"
                                type="text"
                                autocomplete="city"
                                value="<?php echo e(old('billing_address.city', Arr::get($sessionCheckoutData, 'billing_address.city'))); ?>"
                            >
                            <label for='billing-address-city'><?php echo e(__('City')); ?></label>
                        </div>
                    <?php else: ?>
                        <div class="select--arrow form-input-wrapper">
                            <select
                                class="form-control"
                                id="billing-address-city"
                                name="billing_address[city]"
                                data-type="city"
                                autocomplete="city"
                                data-using-select2="false"
                                data-url="<?php echo e(route('ajax.cities-by-state')); ?>"
                            >
                                <option value=""><?php echo e(__('Select city...')); ?></option>
                                <?php if(old('billing_address.state', Arr::get($sessionCheckoutData, 'billing_address.state'))): ?>
                                    <?php $__currentLoopData = EcommerceHelper::getAvailableCitiesByState(old('billing_address.state', Arr::get($sessionCheckoutData, 'billing_address.state'))); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cityId => $cityName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            value="<?php echo e($cityId); ?>"
                                            <?php if(old('billing_address.city', Arr::get($sessionCheckoutData, 'billing_address.city')) == $cityId): ?> selected <?php endif; ?>
                                        ><?php echo e($cityName); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-chevron-down'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Botble\Icon\View\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
                            <label for='billing-address-city'><?php echo e(__('City')); ?></label>
                        </div>
                    <?php endif; ?>
                    <?php echo Form::error('billing_address.city', $errors); ?>

                </div>
            </div>
        </div>

        <div class="form-group mb-3 <?php $__errorArgs = ['billing_address.address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <div class="form-input-wrapper">
                <input
                    class="form-control"
                    id="billing-address-address"
                    name="billing_address[address]"
                    autocomplete="address"
                    type="text"
                    value="<?php echo e(old('billing_address.address', Arr::get($sessionCheckoutData, 'billing_address.address'))); ?>"
                >
                <label for='billing-address-address'><?php echo e(__('Address')); ?></label>
            </div>
            <?php echo Form::error('billing_address.address', $errors); ?>

        </div>

        <?php if(EcommerceHelper::isZipCodeEnabled()): ?>
            <div class="form-group mb-3 <?php $__errorArgs = ['billing_address.zip_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> has-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <div class="form-input-wrapper">
                    <input
                        class="form-control"
                        id="billing-address-zip-code"
                        name="billing_address[zip_code]"
                        autocomplete="postal-code"
                        type="text"
                        value="<?php echo e(old('billing_address.zip_code', Arr::get($sessionCheckoutData, 'billing_address.zip_code'))); ?>"
                    >
                    <label for='billing-address-zip-code'><?php echo e(__('Zip code')); ?></label>
                </div>
                <?php echo Form::error('billing_address.zip_code', $errors); ?>

            </div>
        <?php endif; ?>
    </div>
</div>

<?php if (! $__env->hasRenderedOnce('9fa37432-f453-466d-836f-56950cbbd9dd')): $__env->markAsRenderedOnce('9fa37432-f453-466d-836f-56950cbbd9dd'); ?>
    <?php echo $__env->make('core/base::forms.fields.phone-number-script', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/orders/partials/billing-address-form.blade.php ENDPATH**/ ?>