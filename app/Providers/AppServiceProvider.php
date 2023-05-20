<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // app()->bind('first_service_holder',function($app){
        //     dd("This is my 1st service container");

        // });
        // App::getFacadeApplication()->bind('2nd_service_helper', function ($app) {
        //     dd("This is my 2nd service holder");
        // });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
