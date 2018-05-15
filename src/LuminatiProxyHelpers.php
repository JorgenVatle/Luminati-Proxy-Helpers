<?php

namespace JorgenVatle\LuminatiProxyHelpers;

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

}