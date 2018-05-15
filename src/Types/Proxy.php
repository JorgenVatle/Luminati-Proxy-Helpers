<?php

namespace JorgenVatle\LuminatiProxyHelpers\Types;

abstract class Proxy {

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
     * Proxy type.
     *
     * @var string
     */
    protected $type = 'http';

    /**
     * Proxy constructor.
     *
     * @param string|array $proxy
     */
    function __construct($proxy) {
        if (is_string($proxy)) {
            $this->buildFromString($proxy);
            return;
        }

        $this->host = $proxy['host'];
        $this->port = $proxy['port'];
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

    /**
     * Fetches the current host.
     *
     * @return string
     */
    public function getHost(): string {
        return $this->host;
    }

    /**
     * Fetches the current port.
     *
     * @return int
     */
    public function getPort(): int {
        return $this->port;
    }

    /**
     * Fetches the current proxy type.
     *
     * @return string
     */
    public function getType(): string {
        return $this->type;
    }

    /**
     * Sets the current proxy host to the given host.
     *
     * @param string $host
     * @return Proxy
     */
    public function setHost(string $host): Proxy {
        $this->host = $host;
        return $this;
    }

    /**
     * Sets the current proxy port to the given port.
     *
     * @param int $port
     * @return Proxy
     */
    public function setPort(int $port): Proxy {
        $this->port = $port;
        return $this;
    }

    /**
     * Builds an associative array for the current proxy.
     *
     * @return array
     */
    public function buildArray() {
        return [
            'host' => $this->host,
            'port' => $this->port,
            'type' => $this->type,
        ];
    }
}