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
                    "merchantId" => "r59zhcpbv3j9b4pd",
                    "publicKey" => "n6zxxssk5cfq8zqy",
                    "privateKey" => "15865aa9f38028430003d28a6c4e7ba4"

                ]

                );
    });

    }
    }




