<?php

namespace JorgenVatle\LuminatiProxyHelpers;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {

    /**
     * Package configuration file path.
     *
     * @var string
     */
    protected $config = __DIR__.'/../config/proxyhelpers.php';

    /**
     * Package bootstrapper.
     */
    public function boot() {

        $this->publishes([
            $this->config => config_path('proxyhelpers.php'),
        ], 'luminati-proxy-helpers');

    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register() {

        $this->app->singleton('luminati.proxy.helpers', function ($app) {
            return new LuminatiProxyHelpers(22000, 1500);
        });

    }

}