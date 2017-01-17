<?php
/**
 * Plugin Name:     Non Cache Public Post Preview
 * Plugin URI:      https://hinaloe.net
 * Description:     Disable cache when show public post preview post
 * Author:          Hinaloe
 * Author URI:      https://hinaloe.net
 * Text Domain:     non-cache-ppp
 * Domain Path:     /languages
 * Version:         1.0.1
 *
 * @package         Non_Cache_Ppp
 */

if ( ! is_admin() ) {
	add_filter( 'pre_get_posts', function ( WP_Query $query ) {
		if (
			$query->is_main_query() &&
			$query->is_preview() &&
			$query->is_singular() &&
			$query->get( '_ppp' ) &&
			! headers_sent()
		) {
			nocache_headers();
		}

		return $query;
	} );
}
