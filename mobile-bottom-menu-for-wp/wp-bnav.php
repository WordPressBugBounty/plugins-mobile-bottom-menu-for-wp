<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @since             1.0.0
 * @package           Wp_Bnav
 *
 * @wordpress-plugin
 * Plugin Name:       WP Mobile Bottom Menu
 * Plugin URI:        https://wpmessiah.com/products/wp-mobile-bottom-menu/
 * Description:       Smooth Navigation for Mobile. Create an Eye-Catching Sticky Bottom Menu with Limitless Customization Options.
 * Version:           1.3.0
 * Author:            WP Messiah
 * Author URI:        https://wpmessiah.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-bnav
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require __DIR__ . '/vendor/autoload.php';



/**
 * Plugin global information..
 */
define( 'WP_BNAV_VERSION', '1.3.0' );
define( 'WP_BNAV_PATH', plugin_dir_path( __FILE__ ) );
define( 'WP_BNAV_URL', plugin_dir_url( __FILE__ ) );
define( 'WP_BNAV_SLUG', 'wp-bnav' );
define( 'WP_BNAV_SHORT_NAME', 'WP BNav' );
define( 'WP_BNAV_FULL_NAME', 'Bottom Bar Navigation For WordPress' );
define( 'WP_BNAV_BASE_NAME', plugin_basename( __FILE__ ) );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-bnav-activator.php
 */
function activate_wp_bnav() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-bnav-activator.php';
	Wp_Bnav_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-bnav-deactivator.php
 */
function deactivate_wp_bnav() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-bnav-deactivator.php';
	Wp_Bnav_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_bnav' );
register_deactivation_hook( __FILE__, 'deactivate_wp_bnav' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-bnav.php';

do_action( 'wp_bnav/loaded' );

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_bnav() {
	$plugin = new Wp_Bnav();
	$plugin->run();
}
add_action( 'plugins_loaded', 'run_wp_bnav', 2 );

// Perform wishlist count
function bnav_wishlist_get_items_count() { ob_start(); ?>
<span class="bnav_wishlist_counter">
    <?php echo esc_html( yith_wcwl_count_all_products() ); ?>
</span>
<?php return ob_get_clean();
}