@extends('user.layouts.guest')
@section('title', 'Register')

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
                                Create Account
                            </h1>
                            <p class="authentication__right--text auth-text">
                                Provide your details to register
                            </p>
                            @if (session('status'))
                                <p class="invalid__login  auth-text form_error active">
                                    {{ session('status') }}
                                </p>
                            @endif
                        </div>
                        <div class="authentication__right--content-form">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <x-auth.form-input type="text" name="first_name" label="First Name"
                                    placeholder="Enter first name" required="true" />

                                <x-auth.form-input type="text" name="last_name" label="Last Name"
                                    placeholder="Enter last name" required="true" />

                                <x-auth.form-input type="email" name="email" label="Email"
                                    placeholder="example@email.com" required="true" />

                                <x-auth.form-input type="password" name="password" label="Password"
                                    placeholder="Create password" required="true" />

                                <x-auth.form-input type="password" name="password_confirmation" label="Confirm Password"
                                    placeholder="Repeat Password" required="true" />

                                <input type="submit" value="Register" class="btn sign_in">
                                <div class="not__registered">
                                    <p>Already registered?</p>
                                    <a href="{{ route('login') }}" id="signup_link">Log-in</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
