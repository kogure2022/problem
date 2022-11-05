<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
/**
* contentsファサードクラス
* 
* @author kogure
* 
*/
class Contents extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'contents';
    }
}