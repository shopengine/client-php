<?php

namespace SSB\Api;

use SSB\Api\Contracts\ShopEngineSettingsInterface;

class ClientFactory
{
    public static function make(ShopEngineSettingsInterface $settings, bool $debug = false): LaravelClient
    {
        return new LaravelClient($settings, $debug);
    }
}
