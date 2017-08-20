<?php
namespace Lichmaker\MessagesSender\Facade;

use Illuminate\Support\Facades\Facade;

class MessagesSenderFacade extends Facade{
    protected static function getFacadeAccessor(){
        return 'MessagesSender';
    }
}