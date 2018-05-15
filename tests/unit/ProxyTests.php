<?php namespace JorgenVatle\LuminatiProxyHelpers\Tests\Unit;

use JorgenVatle\LuminatiProxyHelpers\Tests\TestCase;
use JorgenVatle\LuminatiProxyHelpers\Types\SocksProxy;

class ProxyHelpersTest extends TestCase {

    /** @test */
    public function it_can_convert_a_proxy_into_an_associative_array() {
        $proxy = new SocksProxy([
            'host' => '127.0.0.1',
            'port' => 1500,
        ]);

        $this->assertEquals([
            'host' => '127.0.0.1',
            'port' => 1500,
            'type' => 'socks',
        ], $proxy->toArray());
    }

}