<?php namespace bss_taiphung\puppy\Facades;

/**
 * Created by PhpStorm.
 * User: bss_taiphung
 * Date: 12/9/15
 * Time: 8:04 PM
 */
use Illuminate\Support\Facades\Facade;

class PuppyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Puppy';
    }
}
