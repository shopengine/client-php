<?php

namespace SSB\Api;

use Exception;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->app->bind('ShopEngineApiClient', function ($app) {
            return new ClientFactory();
        });

//      todo: disabled due to fixed api url config
//      $this->initDebugBar();
    }

    public function boot()
    {
    }

    private function initDebugBar()
    {
        if (class_exists('Barryvdh\Debugbar\LaravelDebugbar')) {
            $debugbar = $this->app->make('debugbar');
            try {
                $debugbar->addCollector(new ApiCollector());
            } catch (Exception $e) {
            }
        }
    }
}
