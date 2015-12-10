<?php namespace bss_taiphung\puppy\Http\Controllers;

/**
 * Created by PhpStorm.
 * User: bss_taiphung
 * Date: 12/9/15
 * Time: 7:19 PM
 */

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class PuppyController extends Controller
{
    public function bark(){
        return Config::get('config.bark');
    }
}