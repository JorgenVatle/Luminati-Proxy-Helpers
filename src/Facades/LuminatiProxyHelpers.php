<?php

namespace JorgenVatle\LuminatiProxyHelpers\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * LuminatiProxyHelpers Facade
 *
 *
 * @method static int getSocksPort(int $httpPort)
 * @method static int getHttpPort(int $socksPort)
 * @method static \JorgenVatle\LuminatiProxyHelpers\Types\SocksProxy getSocks(string $httpProxyString)
 * @method static \JorgenVatle\LuminatiProxyHelpers\Types\HttpProxy getHttp(string $socksProxyString)
 *
 * @package JorgenVatle\LuminatiProxyHelpers\Facades
 */
class LuminatiProxyHelpers extends Facade {

    /**
     * Facade accessor.
     *
     * @return string
     */
    public static function getFacadeAccessor() {
        return 'luminati.proxy.helpers';
    }

}