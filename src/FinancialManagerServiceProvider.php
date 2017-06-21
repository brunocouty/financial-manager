<?php

namespace BrunoCouty\FinancialManager;

use Illuminate\Support\ServiceProvider;

class FinancialManagerServiceProvider extends ServiceProvider
{

    /**
     * boot method.
     */
    public function boot()
    {
        /* ------------------------------------------------------------------------------------------------------------|
         * LOAD REFERENCES                                                                                             |
         * -----------------------------------------------------------------------------------------------------------*/
        $this->loadViewsFrom(__DIR__.'/resources/views/financial-manager', 'FM');
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'FM-Language');
        /* ------------------------------------------------------------------------------------------------------------|
         * PUBLISHES                                                                                                   |
         * -----------------------------------------------------------------------------------------------------------*/
        $this->publishes([
            __DIR__ . '/resources/assets/' => public_path("/vendor/financial-manager"),
        ], 'public');
        $this->publishes([
            __DIR__.'/config/financial-manager.php' => config_path('financial-manager.php'),
            __DIR__.'/resources/views/' => resource_path('views'),
        ]);
    }

    /**
     * register method.
     */
    public function register()
    {
        /* ------------------------------------------------------------------------------------------------------------|
         * REGISTER FACADE                                                                                             |
         * -----------------------------------------------------------------------------------------------------------*/
        $this->app->bind('brunocouty-financial-manager', function() {
            return new FinancialManager;
        });
    }

}