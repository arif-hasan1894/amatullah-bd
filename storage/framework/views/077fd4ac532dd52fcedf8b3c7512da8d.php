<div class="customer-info-form">
    <?php if(!EcommerceHelper::isHideCustomerInfoAtCheckout()): ?>
        <div class="mb-3 form-group checkout-login-prompt">
            <?php if(auth('customer')->check()): ?>
                <p><?php echo e(__('Account')); ?>: <strong><?php echo e(auth('customer')->user()->name); ?></strong> - <?php echo Html::email(auth('customer')->user()->email); ?> (<a href="<?php echo e(route('customer.logout')); ?>"><?php echo e(__('Logout')); ?>)</a></p>
            <?php else: ?>
                <p><?php echo e(__('Already have an account?')); ?> <a href="<?php echo e(route('customer.login')); ?>"><?php echo e(__('Login')); ?></a></p>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <?php echo apply_filters('ecommerce_checkout_customer_info_form_before'); ?>


    <div class="form-group mb-3 <?php $__errorArgs = ['address.name'];
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
                id="address_name"
                name="address[name]"
                autocomplete="family-name"
                type="text"
                placeholder=" "
                value="<?php echo e(old('address.name', Arr::get($sessionCheckoutData, 'name')) ?: (auth('customer')->check() ? auth('customer')->user()->name : null)); ?>"
                required
            >
            <label for="address_name"><?php echo e(__('Full Name')); ?></label>
        </div>
        <?php echo Form::error('address.name', $errors); ?>

    </div>

    <?php if(!in_array('email', EcommerceHelper::getHiddenFieldsAtCheckout())): ?>
        <div class="form-group mb-3 <?php $__errorArgs = ['address.email'];
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
                    id="address_email"
                    name="address[email]"
                    autocomplete="email"
                    type="email"
                    placeholder=" "
                    value="<?php echo e(old('address.email', Arr::get($sessionCheckoutData, 'email')) ?: (auth('customer')->check() ? auth('customer')->user()->email : null)); ?>"
                    required
                >
                <label for="address_email"><?php echo e(__('Email')); ?></label>
            </div>
            <?php echo Form::error('address.email', $errors); ?>

        </div>
    <?php endif; ?>

    <?php if(auth()->guard('customer')->guest()): ?>
        <div id="register-an-account-wrapper">
            <div class="form-group mb-3">
                <div class="form-check">
                    <input
                        class="form-check-input"
                        id="create_account"
                        name="create_account"
                        type="checkbox"
                        value="1"
                        <?php if(old('create_account', Arr::get($sessionCheckoutData, 'create_account'))): echo 'checked'; endif; ?>
                    >
                    <label
                        class="form-check-label"
                        for="create_account"
                    ><?php echo e(__('Register an account with above information?')); ?></label>
                </div>
                <div
                    class="password-group <?php if(!old('create_account', Arr::get($sessionCheckoutData, 'create_account'))): ?> d-none <?php endif; ?>"
                    style="margin-top: 15px"
                >
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group <?php $__errorArgs = ['password'];
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
                                        id="password"
                                        name="password"
                                        autocomplete="new-password"
                                        type="password"
                                        placeholder=" "
                                        required
                                    >
                                    <label for="password"><?php echo e(__('Password')); ?></label>
                                </div>
                                <?php echo Form::error('password', $errors); ?>

                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group <?php $__errorArgs = ['password_confirmation'];
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
                                        id="password_confirmation"
                                        name="password_confirmation"
                                        autocomplete="new-password"
                                        type="password"
                                        placeholder=" "
                                        required
                                    >
                                    <label for="password_confirmation"><?php echo e(__('Password confirmation')); ?></label>
                                </div>
                                <?php echo Form::error('password_confirmation', $errors); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php echo apply_filters('ecommerce_checkout_customer_info_form_after'); ?>

</div>
<?php /**PATH /var/www/dev.amatullah.bd/platform/plugins/ecommerce/resources/views/orders/partials/customer-info-form.blade.php ENDPATH**/ ?>