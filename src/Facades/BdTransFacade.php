<?php

namespace MiyaYeh\Trans\Facades;

use Illuminate\Support\Facades\Facade;

class BdTransFacade extends Facade
{
    protected static function getFacadeAccessor() { return 'BdTrans'; }
}