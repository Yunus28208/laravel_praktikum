<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use App\Models\User;

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
        gate::define('view-student', function (user $user) {
            if ($user->role == 'admin' || $user->role === 'guest') {
                return true;
            }
            return false;
        });

        Gate::define('store-student', function (user $user) {
            if ($user->role === 'admin') {
                return true;
            }
            return false;
        });

        Gate::define('edit-student', function (user $user) {
            if ($user->role === 'admin') {
                return true;
            }
            return false;
        });

        Gate::define('destroy-student', function (user $user) {
            if ($user->role === 'admin') {
                return true;
            }
            return false;
        });
    }
}