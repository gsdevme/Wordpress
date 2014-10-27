<?php
namespace Gsdev\Wordpress;

use Exception;

/**
 * Setups up a few things for use with Wordpress
 *
 * Class Bootstrap
 * @package Gsdev\Wordpress
 */
class Bootstrap
{
    const BLOG_HEADER_FILE = 'wp-blog-header.php';
    const THEME_CONSTANT   = 'WP_USE_THEMES';

    /**
     * @param $path
     * @throws \Exception
     */
    public static function run($path)
    {
        if (!file_exists($path . self::BLOG_HEADER_FILE)) {
            throw new Exception(__CLASS__ . ' couldn\'t load the wordpress blog header file required, please check the location');
        }

        if (!defined(self::THEME_CONSTANT)) {
            define(self::THEME_CONSTANT, false);
        }

        // Wordpress expects some $_SERVER to be defined, so if this is a CLI call need to add them
        if (php_sapi_name() === 'cli') {
            $_SERVER['SERVER_PROTOCOL'] = 'HTTP/1.0';
            $_SERVER['REQUEST_METHOD']  = 'GET';
        }

        require $path . self::BLOG_HEADER_FILE;
    }
}
