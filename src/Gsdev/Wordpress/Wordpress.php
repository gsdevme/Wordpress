<?php

namespace Gsdev\Wordpress;

class Wordpress
{

    public static function getPosts()
    {
        return call_user_func_array('get_posts', func_get_args());
    }

    public static function getOption()
    {
        return call_user_func_array('get_option', func_get_args());
    }
}
