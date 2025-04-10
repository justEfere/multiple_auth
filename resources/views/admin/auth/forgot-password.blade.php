@extends('admin.layouts.guest')
@section('title', 'Admin Request Password')

@section('content')
    <main>
        <section class="authentication__container">

            <x-auth.auth-left />

            <div class="authentication__right">
                <div class="authentication__right--contents">
                    <div class="authentication__right--mobile"></div>
                    <div class="authentication__right--content">
                        <div class="authentication__right--content-header">
                            <h1 class="authentication__right--heading">
                                Admin Password Reset
                            </h1>
                            <p class="authentication__right--text auth-text">
                                Enter your registered email for code
                            </p>
                            @if (session('status'))
                                <p class="invalid__login  auth-text form_error active">
                                    {{ session('status') }}
                                </p>
                            @endif
                        </div>
                        <div class="authentication__right--content-form">
                            <form action="{{ route('admin.password.email') }}" method="POST">
                                @csrf
                                <x-auth.form-input type="email" name="email" label="Email"
                                    placeholder="example@email.com" required="true" />
                                <input type="submit" value="Verify" class="btn sign_in">
                                <div class="not__registered">
                                    <p>Sure of your account?</p>
                                    <a href="{{ route('admin.login') }}" id="signup_link">Log-in</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
