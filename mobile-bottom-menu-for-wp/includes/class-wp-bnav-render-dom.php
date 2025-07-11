<?php
	require_once WP_BNAV_PATH . 'includes/class-wp-bnav-settings.php';
	require_once WP_BNAV_PATH . 'includes/class-wp-bnav-utils.php';

	/*
	* Render Bnav
	*/

	class WP_Bnav_Render_Dom
	{
		public $total_cart = '';
		public $total_wishlist_cart = '';


		public function __construct()
		{
			add_filter('wp_nav_menu_objects', [$this, 'menu_items'], 10, 2);
			add_filter('woocommerce_add_to_cart_fragments', [$this, 'bnav_cart_count'], 10, 2);
			add_action('wp_ajax_yith_wcwl_update_wishlist_count', [$this, 'yith_wcwl_ajax_update_count'], 10, 2);
			add_action('wp_ajax_nopriv_yith_wcwl_update_wishlist_count', [$this, 'yith_wcwl_ajax_update_count'], 10, 2);
			add_action('wp', [$this, 'bnav_find_page_id']);
		}

		// Define a callback function to remove elements with value zero
		public function removeZero($value)
		{
			return $value !== "0";
		}

		public function bnav_find_page_id()
		{
			global $post;
			$pageId = '';
			if ($post && isset($post->ID)) {
				$pageId = $post->ID;
			}

			// Render Menu on Footer
			$locations = get_theme_mod('nav_menu_locations');
			$settings = Wp_Bnav_Settings::get_settings();

			if (function_exists('is_shop') && is_shop()) {
				$pageId = get_option('woocommerce_shop_page_id');
			}

			if (WP_BNAV_Utils::isProActivated()) {
				if ($settings['enabled'] === "1") {
//	            if(isset($settings['scroll_hide_menu']) && $settings['scroll_hide_menu'] !== '')

					// Show specific selected page
					$bottom_menu_render = true;
					if (isset($settings['show_selected_page']) && is_array($settings['show_selected_page'])) {
						$show_selected_pages_filtered_arr = array_filter($settings['show_selected_page'], [$this, 'removeZero']);

						if (count($show_selected_pages_filtered_arr) > 0) {
							if (!in_array($pageId, $show_selected_pages_filtered_arr)) {
								$bottom_menu_render = false;
							}
						}
					}

					if (isset($settings['select_page']) && is_array($settings['select_page'])) {
						$hide_selected_pages_filtered_arr = array_filter($settings['select_page'], [$this, 'removeZero']);

						if (count($hide_selected_pages_filtered_arr) > 0) {
							if (in_array($pageId, $hide_selected_pages_filtered_arr)) {
								$bottom_menu_render = false;
							}
						}
					}

					if ($bottom_menu_render) {
						add_action('wp_footer', [$this, 'render_dom']);
					}
				}
			} else {
				if ($locations) {
					if ($settings['enabled'] && array_key_exists('bnav_bottom_nav', $locations)) {
						add_action('wp_footer', [$this, 'render_dom']);
					}
				}
			}
		}

		//WooCommerce Mini Cart
		public function bnav_cart_count($fragments)
		{ ?>
            <span class="cart_total">
            <?php echo WC()->cart->get_cart_contents_count(); ?>
        </span>

			<?php $fragments['span.cart_total'] = ob_get_clean();
			return $fragments;
		}

		public function render_dom()
		{
			$settings = Wp_Bnav_Settings::get_settings();
			$show_search_box = 'bnav_search_hide';
			if (!empty($settings['show-global-search-box'])) {
				$show_search_box = '';
			}

			$search_icon = '';
			if (!empty($settings['show-search-icon'])) {
				if (!empty($settings['icon-search-mode']) && !empty($settings["search-icon"])) {
					$search_icon = '<i class="' . $settings["search-icon"] . '"></i>';
				} else {
					if (!empty($settings["search-image"]["url"])) {
						$search_icon = '<img class="' . $settings["icon-search-position"] . '" src="' . $settings["search-image"]["url"] . '" />';
					}
				}
			}
			?>

            <div class="bnav_bottom_nav_wrapper">
                <div class="bnav_placeholder_outter_wrap">
                    <div class="bnav_sub_menu_wrapper"></div>
					<?php if (WP_BNAV_Utils::isProActivated()): ?>
                        <form action="<?php echo esc_url(home_url("/")); ?>" method="get"
                              class="bnav_sub_menu_search <?php echo esc_html($show_search_box); ?>">
                            <div class="bnav_search_input <?php echo esc_html($settings["icon-search-position"]); ?>">
								<?php echo $search_icon; ?>
                                <input type="text" name="s" id="search"
                                       value="<?php echo esc_html(the_search_query()); ?>"
                                       placeholder="<?php echo esc_html(__('Type to search', 'wp-bnav')); ?>"/>
                            </div>
                        </form>
					<?php endif; ?>
                </div>
				<?php
					$menu_depth = 1;

					if (WP_BNAV_Utils::isProActivated()) {
						$menu_depth = 0;
					}

					wp_nav_menu(
						array(
							'theme_location' => 'bnav_bottom_nav',
							'container' => 'div',
							'container_class' => 'bnav_main_menu_container',
							'menu_class' => 'bnav_main_menu', 'depth' => $menu_depth
						)
					); ?>
            </div>
            <div class="bnav_overlay_close_all"></div>
			<?php
			if (isset($settings['scroll_hide_menu']) && $settings['scroll_hide_menu'] !== ''):
				?>
                <script>
                    jQuery(window).on('scroll', function () {
                        if (jQuery(window).scrollTop() + jQuery(window).height() + 200 >= jQuery(document).height()) {
                            jQuery('.bnav_bottom_nav_wrapper').addClass('bnav_scroll_hide_menu');
                            jQuery('.bnav_bottom_nav_wrapper').addClass('bnav_hide_menu_onscroll_mobile');
                            // bnav_hide_menu_onscroll
                        } else {
                            jQuery('.bnav_bottom_nav_wrapper').removeClass('bnav_scroll_hide_menu');
                            jQuery('.bnav_bottom_nav_wrapper').removeClass('bnav_hide_menu_onscroll_mobile');
                        }
                    });
                </script>
			<?php endif; ?>
		<?php }

		public function menu_items($items, $args)
		{
			if ($args->theme_location !== 'bnav_bottom_nav') {
				return $items;
			}

			foreach ($items as $item) {

				$meta = get_post_meta($item->ID, 'wp-bnav-menu', true);
				
				$normal_icon = '';

				$width      = isset($meta['icon-image-width']) && is_numeric($meta['icon-image-width']) ? (int)$meta['icon-image-width'] : 20;
				$margin_top = isset($meta['icon-image-offset-top']) && is_numeric($meta['icon-image-offset-top']) ? (int)$meta['icon-image-offset-top'] : '';
				$image_url  = isset($meta['image']['url']) ? esc_url($meta['image']['url']) : '';
				$active_url  = isset($meta['active-image']['url']) ? esc_url($meta['active-image']['url']) : '';

				if (!empty($meta['icon']) && $meta['icon-mode'] && $meta['show-icon']) {
					$normal_icon = '<div class="icon_wrapper normal" style="margin-top: ' . $margin_top . 'px;"><i class="' . $meta['icon'] . '"></i></div>';
				}

				if (!empty($image_url) && empty($meta['icon-mode']) && !empty($meta['show-icon'])) {
					$normal_icon = '<div class="icon_wrapper normal" style="margin-top: ' . $margin_top . 'px;">
						<div class="img_icon">
							<img 
								style="width: ' . $width . 'px;"
								src="' . $image_url . '" 
								alt="icon image" />
						</div>
					</div>';
				}

				$menu_text = '';
				if (empty($meta['hide-text'])) {
					$menu_text = '<div class="text_wrapper">' . $item->title . '</div></div>';
				}

				$icon_position_class = '';
				if (isset($meta['icon-position'])) {
					$icon_position_class = $this->icon_position($meta['icon-position'], $meta);
				}

				$active_icon = '';


				if (!empty($meta['active-icon']) && $meta['icon-mode'] && $meta['show-icon']) {
					$active_icon = '<div class="icon_wrapper active"><i class="' . $meta['active-icon'] . '"></i></div>';
				}

				if (!empty($active_url) && empty($meta['icon-mode']) && !empty($meta['show-icon'])) {
					$active_icon = '<div class="icon_wrapper active">
						<div class="img_icon">
							<img style="width: ' . $width . 'px;" src="' . $active_url . '" alt="active icon" />
						</div>
					</div>';
				}

				$menu_custom_content = '';
				if (!empty($meta['custom-content'])) {
					$menu_custom_content = '<ul class="bnav_mega_menu_wrapper sub-menu"><div class="bnav_mega_menu_inner_wrap">' . do_shortcode($meta["custom-content"]) . '</div></ul>';
				}

				// Add search toggle class to menu
				$search_toggle_class = '';
				if (!empty($meta['search-trigger'])) {
					$search_toggle_class = 'bnav_search_toggle';
				}

				/**
				 * Check if WooCommerce is activated
				 */
				$cart_total = '';
				$total_wishlist_cart = 0;

				if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins'))) && !empty($meta['woocommerce-cart'])) {
					$cart_total = '<span class="cart_total">' . count(WC()->cart->get_cart()) . '</span>';
					$pattern = '/\[(\w+)\].*\[\/(\1)\]/';
					$cart_total = preg_replace($pattern, '', $cart_total);
				}

				if (!empty($meta['wishlist-cart'])) {
					$total_wishlist_cart = '<span class="yith-wcwl-items-count">
                <i class="yith-wcwl-icon fa fa-heart-o">' . yith_wcwl_count_all_products() . '</i>
              </span>';

					$item->url = YITH_WCWL()->get_wishlist_url();
				}

				if (!empty($meta['wishlist-cart'])) {
					$menu_inner_wrap = '<div class="bnav_menu_items ' . $search_toggle_class . '"><div class="' . $icon_position_class . '">' . $normal_icon . $active_icon . $menu_text . $cart_total . bnav_wishlist_get_items_count() . '</div>';
				} else {
					$menu_inner_wrap = '<div class="bnav_menu_items ' . $search_toggle_class . '"><div class="' . $icon_position_class . '">' . $normal_icon . $active_icon . $menu_text . $cart_total . '</div>';
				}

				if (WP_BNAV_Utils::isProActivated()) {
					if (isset($meta['display-mode'])) {
						if (!$this->user_can_see_menu($meta['display-mode'], $meta)) {
							$menu_inner_wrap = '';
						}
					}
				}

				$item->title = $menu_inner_wrap . $menu_custom_content;
			}

			return $items;
		}

		public function icon_position($positions, $meta)
		{
			$settings = Wp_Bnav_Settings::get_settings();
			$icon_position_class = '';

			if ($positions !== 'none') {
				switch ($positions) {
					case 'top':
						$icon_position_class = 'bnav_flex bnav_center';
						break;
					case 'bottom':
						$icon_position_class = 'bnav_flex bnav_center bnav_icon_bottom';
						break;
					case 'left':
						$icon_position_class = 'bnav_flex bnav_left';
						break;
					case 'right':
						$icon_position_class = 'bnav_flex bnav_right';
						break;
				}
			} else {
				$icon_position_class = 'bnav_flex';
			}

			return $icon_position_class;
		}

		public function user_can_see_menu($display_mode, $meta)
		{
			switch ($display_mode) {
				case 'all-users':
					return true;
				case 'logged-in-users':
					if (is_user_logged_in()) {
						return true;
					} else {
						return false;
					}
				case 'logged-out-users':
					if (!is_user_logged_in()) {
						return true;
					} else {
						return false;
					}

				case 'by-role':
					return $this->user_role_condition($meta['roles']);
				default:
					return false;
			}
		}

		public function user_role_condition($allowed_roles)
		{

			if (!is_array($allowed_roles) || empty($allowed_roles)) {
				return true;
			}

			$user = wp_get_current_user();
			if (array_intersect($allowed_roles, $user->roles)) {
				return true;
			}

			return false;
		}

		public function yith_wcwl_ajax_update_count()
		{
			check_ajax_referer('yith_wcwl_nonce', 'nonce');
			
			wp_send_json(array(
				'count' => yith_wcwl_count_all_products()
			));
		}

	}

	new WP_Bnav_Render_Dom();