<?php

namespace Haritsyp\Shipper\Providers;

use Illuminate\Support\ServiceProvider;

class ShipperPackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../Config/shipper.php' => config_path('shipper.php'),
        ]);
    }
}
