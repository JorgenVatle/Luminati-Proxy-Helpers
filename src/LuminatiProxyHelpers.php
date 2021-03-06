<?php

namespace JorgenVatle\LuminatiProxyHelpers;

use JorgenVatle\LuminatiProxyHelpers\Types\HttpProxy;
use JorgenVatle\LuminatiProxyHelpers\Types\SocksProxy;

class LuminatiProxyHelpers {

    /**
     * Proxy port as defined in the LPM General Settings tab.
     *
     * @var int
     */
    protected $httpPortStart = 24000;

    /**
     * SOCKS 5 Port as defined in the LPM General Settings tab.
     *
     * @var int
     */
    protected $socksPortStart = 1500;

    /**
     * LuminatiProxyHelpers constructor.
     *
     * @param $httpPortStart
     * @param $socksPortStart
     */
    public function __construct($httpPortStart, $socksPortStart) {
        $this->httpPortStart = $httpPortStart;
        $this->socksPortStart = $socksPortStart;
    }

    /**
     * Fetches the SOCKS equivalent for the given port.
     *
     * @param $httpPort
     * @return int
     */
    public function getSocksPort(int $httpPort): int {
        return $httpPort - $this->httpPortStart + $this->socksPortStart;
    }

    /**
     * Fetches the HTTP port equivalent of the given port.
     *
     * @param int $socksPort
     * @return int
     */
    public function getHttpPort(int $socksPort): int {
        return $socksPort - $this->socksPortStart + $this->httpPortStart;
    }

    /**
     * Creates a new SocksProxy instance from an HTTP proxy string.
     *
     * @param string $httpProxyString
     * @return SocksProxy
     */
    public function getSocks(string $httpProxyString): SocksProxy {
        $proxy = new HttpProxy($httpProxyString);
        $proxy->setPort($this->getSocksPort($proxy->getPort()));

        return new SocksProxy($proxy->toArray());
    }

    /**
     * Creates a new HttpProxy instance from the given SOCKS proxy string.
     *
     * @param string $socksProxyString
     * @return HttpProxy
     */
    public function getHttp(string $socksProxyString): HttpProxy {
        $proxy = new SocksProxy($socksProxyString);
        $proxy->setPort($this->getHttpPort($proxy->getPort()));

        return new HttpProxy($proxy->toArray());
    }

}