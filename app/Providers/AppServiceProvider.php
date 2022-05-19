<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\LoaiDoUong;
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
        try{
            $loaisanphamGlobal =  LoaiDoUong::all();

        }
        catch(\Exception $exception)
        {

        }
        \View::share('loaisanphamGlobal',$loaisanphamGlobal ?? []);
        \View::share('douongcart',$douongcart ?? []);
        Paginator::useBootstrap();
    }
}
