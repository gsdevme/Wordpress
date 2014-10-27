<?php

namespace Gsdev\Wordpress\Data;

use WP_Post;

/**
 * Since wordpress can have Posts & Pages im going to call them Entities,
 * then have them create seperate classes
 *
 * Class PostFactory
 * @package Gsdev\Wordpress\Data
 */
abstract class EntityFactory
{

    /**
     * @param WP_Post $entity
     * @param \DateTimeZone $timezone
     * @return array
     */
    public static function create(WP_Post $entity, \DateTimeZone $timezone)
    {
        return [
            $timezone,
            $entity->ID,
            $entity->post_author,
            $entity->post_date,
            $entity->post_content,
            $entity->post_title,
            $entity->post_excerpt,
            $entity->post_name,
            $entity->post_modified,
            $entity->guid,
            $entity->comment_count
        ];
    }

    /**
     * @param array $entities
     * @param \DateTimeZone $timezone
     * @return array|null
     */
    public static function createArrayServant(array $entities, \DateTimeZone $timezone)
    {
        if (empty($entities)) {
            return null;
        }

        $return = [];

        foreach ($entities as $entity) {
            array_push($return, static::create($entity, $timezone));
        }

        return $return;
    }
}
