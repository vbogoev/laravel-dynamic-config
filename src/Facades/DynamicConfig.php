<?php

namespace Vbogoev\DynamicConfig\Facades;

use Illuminate\Support\Facades\Facade;

class DynamicConfig extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'DynamicConfig';
    }
}
