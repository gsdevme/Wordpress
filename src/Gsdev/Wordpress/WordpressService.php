<?php

namespace Gsdev\Wordpress;

use Gsdev\Wordpress\Data\Options;
use Gsdev\Wordpress\Data\PostFactory;
use Gsdev\Wordpress\Data\PageFactory;
use Gsdev\Wordpress\Data\Values;

/**
 * Class Wordpress
 * @package Gsdev\Wordpress
 */
class WordpressService
{
    const WORDPRESS_TIMEZONE = 'timezone_string';

    private $timezone;

    public function __construct()
    {
        // Used to convert the dates
        $this->timezone = new \DateTimeZone(Wordpress::getOption(self::WORDPRESS_TIMEZONE));
    }

    /**
     * @param int $offset
     * @param int $limit
     * @param string $order
     * @param string $status
     * @return array|null
     */
    public function getPosts($offset = 0, $limit = 5, $order = Values::ORDER_DESC, $status = Values::STATUS_PUBLISH)
    {
        return PostFactory::createPostArrayServant(Wordpress::getPosts([
            Options::OFFSET   => $offset,
            Options::LIMIT    => $limit,
            Options::ORDER    => $order,
            Options::ORDER_BY => Values::ORDERBY_DATE,
            Options::TYPE     => Values::TYPE_POST,
            Options::STATUS   => $status
        ]), $this->timezone);
    }

    /**
     * @param int $offset
     * @param int $limit
     * @param string $order
     * @param string $status
     * @return array|null
     */
    public function getPages($offset = 0, $limit = 5, $order = Values::ORDER_DESC, $status = Values::STATUS_PUBLISH)
    {
        return PageFactory::createPostArrayServant(Wordpress::getPosts([
            Options::OFFSET   => $offset,
            Options::LIMIT    => $limit,
            Options::ORDER    => $order,
            Options::ORDER_BY => Values::ORDERBY_DATE,
            Options::TYPE     => Values::TYPE_PAGE,
            Options::STATUS   => $status
        ]), $this->timezone);
    }

    public function getPageByName($name)
    {

    }
}
