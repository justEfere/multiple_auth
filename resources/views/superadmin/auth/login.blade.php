@extends('layouts.guest')
@section('title', 'Super Admin Login')

@section('content')
    <main>
        <section class="authentication__container">
            <x-auth.auth-left />

            <x-auth.auth-right heading="Super Admin Login" authtext="Provide your credentials to login">

                <form action="{{ route('super-admin.login.store') }}" method="POST">
                    @csrf
                    <x-auth.form-input type="email" name="email" label="Email" placeholder="example@email.com"
                        required="true" />

                    <x-auth.form-input type="password" name="password" label="Password" placeholder="Create password"
                        required="true" />

                    <input type="submit" value="Sign in" class="btn sign_in">
                </form>

            </x-auth.auth-right>

        </section>
    </main>

@endsection
