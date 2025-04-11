<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;



// Authentication Routes
Route::prefix("admin")->name("admin.")->group(function () {

    Route::middleware("guest")->group(function () {
        Route::get("/", function () {
            return redirect()->route("admin.login");
        });

        // login
        Route::get("login", [AuthenticatedSessionController::class, 'create'])->name("login");

        Route::post("login", [AuthenticatedSessionController::class, "store"])->name("login.create");

        // forgot password
        Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
            ->name('password.request');

        Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
            ->name('password.email');

        Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
            ->name('password.reset');

        Route::post('reset-password', [NewPasswordController::class, 'store'])
            ->name('password.store');
    });

    // Authenticated Routes
    Route::middleware(['auth:admin'])->group(function () {
        // dashboard
        Route::get('dashboard', function () {
            return view('admin.dashboard.dashboard');
        })->name('dashboard');

        // log out
        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('logout');
    });
});