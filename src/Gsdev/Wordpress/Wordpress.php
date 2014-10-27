<?php

namespace Gsdev\Wordpress;

class Wordpress
{

    const NAME_TYPE_PAGE = 'page';
    const NAME_TYPE_POST = 'post';

    public static function getPosts()
    {
        return call_user_func_array('get_posts', func_get_args());
    }

    public static function getOption()
    {
        return call_user_func_array('get_option', func_get_args());
    }

    public static function getByName($name, $type = self::NAME_TYPE_PAGE)
    {
        return call_user_func_array('get_page_by_path', [$name, 'OBJECT', $type]);
    }
}
