<?php

namespace Goszowski\Ukraine;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

class UkraineServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      $this->publishes([
        __DIR__.'/database/migrations/' => database_path('/migrations')
      ], 'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
