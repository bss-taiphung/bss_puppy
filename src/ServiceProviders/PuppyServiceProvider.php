<?php namespace bss_taiphung\puppy\ServiceProviders;

/**
 * Created by PhpStorm.
 * User: nasterblue
 * Date: 12/10/15
 * Time: 3:46 PM
 */
use Illuminate\Support\ServiceProvider;
use bss_taiphung\puppy\CustomClasses\Puppy;

class PuppyServiceProvider extends ServiceProvider
{

    protected $namespace = 'bss_taiphung\puppy\Http\Controllers';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->router->group([
            'prefix' => 'quote',
            'namespace' => $this->namespace
        ],
            function () {
                require __DIR__ . '/Http/routes.php';
            });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Puppy', function () {
            return new \bss_taiphung\puppy\CustomClasses\Puppy;
        });
    }


}