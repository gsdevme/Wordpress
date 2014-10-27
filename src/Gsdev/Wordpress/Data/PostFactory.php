<?php

namespace Gsdev\Wordpress\Data;

use Gsdev\Wordpress\Data\Models\Post;

class PostFactory extends EntityFactory
{

    /**
     * @param \WP_Post $entity
     * @param \DateTimeZone $timezone
     * @return Post
     */
    public static function create(\WP_Post $entity, \DateTimeZone $timezone)
    {
        $page = parent::create($entity, $timezone);

        $class = new \ReflectionClass('\Gsdev\Wordpress\Data\Models\Post');
        return $class->newInstanceArgs($page);
    }
}
