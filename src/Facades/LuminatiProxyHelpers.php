<?php

namespace JorgenVatle\LuminatiProxyHelpers\Facades;

use Illuminate\Support\Facades\Facade;

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