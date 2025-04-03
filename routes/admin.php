<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\RegisterAdminController;
use Illuminate\Support\Facades\Route;



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
});


// Authenticated Routes