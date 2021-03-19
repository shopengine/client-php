<?php namespace SSB\Api;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $configPath = __DIR__ . '/../config/shopshop-api.php';
        $this->mergeConfigFrom($configPath, 'shopshop');

        $this->app->bind('SSBApiClient', function ($app) {
            $apiUrl = config('shopshop-api.apiUrl');
            $privateKey = config('shopshop-api.privateKey');
            $debug = !\App::environment(['testing', 'production']);

            return new LaravelClient($apiUrl, $privateKey, $debug);
        });

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
        $configPath = __DIR__ . '/../config/shopshop-api.php';
        $this->publishes([$configPath => $this->getConfigPath()], 'config');
    }

    protected function getConfigPath()
    {
        return config_path('shopshop-api.php');
    }

    protected function publishConfig($configPath)
    {
        $this->publishes([$configPath => config_path('shopshop-api.php')], 'config');
    }
}