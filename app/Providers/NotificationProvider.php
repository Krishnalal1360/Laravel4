<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\NotificationService;
//use Illuminate\Support\Facades\Facade;

class NotificationProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        /*$this->app->singleton(NotificationService::class, function($app){
            //
            return new NotificationService();
        });*/
        //
        $this->app->singleton('notification', function($app){
            //
            return new NotificationService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        //Facade::class_alias(NotificationService::class, 'NotificationService');
    }
}
