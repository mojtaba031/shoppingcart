<?php

namespace NiazPardaz\Sms\Laravel;

use Illuminate\Support\ServiceProvider;
use NiazPardaz\Sms\NiazPardaz;

class NiazPardazServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/niazpardaz.php', 'niazpardaz' );
    }

    public function boot()
    {
        $this->publishes([ __DIR__.'/config/niazpardaz.php' => config_path('niazpardaz.php') ]);
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->app->singleton('NiazPardaz', function(){
            return new NiazPardaz();
        });
    }
}
