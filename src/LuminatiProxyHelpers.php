<?php

namespace JorgenVatle\LuminatiProxyHelpers;

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
        return $this->httpPortStart - $httpPort + $this->socksPortStart;
    }

}