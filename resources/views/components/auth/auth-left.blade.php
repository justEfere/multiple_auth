<div class="authentication__left">
    <div class="authentication__left--header">
        <div class="authentication__left--header-logo">
            <img class="authentication__left-logo" src="{{ asset('storage/' . 'logo/logo.png') }}" alt="logo">
        </div>
    </div>

    <div class="authentication__left--body">
        <img src="{{ asset('storage/' . 'images/auth/login.svg') }}" alt="" class="authentication__left--body-img">
    </div>

    <div class="authentication__left--footer">
        <p class="copyright">&copy;{{ config('app.name', 'Diamond Bank') }}</p>
        <div class="authentication__email">
            <a href="mailto:info@laravel.com" class="authentication__email--email">
                <span class="material-symbols-outlined">
                    mail
                </span>
                info@laravel.com
            </a>
        </div>
    </div>
</div>
