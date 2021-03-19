<?php namespace SSB\Api;

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
    
    private function initDebugBar() {
        if (class_exists('Barryvdh\Debugbar\LaravelDebugbar')) {
            $debugbar = $this->app->make('debugbar');
            try {
                $debugbar->addCollector(new ApiCollector());
            }
            catch (\Exception $e) {
            
            }
        }
    }

    public function boot()
    {
    }
}
