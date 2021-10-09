<?php

namespace Taiphan\LaravelResponsiveFilemanager\Providers;

use Illuminate\Support\ServiceProvider;

class LRFMServiceProvider extends ServiceProvider{

    public function boot(){
        
        $configPath = __DIR__ . '/../config/laravel-responsive-filemanager.php';
        $viewPath = __DIR__ . '/../views';
        $publicPath = __DIR__.'/../public';

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'laravel-responsive-filemanager');

        $this->loadViewsFrom($viewPath, 'lrfm');

        $this->mergeConfigFrom($configPath, 'laravel-responsive-filemanager');

        $this->publishes([
            $configPath => config_path('laravel-responsive-filemanager.php'),
        ], 'lrfm_config');

        $this->publishes([
            $viewPath  =>  resource_path('views/vendor/laravel-responsive-filemanager')
        ], 'lrfm_view');

        $this->publishes([
            $publicPath => public_path('vendor/laravel-filemanager'),
        ], 'lrfm_public');

    }

    public function register(){

        $this->app->singleton('laravel-responsive-filemanager', function () {
            return true;
        });
    }
}