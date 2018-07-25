<?php

namespace MiyaYeh\Trans;

use Illuminate\Support\ServiceProvider;

class BdTransServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('BdTrans',function (){
            return new BdTrans();
        });
    }
}
