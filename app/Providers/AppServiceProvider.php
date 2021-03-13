<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Routing\UrlGenerator;

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
    public function boot(UrlGenerator $url)
    {
        \Illuminate\Support\Facades\Schema::defaultStringLength(191);
          Paginator::useBootstrap();

        if(env('REDIRECT_HTTPS')){
            $url->forceScheme('https');
        }
    }
}
