<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @since      1.0.0
 *
 * @package    Wp_Bnav
 * @subpackage Wp_Bnav/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Wp_Bnav
 * @subpackage Wp_Bnav/includes
 * @author     WP Messiah <contact@wpmessiah.com>
 */
class Wp_Bnav {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Wp_Bnav_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		if ( defined( 'WP_BNAV_VERSION' ) ) {
			$this->version = WP_BNAV_VERSION;
		} else {
			$this->version = '1.4.3';
		}
		$this->plugin_name = 'wp-bnav';

		$this->load_dependencies();
		$this->set_locale();
		$this->register_settings();
		$this->define_admin_hooks();
		$this->define_public_hooks();
        $this->register_ajax_hooks();
		$this->register_menu_location();
	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Wp_Bnav_Loader. Orchestrates the hooks of the plugin.
	 * - Wp_Bnav_i18n. Defines internationalization functionality.
	 * - Wp_Bnav_Admin. Defines all hooks for the admin area.
	 * - Wp_Bnav_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-wp-bnav-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-wp-bnav-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-wp-bnav-admin.php';

        /**
         * The class responsible for defining all actions that occur in the public-facing
         * side of the site.
         */
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-wp-bnav-public.php';

        /**
         * Load codestar framework
         */
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'libs/codestar-framework/codestar-framework.php';

        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-wp-bnav-settings.php';

        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-wp-bnav-render-dom.php';

        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-wp-bnav-register-menu.php';

        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-wp-bnav-ajax.php';
		
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-boomdevs-notification-widget-bottom-menu.php';

	
		$this->loader = new Wp_Bnav_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Wp_Bnav_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Wp_Bnav_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

    /**
     * Register plugin available settings.
     *
     * @since    1.0.0
     * @access   private
     */
    private function register_settings() {

        $plugin_settings = new Wp_Bnav_Settings();

        $plugin_settings->generate_settings();
        $plugin_settings->register_menu_settings();

    }

    /**
     * Register ajax hoks.
     *
     * @since    1.0.0
     * @access   private
     */
    private function register_ajax_hooks() {

        $plugin_ajax = new Wp_Bnav_Ajax();

        $this->loader->add_action('wp_ajax_nopriv_set_premade_skin', $plugin_ajax, 'set_premade_skin');
        $this->loader->add_action('wp_ajax_set_premade_skin', $plugin_ajax, 'set_premade_skin');

    }

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Wp_Bnav_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
		$this->loader->add_filter( 'plugin_action_links_' . WP_BNAV_BASE_NAME, $plugin_admin, 'wp_bnav_add_action_plugin', 15, 2 );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Wp_Bnav_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

	}

	public function register_menu_location() {

		$menu_locations = new Bnav_Register_Menu_Location();
		$this->loader->add_action( 'after_setup_theme', $menu_locations, 'bnav_menu_location' );
		$this->loader->add_filter( 'nav_menu_submenu_css_class', $menu_locations, 'bnav_submenu_classnames', 10, 3 );

	}
	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Wp_Bnav_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}
}