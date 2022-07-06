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
                    "merchantId" => "zf5jh2r682tx82mq",
                    "publicKey" => "t6zcryh5ttftftv8",
                    "privateKey" => "87e5fe35df8b56db67f5fd7dfd9e32b4"
        
                ]
                
                );
    });

    }
    }
    

    

