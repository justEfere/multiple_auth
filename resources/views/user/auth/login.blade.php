@extends('user.layouts.guest')
@section('title', 'Log-in')

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
                                Login
                            </h1>
                            <p class="authentication__right--text auth-text">
                                Provide your credentials to login
                            </p>
                            @if (session('status'))
                                <p class="invalid__login  auth-text form_error active">
                                    {{ session('status') }}
                                </p>
                            @endif
                        </div>
                        <div class="authentication__right--content-form">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <x-auth.form-input type="email" name="email" label="Email"
                                    placeholder="example@email.com" required="true" />

                                <x-auth.form-input type="password" name="password" label="Password"
                                    placeholder="Create password" required="true" />

                                <input type="submit" value="Login" class="btn sign_in">
                                <div class="not__registered">
                                    <p>Don't have an account?</p>
                                    <a href="{{ route('register') }}" id="signup_link">Register</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
