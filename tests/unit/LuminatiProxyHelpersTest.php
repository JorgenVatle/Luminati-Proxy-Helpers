<?php namespace JorgenVatle\LuminatiProxyHelpers\Tests\Unit;

use JorgenVatle\LuminatiProxyHelpers\Facades\LuminatiProxyHelpers;
use JorgenVatle\LuminatiProxyHelpers\Tests\TestCase;

class LuminatiProxyHelpersTest extends TestCase {

    /** @test */
    public function it_converts_an_http_proxy_into_the_socks_equivalent() {
        $proxy = LuminatiProxyHelpers::getSocks('127.0.0.1:22000');

        $this->assertEquals('socks', $proxy->getType());
        $this->assertEquals(1500, $proxy->getPort());
        $this->assertEquals('127.0.0.1', $proxy->getHost());
    }

    /** @test */
    public function it_resolves_http_ports_from_socks_proxies() {
        $proxy = LuminatiProxyHelpers::getHttp('127.0.0.1:1500');

        $this->assertEquals('http', $proxy->getType());
        $this->assertEquals(22000, $proxy->getPort());
        $this->assertEquals('127.0.0.1', $proxy->getHost());
    }

}