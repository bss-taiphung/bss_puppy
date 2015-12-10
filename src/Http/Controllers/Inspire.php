<?php namespace bss_taiphung\puppy\Http\Controllers;

/**
 * Created by PhpStorm.
 * User: bss_taiphung
 * Date: 12/9/15
 * Time: 7:19 PM
 */

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Inspiring;

class InspireController extends Controller
{
    public function randomQuote()
    {
        try {
            return Inspiring::quote();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}