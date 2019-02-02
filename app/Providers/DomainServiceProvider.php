<?php

namespace App\Providers;

use App\Exceptions\DomainConfigurationException;
use Illuminate\Support\ServiceProvider;
use App\Bootstrap\DomainFinder;

class DomainServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $packageDir = realpath(__DIR__ . '/..');
        //Publish configurations
        $this->publishes([
            $packageDir . '/config/domains.php' => config_path('domains.php'),
        ], 'domains');
        if (!\App::runningInConsole()) {
            try {
                \App::register(\App::make('domainFinder')->bootstrap());
            } catch (\Exception $e) {
                throw new DomainConfigurationException('Domain Has an error in its configuration ' . $e->getMessage());
            }
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('domainFinder', function ($app) {
            return new DomainFinder();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }
}
