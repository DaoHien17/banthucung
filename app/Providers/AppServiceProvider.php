<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\loaiTCmodels;

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
        //
        view()->composer('header',function($view){
            $giongthus = loaiTCmodels::all();
            $view->with('giongthus',$giongthus);
        });
    }
}
