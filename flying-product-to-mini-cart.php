<?php

/**
 *
 * @link              https://wpnavarro.com
 * @since             1.0.0
 * @package           Flying_Product_To_Mini_Cart
 * 
 * @wordpress-plugin
 * Plugin Name:       Flying Product to Mini Cart for WooCommerce
 * Description:       Flying Product to Mini Cart for WooCommerce allow adding beautiful flying animation when the customer adding a product to the cart.
 * Version:           1.0.0
 * Author:            ido navarro
 * Author URI:        https://wpnavarro.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fpmc
 * Domain Path:       /languages
 */

/**
 * If this file is called directly, abort.
*/
if (!defined('WPINC') ) {
	die;
}

define( 'FPMC_URL', plugins_url( '/', __FILE__ ) );

/**
 * Check if Elementor is active
 */
if (!in_array( 'elementor/elementor.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) && !array_key_exists( 'elementor/elementor.php', apply_filters( 'active_plugins', get_site_option( 'active_sitewide_plugins', array() ) ) ) ) {
		
	require_once( ABSPATH . 'wp-admin/includes/plugin.php' );

	function fpmc_admin_notice()
		{
			?>
			<div class="notice notice-warning is-dismissible">
				<p><?php echo '<strong>Pay attention:</strong> Elementor plugin not activated, It should required for Flying Product to Mini Cart for WooCommerce.'; ?></p>
			</div>
			<?php
		}
	add_action( 'admin_notices', 'fpmc_admin_notice' );
}


/**
 * Currently plugin version.
 */

define( 'FLYING_PRODUCT_TO_MINI_CART_VERSION', '1.0.0' );

/**
 * Enqueue the plugin's styles.
 */

function fpmc_scripts_connector() 
	{
		wp_register_script( 'flying-product-to-mini-cart-scripts',  FPMC_URL . '/public/js/flying-product-to-mini-cart-public.js', array('jquery'), true );
		wp_enqueue_script('flying-product-to-mini-cart-scripts');
	}

add_action('init', 'fpmc_scripts_connector');

