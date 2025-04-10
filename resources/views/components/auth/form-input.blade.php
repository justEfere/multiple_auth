<div class="form__element">
    <label for="{{ $name }}" class="{{ $required ? 'required' : '' }}">{{ $label }}</label>
    <div class="input__container {{ $type === 'password' ? 'password_input' : '' }}">
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
            class="{{ $type === 'email' ? 'email__input' : 'text__input' }}" value="{{ $value }}"
            placeholder="{{ $placeholder }}" {{ $required ? 'required' : '' }}>

        @if ($type === 'password')
            <div class="view_pswrd">
                <span class="material-symbols-outlined" id="viewPswrdIcon">
                    visibility
                </span>
            </div>
        @endif
    </div>
    @if ($name === 'password')
        @if (request()->routeIs(['login', 'admin.login', 'super-admin.login']))
            @if (request()->routeIs('super-admin.login'))
                <a href="{{ route('super-admin.password.request') }}" class="forgot_password" id="password_link">
                    Forgot Password?
                </a>
            @elseif(request()->routeIs('admin.login'))
                <a href="{{ route('admin.password.request') }}" class="forgot_password" id="password_link">
                    Forgot Password?
                </a>
            @else
                <a href="{{ route('password.request') }}" class="forgot_password" id="password_link">
                    Forgot Password?
                </a>
            @endif


        @endif
    @endif

    @error($name)
        <p class="input__error active">{{ $message }}</p>
    @enderror
    <p class="input__error"></p>
</div>
