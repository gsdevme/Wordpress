# Wordpress Wrapper

## Why?
Well Writing a blog is easy.. but all the backend editor is a pain.. after all the Wordpress backend isn't all bad, however the frontend is like a cancer.. theming and extending it is just a waste of time. So I can write my posts/pages with Wordpress then export to JSON on the HDD via command line using this wrapper and then write the frontend like a normal human being.

Also means Wordpress isn't exposed to bots/hackers/public. It can sit behind a http auth user/pass
Also useful for wrapping Wordpress in a REST API

## Todo
1. Support Search
2. Attachments?
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


