@extends('superadmin.layouts.guest')
@section('title', 'Super Admin Login')

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
                                Super Admin Login
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
                            <form action="{{ route('super-admin.login') }}" method="POST">
                                @csrf
                                <x-auth.form-input type="email" name="email" label="Email"
                                    placeholder="example@email.com" required="true" />

                                <x-auth.form-input type="password" name="password" label="Password"
                                    placeholder="Create password" required="true" />

                                <input type="submit" value="Sign in" class="btn sign_in">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
