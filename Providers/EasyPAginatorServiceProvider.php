<?php

namespace  Firmino\EasyPaginator\Providers;

use Illuminate\Support\ServiceProvider;
use Firmino\EasyPaginator\EasyPaginator;

class EasyPaginatorServiceProvider extends  ServiceProvider {

    public function boot() {

    }

    public function register() {
        $this->app->singleton('easy.paginator', function($app){
            return new EasyPaginator();
        });
    }
}



