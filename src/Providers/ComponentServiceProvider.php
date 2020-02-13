<?php

namespace MCDev\Components\Providers;

use Illuminate\Support\ServiceProvider;
use MCDev\Components\InfoBox;
use MCDev\Components\InputText;

class ComponentServiceProvider extends ServiceProvider
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
        $this->app->bind('input-text', function(){
            return new InputText();
        });
        $this->app->bind('infobox', function(){
            return new InfoBox();
        });

        $this->loadViewsFrom(__DIR__.'/../views', 'components');
    }
}
