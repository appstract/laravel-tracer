<?php

namespace Rokr\Tracer;

use Illuminate\Support\ServiceProvider;

class TracerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/tracer.php' => config_path('tracer.php'),
        ]);

        $tracer = (new Tracer)->trace();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Rokr\Tracer\Tracer');
    }
}
