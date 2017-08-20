<?php namespace Lichmaker\MessagesSender;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class MessagesSenderServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('MessagesSender', function ($app) {
            return new  \Lichmaker\MessagesSender\MessagesSender;
        });
    }

}
