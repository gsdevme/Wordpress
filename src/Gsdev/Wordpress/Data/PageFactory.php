<?php

namespace Gsdev\Wordpress\Data;

use Gsdev\Wordpress\Data\Models\Page;

class PageFactory extends EntityFactory
{

    /**
     * @param \WP_Post $entity
     * @param \DateTimeZone $timezone
     * @return Page
     */
    public static function create(\WP_Post $entity, \DateTimeZone $timezone)
    {
        $page = parent::create($entity, $timezone);

        $class = new \ReflectionClass('\Gsdev\Wordpress\Data\Models\Page');
        return $class->newInstanceArgs($page);
    }
}
