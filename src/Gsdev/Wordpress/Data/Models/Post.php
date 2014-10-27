<?php

namespace Gsdev\Wordpress\Data\Models;

/**
 * Class Post
 * @package Gsdev\Wordpress\Data\Models
 */
class Post implements \JsonSerializable
{

    public $id;
    public $author;
    public $date;
    public $content;
    public $title;
    public $excerpt;
    public $name;
    public $modified;
    public $guid;
    public $comments;

    public function __construct(\DateTimeZone $timezone, $id, $author, $date, $content, $title, $excerpt, $name, $modified, $guid, $comments)
    {
        $this->id       = (int)$id;
        $this->author   = $author;
        $this->date     = new \DateTime($date, $timezone);
        $this->content  = $content;
        $this->title    = $title;
        $this->excerpt  = $excerpt;
        $this->name     = $name;
        $this->modified = new \DateTime($modified, $timezone);
        $this->guid     = $guid;
        $this->comments = (int)$comments;
    }

    public function jsonSerialize()
    {
        return $this;
    }
}
