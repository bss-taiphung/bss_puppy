<?php namespace bss_taiphung\puppy;
/**
 * Created by PhpStorm.
 * User: bss_taiphung
 * Date: 12/9/15
 * Time: 8:01 PM
 */

class Puppy
{
    public function __construct()
    {

    }

    public function make()
    {
        return new Puppy();
    }

    public function bark()
    {
        return 'puppy is barking!';
    }

    public function run()
    {
        return 'puppy is running!';
    }
}