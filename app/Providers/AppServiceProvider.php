<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Eventos\Repositories\IBrinquedoRepository',
            'App\Eventos\Repositories\BrinquedoRepository'
        );  

        $this->app->bind(
            'App\Eventos\Repositories\IFotosBrinquedoRepository',
            'App\Eventos\Repositories\FotosBrinquedoRepository'
        );  


        $this->app->bind(
            'App\Eventos\Repositories\IIndexRepository',
            'App\Eventos\Repositories\IndexRepository'
        ); 

        $this->app->bind(
            'App\Eventos\Repositories\IItensPedidoRepository',
            'App\Eventos\Repositories\ItensPedidoRepository'
        );  

        $this->app->bind(
            'App\Eventos\Repositories\IPedidoRepository',
            'App\Eventos\Repositories\PedidoRepository'
        );  

        $this->app->bind(
            'App\Eventos\Repositories\IClienteRepository',
            'App\Eventos\Repositories\ClienteRepository'
        );  


         $this->app->bind(
            'App\Eventos\Repositories\ILogoRepository',
            'App\Eventos\Repositories\LogoRepository'
        );  


    }
}



