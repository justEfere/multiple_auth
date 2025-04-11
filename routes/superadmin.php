<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdmin\Auth\PasswordResetLinkController;
use App\Http\Controllers\SuperAdmin\Auth\PasswordController;
use App\Http\Controllers\SuperAdmin\Auth\NewPasswordController;
use App\Http\Controllers\SuperAdmin\Auth\AuthenticatedSessionController;



Route::prefix("superadmin")->name("super-admin.")->group(function () {

    Route::middleware('guest')->group(function () {
        Route::get("/", function () {
            return redirect()->route("super-admin.login");
        });
        Route::get('login', [AuthenticatedSessionController::class, 'create'])
            ->name('login');

        Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login.store');

        Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
            ->name('password.request');

        Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
            ->name('password.email');

        Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
            ->name('password.reset');

        Route::post('reset-password', [NewPasswordController::class, 'store'])
            ->name('password.store');
    });


    // Auth Routes
    Route::middleware(['auth:super_admin'])->group(function () {

        // added
        Route::get('/dashboard', function () {
            return view('superadmin.dashboard');
        })->name('dashboard');

        Route::put('password', [PasswordController::class, 'update'])->name('password.update');

        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('logout');
    });
});