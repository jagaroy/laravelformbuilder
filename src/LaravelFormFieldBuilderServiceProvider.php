<?php

namespace Jaga\LaravelFormFieldBuilder;

use Illuminate\Support\ServiceProvider;

use Jaga\LaravelFormFieldBuilder\Tools\Jforms;

class LaravelFormFieldBuilderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'jaga');
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('Jforms', function () {
            return new Jforms;
        });

    }
}
