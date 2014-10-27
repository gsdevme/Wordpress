# Wordpress Wrapper

## Todo
1. Support Search
2. Attachments?
3. CMS Pages? (non-posts)
4. Related Posts
5. Tags?
6. Comments? .. perhaps better off with Disqus
7. Why is it shit slow? is that just Wordpress?
8. Tests?

## Issues
WP_Post is a final class within Wordpress so its not possible to extend it, so the type hint has to be coupled to Wordpress
https://github.com/markjaquith/WordPress/blob/master/wp-includes/post.php#L455

### Wordpress Version
No idea, works on 4.0

### PHP Version
PHP 5.4+


