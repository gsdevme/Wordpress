Wordpress Wrapper

Issues;
WP_Post is a final class within Wordpress so its not possible to extend it, so the type hint has to be coupled to Wordpress
https://github.com/markjaquith/WordPress/blob/master/wp-includes/post.php#L455
