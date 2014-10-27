<?php

namespace Gsdev\Wordpress\Data;

use Gsdev\Wordpress\Data\Models\Post;
use WP_Post;

/**
 * Class PostFactory
 * @package Gsdev\Wordpress\Data
 */
class PostFactory
{

    /**
     * @param WP_Post $post
     * @param \DateTimeZone $timezone
     * @return Post
     */
    public static function createPost(WP_Post $post, \DateTimeZone $timezone)
    {
        return new Post(
            $timezone,
            $post->ID,
            $post->post_author,
            $post->post_date,
            $post->post_content,
            $post->title,
            $post->excerpt,
            $post->post_name,
            $post->post_modified,
            $post->guid,
            $post->comment_count
        );
    }

    /**
     * @param array $posts
     * @param \DateTimeZone $timezone
     * @return array|null
     */
    public static function createPostArrayServant(array $posts, \DateTimeZone $timezone)
    {
        if (empty($posts)) {
            return null;
        }

        $return = [];

        foreach ($posts as $post) {
            array_push($return, self::createPost($post, $timezone));
        }

        return $return;
    }
}
