<?php
namespace Taiphan\LaravelResponsiveFilemanager\Controllers;

class DialogController extends Controller {

    public function show(){
        return view('lrfm::index')->with([
            'config' => config("laravel-responsive-filemanager")
        ]);
    }

}