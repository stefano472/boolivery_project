<?php

namespace App\Providers;

use Braintree\Gateway;

use Illuminate\Support\ServiceProvider;

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
        $this->app->singleton(Gateway::class, function ($app){
            return new Gateway(
                [

                    "environment" => "sandbox",
                    "merchantId" => "5g4rfj9gbccj9dpv",
                    "publicKey" => "phwz8ryrqdttmpv5",
                    "privateKey" => "b5cbc159fbee882aa248ceb7f6e2286b"
        
                ]
                
                );
    });

    }
    }
    

    

