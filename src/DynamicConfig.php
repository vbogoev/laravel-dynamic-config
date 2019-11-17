<?php

namespace Vbogoev\DynamicConfig;

class DynamicConfig
{

    public function getRouteOptions()
    {
        return config('dynamic-config.routeOptions', []);
    }
}
