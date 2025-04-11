@extends('layouts.guest')
@section('title', 'Request Password')

@section('content')
    <main>
        <section class="authentication__container">

            <x-auth.auth-left />

            <x-auth.auth-right heading="Password Reset" authtext="Enter your registered email for code">
                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <x-auth.form-input type="email" name="email" label="Email" placeholder="example@email.com"
                        required="true" />
                    <input type="submit" value="Verify" class="btn sign_in">
                    <div class="not__registered">
                        <p>Don't have an account?</p>
                        <a href="{{ route('register') }}" id="signup_link">Register</a>
                    </div>
                </form>
            </x-auth.auth-right>

        </section>
    </main>
@endsection
