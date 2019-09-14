<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('activeRoute', function ($route_name, $route_name2 = null, $route_name3 = null) {
            if (Route::currentRouteName() == $route_name or Route::currentRouteName() == $route_name2 or Route::currentRouteName() == $route_name3)
                return true;
        });

        if ($this->app->environment('production')) {
            \URL::forceScheme('https');
        }
    }
}
