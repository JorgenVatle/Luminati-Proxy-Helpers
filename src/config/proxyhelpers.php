<?php

/**
 * This configuration defines how your Luminati Proxy Manager is set up.
 *
 * We assume that you're using private Luminati gIPs and that these are published
 * through Luminati's "Multiply port by gIP feature".
 *
 * This configuration allows us to reliably translate one gIP's HTTP entry point
 * into a SOCKS equivalent for the same IP address. Especially useful for use
 * cases where it is important to retain the same IP address after switching
 * protocols.
 */
return [

    /**
     * HTTP port as defined in your Luminati Proxy Manager for your target proxy group.
     * [Needs to be the same group as defined for `socks_start`]
     */
    'http_start' => 22000,

    /**
     * SOCKS port as defined in your Luminati Proxy Manager for your target group.
     * [Needs to be the same group as defined for `http_start`]
     */
    'socks_start' => 1500,

];