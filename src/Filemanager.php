<?php

namespace Taiphan\LaravelResponsiveFilemanager;

use Illuminate\Contracts\Config\Repository as Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Taiphan\LaravelResponsiveFilemanager\Controllers\DialogController;

class Filemanager {

    const PACKAGE_NAME = 'laravel-responsive-filemanager';
    const DS = '/';

    protected $config;
    protected $request;

    public function __construct(Config $config, Request $request){
        $this->config = $config;
        $this->request = $request;
    }

    public function config(string $key){
        return $this->config->get("laravel-responsive-filemanager.$key");
    }

    public static function routes(){
        $namespace = '\\Taiphan\\LaravelResponsiveFilemanager\\Controllers\\';
        $as = 'taiphan.rlfm.';
        Route::group(compact('as', 'namespace'), function(){

            Route::get('/', ["uses" => "DialogController@show", "as" => "show"]);

        });
    }

}



