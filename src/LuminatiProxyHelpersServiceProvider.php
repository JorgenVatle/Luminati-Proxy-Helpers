<?php

namespace JorgenVatle\LuminatiProxyHelpers;

use Illuminate\Support\ServiceProvider;

class LuminatiProxyHelpersServiceProvider extends ServiceProvider {


    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('luminati.proxy.helpers', function ($app) {
            return new LuminatiProxyHelpers(22000, 1500);
        });
    }

}