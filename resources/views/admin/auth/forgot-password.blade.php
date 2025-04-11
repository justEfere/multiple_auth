@extends('layouts.guest')
@section('title', 'Admin Request Password')

@section('content')
    <main>
        <section class="authentication__container">

            <x-auth.auth-left />
            <x-auth.auth-right heading="Admin Password Reset" authtext="Enter your registered email for code">
                <form action="{{ route('admin.password.email') }}" method="POST">
                    @csrf
                    <x-auth.form-input type="email" name="email" label="Email" placeholder="example@email.com"
                        required="true" />
                    <input type="submit" value="Verify" class="btn sign_in">
                    <div class="not__registered">
                        <p>Sure of your account?</p>
                        <a href="{{ route('admin.login') }}" id="signup_link">Log-in</a>
                    </div>
                </form>
            </x-auth.auth-right>
        </section>
    </main>
@endsection
