<?php
namespace MCDev\Components\Facades;

use Illuminate\Support\Facades\Facade;

class InfoBox extends Facade{

    protected static function getFacadeAccessor()
    {
        return 'infobox';
    }
}
