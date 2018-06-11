<?php

namespace JorgenVatle\LuminatiProxyHelpers;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {

    /**
     * Package configuration file path.
     *
     * @var string
     */
    protected $config = __DIR__.'/config/proxyhelpers.php';

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

            $httpStart = $app['config']['proxyhelpers.http_start'] ?? 22000;
            $socksStart = $app['config']['proxyhelpers.socks_start'] ?? 1500;

            return new LuminatiProxyHelpers($httpStart, $socksStart);
        });

    }

}