<?php

namespace JorgenVatle\LuminatiProxyHelpers;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {


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