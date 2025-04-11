@extends('layouts.guest')
@section('title', 'Register')

@section('content')
    <main>
        <section class="authentication__container">
            <x-auth.auth-left />

            <x-auth.auth-right heading="Create Account" authtext="Provide your details to register">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <x-auth.form-input type="text" name="first_name" label="First Name" placeholder="Enter first name"
                        required="true" />

                    <x-auth.form-input type="text" name="last_name" label="Last Name" placeholder="Enter last name"
                        required="true" />

                    <x-auth.form-input type="email" name="email" label="Email" placeholder="example@email.com"
                        required="true" />

                    <x-auth.form-input type="password" name="password" label="Password" placeholder="Create password"
                        required="true" />

                    <x-auth.form-input type="password" name="password_confirmation" label="Confirm Password"
                        placeholder="Repeat Password" required="true" />

                    <input type="submit" value="Register" class="btn sign_in">
                    <div class="not__registered">
                        <p>Already registered?</p>
                        <a href="{{ route('login') }}" id="signup_link">Log-in</a>
                    </div>
                </form>
            </x-auth.auth-right>

        </section>
    </main>

@endsection
