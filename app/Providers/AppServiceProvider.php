<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\paginator;

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
    // public function boot()
    // {
    //     Gate::define('isDriver',function()
    //     {
    //         $x=Auth::user()->Driver !=NULL;
    //         return $x;
    //     });
    // }

    public function boot()
    {
        paginator::useBootstrap();
    }
}

