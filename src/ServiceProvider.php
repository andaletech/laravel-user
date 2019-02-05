<?php

namespace Andaletech\LaravelUser;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Service provider for this package.
 *
 * @author Kolado Sidibe <kolado.sidibe@andaletech.com>
 * @copyright 2019 Andale Technologies, SARL
 * @license MIT
 */
class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/aTechLaravelUser.php' => config_path('aTechLaravelUser.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/aTechLaravelUser.php', 'aTechLaravelUser');
    }
}
