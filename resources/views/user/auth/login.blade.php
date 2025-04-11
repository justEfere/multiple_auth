@extends('layouts.guest')
@section('title', 'Log-in')

@section('content')
    <main>
        <section class="authentication__container">

            <x-auth.auth-left />

            <x-auth.auth-right heading="Login" authtext="Provide your credentials to login">
                <form action="{{ route('login') }}" method="POST" class="auth_form">
                    @csrf
                    <x-auth.form-input type="email" name="email" label="Email" placeholder="example@email.com"
                        required="true" />

                    <x-auth.form-input type="password" name="password" label="Password" placeholder="Create password"
                        required="true" />

                    <input type="submit" value="Login" class="btn sign_in">
                    <div class="not__registered">
                        <p>Don't have an account?</p>
                        <a href="{{ route('register') }}" id="signup_link">Register</a>
                    </div>
                </form>
            </x-auth.auth-right>

        </section>
    </main>

@endsection
