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
                    "merchantId" => "v2t2j2rx659m5s4m",
                    "publicKey" => "m989r7mwd4knnmkj",
                    "privateKey" => "706ac43197468f5495cf6df5901fc235"

                ]

                );
    });

    }
    }




