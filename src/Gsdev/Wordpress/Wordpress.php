<?php
namespace Gsdev\Wordpress;

class Wordpress
{

    private static $run;

    private function __construct()
    {

    }

    private function __clone()
    {

    }

    public static function init($path)
    {
        if(self::$run === null){
            self::$run = true;
        }
    }
}
