<?php

namespace JorgenVatle\LuminatiProxyHelpers\Types;

class Proxy {

    /**
     * Proxy host.
     *
     * @var string
     */
    protected $host;

    /**
     * Proxy port.
     *
     * @var int
     */
    protected $port;

    /**
     * Proxy constructor.
     *
     * @param string $proxy
     */
    function __construct(string $proxy) {
        $this->buildFromString($proxy);
    }

    /**
     * Sanitizes, converts and assigns the given proxy to the Proxy instance.
     *
     * @param $proxy
     */
    protected function buildFromString($proxy) {
        $cleanedProxy = preg_replace('/([a-z]+:\/\/)/i', '', $proxy);

        $parts = explode(':', $cleanedProxy, 2);

        $this->host = $parts[0];
        $this->port = (integer) $parts[1];
    }

}