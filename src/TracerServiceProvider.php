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
