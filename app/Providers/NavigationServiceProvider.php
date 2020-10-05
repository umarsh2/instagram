<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Page;

class NavigationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer("*",function($view){
            $pages = Page::all();
            return $view->with('pages',$pages);
        });
    }
}
