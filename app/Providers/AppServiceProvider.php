<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrap();
        \URL::forceScheme('https'); 
        $this->app['request']->server->set('HTTPS','on');
    }   
    //動画  
    // Paginator::useBootstrapFive();　公式ドキュメント
    //または Paginator::useBootstrapFour();   公式ドキュメント
}