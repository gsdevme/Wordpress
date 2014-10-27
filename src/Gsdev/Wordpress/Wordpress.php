<?php

namespace Gsdev\Wordpress;

use Gsdev\Wordpress\Data\PostFactory;
use Gsdev\Wordpress\Data\PostOptions;
use Gsdev\Wordpress\Data\PostValues;

/**
 * Class Wordpress
 * @package Gsdev\Wordpress
 */
class Wordpress
{
    const WORDPRESS_TIMEZONE = 'timezone_string';

    private $timezone;

    public function __construct()
    {
        // Used to convert the dates
        $this->timezone = new \DateTimeZone(get_option(self::WORDPRESS_TIMEZONE));
    }

    /**
     * @param int $offset
     * @param int $limit
     * @param string $order
     * @param string $type
     * @param string $status
     * @return array|null
     */
    public function getPosts($offset = 0, $limit = 5, $order = PostValues::POST_VALUE_ORDER_DESC, $type = PostValues::POST_VALUE_TYPE_POST, $status = PostValues::POST_VALUE_STATUS)
    {
        return PostFactory::createPostArrayServant(get_posts([
            PostOptions::POST_OPTION_OFFSET   => $offset,
            PostOptions::POST_OPTION_LIMIT    => $limit,
            PostOptions::POST_OPTION_ORDER    => $order,
            PostOptions::POST_OPTION_ORDER_BY => PostValues::POST_VALUE_ORDERBY_DATE,
            PostOptions::POST_OPTION_TYPE     => $type,
            PostOptions::POST_OPTION_STATUS   => $status
        ]), $this->timezone);
    }
}
