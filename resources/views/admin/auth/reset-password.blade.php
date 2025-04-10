@extends('admin.layouts.guest')
@section('title', 'Admin Reset Password')

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
                                Admin New password
                            </h1>
                            <p class="authentication__right--text auth-text">
                                Input new password </p>
                            @if (session('status'))
                                <p class="invalid__login  auth-text form_error active">
                                    {{ session('status') }}
                                </p>
                            @endif
                        </div>
                        <div class="authentication__right--content-form">
                            <form action="{{ route('admin.password.store') }}" method="POST">
                                @csrf

                                <!-- Password Reset Token -->
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <!-- email -->
                                <x-auth.form-input type="email" name="email" label="Email"
                                    placeholder="example@email.com" value="{{ old('email', $request->email) }}"
                                    required="true" />

                                <!-- password -->
                                <x-auth.form-input type="password" name="password" label="Password"
                                    placeholder="Create password" required="true" />

                                <!-- confirm password -->
                                <x-auth.form-input type="password" name="password_confirmation" label="Confirm Password"
                                    placeholder="Repeat Password" required="true" />


                                <input type="submit" value="Reset Password" class="btn sign_in">
                                <div class="not__registered">
                                    <p>Recall password?</p>
                                    <a href="{{ route('admin.login') }}" id="signup_link">Log-in</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
