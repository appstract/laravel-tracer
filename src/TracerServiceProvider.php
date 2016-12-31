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
            __DIR__.'/assets/js/tracer.js' => public_path('js/tracer.js')
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
