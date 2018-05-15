<?php

namespace JorgenVatle\LuminatiProxyHelpers\Tests;

abstract class TestCase extends \Orchestra\Testbench\TestCase {

    /**
     * Package service provider.
     *
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app) {
        return ['JorgenVatle\LuminatiProxyHelpers\ServiceProvider'];
    }

    /**
     * Package aliases.
     *
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app) {
        return [
            'LuminatiProxyHelpers' => 'JorgenVatle\LuminatiProxyHelpers\Facades\LuminatiProxyHelpers',
        ];
    }

}