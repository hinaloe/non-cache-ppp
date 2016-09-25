=== Non Cache Public Post Preview ===
Contributors: hnle
Donate link: https://hinaloe.net/
Tags: public, post, preview, posts, custom post types, draft, cache, cdn, cloudfront, cloudflare, proxy cache, nginx
Requires at least: 3.7
Tested up to: 4.6.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Disable cache when show public post preview post

== Description ==

This plugin send `Cache-Control: no-cache, must-revalidate` header when show [public-post-preview](https://wordpress.org/plugins/public-post-preview/) post.

In other word, that make skip cache of CDN (like CloudFlare, CloudFront... and other), or Proxy-Cache (Like Nginx).
So, outside people always can see newest draft, and there is no need extra time to close public draft.

== Installation ==

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 1.0 =
* First release


