<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\ResetPassword;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ResetPassword::createUrlUsing(function ($notifiable, $token) {
            if ($notifiable instanceof \App\Models\SuperAdmin) {
                return url("/superadmin/reset-password/{$token}?email=" . urlencode($notifiable->email));
            } elseif ($notifiable instanceof \App\Models\Admin) {
                return url("/admin/reset-password/{$token}?email=" . urlencode($notifiable->email));
            }

            // Default user reset URL
            return url("/reset-password/{$token}?email=" . urlencode($notifiable->email));
        });
    }
}