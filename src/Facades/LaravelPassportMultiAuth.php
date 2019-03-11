<?php

namespace rijupramanik\LaravelPassportMultiAuth\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelPassportMultiAuth extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelpassportmultiauth';
    }
}
