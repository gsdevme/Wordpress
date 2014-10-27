<?php

namespace Gsdev\Wordpress;

class Wordpress
{

    const NAME_TYPE_PAGE = 'page';
    const NAME_TYPE_POST = 'post';

    /**
     * Wordpress get_posts wrapper
     *
     * @return mixed
     */
    public static function getPosts()
    {
        return call_user_func_array('get_posts', func_get_args());
    }

    /**
     * Wordpress get_option wrapper
     * @param $option
     * @return mixed
     */
    public static function getOption($option)
    {
        return call_user_func_array('get_option', [$option]);
    }

    /**
     * Wordpress get_page_by_name wrapper
     *
     * @param $name
     * @param string $type
     * @return mixed
     */
    public static function getByName($name, $type = self::NAME_TYPE_PAGE)
    {
        return call_user_func_array('get_page_by_path', [$name, 'OBJECT', $type]);
    }
}
