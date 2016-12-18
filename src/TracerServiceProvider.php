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
        include __DIR__.'/routes.php';
        $this->app->make('Rokr\Tracer\TracerController');
        $this->app->make('Rokr\Tracer\Tracer');
    }
}
