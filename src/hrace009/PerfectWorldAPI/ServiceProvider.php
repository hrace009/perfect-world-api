<?php
/*
 * @author Harris Marfel <hrace009@gmail.com>
 * @link https://www.hrace009.com
 * @copyright Copyright (c) 2021.
 */

namespace hrace009\PerfectWorldAPI;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->publishFiles();
    }

    /**
     * Publish files for the package.
     *
     * @return void
     */
    protected function publishFiles()
    {
        $this->publishes([
            __DIR__ . '/../../config/pw-api.php' => config_path('pw-api.php'),
            __DIR__ . '/../../config/pw-api.php' => config_path('pw-config.php'),
        ]);

        $this->publishes([
            __DIR__ . '/../../lang' => base_path('resources/lang'),
        ]);
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

    }

}