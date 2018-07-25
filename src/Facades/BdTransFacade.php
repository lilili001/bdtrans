<?php
/**
 * Created by PhpStorm.
 * User: yixin
 * Date: 2018/7/25
 * Time: 10:10
 */

namespace MiyaYeh\Trans\Facades;

use Illuminate\Support\Facades\Facade;

class BdTransFacade extends Facade
{
    protected static function getFacadeAccessor() { return 'BdTrans'; }
}