<?php

namespace App\Providers;

use Jenssegers\Agent\Agent;


use Illuminate\Support\ServiceProvider;



class AgentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function boot()
    {
        //
        return ['agent', Agent::class];
    }
    public function register()
    {
        //
        $this->app->singleton('agent', function ($app) {
            return new Agent($app['request']->server());
        });

        $this->app->alias('agent', Agent::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
  
}
