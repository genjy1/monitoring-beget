<?php

namespace App\Providers;

use App\Events\PasswordReset;
use App\Listeners\SendPasswordResetNotification;
use Illuminate\Support\ServiceProvider;

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
        //
    }

    protected $listen = [
        PasswordReset::class => [
            SendPasswordResetNotification::class,
        ],
    ];
}
