<?php namespace bss_taiphung\puppy\Providers;

/**
 * Created by PhpStorm.
 * User: nasterblue
 * Date: 12/10/15
 * Time: 3:46 PM
 */
use Illuminate\Support\ServiceProvider;
use bss_taiphung\puppy\Puppy;

class PuppyServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Puppy', function () {
            return new Puppy;
        });
    }
}