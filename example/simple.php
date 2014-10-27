<?php

$loader = require '../vendor/autoload.php';

Gsdev\Wordpress\Bootstrap::run('/Users/gavinstaniforth/Development/project/wordpress/');

$wordpress = new \Gsdev\Wordpress\WordpressService();
$posts = $wordpress->getPosts(0, 5);

var_dump($posts);

$pages = $wordpress->getPages(0, 5);

var_dump($pages);
