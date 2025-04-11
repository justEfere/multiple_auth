<div class="authentication__right">
    <x-auth.mobile-logo />
    <div class="authentication__right--contents">
        <div class="authentication__right--mobile"></div>
        <div class="authentication__right--content">
            <div class="authentication__right--content-header">
                <h1 class="authentication__right--heading">
                    {{ $heading }}
                </h1>
                <p class="authentication__right--text auth-text">
                    {{ $authtext }}
                </p>
                @if (session('status'))
                    <p class="invalid__login  auth-text form_error active">
                        {{ session('status') }}
                    </p>
                @endif
            </div>
            <div class="authentication__right--content-form">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
