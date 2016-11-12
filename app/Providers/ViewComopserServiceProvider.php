<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComopserServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //get language Header
        view()->composer('layouts._header','App\Http\Composers\NavigationComposer@langHeader');

        //get menu nav
        view()->composer('layouts._navs','App\Http\Composers\NavigationComposer@manuNav');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


}
