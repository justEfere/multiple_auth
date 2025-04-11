@extends('layouts.guest')
@section('title', 'Reset Password')

@section('content')
    <main>
        <section class="authentication__container">

            <x-auth.auth-left />

            <x-auth.auth-right heading="New password" authtext="Input new password">
                <form action="{{ route('password.store') }}" method="POST">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- email -->
                    <x-auth.form-input type="email" name="email" label="Email" placeholder="example@email.com"
                        value="{{ old('email', $request->email) }}" required="true" />

                    <!-- password -->
                    <x-auth.form-input type="password" name="password" label="Password" placeholder="Create password"
                        required="true" />

                    <!-- confirm password -->
                    <x-auth.form-input type="password" name="password_confirmation" label="Confirm Password"
                        placeholder="Repeat Password" required="true" />


                    <input type="submit" value="Reset Password" class="btn sign_in">
                    <div class="not__registered">
                        <p>Recall password?</p>
                        <a href="{{ route('login') }}" id="signup_link">Log-in</a>
                    </div>
                </form>
            </x-auth.auth-right>

        </section>
    </main>

@endsection
