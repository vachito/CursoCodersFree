<?php

namespace App\Providers;

use App\View\Composers\CompanyComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //envia un parametro a todas las vistas
        View::share('msg','VachoCode en laravel');
        // View::composer('welcome',function($view){
        //     $view->with('prueba2','Este es un mensaje de prueba 2 enviado desde un service via un metodo composer');
        // });

        View::composer('welcome',CompanyComposer::class);
    }
}
