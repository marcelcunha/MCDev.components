<?php
namespace MCDev\Components\Facades;

use Illuminate\Support\Facades\Facade;

class InputText extends Facade{

    protected static function getFacadeAccessor()
    {
        return 'input-text';
    }
}
