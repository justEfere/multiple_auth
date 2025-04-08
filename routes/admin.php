<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\RegisterAdminController;



// Authentication Routes
Route::prefix("admin")->name("admin.")->group(function () {

    Route::middleware("guest")->group(function () {
        Route::get("/", function () {
            return redirect()->route("admin.login");
        });

        // login
        Route::get("login", [AuthenticatedSessionController::class, 'create'])->name("login");

        Route::post("login", [AuthenticatedSessionController::class, "store"])->name("login.create");


        // Register
        Route::get('register', [RegisterAdminController::class, 'create'])
            ->name('register');

        Route::post('register', [RegisterAdminController::class, 'store'])->name("register");
    });

    // Authenticated Routes
    Route::middleware(['auth:admin'])->group(function () {
        // dashboard
        Route::get('/dashboard', function () {
            return view('admin.dashboard.dashboard');
        })->name('dashboard');
    });
});