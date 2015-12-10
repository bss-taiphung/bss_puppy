<?php namespace bss_taiphung\puppy;
/**
 * Created by PhpStorm.
 * User: nasterblue
 * Date: 12/10/15
 * Time: 3:46 PM
 */
use Illuminate\Support\ServiceProvider;



class PuppyServiceProvider extends ServiceProvider  {
    public function register()
    {
        $this->app->bind('Puppy', function()
        {
            return new \bss_taiphung\puppy\Puppy;
        });
    }
}