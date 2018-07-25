<?php

namespace MiyaYeh\Trans;

use Illuminate\Support\ServiceProvider;

class BdTransProvider extends ServiceProvider
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
