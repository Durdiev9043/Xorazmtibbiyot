<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Mcamara\LaravelLocalization\LaravelLocalization;

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
        Schema::defaultStringLength(191);
        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        }
        View::composer('*', function ($view) {
            $view->with('menu_categories', Category::all());
        });

        App::setLocale(Session::get('locale', config('app.locale')));
//        App::setLocale(Session::get('locale', config('laravellocalization.supportedLocales')));

    }
}
