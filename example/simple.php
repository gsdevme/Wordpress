<?php

$loader = require '../vendor/autoload.php';

Gsdev\Wordpress\Bootstrap::run('/Users/gavinstaniforth/Development/project/wordpress/');

$wordpress = new \Gsdev\Wordpress\Wordpress();
$posts = $wordpress->getPosts(0, 5);

var_dump($posts);
