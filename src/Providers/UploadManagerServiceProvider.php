<?php

namespace VMCreativo\UploadManager\Providers;

use Illuminate\Support\ServiceProvider;
use VMCreativo\UploadManager\UploadManager;

class UploadManagerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('VMCreativoUploadManager', function ($app) {
            return new UploadManager();
        });
    }
}