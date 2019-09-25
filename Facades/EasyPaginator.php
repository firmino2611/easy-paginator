<?php

namespace Firmino\EasyPaginator\Facades;

use Illuminate\Support\Facades\Facade;

class EasyPaginator extends Facade {

    protected static function getFacadeAccessor() {
        return 'easy.paginator';
    }
}
