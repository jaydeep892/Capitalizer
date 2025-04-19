<?php

namespace JacMac\StringUppercase\Facades;

use Illuminate\Support\Facades\Facade;

class Uppercase extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'uppercase';
    }
}
