<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://kazbek.dev
 * @since      1.0.0
 *
 * @package    Better_Review_For_Woocommerce
 * @subpackage Better_Review_For_Woocommerce/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Better_Review_For_Woocommerce
 * @subpackage Better_Review_For_Woocommerce/includes
 * @author     Kazbek Kadalashvili <kazbek.kadalashvili@gmail.com>
 */
class Better_Review_For_Woocommerce_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'better-review-for-woocommerce',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
