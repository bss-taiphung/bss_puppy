<?php namespace bss_taiphung\puppy;

/**
 * Created by PhpStorm.
 * User: nasterblue
 * Date: 12/10/15
 * Time: 3:46 PM
 */
use Illuminate\Support\ServiceProvider;

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
            return new \bss_taiphung\puppy\Puppy;
        });
    }


}