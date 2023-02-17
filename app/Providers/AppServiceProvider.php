<?php

namespace App\Providers;

use App\Models\General;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    
    public function register()
    {
        //
    }
 
    public function boot()
    {
        View::composer('*', function ($view) {
            $general = General::latest('created_at')->first();
            $view->with(['general' => $general]);
        });
    }
}
