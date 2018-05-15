<?php namespace JorgenVatle\LuminatiProxyHelpers\Tests\Unit;

use JorgenVatle\LuminatiProxyHelpers\Facades\LuminatiProxyHelpers;
use JorgenVatle\LuminatiProxyHelpers\Tests\TestCase;

class ProxyHelpersTest extends TestCase {

    /** @test */
    public function it_resolves_socks_ports_from_http_proxies() {
        $proxy = LuminatiProxyHelpers::getSocks('127.0.0.1:22000');

        $this->assertEquals('socks', $proxy->getType());
        $this->assertEquals(1500, $proxy->getPort());
        $this->assertEquals('127.0.0.1', $proxy->getHost());
    }

}