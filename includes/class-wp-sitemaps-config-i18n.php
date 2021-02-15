<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.kybernetik-services.com/
 * @since      1.0.0
 *
 * @package    WP_Sitemaps_Config
 * @subpackage WP_Sitemaps_Config/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    WP_Sitemaps_Config
 * @subpackage WP_Sitemaps_Config/includes
 * @author     Kybernetik Services <wordpress@kybernetik.com.de>
 */
if ( ! class_exists( 'WP_Sitemaps_Config_i18n' ) ) {
class WP_Sitemaps_Config_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-sitemaps-config',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}

}
}
