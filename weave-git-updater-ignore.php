<?php
/**
 * Plugin Name:          Git Updater Ignore [Weave Digital]
 * Plugin URI:           https://github.com/weavedigitalstudio/weave-git-updater-ignore
 * Description:          Folk of plugin to set Git Updater to ignore specific repository slugs for Weave Digital sites.
 * Version:              0.4
 * Author:               Gareth Bissland, Andy Fragen
 * Requires at least:    5.2
 * Requires PHP:         5.6
 * License:              MIT
 * Github Plugin URI:    weavedigitalstudio/weave-git-updater-ignore
 * Original Author:      Andy Fragen
 * Original Plugin URI:  https://gist.github.com/afragen/414612961ac500b652862096a54d62d7
 */

namespace Fragen\Git_Updater;

add_action(
	'plugins_loaded',
	function() {
		if ( class_exists( 'Fragen\Git_Updater\Ignore' ) ) {
			new Ignore( 'index-wp-mysql-for-speed', 'index-wp-mysql-for-speed/index-wp-mysql-for-speed.php' );
			new Ignore( 'redis-cache', 'redis-cache/redis-cache.php' );
			new Ignore( 'shortpixel-image-optimiser', 'shortpixel-image-optimiser/shortpixel-plugin.php' );
			new Ignore( 'enable-media-replace', 'enable-media-replace/enable-media-replace.php' );
			new Ignore( 'index-wp-mysql-for-speed', 'index-wp-mysql-for-speed/index-wp-mysql-for-speed.php' );
			new Ignore( 'view-admin-as', 'view-admin-as/view-admin-as.php' );
		}
	}
);
