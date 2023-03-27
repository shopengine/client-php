<?php
namespace SSB\Api;

class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ShopEngineApiClient';
    }
}