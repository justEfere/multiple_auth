@extends('layouts.guest')
@section('title', 'Admin Login')

@section('content')
    <main>
        <section class="authentication__container">
            <x-auth.auth-left />

            <x-auth.auth-right heading="Admin Login" authtext="Provide your credentials to login">

                <form action="{{ route('admin.login.create') }}" method="POST">
                    @csrf
                    <x-auth.form-input type="email" name="email" label="Email" placeholder="example@email.com"
                        required="true" value="{{ old('email') }}" />

                    <x-auth.form-input type="password" name="password" label="Password" placeholder="Create password"
                        required="true" />

                    <input type="submit" value="Sign in" class="btn sign_in">
                </form>

            </x-auth.auth-right>

        </section>
    </main>

@endsection
