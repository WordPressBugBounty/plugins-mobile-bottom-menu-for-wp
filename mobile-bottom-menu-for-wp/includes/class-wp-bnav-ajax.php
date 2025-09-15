<?php

/**
 * Handles plugin ajax functionalities.
 *
 * @since      1.0.0
 *
 * @package    Wp_Bnav
 * @subpackage Wp_Bnav/includes
 */

/**
 * Registers ajax endpoints.
 *
 * @since      1.0.0
 * @package    Wp_Bnav
 * @subpackage Wp_Bnav/includes
 * @author     WP Messiah <contact@wpmessiah.com>
 */
class Wp_Bnav_Ajax {
    /**
     * Register ajax hook for setting a premade skin.
     *
     * @since 1.0.0
     */

     public function set_demo_skin($skin_name) {

        $light = WP_BNAV_URL . 'admin/img/light/';
        $light_active = WP_BNAV_URL . 'admin/img/light-active/';
        $dark = WP_BNAV_URL . 'admin/img/dark/';
        $dark_active = WP_BNAV_URL . 'admin/img/dark-active/';

        $templates = [

            'default_skin' => [
                'items' => [
                    [
                        'title' => 'Home',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'default-skin/home.png',
                        'active_icon' => $dark_active . 'default-skin/active-home-circle.png',
                    ],
                    [
                        'title' => 'Discover',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'default-skin/bx-compass.png',
                        'active_icon' => $dark_active . 'default-skin/bx-compass.png',
                    ],
                    [
                        'title' => 'Documents',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'default-skin/bx-archive.png',
                        'active_icon' => $dark_active . 'default-skin/bx-archive.png',
                    ],
                    [
                        'title' => 'Account',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'default-skin/bx-user-circle.png',
                        'active_icon' => $dark_active . 'default-skin/bx-user-circle.png',
                    ]
                ],
            ],

            'skin_one' => [
                'items' => [
                    [
                        'title' => 'Home',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-one/Home.png',
                        'active_icon' => $light_active . 'skin-one/Home-active.png',
                    ],
                    [
                        'title' => 'Discover',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-one/Discover.png',
                        'active_icon' => $light_active . 'skin-one/Discover-active.png',
                    ],
                    [
                        'title' => 'Documents',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-one/Documents.png',
                        'active_icon' => $light_active . 'skin-one/Documents-active.png',
                    ],
                    [
                        'title' => 'Account',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-one/Account.png',
                        'active_icon' => $light_active . 'skin-one/Account-active.png',
                    ]
                ],
            ],

            'skin_two' => [
                'items' => [
                    [
                        'title' => 'Compass',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '34',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-two/bx-compass.png',
                        'active_icon' => $dark_active . 'skin-two/bx-compass-active.png',
                        'submenu' => [
                            [
                                'title' => 'Plugins',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $dark . 'skin-two/bx-customize.png',
                                'active_icon' => $dark_active . 'skin-two/bx-customize-lime.png',
                            ],
                            [
                                'title' => 'Addons',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $dark . 'skin-two/bx-joystick.png',
                                'active_icon' => $dark_active . 'skin-two/bx-joystick-lime.png',
                                'submenu' => [
                                    [
                                        'title' => 'Opera Mini',
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/opera.png',
                                        'active_icon' => $dark . 'skin-two/opera.png',
                                    ],
                                    [
                                        'title' => 'Microsoft Edge',
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/edge.png',
                                        'active_icon' => $dark . 'skin-two/edge.png',
                                        'submenu' => [
                                            [
                                                'title' => 'Momentum',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'none',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $dark . 'skin-two/bx-chevron-right.png',
                                            ],
                                            [
                                                'title' => 'Screencastify',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'none',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $dark . 'skin-two/bx-chevron-right.png',
                                            ],
                                            [
                                                'title' => 'Zoom Scheduler',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'none',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $dark . 'skin-two/bx-chevron-right.png',
                                            ],
                                        ],
                                    ],
                                    [
                                        'title' => 'Mozila Firefox',    
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/firefox.png',
                                        'active_icon' => $dark . 'skin-two/firefox.png',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Templates',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $dark . 'skin-two/bx-crown.png',
                                'active_icon' => $dark_active . 'skin-two/bx-crown-lime.png',
                            ],
                            [
                                'title' => 'Cookies',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $dark . 'skin-two/bx-cookie.png',
                                'active_icon' => $dark_active . 'skin-two/bx-cookie-lime.png',
                            ],
                        ]
                    ],
                    [
                        'title' => 'Bookmarks',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '28',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-two/bx-bookmarks.png',
                        'active_icon' => $dark_active . 'skin-two/bx-bookmark-lime.png',
                    ],
                    [
                        'title' => 'Wallet',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '28',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-two/bx-wallet.png',
                        'active_icon' => $dark_active . 'skin-two/bx-wallet-lime.png',
                    ],
                    [
                        'title' => 'User',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-two/bx-user.png',
                        'active_icon' => $dark_active . 'skin-two/bx-user-lime.png',
                    ]
                ],
            ],

            'skin_three' => [
                'items' => [
                    [
                        'title' => 'Compass',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '28',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-three/bx-compass.png',
                        'active_icon' => $light_active . 'skin-three/bx-compass.png',
                        'submenu' => [
                            [
                                'title' => 'Plugins',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $light . 'skin-three/bx-customize.png',
                                'active_icon' => $light_active . 'skin-three/bx-customize.png',
                            ],
                            [
                                'title' => 'Addons',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $light . 'skin-three/bx-joystick.png',
                                'active_icon' => $light_active . 'skin-three/bx-joystick.png',
                                'submenu' => [
                                    [
                                        'title' => 'Opera Mini',
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/opera.png',
                                        'active_icon' => $dark . 'skin-two/opera.png',
                                    ],
                                    [
                                        'title' => 'Microsoft Edge',
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/edge.png',
                                        'active_icon' => $dark . 'skin-two/edge.png',
                                        'submenu' => [
                                            [
                                                'title' => 'Momentum',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'none',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $dark . 'skin-two/bx-chevron-right.png',
                                            ],
                                            [
                                                'title' => 'Screencastify',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'none',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $dark . 'skin-two/bx-chevron-right.png',
                                            ],
                                            [
                                                'title' => 'Zoom Scheduler',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'none',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $dark . 'skin-two/bx-chevron-right.png',
                                            ],
                                        ],
                                    ],
                                    [
                                        'title' => 'Mozila Firefox',    
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/firefox.png',
                                        'active_icon' => $dark . 'skin-two/firefox.png',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Templates',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $light . 'skin-three/bx-crown.png',
                                'active_icon' => $light_active . 'skin-three/bx-crown.png',
                            ],
                            [
                                'title' => 'Cookies',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1', 
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $light . 'skin-three/bx-cookie.png',
                                'active_icon' => $light_active . 'skin-three/bx-cookie.png',
                            ],
                        ]
                    ],
                    [
                        'title' => 'Bookmarks',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '28',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-three/bx-bookmarks.png',
                        'active_icon' => $light_active . 'skin-three/bx-bookmarks.png',
                    ],
                    [
                        'title' => 'Wallet',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '28',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-three/bx-wallet.png',
                        'active_icon' => $light_active . 'skin-three/bx-wallet.png',
                    ],
                    [
                        'title' => 'User',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '28',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-three/bx-user.png',
                        'active_icon' => $light_active . 'skin-three/bx-user.png',
                    ]
                ],
            ],

            'skin_four' => [
                'items' => [
                    [
                        'title' => 'Compass',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '28',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-four/bx-compass.png',
                        'active_icon' => $dark_active . 'skin-four/bx-compass.png',
                        'submenu' => [
                            [
                                'title' => 'Plugins',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $dark . 'skin-four/bx-customize.png',
                                'active_icon' => $dark_active . 'skin-four/bx-customize.png',
                            ],
                            [
                                'title' => 'Addons',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $dark . 'skin-four/bx-joystick.png',
                                'active_icon' => $dark_active . 'skin-four/bx-joystick.png',
                                'submenu' => [
                                    [
                                        'title' => 'Opera Mini',
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/opera.png',
                                        'active_icon' => $dark . 'skin-two/opera.png',
                                    ],
                                    [
                                        'title' => 'Microsoft Edge',
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/edge.png',
                                        'active_icon' => $dark . 'skin-two/edge.png',
                                        'submenu' => [
                                            [
                                                'title' => 'Momentum',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'left',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $dark . 'skin-two/bx-chevron-right.png',
                                            ],
                                            [
                                                'title' => 'Screencastify',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'left',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $dark . 'skin-two/bx-chevron-right.png',
                                            ],
                                            [
                                                'title' => 'Zoom Scheduler',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'left',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $dark . 'skin-two/bx-chevron-right.png',
                                            ],
                                        ],
                                    ],
                                    [
                                        'title' => 'Mozila Firefox',    
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/firefox.png',
                                        'active_icon' => $dark . 'skin-two/firefox.png',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Templates',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $dark . 'skin-four/bx-crown.png',
                                'active_icon' => $dark_active . 'skin-four/bx-crown.png',
                            ],
                            [
                                'title' => 'Cookies',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $dark . 'skin-four/bx-cookie.png',
                                'active_icon' => $dark_active . 'skin-four/bx-cookie.png',
                            ],
                        ]
                    ],
                    [
                        'title' => 'Bookmarks',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '28',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-four/bx-bookmarks.png',
                        'active_icon' => $dark_active . 'skin-four/bx-bookmarks.png',
                    ],
                    [
                        'title' => 'Wallet',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '28',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-four/bx-wallet.png',
                        'active_icon' => $dark_active . 'skin-four/bx-wallet.png',
                    ],
                    [
                        'title' => 'User',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '28',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-four/bx-user.png',
                        'active_icon' => $dark_active . 'skin-four/bx-user.png',
                    ]
                ],
            ],

            'skin_five' => [
                'items' => [
                    [
                        'title' => 'Compass',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '28',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-five/bx-compass.png',
                        'active_icon' => $light_active . 'skin-five/bx-compass.png',
                        'submenu' => [
                            [
                                'title' => 'Plugins',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $light . 'skin-three/bx-customize.png',
                                'active_icon' => $light_active . 'skin-three/bx-customize.png',
                            ],
                            [
                                'title' => 'Addons',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $light . 'skin-three/bx-joystick.png',
                                'active_icon' => $light_active . 'skin-three/bx-joystick.png',
                                'submenu' => [
                                    [
                                        'title' => 'Opera Mini',
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/opera.png',
                                        'active_icon' => $light . 'skin-five/right.png',
                                    ],
                                    [
                                        'title' => 'Microsoft Edge',
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/edge.png',
                                        'active_icon' => $light . 'skin-five/right.png',
                                        'submenu' => [
                                            [
                                                'title' => 'Momentum',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'left',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $light . 'skin-five/right.png',
                                            ],
                                            [
                                                'title' => 'Screencastify',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'left',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $light . 'skin-five/right.png',
                                            ],
                                            [
                                                'title' => 'Zoom Scheduler',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'left',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $light . 'skin-five/right.png',
                                            ],
                                        ],
                                    ],
                                    [
                                        'title' => 'Mozila Firefox',    
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/firefox.png',
                                        'active_icon' => $dark . 'skin-two/firefox.png',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Templates',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $light . 'skin-three/bx-crown.png',
                                'active_icon' => $light_active . 'skin-three/bx-crown.png',
                            ],
                            [
                                'title' => 'Cookies',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1', 
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $light . 'skin-three/bx-cookie.png',
                                'active_icon' => $light_active . 'skin-three/bx-cookie.png',
                            ],
                        ]
                    ],
                    [
                        'title' => 'Bookmarks',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1', 
                        'icon_width' => '28',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-five/bx-bookmarks.png',
                        'active_icon' => $light_active . 'skin-five/bx-bookmarks.png',
                    ],
                    [
                        'title' => 'Wallet',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '28',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-five/bx-wallet.png',
                        'active_icon' => $light_active . 'skin-five/bx-wallet.png',
                    ],
                    [
                        'title' => 'User',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '28',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-five/bx-user.png',
                        'active_icon' => $light_active . 'skin-five/bx-user.png',
                    ]
                ],
            ],

            'skin_six' => [
                'items' => [
                    [
                        'title' => 'Compass',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '32',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-six/bx-heart-circle.png',
                        'active_icon' => $dark_active . 'skin-six/bx-heart-circle.png',
                        'submenu' => [
                            [
                                'title' => 'Plugins',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $dark . 'skin-four/bx-customize.png',
                                'active_icon' => $dark_active . 'skin-six/bx-customize.png',
                            ],
                            [
                                'title' => 'Addons',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $dark . 'skin-four/bx-joystick.png',
                                'active_icon' => $dark_active . 'skin-six/bx-joystick.png',
                                'submenu' => [
                                    [
                                        'title' => 'Opera Mini',
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/opera.png',
                                        'active_icon' => $dark . 'skin-two/opera.png',
                                    ],
                                    [
                                        'title' => 'Microsoft Edge',
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/edge.png',
                                        'active_icon' => $dark . 'skin-two/edge.png',
                                        'submenu' => [
                                            [
                                                'title' => 'Momentum',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'left',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $dark . 'skin-six/dark-right.png',
                                            ],
                                            [
                                                'title' => 'Screencastify',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'left',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $dark . 'skin-six/dark-right.png',
                                            ],
                                            [
                                                'title' => 'Zoom Scheduler',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'left',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $dark . 'skin-six/dark-right.png',
                                            ],
                                        ],
                                    ],
                                    [
                                        'title' => 'Mozila Firefox',    
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/firefox.png',
                                        'active_icon' => $dark . 'skin-two/firefox.png',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Templates',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $dark . 'skin-four/bx-crown.png',
                                'active_icon' => $dark_active . 'skin-six/bx-crown.png',
                            ],
                            [
                                'title' => 'Cookies',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $dark . 'skin-four/bx-cookie.png',
                                'active_icon' => $dark_active . 'skin-six/bx-cookie.png',
                            ],
                        ]
                    ],
                    [
                        'title' => 'Bookmarks',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '32',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-six/bx-cast.png',
                        'active_icon' => $dark_active . 'skin-six/bx-user-circle.png',
                    ],
                    [
                        'title' => 'Wallet',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '32',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-six/bx-bolt-circle.png',
                        'active_icon' => $dark_active . 'skin-six/bx-bolt-circle.png',
                    ],
                    [
                        'title' => 'User',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '32',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-six/bx-wallet.png',
                        'active_icon' => $dark_active . 'skin-six/bx-wallet.png',
                    ],
                    [
                        'title' => 'User',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '32',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-six/bx-user-circle.png',
                        'active_icon' => $dark_active . 'skin-six/bx-user-circle.png',
                    ]
                ],
            ],

            'skin_seven' => [
                'items' => [
                    [
                        'title' => 'Compass',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '32',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-six/bx-heart-circle.png',
                        'active_icon' => $light_active . 'skin-seven/bx-heart-circle.png',
                        'submenu' => [
                            [
                                'title' => 'Plugins',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $dark . 'skin-four/bx-customize.png',
                                'active_icon' => $light_active . 'skin-seven/bx-customize.png',
                            ],
                            [
                                'title' => 'Addons',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $dark . 'skin-four/bx-joystick.png',
                                'active_icon' => $light_active . 'skin-seven/bx-joystick.png',
                                'submenu' => [
                                    [
                                        'title' => 'Opera Mini',
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/opera.png',
                                        'active_icon' => $dark . 'skin-two/opera.png',
                                    ],
                                    [
                                        'title' => 'Microsoft Edge',
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/edge.png',
                                        'active_icon' => $dark . 'skin-two/edge.png',
                                        'submenu' => [
                                            [
                                                'title' => 'Momentum',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'left',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $light_active . 'skin-seven/chevron-right.png',
                                            ],
                                            [
                                                'title' => 'Screencastify',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'left',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $light_active . 'skin-seven/chevron-right.png',
                                            ],
                                            [
                                                'title' => 'Zoom Scheduler',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'left',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $light_active . 'skin-seven/chevron-right.png',
                                            ],
                                        ],
                                    ],
                                    [
                                        'title' => 'Mozila Firefox',    
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/firefox.png',
                                        'active_icon' => $dark . 'skin-two/firefox.png',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Templates',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $dark . 'skin-four/bx-crown.png',
                                'active_icon' => $light_active . 'skin-seven/bx-crown.png',
                            ],
                            [
                                'title' => 'Cookies',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $dark . 'skin-four/bx-cookie.png',
                                'active_icon' => $light_active . 'skin-seven/cookie.png',
                            ],
                        ]
                    ],
                    [
                        'title' => 'Bookmarks',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '32',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-six/bx-cast.png',
                        'active_icon' => $light_active . 'skin-seven/bx-cast.png',
                    ],
                    [
                        'title' => 'Wallet',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '32',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-six/bx-bolt-circle.png',
                        'active_icon' => $light_active . 'skin-seven/bx-bolt-circle.png',
                    ],
                    [
                        'title' => 'User',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '32',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-six/bx-wallet.png',
                        'active_icon' => $light_active . 'skin-seven/bx-wallet.png',
                    ],
                    [
                        'title' => 'User',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '32',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-six/bx-user-circle.png',
                        'active_icon' => $light_active . 'skin-seven/bx-user-circle.png',
                    ]
                ],
            ],

            'skin_eight' => [
                'items' => [
                    [
                        'title' => 'Home',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-eight/bxs-home-circle.png',
                        'active_icon' => $dark_active . 'skin-eight/bxs-home-circle.png',
                        'submenu' => [
                            [
                                'title' => 'Plugins',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $dark . 'skin-four/bx-customize.png',
                                'active_icon' => $dark_active . 'skin-four/bx-customize.png',
                            ],
                            [
                                'title' => 'Addons',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $dark . 'skin-four/bx-joystick.png',
                                'active_icon' => $dark_active . 'skin-four/bx-joystick.png',
                                'submenu' => [
                                    [
                                        'title' => 'Opera Mini',
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/opera.png',
                                        'active_icon' => $dark . 'skin-two/opera.png',
                                    ],
                                    [
                                        'title' => 'Microsoft Edge',
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/edge.png',
                                        'active_icon' => $dark . 'skin-two/edge.png',
                                        'submenu' => [
                                            [
                                                'title' => 'Momentum',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'left',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $dark . 'skin-two/bx-chevron-right.png',
                                            ],
                                            [
                                                'title' => 'Screencastify',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'left',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $dark . 'skin-two/bx-chevron-right.png',
                                            ],
                                            [
                                                'title' => 'Zoom Scheduler',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'left',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $dark . 'skin-two/bx-chevron-right.png',
                                            ],
                                        ],
                                    ],
                                    [
                                        'title' => 'Mozila Firefox',    
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/firefox.png',
                                        'active_icon' => $dark . 'skin-two/firefox.png',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Templates',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $dark . 'skin-four/bx-crown.png',
                                'active_icon' => $dark_active . 'skin-four/bx-crown.png',
                            ],
                            [
                                'title' => 'Cookies',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $dark . 'skin-four/bx-cookie.png',
                                'active_icon' => $dark_active . 'skin-four/bx-cookie.png',
                            ],
                              [
                                'title' => 'Apps',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $dark . 'skin-eight/bx-cube-alt.png',
                                'active_icon' => $dark_active . 'skin-eight/bx-cube-alt.png',
                            ],
                        ]
                    ],
                    [
                        'title' => 'Discover',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-eight/compass.png',
                        'active_icon' => $dark_active . 'skin-eight/compass.png',
                    ],
                    [
                        'title' => 'Documents',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-eight/bx-archive.png',
                        'active_icon' => $dark_active . 'skin-eight/bx-archive.png',
                    ],
                    [
                        'title' => 'Account',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-eight/bx-user-circle.png',
                        'active_icon' => $dark_active . 'skin-eight/bx-user-circle.png',
                    ],
                 
                ],
            ],

            'skin_nine' => [
                'items' => [
                    [
                        'title' => 'Home',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-nine/bx-home-circle.png',
                        'active_icon' => $light_active . 'skin-nine/bx-home-circle.png',
                        'submenu' => [
                            [
                                'title' => 'Plugins',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $light . 'skin-three/bx-customize.png',
                                'active_icon' => $light_active . 'skin-three/bx-customize.png',
                            ],
                            [
                                'title' => 'Addons',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $light . 'skin-three/bx-joystick.png',
                                'active_icon' => $light_active . 'skin-three/bx-joystick.png',
                                'submenu' => [
                                    [
                                        'title' => 'Opera Mini',
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/opera.png',
                                        'active_icon' => $dark . 'skin-two/opera.png',
                                    ],
                                    [
                                        'title' => 'Microsoft Edge',
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/edge.png',
                                        'active_icon' => $dark . 'skin-two/edge.png',
                                        'submenu' => [
                                            [
                                                'title' => 'Momentum',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'left',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $dark . 'skin-two/bx-chevron-right.png',
                                            ],
                                            [
                                                'title' => 'Screencastify',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'left',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $dark . 'skin-two/bx-chevron-right.png',
                                            ],
                                            [
                                                'title' => 'Zoom Scheduler',
                                                'link' => '#',
                                                'hide_text' => '0',
                                                'show_icon' => '1',
                                                'icon_width' => '18',
                                                'icon_position' => 'left',
                                                'icon_offset_top' => [
                                                    'top'    => '0',
                                                    'right'  => '0',
                                                    'bottom' => '0',
                                                    'left'   => '0',
                                                    'unit'   => 'px',
                                                ],
                                                'icon' => $dark . 'skin-two/bx-chevron-right.png',
                                                'active_icon' => $dark . 'skin-two/bx-chevron-right.png',
                                            ],
                                        ],
                                    ],
                                    [
                                        'title' => 'Mozila Firefox',    
                                        'link' => '#',
                                        'hide_text' => '0',
                                        'show_icon' => '1',
                                        'icon_width' => '16',
                                        'icon_position' => 'none',
                                        'icon_offset_top' => [
                                            'top'    => '0',
                                            'right'  => '0',
                                            'bottom' => '0',
                                            'left'   => '0',
                                            'unit'   => 'px',
                                        ],
                                        'icon' => $dark . 'skin-two/firefox.png',
                                        'active_icon' => $dark . 'skin-two/firefox.png',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Templates',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $light . 'skin-three/bx-crown.png',
                                'active_icon' => $light_active . 'skin-three/bx-crown.png',
                            ],
                            [
                                'title' => 'Cookies',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $light . 'skin-three/bx-cookie.png',
                                'active_icon' => $light_active . 'skin-three/bx-cookie.png',
                            ],
                              [
                                'title' => 'Apps',
                                'link' => '#',
                                'hide_text' => '0',
                                'show_icon' => '1',
                                'icon_width' => '18',
                                'icon_position' => 'none',
                                'icon_offset_top' => [
                                    'top'    => '0',
                                    'right'  => '0',
                                    'bottom' => '0',
                                    'left'   => '0',
                                    'unit'   => 'px',
                                ],
                                'icon' => $light . 'skin-nine/bx-cube-alt.png',
                                'active_icon' => $light_active . 'skin-nine/bx-cube-alt.png',
                            ],
                        ]
                    ],
                    [
                        'title' => 'Discover',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-nine/bxs-compass.png',
                        'active_icon' => $light_active . 'skin-nine/bxs-compass.png',
                    ],
                    [
                        'title' => 'Documents',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-nine/bx-archive.png',
                        'active_icon' => $light_active . 'skin-nine/bx-archive.png',
                    ],
                    [
                        'title' => 'Account',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-nine/bx-user-circle.png',
                        'active_icon' => $light_active . 'skin-nine/bx-user-circle.png',
                    ],
                 
                ],
            ],

            'skin_ten' => [
                'items' => [
                    [
                        'title' => 'Home',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-ten/Home 3.png',
                        'active_icon' => $light_active . 'skin-ten/Home 3.png',
                    ],
                    [
                        'title' => 'Search',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-ten/Rounded Magnifer.png',
                        'active_icon' => $light_active . 'skin-ten/Rounded Magnifer.png',
                    ],
                    [
                        'title' => 'Documents',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '1',
                        'show_icon' => '1',
                        'icon_width' => '48',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-ten/Frame .png',
                        'active_icon' => $light . 'skin-ten/Frame .png',
                    ],
                    [
                        'title' => 'History',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-ten/History 3.png',
                        'active_icon' => $light_active . 'skin-ten/History 3.png',
                    ],
                    [
                        'title' => 'Profile',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-ten/User Rounded.png',
                        'active_icon' => $light_active . 'skin-ten/User Rounded.png',
                    ]
                ],
            ],

            
            'skin_eleven' => [
                'items' => [
                    [
                        'title' => 'Home',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-eleven/Home 3.png',
                        'active_icon' => $dark_active . 'skin-eleven/Home 3.png',
                    ],
                    [
                        'title' => 'Search',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-eleven/Rounded Magnifer.png',
                        'active_icon' => $dark_active . 'skin-eleven/Rounded Magnifer.png',
                    ],
                    [
                        'title' => 'Documents',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '1',
                        'show_icon' => '1',
                        'icon_width' => '48',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-ten/Frame .png',
                        'active_icon' => $light . 'skin-ten/Frame .png',
                    ],
                    [
                        'title' => 'History',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-eleven/History 3.png',
                        'active_icon' => $dark_active . 'skin-eleven/History 3.png',
                    ],
                    [
                        'title' => 'Profile',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-eleven/User Rounded.png',
                        'active_icon' => $dark_active . 'skin-eleven/User Rounded.png',
                    ]
                ],
            ],

            
            'skin_twelve' => [
                'items' => [
                    [
                        'title' => 'Home',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-twelve/Widget 3.png',
                        'active_icon' => $light_active . 'skin-twelve/Widget 3.png',
                    ],
                    [
                        'title' => 'Search',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-twelve/Cart 5.png',
                        'active_icon' => $light_active . 'skin-twelve/Cart 5.png',
                    ],
                    [
                        'title' => 'Documents',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '48',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-twelve/Frame 14114.png',
                        'active_icon' => $light . 'skin-twelve/Frame 14114.png',
                    ],
                    [
                        'title' => 'History',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-twelve/Bell.png',
                        'active_icon' => $light_active . 'skin-twelve/Bell.png',
                    ],
                    [
                        'title' => 'Profile',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-ten/User Rounded.png',
                        'active_icon' => $light_active . 'skin-twelve/User Rounded.png',
                    ]
                ],
            ],

             
            'skin_thirteen' => [
                'items' => [
                    [
                        'title' => 'Home',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-thirteen/Widget 3.png',
                        'active_icon' => $dark_active . 'skin-thirteen/Widget 3.png',
                    ],
                    [
                        'title' => 'Search',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-thirteen/Cart 5.png',
                        'active_icon' => $dark_active . 'skin-thirteen/Cart 5.png',
                    ],
                    [
                        'title' => 'Documents',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '1',
                        'show_icon' => '1',
                        'icon_width' => '48',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-thirteen/frame .png',
                        'active_icon' => $dark . 'skin-thirteen/frame .png',
                    ],
                    [
                        'title' => 'History',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-thirteen/Bell.png',
                        'active_icon' => $dark_active . 'skin-thirteen/Bell.png',
                    ],
                    [
                        'title' => 'Profile',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-thirteen/User Rounded.png',
                        'active_icon' => $dark_active . 'skin-thirteen/User Rounded.png',
                    ]
                ],
            ],

            'skin_fourteen' => [
                'items' => [
                    [
                        'title' => 'Home',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon_position' => 'none',
                        'icon' => $light . 'skin-fourteen/Home 2.png',
                        'active_icon' => $light_active . 'skin-fourteen/Home 3.png',
                    ],
                    [
                        'title' => 'Search',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-fourteen/Rounded Magnifer.png',
                        'active_icon' => $light_active . 'skin-fourteen/Rounded Magnifer.png',
                    ],
                    [
                        'title' => 'Documents',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '1',
                        'show_icon' => '1',
                        'icon_width' => '48',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '-72',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-fourteen/Frame .svg',
                        'active_icon' => $light . 'skin-fourteen/Frame .svg',
                    ],
                    [
                        'title' => 'History',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-fourteen/History 3.png',
                        'active_icon' => $light_active . 'skin-fourteen/History 3.png',
                    ],
                    [
                        'title' => 'Profile',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_width' => '24',
                        'icon_position' => 'none',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-fourteen/User Rounded.png',
                        'active_icon' => $light_active . 'skin-fourteen/User Rounded.png',
                    ]
                ],
            ],

            'skin_fifteen' => [
                'items' => [
                    [
                        'title' => 'Home',
                        'link' => '#',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_position' => 'none',
                        'icon_width' => '24',
                        'icon_offset_top' => [
                        'top'    => '0',
                        'right'  => '0',
                        'bottom' => '0',
                        'left'   => '0',
                        'unit'   => 'px',
                    ],

                        'icon' => $dark . 'skin-fifteen/Home 3.png',
                        'active_icon' => $dark_active . 'skin-fifteen/Home 3.png',
                    ],
                    [
                        'title' => 'Search',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_position' => 'none',
                        'icon_width' => '24',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-fifteen/Rounded Magnifer.png',
                        'active_icon' => $light_active . 'skin-fourteen/Rounded Magnifer.png',
                    ],
                    [
                        'title' => 'Documents',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '1',
                        'show_icon' => '1',
                        'icon_position' => 'none',
                        'icon_width' => '48',
                        'icon_offset_top' => [
                            'top'    => '-72',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $light . 'skin-fourteen/Frame .svg',
                        'active_icon' => $light . 'skin-fourteen/Frame .svg',
                    ],
                    [
                        'title' => 'History',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_position' => 'none',
                        'icon_width' => '24',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-fifteen/History 3.png',
                        'active_icon' => $light_active . 'skin-fourteen/History 3.png',
                    ],
                    [
                        'title' => 'Profile',
                        'link' => '#',
                        'global_text_visibility' => 'show',
                        'hide_text' => '0',
                        'show_icon' => '1',
                        'icon_position' => 'none',
                        'icon_width' => '24',
                        'icon_offset_top' => [
                            'top'    => '0',
                            'right'  => '0',
                            'bottom' => '0',
                            'left'   => '0',
                            'unit'   => 'px',
                        ],
                        'icon' => $dark . 'skin-fifteen/User Rounded.png',
                        'active_icon' => $light_active . 'skin-fourteen/User Rounded.png',
                    ]
                ],
            ],

        ];
    
        return $templates[$skin_name];
    }

    public function add_menu_items_recursively($menu_id, $items, $skin, $parent_id = 0, $menu_skins = []) {
        foreach ($items as $index => $item) {
            if (empty($item['title']) || empty($item['link'])) {
                continue;
            }

            $link = $item['link'] ?? '';

            if ($link === '#') {
                $final_link = '#';
            } else {
                $final_link = home_url('/' . ltrim($link, '/'));
            }
    
            // Create the menu item
            $item_id = wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title'     => $item['title'],
                'menu-item-url'       => $final_link,
                'menu-item-status'    => 'publish',
                'menu-item-parent-id' => $parent_id,
            ));
    
            if (!is_wp_error($item_id)) {
                $icon = $item['icon'] ?? '';
                $active_icon = $item['active_icon'] ?? '';
                $icon_width = $item['icon_width'] ?? '';
                $icon_offset_top = $item['icon_offset_top'] ?? '';
                // === Meta update for icons & skin settings ===
                $menu_data = $menu_skins[$skin] ?? [];
    
                if ($index === 2 && $parent_id === 0) { // Special rule for index 2 at top level
                    $menu_data['hide-text'] = $item['hide_text'];
                    $menu_data['show-icon'] = $item['show_icon'];
                    $menu_data['icon-position'] = $item['icon_position'];
                    $menu_data['icon-image-width'] = $icon_width;
                    $menu_data['icon-image-offset-top'] = $item['icon_offset_top'] ?? [
                        'top' => '0','right' => '0','bottom' => '0','left' => '0','unit'=>'px'
                    ];
                    $menu_data['icon-mode'] = '0';
                    $menu_data['image']['url'] = $icon;
                    $menu_data['active-image']['url'] = $active_icon;
                } else {
                    $menu_data['hide-text'] = $item['hide_text'];
                    $menu_data['show-icon'] = $item['show_icon'];
                    $menu_data['icon-position'] = $item['icon_position'];
                    $menu_data['icon-image-width'] = $icon_width;
                    $menu_data['icon-image-offset-top'] = $item['icon_offset_top'] ?? [
                        'top' => '0','right' => '0','bottom' => '0','left' => '0','unit'=>'px'
                    ];
                    $menu_data['icon-mode'] = '0';
                    $menu_data['image']['url'] = $icon;
                    $menu_data['active-image']['url'] = $active_icon;
                }
    
                update_post_meta($item_id, 'wp-bnav-menu', $menu_data);
    
                // === Recurse into submenu ===
                if (!empty($item['submenu']) && is_array($item['submenu'])) {
                    $this->add_menu_items_recursively($menu_id, $item['submenu'], $skin, $item_id, $menu_skins);
                }
            }
        }
    }
    
    public function set_premade_skin() {
        check_ajax_referer( 'set_premade_skin', 'nonce' );

        // Available skins.
        $default_available_skins_data['default_skin'] = unserialize('a:133:{s:7:"enabled";s:1:"1";s:11:"select_page";s:0:"";s:18:"show_selected_page";s:0:"";s:16:"scroll_hide_menu";s:0:"";s:21:"global_padding_bottom";s:3:"300";s:10:"breakpoint";s:3:"768";s:7:"z-index";s:0:"";s:20:"wrap-background-type";s:10:"background";s:12:"main-wrap-bg";a:1:{s:16:"background-color";s:7:"#1e1e1e";}s:21:"main-wrap-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:18:"main-wrap-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:9:"wrap-blur";s:1:"0";s:16:"main-wrap-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:23:"main-wrap-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:16:"main-wrap-shadow";a:6:{s:23:"enable-main-wrap-shadow";s:1:"1";s:27:"main-wrap-shadow-horizontal";s:1:"0";s:25:"main-wrap-shadow-vertical";s:1:"0";s:21:"main-wrap-shadow-blur";s:1:"5";s:23:"main-wrap-shadow-spread";s:1:"0";s:22:"main-wrap-shadow-color";s:18:"rgba(0, 0, 0, 0.1)";}s:16:"main-wrap-offset";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:17:"main-wrap-padding";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:13:"main-nav-grid";s:1:"6";s:18:"main-nav-alignment";s:10:"flex-start";s:18:"main-nav-scrollbar";s:0:"";s:25:"main-menu-background-type";s:10:"background";s:16:"main-menu-nav-bg";a:1:{s:16:"background-color";s:19:"rgba(45,45,59,0.95)";}s:20:"main-nav-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:17:"main-nav-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:13:"main-nav-blur";s:3:"7.5";s:17:"main-menu-padding";a:5:{s:3:"top";s:2:"15";s:5:"right";s:1:"5";s:6:"bottom";s:2:"35";s:4:"left";s:1:"5";s:4:"unit";s:2:"px";}s:16:"main-menu-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:1:"0";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:16:"main-menu-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:23:"main-menu-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:21:"main-nav-item-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:2:"18";s:6:"bottom";s:0:"";s:4:"left";s:2:"18";s:4:"unit";s:2:"px";}s:20:"main-nav-item-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:20:"main-nav-item-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:27:"main-nav-active-item-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:27:"main-nav-item-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:16:"main-nav-item-bg";a:1:{s:16:"background-color";s:0:"";}s:23:"main-nav-active-item-bg";a:1:{s:16:"background-color";s:0:"";}s:29:"main-nav-item-icon-visibility";s:4:"show";s:27:"main-nav-item-icon-position";s:3:"top";s:25:"main-nav-item-icon-offset";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:2:"10";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:29:"main-nav-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"24";s:5:"color";s:7:"#818799";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:36:"main-nav-active-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"24";s:5:"color";s:7:"#d5ee9b";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:29:"main-nav-item-text-visibility";s:4:"show";s:24:"main-nav-item-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:3:"500";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"17";s:14:"letter-spacing";s:3:".48";s:5:"color";s:7:"#818797";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:31:"main-nav-active-item-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:3:"500";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"17";s:14:"letter-spacing";s:3:".48";s:5:"color";s:7:"#FFFFFF";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:20:"cart-menu-counter-bg";a:1:{s:16:"background-color";s:0:"";}s:33:"cart-menu-counter-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:21:"cart-menu-wrap-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:25:"cart-menu-counter-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:24:"cart-menu-counter-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:31:"cart-menu-counter-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:24:"wishlist-menu-counter-bg";a:1:{s:16:"background-color";s:0:"";}s:37:"wishlist-menu-counter-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:25:"wishlist-menu-wrap-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:29:"wishlist-menu-counter-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:28:"wishlist-menu-counter-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:35:"wishlist-menu-counter-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:12:"sub-nav-grid";s:1:"6";s:17:"sub-nav-alignment";s:6:"center";s:24:"sub-menu-background-type";s:10:"background";s:15:"sub-menu-nav-bg";a:1:{s:16:"background-color";s:22:"rgba(40, 40, 49, 0.95)";}s:19:"sub-nav-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:12:"sub-nav-blur";s:3:"7.5";s:20:"sub-nav-wrap-padding";a:5:{s:3:"top";s:1:"0";s:5:"right";s:2:"20";s:6:"bottom";s:1:"0";s:4:"left";s:2:"20";s:4:"unit";s:2:"px";}s:19:"sub-nav-wrap-margin";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:15:"sub-menu-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"1";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:7:"#3a3b44";}s:22:"sub-menu-border-radius";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:20:"sub-nav-item-padding";a:5:{s:3:"top";s:2:"12";s:5:"right";s:2:"13";s:6:"bottom";s:2:"12";s:4:"left";s:2:"13";s:4:"unit";s:2:"px";}s:19:"sub-nav-item-margin";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"1";s:6:"bottom";s:1:"0";s:4:"left";s:1:"1";s:4:"unit";s:2:"px";}s:19:"sub-nav-item-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"3";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:19:"rgba(255,255,255,0)";}s:26:"sub-nav-active-item-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"3";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:7:"#d5ee9b";}s:26:"sub-nav-item-border-radius";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:15:"sub-nav-item-bg";a:1:{s:16:"background-color";s:19:"rgba(255,255,255,0)";}s:22:"sub-nav-active-item-bg";a:1:{s:16:"background-color";s:19:"rgba(40,40,49,0.85)";}s:28:"sub-nav-item-icon-visibility";s:4:"show";s:26:"sub-nav-item-icon-position";s:3:"top";s:24:"sub-nav-item-icon-offset";a:5:{s:3:"top";s:1:"0";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:28:"sub-nav-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"15";s:5:"color";s:7:"#818797";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:35:"sub-nav-active-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"15";s:5:"color";s:7:"#d5ee9b";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:28:"sub-nav-item-text-visibility";s:4:"show";s:23:"sub-nav-item-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:6:"normal";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:6:"center";s:14:"text-transform";s:10:"capitalize";s:9:"font-size";s:2:"12";s:11:"line-height";s:2:"15";s:14:"letter-spacing";s:4:"-0.5";s:5:"color";s:7:"#818797";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:30:"sub-nav-active-item-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:6:"normal";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:6:"center";s:14:"text-transform";s:10:"capitalize";s:9:"font-size";s:2:"12";s:11:"line-height";s:2:"15";s:14:"letter-spacing";s:4:"-0.5";s:5:"color";s:7:"#ffffff";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:14:"child-nav-grid";s:1:"6";s:19:"child-nav-alignment";s:10:"flex-start";s:26:"child-menu-background-type";s:10:"background";s:17:"child-menu-nav-bg";a:1:{s:16:"background-color";s:7:"#fcfcfc";}s:21:"child-nav-gradiant-bg";a:3:{s:16:"background-color";s:7:"#2d2d3b";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:18:"child-nav-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:14:"child-nav-blur";s:1:"0";s:21:"main-nav-wrap-padding";a:5:{s:3:"top";s:1:"0";s:5:"right";s:2:"20";s:6:"bottom";s:1:"0";s:4:"left";s:2:"20";s:4:"unit";s:2:"px";}s:20:"main-nav-wrap-margin";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:17:"child-menu-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"1";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:7:"#3a3b44";}s:24:"child-menu-border-radius";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:22:"child-nav-item-padding";a:5:{s:3:"top";s:2:"18";s:5:"right";s:2:"13";s:6:"bottom";s:2:"18";s:4:"left";s:2:"13";s:4:"unit";s:2:"px";}s:21:"child-nav-item-margin";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:21:"child-nav-item-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"2";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:19:"rgba(249,249,249,0)";}s:28:"child-nav-active-item-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"2";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:7:"#d5ee9b";}s:28:"child-nav-item-border-radius";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:17:"child-nav-item-bg";a:1:{s:16:"background-color";s:19:"rgba(255,255,255,0)";}s:24:"child-nav-active-item-bg";a:1:{s:16:"background-color";s:19:"rgba(255,255,255,0)";}s:30:"child-nav-item-icon-visibility";s:4:"show";s:28:"child-nav-item-icon-position";s:4:"left";s:26:"child-nav-item-icon-offset";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"5";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:30:"child-nav-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"16";s:5:"color";s:7:"#818799";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:37:"child-nav-active-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"16";s:5:"color";s:7:"#d5ee9b";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:30:"child-nav-item-text-visibility";s:4:"show";s:25:"child-nav-item-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:6:"normal";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:4:"left";s:14:"text-transform";s:10:"capitalize";s:9:"font-size";s:2:"12";s:11:"line-height";s:2:"15";s:14:"letter-spacing";s:4:"-0.5";s:5:"color";s:7:"#818797";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:32:"child-nav-active-item-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:6:"normal";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:4:"left";s:14:"text-transform";s:10:"capitalize";s:9:"font-size";s:2:"12";s:11:"line-height";s:2:"15";s:14:"letter-spacing";s:4:"-0.5";s:5:"color";s:7:"#ffffff";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:22:"show-global-search-box";s:1:"0";s:26:"search-box-background-type";s:10:"background";s:13:"search-box-bg";a:1:{s:16:"background-color";s:22:"rgba(40, 40, 49, 0.85)";}s:22:"search-box-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:19:"search-box-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:18:"search-box-bg-blur";s:1:"0";s:32:"search-box-focus-background-type";s:10:"background";s:19:"search-box-focus-bg";a:1:{s:16:"background-color";s:19:"rgba(40,40,49,0.85)";}s:28:"search-box-focus-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:25:"search-focus-box-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:24:"search-box-focus-bg-blur";s:1:"0";s:21:"search-box-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:6:"normal";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:4:"left";s:14:"text-transform";s:10:"capitalize";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"17";s:14:"letter-spacing";s:4:"-0.5";s:5:"color";s:7:"#818799";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:27:"search-box-focus-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:6:"normal";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:4:"left";s:14:"text-transform";s:10:"capitalize";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"17";s:14:"letter-spacing";s:4:"-0.5";s:5:"color";s:7:"#818799";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:17:"search-box-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:23:"search-box-focus-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:24:"search-box-border-radius";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:16:"show-search-icon";s:1:"1";s:16:"icon-search-mode";s:1:"1";s:20:"icon-search-position";s:4:"left";s:11:"search-icon";s:13:"fas fa-search";s:12:"search-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:17:"search-box-shadow";a:6:{s:24:"enable-search-box-shadow";s:1:"0";s:28:"search-box-shadow-horizontal";s:1:"0";s:26:"search-box-shadow-vertical";s:1:"0";s:22:"search-box-shadow-blur";s:1:"0";s:24:"search-box-shadow-spread";s:1:"0";s:23:"search-box-shadow-color";s:21:"rgba(229,229,229,0.1)";}s:23:"search-boxfocus--shadow";a:6:{s:30:"enable-search-boxfocus--shadow";s:0:"";s:34:"search-box-focus-shadow-horizontal";s:1:"0";s:32:"search-box-focus-shadow-vertical";s:1:"0";s:28:"search-box-focus-shadow-blur";s:1:"5";s:30:"search-box-focus-shadow-spread";s:1:"0";s:29:"search-box-focus-shadow-color";s:18:"rgba(0, 0, 0, 0.1)";}s:17:"search-box-offset";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:18:"search-box-padding";a:5:{s:3:"top";s:2:"20";s:5:"right";s:2:"25";s:6:"bottom";s:2:"20";s:4:"left";s:2:"25";s:4:"unit";s:2:"px";}s:13:"premade_skins";a:1:{s:12:"premade_skin";s:12:"default_skin";}}');

        $default_available_skins_data['skin_one'] = unserialize('a:133:{s:7:"enabled";s:1:"1";s:11:"select_page";s:0:"";s:18:"show_selected_page";s:0:"";s:16:"scroll_hide_menu";s:0:"";s:21:"global_padding_bottom";s:3:"300";s:10:"breakpoint";s:3:"768";s:7:"z-index";s:0:"";s:20:"wrap-background-type";s:10:"background";s:12:"main-wrap-bg";a:1:{s:16:"background-color";s:22:"rgba(255,255,255,0.95)";}s:21:"main-wrap-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:18:"main-wrap-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:9:"wrap-blur";s:3:"7.5";s:16:"main-wrap-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:23:"main-wrap-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:16:"main-wrap-shadow";a:6:{s:23:"enable-main-wrap-shadow";s:1:"1";s:27:"main-wrap-shadow-horizontal";s:1:"0";s:25:"main-wrap-shadow-vertical";s:2:"10";s:21:"main-wrap-shadow-blur";s:2:"34";s:23:"main-wrap-shadow-spread";s:1:"0";s:22:"main-wrap-shadow-color";s:16:"rgba(0,0,0,0.12)";}s:16:"main-wrap-offset";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:17:"main-wrap-padding";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:13:"main-nav-grid";s:1:"6";s:18:"main-nav-alignment";s:10:"flex-start";s:18:"main-nav-scrollbar";s:0:"";s:25:"main-menu-background-type";s:10:"background";s:16:"main-menu-nav-bg";a:1:{s:16:"background-color";s:22:"rgba(255,255,255,0.95)";}s:20:"main-nav-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:17:"main-nav-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:13:"main-nav-blur";s:3:"7.5";s:17:"main-menu-padding";a:5:{s:3:"top";s:2:"15";s:5:"right";s:1:"5";s:6:"bottom";s:2:"35";s:4:"left";s:1:"5";s:4:"unit";s:2:"px";}s:16:"main-menu-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:1:"0";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:16:"main-menu-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:23:"main-menu-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:21:"main-nav-item-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:2:"18";s:6:"bottom";s:0:"";s:4:"left";s:2:"18";s:4:"unit";s:2:"px";}s:20:"main-nav-item-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:20:"main-nav-item-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:27:"main-nav-active-item-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:27:"main-nav-item-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:16:"main-nav-item-bg";a:1:{s:16:"background-color";s:0:"";}s:23:"main-nav-active-item-bg";a:1:{s:16:"background-color";s:0:"";}s:29:"main-nav-item-icon-visibility";s:4:"show";s:27:"main-nav-item-icon-position";s:3:"top";s:25:"main-nav-item-icon-offset";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:2:"10";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:29:"main-nav-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"24";s:5:"color";s:7:"#99a7bb";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:36:"main-nav-active-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"24";s:5:"color";s:7:"#608ee9";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:29:"main-nav-item-text-visibility";s:4:"show";s:24:"main-nav-item-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:3:"500";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"17";s:14:"letter-spacing";s:3:".48";s:5:"color";s:7:"#939fb0";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:31:"main-nav-active-item-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:3:"500";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"17";s:14:"letter-spacing";s:3:".48";s:5:"color";s:7:"#0a1c36";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:20:"cart-menu-counter-bg";a:1:{s:16:"background-color";s:0:"";}s:33:"cart-menu-counter-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:21:"cart-menu-wrap-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:25:"cart-menu-counter-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:24:"cart-menu-counter-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:31:"cart-menu-counter-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:24:"wishlist-menu-counter-bg";a:1:{s:16:"background-color";s:0:"";}s:37:"wishlist-menu-counter-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:25:"wishlist-menu-wrap-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:29:"wishlist-menu-counter-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:28:"wishlist-menu-counter-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:35:"wishlist-menu-counter-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:12:"sub-nav-grid";s:1:"6";s:17:"sub-nav-alignment";s:6:"center";s:24:"sub-menu-background-type";s:10:"background";s:15:"sub-menu-nav-bg";a:1:{s:16:"background-color";s:16:"rgba(40,40,49,0)";}s:19:"sub-nav-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:12:"sub-nav-blur";s:3:"7.5";s:20:"sub-nav-wrap-padding";a:5:{s:3:"top";s:1:"0";s:5:"right";s:2:"20";s:6:"bottom";s:1:"0";s:4:"left";s:2:"20";s:4:"unit";s:2:"px";}s:19:"sub-nav-wrap-margin";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:15:"sub-menu-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"1";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:7:"#f1f1f1";}s:22:"sub-menu-border-radius";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:20:"sub-nav-item-padding";a:5:{s:3:"top";s:2:"12";s:5:"right";s:2:"13";s:6:"bottom";s:2:"12";s:4:"left";s:2:"13";s:4:"unit";s:2:"px";}s:19:"sub-nav-item-margin";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"1";s:6:"bottom";s:1:"0";s:4:"left";s:1:"1";s:4:"unit";s:2:"px";}s:19:"sub-nav-item-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"3";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:19:"rgba(255,255,255,0)";}s:26:"sub-nav-active-item-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"3";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:7:"#608ee9";}s:26:"sub-nav-item-border-radius";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:15:"sub-nav-item-bg";a:1:{s:16:"background-color";s:19:"rgba(255,255,255,0)";}s:22:"sub-nav-active-item-bg";a:1:{s:16:"background-color";s:22:"rgba(240,245,255,0.85)";}s:28:"sub-nav-item-icon-visibility";s:4:"show";s:26:"sub-nav-item-icon-position";s:3:"top";s:24:"sub-nav-item-icon-offset";a:5:{s:3:"top";s:1:"0";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:28:"sub-nav-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"15";s:5:"color";s:7:"#939fb0";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:35:"sub-nav-active-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"15";s:5:"color";s:7:"#608ee9";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:28:"sub-nav-item-text-visibility";s:4:"show";s:23:"sub-nav-item-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:6:"normal";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:6:"center";s:14:"text-transform";s:10:"capitalize";s:9:"font-size";s:2:"12";s:11:"line-height";s:2:"15";s:14:"letter-spacing";s:4:"-0.5";s:5:"color";s:7:"#939fb0";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:30:"sub-nav-active-item-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:6:"normal";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:6:"center";s:14:"text-transform";s:10:"capitalize";s:9:"font-size";s:2:"12";s:11:"line-height";s:2:"15";s:14:"letter-spacing";s:4:"-0.5";s:5:"color";s:7:"#0a1c36";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:14:"child-nav-grid";s:1:"6";s:19:"child-nav-alignment";s:10:"flex-start";s:26:"child-menu-background-type";s:10:"background";s:17:"child-menu-nav-bg";a:1:{s:16:"background-color";s:19:"rgba(252,252,252,0)";}s:21:"child-nav-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:18:"child-nav-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:14:"child-nav-blur";s:1:"0";s:21:"main-nav-wrap-padding";a:5:{s:3:"top";s:1:"0";s:5:"right";s:2:"20";s:6:"bottom";s:1:"0";s:4:"left";s:2:"20";s:4:"unit";s:2:"px";}s:20:"main-nav-wrap-margin";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:17:"child-menu-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"1";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:7:"#f1f1f1";}s:24:"child-menu-border-radius";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:22:"child-nav-item-padding";a:5:{s:3:"top";s:2:"18";s:5:"right";s:2:"13";s:6:"bottom";s:2:"18";s:4:"left";s:2:"13";s:4:"unit";s:2:"px";}s:21:"child-nav-item-margin";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:21:"child-nav-item-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"2";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:19:"rgba(249,249,249,0)";}s:28:"child-nav-active-item-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"2";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:7:"#608ee9";}s:28:"child-nav-item-border-radius";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:17:"child-nav-item-bg";a:1:{s:16:"background-color";s:19:"rgba(255,255,255,0)";}s:24:"child-nav-active-item-bg";a:1:{s:16:"background-color";s:19:"rgba(255,255,255,0)";}s:30:"child-nav-item-icon-visibility";s:4:"show";s:28:"child-nav-item-icon-position";s:4:"left";s:26:"child-nav-item-icon-offset";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"5";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:30:"child-nav-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"16";s:5:"color";s:7:"#99a7bb";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:37:"child-nav-active-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"16";s:5:"color";s:7:"#608ee9";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:30:"child-nav-item-text-visibility";s:4:"show";s:25:"child-nav-item-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:6:"normal";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:4:"left";s:14:"text-transform";s:10:"capitalize";s:9:"font-size";s:2:"12";s:11:"line-height";s:2:"15";s:14:"letter-spacing";s:4:"-0.5";s:5:"color";s:7:"#939fb0";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:32:"child-nav-active-item-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:6:"normal";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:4:"left";s:14:"text-transform";s:10:"capitalize";s:9:"font-size";s:2:"12";s:11:"line-height";s:2:"15";s:14:"letter-spacing";s:4:"-0.5";s:5:"color";s:7:"#0a1c36";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:22:"show-global-search-box";s:1:"0";s:26:"search-box-background-type";s:10:"background";s:13:"search-box-bg";a:1:{s:16:"background-color";s:22:"rgba(245,245,245,0.85)";}s:22:"search-box-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:19:"search-box-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:18:"search-box-bg-blur";s:1:"0";s:32:"search-box-focus-background-type";s:10:"background";s:19:"search-box-focus-bg";a:1:{s:16:"background-color";s:22:"rgba(245,245,245,0.85)";}s:28:"search-box-focus-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:25:"search-focus-box-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:24:"search-box-focus-bg-blur";s:1:"0";s:21:"search-box-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:6:"normal";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:4:"left";s:14:"text-transform";s:10:"capitalize";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"17";s:14:"letter-spacing";s:4:"-0.5";s:5:"color";s:7:"#8591a1";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:27:"search-box-focus-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:6:"normal";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:4:"left";s:14:"text-transform";s:10:"capitalize";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"17";s:14:"letter-spacing";s:4:"-0.5";s:5:"color";s:7:"#8591a1";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:17:"search-box-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:23:"search-box-focus-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:24:"search-box-border-radius";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:16:"show-search-icon";s:1:"1";s:16:"icon-search-mode";s:1:"1";s:20:"icon-search-position";s:4:"left";s:11:"search-icon";s:13:"fas fa-search";s:12:"search-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:17:"search-box-shadow";a:6:{s:24:"enable-search-box-shadow";s:1:"0";s:28:"search-box-shadow-horizontal";s:1:"0";s:26:"search-box-shadow-vertical";s:1:"0";s:22:"search-box-shadow-blur";s:1:"0";s:24:"search-box-shadow-spread";s:1:"0";s:23:"search-box-shadow-color";s:21:"rgba(229,229,229,0.1)";}s:23:"search-boxfocus--shadow";a:6:{s:30:"enable-search-boxfocus--shadow";s:0:"";s:34:"search-box-focus-shadow-horizontal";s:1:"0";s:32:"search-box-focus-shadow-vertical";s:1:"0";s:28:"search-box-focus-shadow-blur";s:1:"5";s:30:"search-box-focus-shadow-spread";s:1:"0";s:29:"search-box-focus-shadow-color";s:18:"rgba(0, 0, 0, 0.1)";}s:17:"search-box-offset";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:18:"search-box-padding";a:5:{s:3:"top";s:2:"20";s:5:"right";s:2:"25";s:6:"bottom";s:2:"20";s:4:"left";s:2:"25";s:4:"unit";s:2:"px";}s:13:"premade_skins";a:1:{s:12:"premade_skin";s:8:"skin_one";}}');

        $default_available_skins_data['skin_ten'] = unserialize('a:133:{s:7:"enabled";s:1:"1";s:11:"select_page";s:0:"";s:18:"show_selected_page";s:0:"";s:16:"scroll_hide_menu";s:0:"";s:21:"global_padding_bottom";s:3:"300";s:10:"breakpoint";s:3:"768";s:7:"z-index";s:0:"";s:20:"wrap-background-type";s:10:"background";s:12:"main-wrap-bg";a:1:{s:16:"background-color";s:22:"rgba(255,255,255,0.95)";}s:21:"main-wrap-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:18:"main-wrap-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:9:"wrap-blur";s:3:"7.5";s:16:"main-wrap-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:23:"main-wrap-border-radius";a:5:{s:3:"top";s:1:"8";s:5:"right";s:1:"8";s:6:"bottom";s:1:"8";s:4:"left";s:1:"8";s:4:"unit";s:2:"px";}s:16:"main-wrap-shadow";a:6:{s:23:"enable-main-wrap-shadow";s:1:"1";s:27:"main-wrap-shadow-horizontal";s:1:"0";s:25:"main-wrap-shadow-vertical";s:2:"10";s:21:"main-wrap-shadow-blur";s:2:"34";s:23:"main-wrap-shadow-spread";s:1:"0";s:22:"main-wrap-shadow-color";s:16:"rgba(0,0,0,0.12)";}s:16:"main-wrap-offset";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:2:"30";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:17:"main-wrap-padding";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:13:"main-nav-grid";s:1:"6";s:18:"main-nav-alignment";s:10:"flex-start";s:18:"main-nav-scrollbar";s:0:"";s:25:"main-menu-background-type";s:10:"background";s:16:"main-menu-nav-bg";a:1:{s:16:"background-color";s:22:"rgba(255,255,255,0.95)";}s:20:"main-nav-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:17:"main-nav-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:13:"main-nav-blur";s:3:"7.5";s:17:"main-menu-padding";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:16:"main-menu-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:1:"0";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:16:"main-menu-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:23:"main-menu-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:21:"main-nav-item-padding";a:5:{s:3:"top";s:2:"11";s:5:"right";s:1:"0";s:6:"bottom";s:2:"11";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:20:"main-nav-item-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:20:"main-nav-item-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:27:"main-nav-active-item-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:27:"main-nav-item-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:16:"main-nav-item-bg";a:1:{s:16:"background-color";s:0:"";}s:23:"main-nav-active-item-bg";a:1:{s:16:"background-color";s:0:"";}s:29:"main-nav-item-icon-visibility";s:4:"show";s:27:"main-nav-item-icon-position";s:3:"top";s:25:"main-nav-item-icon-offset";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:29:"main-nav-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"24";s:5:"color";s:7:"#99a7bb";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:36:"main-nav-active-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"24";s:5:"color";s:7:"#608ee9";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:29:"main-nav-item-text-visibility";s:4:"show";s:24:"main-nav-item-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:3:"500";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"17";s:14:"letter-spacing";s:3:".48";s:5:"color";s:7:"#939fb0";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:31:"main-nav-active-item-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:3:"500";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"17";s:14:"letter-spacing";s:3:".48";s:5:"color";s:7:"#0a1c36";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:20:"cart-menu-counter-bg";a:1:{s:16:"background-color";s:0:"";}s:33:"cart-menu-counter-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:21:"cart-menu-wrap-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:25:"cart-menu-counter-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:24:"cart-menu-counter-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:31:"cart-menu-counter-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:24:"wishlist-menu-counter-bg";a:1:{s:16:"background-color";s:0:"";}s:37:"wishlist-menu-counter-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:25:"wishlist-menu-wrap-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:29:"wishlist-menu-counter-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:28:"wishlist-menu-counter-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:35:"wishlist-menu-counter-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:12:"sub-nav-grid";s:1:"6";s:17:"sub-nav-alignment";s:6:"center";s:24:"sub-menu-background-type";s:10:"background";s:15:"sub-menu-nav-bg";a:1:{s:16:"background-color";s:16:"rgba(40,40,49,0)";}s:19:"sub-nav-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:12:"sub-nav-blur";s:3:"7.5";s:20:"sub-nav-wrap-padding";a:5:{s:3:"top";s:1:"0";s:5:"right";s:2:"20";s:6:"bottom";s:1:"0";s:4:"left";s:2:"20";s:4:"unit";s:2:"px";}s:19:"sub-nav-wrap-margin";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:15:"sub-menu-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"1";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:7:"#f1f1f1";}s:22:"sub-menu-border-radius";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:20:"sub-nav-item-padding";a:5:{s:3:"top";s:2:"12";s:5:"right";s:2:"13";s:6:"bottom";s:2:"12";s:4:"left";s:2:"13";s:4:"unit";s:2:"px";}s:19:"sub-nav-item-margin";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"1";s:6:"bottom";s:1:"0";s:4:"left";s:1:"1";s:4:"unit";s:2:"px";}s:19:"sub-nav-item-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"3";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:19:"rgba(255,255,255,0)";}s:26:"sub-nav-active-item-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"3";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:7:"#608ee9";}s:26:"sub-nav-item-border-radius";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:15:"sub-nav-item-bg";a:1:{s:16:"background-color";s:19:"rgba(255,255,255,0)";}s:22:"sub-nav-active-item-bg";a:1:{s:16:"background-color";s:22:"rgba(240,245,255,0.85)";}s:28:"sub-nav-item-icon-visibility";s:4:"show";s:26:"sub-nav-item-icon-position";s:3:"top";s:24:"sub-nav-item-icon-offset";a:5:{s:3:"top";s:1:"0";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:28:"sub-nav-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"15";s:5:"color";s:7:"#939fb0";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:35:"sub-nav-active-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"15";s:5:"color";s:7:"#608ee9";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:28:"sub-nav-item-text-visibility";s:4:"show";s:23:"sub-nav-item-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:6:"normal";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:6:"center";s:14:"text-transform";s:10:"capitalize";s:9:"font-size";s:2:"12";s:11:"line-height";s:2:"15";s:14:"letter-spacing";s:4:"-0.5";s:5:"color";s:7:"#939fb0";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:30:"sub-nav-active-item-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:6:"normal";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:6:"center";s:14:"text-transform";s:10:"capitalize";s:9:"font-size";s:2:"12";s:11:"line-height";s:2:"15";s:14:"letter-spacing";s:4:"-0.5";s:5:"color";s:7:"#0a1c36";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:14:"child-nav-grid";s:1:"6";s:19:"child-nav-alignment";s:10:"flex-start";s:26:"child-menu-background-type";s:10:"background";s:17:"child-menu-nav-bg";a:1:{s:16:"background-color";s:19:"rgba(252,252,252,0)";}s:21:"child-nav-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:18:"child-nav-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:14:"child-nav-blur";s:1:"0";s:21:"main-nav-wrap-padding";a:5:{s:3:"top";s:1:"0";s:5:"right";s:2:"20";s:6:"bottom";s:1:"0";s:4:"left";s:2:"20";s:4:"unit";s:2:"px";}s:20:"main-nav-wrap-margin";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:17:"child-menu-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"1";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:7:"#f1f1f1";}s:24:"child-menu-border-radius";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:22:"child-nav-item-padding";a:5:{s:3:"top";s:2:"18";s:5:"right";s:2:"13";s:6:"bottom";s:2:"18";s:4:"left";s:2:"13";s:4:"unit";s:2:"px";}s:21:"child-nav-item-margin";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:21:"child-nav-item-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"2";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:19:"rgba(249,249,249,0)";}s:28:"child-nav-active-item-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"2";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:7:"#608ee9";}s:28:"child-nav-item-border-radius";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:17:"child-nav-item-bg";a:1:{s:16:"background-color";s:19:"rgba(255,255,255,0)";}s:24:"child-nav-active-item-bg";a:1:{s:16:"background-color";s:19:"rgba(255,255,255,0)";}s:30:"child-nav-item-icon-visibility";s:4:"show";s:28:"child-nav-item-icon-position";s:4:"left";s:26:"child-nav-item-icon-offset";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"5";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:30:"child-nav-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"16";s:5:"color";s:7:"#99a7bb";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:37:"child-nav-active-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"16";s:5:"color";s:7:"#608ee9";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:30:"child-nav-item-text-visibility";s:4:"show";s:25:"child-nav-item-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:6:"normal";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:4:"left";s:14:"text-transform";s:10:"capitalize";s:9:"font-size";s:2:"12";s:11:"line-height";s:2:"15";s:14:"letter-spacing";s:4:"-0.5";s:5:"color";s:7:"#939fb0";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:32:"child-nav-active-item-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:6:"normal";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:4:"left";s:14:"text-transform";s:10:"capitalize";s:9:"font-size";s:2:"12";s:11:"line-height";s:2:"15";s:14:"letter-spacing";s:4:"-0.5";s:5:"color";s:7:"#0a1c36";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:22:"show-global-search-box";s:1:"1";s:26:"search-box-background-type";s:10:"background";s:13:"search-box-bg";a:1:{s:16:"background-color";s:22:"rgba(245,245,245,0.85)";}s:22:"search-box-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:19:"search-box-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:18:"search-box-bg-blur";s:1:"0";s:32:"search-box-focus-background-type";s:10:"background";s:19:"search-box-focus-bg";a:1:{s:16:"background-color";s:22:"rgba(245,245,245,0.85)";}s:28:"search-box-focus-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:25:"search-focus-box-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:24:"search-box-focus-bg-blur";s:1:"0";s:21:"search-box-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:6:"normal";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:4:"left";s:14:"text-transform";s:10:"capitalize";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"17";s:14:"letter-spacing";s:4:"-0.5";s:5:"color";s:7:"#8591a1";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:27:"search-box-focus-typography";a:12:{s:11:"font-family";s:5:"Inter";s:11:"font-weight";s:6:"normal";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:4:"left";s:14:"text-transform";s:10:"capitalize";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"17";s:14:"letter-spacing";s:4:"-0.5";s:5:"color";s:7:"#8591a1";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:17:"search-box-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:23:"search-box-focus-border";a:6:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:24:"search-box-border-radius";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:16:"show-search-icon";s:1:"1";s:16:"icon-search-mode";s:1:"1";s:20:"icon-search-position";s:4:"left";s:11:"search-icon";s:13:"fas fa-search";s:12:"search-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:17:"search-box-shadow";a:6:{s:24:"enable-search-box-shadow";s:1:"0";s:28:"search-box-shadow-horizontal";s:1:"0";s:26:"search-box-shadow-vertical";s:1:"0";s:22:"search-box-shadow-blur";s:1:"0";s:24:"search-box-shadow-spread";s:1:"0";s:23:"search-box-shadow-color";s:21:"rgba(229,229,229,0.1)";}s:23:"search-boxfocus--shadow";a:6:{s:30:"enable-search-boxfocus--shadow";s:0:"";s:34:"search-box-focus-shadow-horizontal";s:1:"0";s:32:"search-box-focus-shadow-vertical";s:1:"0";s:28:"search-box-focus-shadow-blur";s:1:"5";s:30:"search-box-focus-shadow-spread";s:1:"0";s:29:"search-box-focus-shadow-color";s:18:"rgba(0, 0, 0, 0.1)";}s:17:"search-box-offset";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:18:"search-box-padding";a:5:{s:3:"top";s:2:"20";s:5:"right";s:2:"25";s:6:"bottom";s:2:"20";s:4:"left";s:2:"25";s:4:"unit";s:2:"px";}s:13:"premade_skins";a:1:{s:12:"premade_skin";s:8:"skin_ten";}}');

        $default_available_skins_data['skin_eleven'] = unserialize('a:42:{s:7:"enabled";s:1:"1";s:21:"global_padding_bottom";s:3:"300";s:10:"breakpoint";s:3:"768";s:7:"z-index";s:0:"";s:20:"wrap-background-type";s:10:"background";s:12:"main-wrap-bg";a:1:{s:16:"background-color";s:7:"#000000";}s:21:"main-wrap-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:18:"main-wrap-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:9:"wrap-blur";s:1:"5";s:16:"main-wrap-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:23:"main-wrap-border-radius";a:5:{s:3:"top";s:1:"8";s:5:"right";s:1:"8";s:6:"bottom";s:1:"8";s:4:"left";s:1:"8";s:4:"unit";s:2:"px";}s:16:"main-wrap-shadow";a:6:{s:23:"enable-main-wrap-shadow";s:0:"";s:27:"main-wrap-shadow-horizontal";s:1:"0";s:25:"main-wrap-shadow-vertical";s:1:"0";s:21:"main-wrap-shadow-blur";s:1:"0";s:23:"main-wrap-shadow-spread";s:1:"0";s:22:"main-wrap-shadow-color";s:0:"";}s:16:"main-wrap-offset";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:2:"30";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:17:"main-wrap-padding";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:13:"main-nav-grid";s:1:"6";s:18:"main-nav-alignment";s:10:"flex-start";s:18:"main-nav-scrollbar";s:0:"";s:25:"main-menu-background-type";s:10:"background";s:16:"main-menu-nav-bg";a:1:{s:16:"background-color";s:11:"transparent";}s:20:"main-nav-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:17:"main-nav-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:13:"main-nav-blur";s:3:"7.5";s:17:"main-menu-padding";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:16:"main-menu-margin";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:16:"main-menu-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:23:"main-menu-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:21:"main-nav-item-padding";a:5:{s:3:"top";s:2:"12";s:5:"right";s:1:"0";s:6:"bottom";s:2:"12";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:20:"main-nav-item-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:20:"main-nav-item-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:27:"main-nav-active-item-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:27:"main-nav-item-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:16:"main-nav-item-bg";a:1:{s:16:"background-color";s:0:"";}s:23:"main-nav-active-item-bg";a:1:{s:16:"background-color";s:0:"";}s:29:"main-nav-item-icon-visibility";s:4:"show";s:27:"main-nav-item-icon-position";s:3:"top";s:25:"main-nav-item-icon-offset";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:29:"main-nav-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"24";s:5:"color";s:7:"#818799";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:36:"main-nav-active-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"24";s:5:"color";s:7:"#d5ee9b";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:29:"main-nav-item-text-visibility";s:4:"show";s:24:"main-nav-item-typography";a:12:{s:11:"font-family";s:7:"Poppins";s:11:"font-weight";s:3:"500";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"20";s:14:"letter-spacing";s:1:"0";s:5:"color";s:7:"#c1c1c1";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:31:"main-nav-active-item-typography";a:12:{s:11:"font-family";s:7:"Poppins";s:11:"font-weight";s:3:"500";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"20";s:14:"letter-spacing";s:1:"0";s:5:"color";s:7:"#FFFFFF";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:13:"premade_skins";a:1:{s:12:"premade_skin";s:11:"skin_eleven";}}');

        $default_available_skins_data['skin_twelve'] = unserialize('a:42:{s:7:"enabled";s:1:"1";s:21:"global_padding_bottom";s:3:"300";s:10:"breakpoint";s:3:"768";s:7:"z-index";s:0:"";s:20:"wrap-background-type";s:10:"background";s:12:"main-wrap-bg";a:1:{s:16:"background-color";s:7:"#ffffff";}s:21:"main-wrap-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:18:"main-wrap-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:9:"wrap-blur";s:1:"5";s:16:"main-wrap-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:23:"main-wrap-border-radius";a:5:{s:3:"top";s:1:"8";s:5:"right";s:1:"8";s:6:"bottom";s:1:"8";s:4:"left";s:1:"8";s:4:"unit";s:2:"px";}s:16:"main-wrap-shadow";a:6:{s:23:"enable-main-wrap-shadow";s:0:"";s:27:"main-wrap-shadow-horizontal";s:1:"0";s:25:"main-wrap-shadow-vertical";s:1:"0";s:21:"main-wrap-shadow-blur";s:1:"0";s:23:"main-wrap-shadow-spread";s:1:"0";s:22:"main-wrap-shadow-color";s:0:"";}s:16:"main-wrap-offset";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:2:"30";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:17:"main-wrap-padding";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:13:"main-nav-grid";s:1:"6";s:18:"main-nav-alignment";s:10:"flex-start";s:18:"main-nav-scrollbar";s:0:"";s:25:"main-menu-background-type";s:10:"background";s:16:"main-menu-nav-bg";a:1:{s:16:"background-color";s:11:"transparent";}s:20:"main-nav-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:17:"main-nav-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:13:"main-nav-blur";s:3:"7.5";s:17:"main-menu-padding";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:16:"main-menu-margin";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:16:"main-menu-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:23:"main-menu-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:21:"main-nav-item-padding";a:5:{s:3:"top";s:1:"9";s:5:"right";s:1:"0";s:6:"bottom";s:1:"9";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:20:"main-nav-item-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:20:"main-nav-item-border";a:6:{s:3:"top";s:1:"3";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:11:"transparent";}s:27:"main-nav-active-item-border";a:6:{s:3:"top";s:1:"3";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:7:"#000000";}s:27:"main-nav-item-border-radius";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:16:"main-nav-item-bg";a:1:{s:16:"background-color";s:0:"";}s:23:"main-nav-active-item-bg";a:1:{s:16:"background-color";s:0:"";}s:29:"main-nav-item-icon-visibility";s:4:"show";s:27:"main-nav-item-icon-position";s:3:"top";s:25:"main-nav-item-icon-offset";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:29:"main-nav-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"24";s:5:"color";s:7:"#818799";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:36:"main-nav-active-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"24";s:5:"color";s:7:"#d5ee9b";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:29:"main-nav-item-text-visibility";s:4:"hide";s:24:"main-nav-item-typography";a:12:{s:11:"font-family";s:0:"";s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"20";s:14:"letter-spacing";s:0:"";s:5:"color";s:7:"#818797";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:31:"main-nav-active-item-typography";a:12:{s:11:"font-family";s:0:"";s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"20";s:14:"letter-spacing";s:0:"";s:5:"color";s:7:"#FFFFFF";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:13:"premade_skins";a:1:{s:12:"premade_skin";s:11:"skin_twelve";}}');

        $default_available_skins_data['skin_thirteen'] = unserialize('a:42:{s:7:"enabled";s:1:"1";s:21:"global_padding_bottom";s:3:"300";s:10:"breakpoint";s:3:"768";s:7:"z-index";s:0:"";s:20:"wrap-background-type";s:10:"background";s:12:"main-wrap-bg";a:1:{s:16:"background-color";s:7:"#000000";}s:21:"main-wrap-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:18:"main-wrap-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:9:"wrap-blur";s:1:"5";s:16:"main-wrap-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:23:"main-wrap-border-radius";a:5:{s:3:"top";s:1:"8";s:5:"right";s:1:"8";s:6:"bottom";s:1:"8";s:4:"left";s:1:"8";s:4:"unit";s:2:"px";}s:16:"main-wrap-shadow";a:6:{s:23:"enable-main-wrap-shadow";s:0:"";s:27:"main-wrap-shadow-horizontal";s:1:"0";s:25:"main-wrap-shadow-vertical";s:1:"0";s:21:"main-wrap-shadow-blur";s:1:"0";s:23:"main-wrap-shadow-spread";s:1:"0";s:22:"main-wrap-shadow-color";s:0:"";}s:16:"main-wrap-offset";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:2:"30";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:17:"main-wrap-padding";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:13:"main-nav-grid";s:1:"6";s:18:"main-nav-alignment";s:10:"flex-start";s:18:"main-nav-scrollbar";s:0:"";s:25:"main-menu-background-type";s:10:"background";s:16:"main-menu-nav-bg";a:1:{s:16:"background-color";s:11:"transparent";}s:20:"main-nav-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:17:"main-nav-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:13:"main-nav-blur";s:3:"7.5";s:17:"main-menu-padding";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:16:"main-menu-margin";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:16:"main-menu-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:23:"main-menu-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:21:"main-nav-item-padding";a:5:{s:3:"top";s:1:"9";s:5:"right";s:1:"0";s:6:"bottom";s:1:"9";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:20:"main-nav-item-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:1:"0";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:20:"main-nav-item-border";a:6:{s:3:"top";s:1:"3";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:11:"transparent";}s:27:"main-nav-active-item-border";a:6:{s:3:"top";s:1:"3";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:7:"#ffffff";}s:27:"main-nav-item-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:16:"main-nav-item-bg";a:1:{s:16:"background-color";s:0:"";}s:23:"main-nav-active-item-bg";a:1:{s:16:"background-color";s:0:"";}s:29:"main-nav-item-icon-visibility";s:4:"show";s:27:"main-nav-item-icon-position";s:3:"top";s:25:"main-nav-item-icon-offset";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:29:"main-nav-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"24";s:5:"color";s:7:"#818799";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:36:"main-nav-active-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"24";s:5:"color";s:7:"#d5ee9b";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:29:"main-nav-item-text-visibility";s:4:"hide";s:24:"main-nav-item-typography";a:12:{s:11:"font-family";s:0:"";s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"17";s:14:"letter-spacing";s:0:"";s:5:"color";s:7:"#818797";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:31:"main-nav-active-item-typography";a:12:{s:11:"font-family";s:0:"";s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"17";s:14:"letter-spacing";s:0:"";s:5:"color";s:7:"#FFFFFF";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:13:"premade_skins";a:1:{s:12:"premade_skin";s:13:"skin_thirteen";}}');

        $default_available_skins_data['skin_fourteen'] = unserialize('a:133:{s:7:"enabled";s:1:"1";s:11:"select_page";s:0:"";s:18:"show_selected_page";s:0:"";s:16:"scroll_hide_menu";s:0:"";s:21:"global_padding_bottom";s:3:"300";s:10:"breakpoint";s:3:"768";s:7:"z-index";s:0:"";s:20:"wrap-background-type";s:10:"background";s:12:"main-wrap-bg";a:1:{s:16:"background-color";s:7:"#ffffff";}s:21:"main-wrap-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:18:"main-wrap-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:9:"wrap-blur";s:1:"0";s:16:"main-wrap-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:23:"main-wrap-border-radius";a:5:{s:3:"top";s:1:"8";s:5:"right";s:1:"8";s:6:"bottom";s:1:"8";s:4:"left";s:1:"8";s:4:"unit";s:2:"px";}s:16:"main-wrap-shadow";a:6:{s:23:"enable-main-wrap-shadow";s:1:"1";s:27:"main-wrap-shadow-horizontal";s:1:"0";s:25:"main-wrap-shadow-vertical";s:1:"0";s:21:"main-wrap-shadow-blur";s:1:"5";s:23:"main-wrap-shadow-spread";s:1:"0";s:22:"main-wrap-shadow-color";s:18:"rgba(0, 0, 0, 0.1)";}s:16:"main-wrap-offset";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:2:"30";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:17:"main-wrap-padding";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:13:"main-nav-grid";s:1:"6";s:18:"main-nav-alignment";s:10:"flex-start";s:18:"main-nav-scrollbar";s:0:"";s:25:"main-menu-background-type";s:10:"background";s:16:"main-menu-nav-bg";a:1:{s:16:"background-color";s:11:"transparent";}s:20:"main-nav-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:17:"main-nav-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:13:"main-nav-blur";s:3:"7.5";s:17:"main-menu-padding";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:16:"main-menu-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:1:"0";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:16:"main-menu-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:23:"main-menu-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:21:"main-nav-item-padding";a:5:{s:3:"top";s:2:"13";s:5:"right";s:1:"0";s:6:"bottom";s:2:"13";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:20:"main-nav-item-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:20:"main-nav-item-border";a:6:{s:3:"top";s:1:"3";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:11:"transparent";}s:27:"main-nav-active-item-border";a:6:{s:3:"top";s:1:"3";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:7:"#3f7cf6";}s:27:"main-nav-item-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:16:"main-nav-item-bg";a:1:{s:16:"background-color";s:0:"";}s:23:"main-nav-active-item-bg";a:1:{s:16:"background-color";s:0:"";}s:29:"main-nav-item-icon-visibility";s:4:"show";s:27:"main-nav-item-icon-position";s:3:"top";s:25:"main-nav-item-icon-offset";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:29:"main-nav-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"24";s:5:"color";s:7:"#acacac";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:36:"main-nav-active-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"24";s:5:"color";s:7:"#d5ee9b";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:29:"main-nav-item-text-visibility";s:4:"show";s:24:"main-nav-item-typography";a:12:{s:11:"font-family";s:7:"Poppins";s:11:"font-weight";s:3:"500";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"22";s:14:"letter-spacing";s:1:"0";s:5:"color";s:7:"#acacac";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:31:"main-nav-active-item-typography";a:12:{s:11:"font-family";s:7:"Poppins";s:11:"font-weight";s:3:"500";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"22";s:14:"letter-spacing";s:1:"0";s:5:"color";s:7:"#5b5b5b";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:20:"cart-menu-counter-bg";a:1:{s:16:"background-color";s:0:"";}s:33:"cart-menu-counter-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:21:"cart-menu-wrap-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:25:"cart-menu-counter-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:24:"cart-menu-counter-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:31:"cart-menu-counter-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:24:"wishlist-menu-counter-bg";a:1:{s:16:"background-color";s:0:"";}s:37:"wishlist-menu-counter-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:25:"wishlist-menu-wrap-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:29:"wishlist-menu-counter-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:28:"wishlist-menu-counter-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:35:"wishlist-menu-counter-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:12:"sub-nav-grid";s:1:"6";s:17:"sub-nav-alignment";s:10:"flex-start";s:24:"sub-menu-background-type";s:10:"background";s:15:"sub-menu-nav-bg";a:1:{s:16:"background-color";s:0:"";}s:19:"sub-nav-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:12:"sub-nav-blur";s:1:"0";s:20:"sub-nav-wrap-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:19:"sub-nav-wrap-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:15:"sub-menu-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:22:"sub-menu-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:20:"sub-nav-item-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:19:"sub-nav-item-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:19:"sub-nav-item-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:26:"sub-nav-active-item-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:26:"sub-nav-item-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:15:"sub-nav-item-bg";a:1:{s:16:"background-color";s:0:"";}s:22:"sub-nav-active-item-bg";a:1:{s:16:"background-color";s:0:"";}s:28:"sub-nav-item-icon-visibility";s:4:"show";s:26:"sub-nav-item-icon-position";s:3:"top";s:24:"sub-nav-item-icon-offset";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:28:"sub-nav-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:35:"sub-nav-active-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:28:"sub-nav-item-text-visibility";s:4:"show";s:23:"sub-nav-item-typography";a:12:{s:11:"font-family";s:0:"";s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:0:"";s:11:"line-height";s:0:"";s:14:"letter-spacing";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:30:"sub-nav-active-item-typography";a:12:{s:11:"font-family";s:0:"";s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:0:"";s:11:"line-height";s:0:"";s:14:"letter-spacing";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:14:"child-nav-grid";s:1:"6";s:19:"child-nav-alignment";s:10:"flex-start";s:26:"child-menu-background-type";s:10:"background";s:17:"child-menu-nav-bg";a:1:{s:16:"background-color";s:0:"";}s:21:"child-nav-gradiant-bg";a:3:{s:16:"background-color";s:7:"#2d2d3b";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:18:"child-nav-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:14:"child-nav-blur";s:1:"0";s:21:"main-nav-wrap-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:20:"main-nav-wrap-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:17:"child-menu-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:24:"child-menu-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:22:"child-nav-item-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:21:"child-nav-item-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:21:"child-nav-item-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:28:"child-nav-active-item-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:28:"child-nav-item-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:17:"child-nav-item-bg";a:1:{s:16:"background-color";s:0:"";}s:24:"child-nav-active-item-bg";a:1:{s:16:"background-color";s:0:"";}s:30:"child-nav-item-icon-visibility";s:4:"show";s:28:"child-nav-item-icon-position";s:3:"top";s:26:"child-nav-item-icon-offset";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:30:"child-nav-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:37:"child-nav-active-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:30:"child-nav-item-text-visibility";s:4:"show";s:25:"child-nav-item-typography";a:12:{s:11:"font-family";s:0:"";s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:0:"";s:11:"line-height";s:0:"";s:14:"letter-spacing";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:32:"child-nav-active-item-typography";a:12:{s:11:"font-family";s:0:"";s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:0:"";s:11:"line-height";s:0:"";s:14:"letter-spacing";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:22:"show-global-search-box";s:1:"0";s:26:"search-box-background-type";s:10:"background";s:13:"search-box-bg";a:1:{s:16:"background-color";s:0:"";}s:22:"search-box-gradiant-bg";a:3:{s:16:"background-color";s:7:"#2d2d3b";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:19:"search-box-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:18:"search-box-bg-blur";s:1:"0";s:32:"search-box-focus-background-type";s:10:"background";s:19:"search-box-focus-bg";a:1:{s:16:"background-color";s:0:"";}s:28:"search-box-focus-gradiant-bg";a:3:{s:16:"background-color";s:7:"#2d2d3b";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:25:"search-focus-box-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:24:"search-box-focus-bg-blur";s:1:"0";s:21:"search-box-typography";a:12:{s:11:"font-family";s:0:"";s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:0:"";s:11:"line-height";s:0:"";s:14:"letter-spacing";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:27:"search-box-focus-typography";a:12:{s:11:"font-family";s:0:"";s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:0:"";s:11:"line-height";s:0:"";s:14:"letter-spacing";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:17:"search-box-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:23:"search-box-focus-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:24:"search-box-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:16:"show-search-icon";s:1:"1";s:16:"icon-search-mode";s:1:"1";s:20:"icon-search-position";s:4:"left";s:11:"search-icon";s:0:"";s:12:"search-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:17:"search-box-shadow";a:6:{s:24:"enable-search-box-shadow";s:0:"";s:28:"search-box-shadow-horizontal";s:1:"0";s:26:"search-box-shadow-vertical";s:1:"0";s:22:"search-box-shadow-blur";s:1:"5";s:24:"search-box-shadow-spread";s:1:"0";s:23:"search-box-shadow-color";s:18:"rgba(0, 0, 0, 0.1)";}s:23:"search-boxfocus--shadow";a:6:{s:30:"enable-search-boxfocus--shadow";s:0:"";s:34:"search-box-focus-shadow-horizontal";s:1:"0";s:32:"search-box-focus-shadow-vertical";s:1:"0";s:28:"search-box-focus-shadow-blur";s:1:"5";s:30:"search-box-focus-shadow-spread";s:1:"0";s:29:"search-box-focus-shadow-color";s:18:"rgba(0, 0, 0, 0.1)";}s:17:"search-box-offset";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:18:"search-box-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:13:"premade_skins";a:1:{s:12:"premade_skin";s:13:"skin_fourteen";}}');

        $default_available_skins_data['skin_fifteen'] = unserialize('a:133:{s:7:"enabled";s:1:"1";s:11:"select_page";s:0:"";s:18:"show_selected_page";s:0:"";s:16:"scroll_hide_menu";s:0:"";s:21:"global_padding_bottom";s:3:"300";s:10:"breakpoint";s:3:"768";s:7:"z-index";s:0:"";s:20:"wrap-background-type";s:10:"background";s:12:"main-wrap-bg";a:1:{s:16:"background-color";s:7:"#000000";}s:21:"main-wrap-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:18:"main-wrap-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:9:"wrap-blur";s:1:"0";s:16:"main-wrap-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:23:"main-wrap-border-radius";a:5:{s:3:"top";s:1:"8";s:5:"right";s:1:"8";s:6:"bottom";s:1:"8";s:4:"left";s:1:"8";s:4:"unit";s:2:"px";}s:16:"main-wrap-shadow";a:6:{s:23:"enable-main-wrap-shadow";s:1:"1";s:27:"main-wrap-shadow-horizontal";s:1:"0";s:25:"main-wrap-shadow-vertical";s:1:"0";s:21:"main-wrap-shadow-blur";s:1:"5";s:23:"main-wrap-shadow-spread";s:1:"0";s:22:"main-wrap-shadow-color";s:18:"rgba(0, 0, 0, 0.1)";}s:16:"main-wrap-offset";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:2:"30";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:17:"main-wrap-padding";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:13:"main-nav-grid";s:1:"6";s:18:"main-nav-alignment";s:10:"flex-start";s:18:"main-nav-scrollbar";s:0:"";s:25:"main-menu-background-type";s:10:"background";s:16:"main-menu-nav-bg";a:1:{s:16:"background-color";s:11:"transparent";}s:20:"main-nav-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:17:"main-nav-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:13:"main-nav-blur";s:3:"7.5";s:17:"main-menu-padding";a:5:{s:3:"top";s:1:"0";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:16:"main-menu-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:1:"0";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:16:"main-menu-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:23:"main-menu-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:21:"main-nav-item-padding";a:5:{s:3:"top";s:2:"13";s:5:"right";s:1:"0";s:6:"bottom";s:2:"13";s:4:"left";s:1:"0";s:4:"unit";s:2:"px";}s:20:"main-nav-item-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:20:"main-nav-item-border";a:6:{s:3:"top";s:1:"3";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:11:"transparent";}s:27:"main-nav-active-item-border";a:6:{s:3:"top";s:1:"3";s:5:"right";s:1:"0";s:6:"bottom";s:1:"0";s:4:"left";s:1:"0";s:5:"style";s:5:"solid";s:5:"color";s:7:"#3f7cf6";}s:27:"main-nav-item-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:16:"main-nav-item-bg";a:1:{s:16:"background-color";s:0:"";}s:23:"main-nav-active-item-bg";a:1:{s:16:"background-color";s:0:"";}s:29:"main-nav-item-icon-visibility";s:4:"show";s:27:"main-nav-item-icon-position";s:3:"top";s:25:"main-nav-item-icon-offset";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:29:"main-nav-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"24";s:5:"color";s:7:"#acacac";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:36:"main-nav-active-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:2:"24";s:5:"color";s:7:"#d5ee9b";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:29:"main-nav-item-text-visibility";s:4:"show";s:24:"main-nav-item-typography";a:12:{s:11:"font-family";s:7:"Poppins";s:11:"font-weight";s:3:"500";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"22";s:14:"letter-spacing";s:1:"0";s:5:"color";s:7:"#acacac";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:31:"main-nav-active-item-typography";a:12:{s:11:"font-family";s:7:"Poppins";s:11:"font-weight";s:3:"500";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:2:"14";s:11:"line-height";s:2:"22";s:14:"letter-spacing";s:1:"0";s:5:"color";s:7:"#5b5b5b";s:4:"type";s:6:"google";s:4:"unit";s:2:"px";}s:20:"cart-menu-counter-bg";a:1:{s:16:"background-color";s:0:"";}s:33:"cart-menu-counter-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:21:"cart-menu-wrap-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:25:"cart-menu-counter-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:24:"cart-menu-counter-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:31:"cart-menu-counter-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:24:"wishlist-menu-counter-bg";a:1:{s:16:"background-color";s:0:"";}s:37:"wishlist-menu-counter-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:25:"wishlist-menu-wrap-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:29:"wishlist-menu-counter-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:28:"wishlist-menu-counter-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:35:"wishlist-menu-counter-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:12:"sub-nav-grid";s:1:"6";s:17:"sub-nav-alignment";s:10:"flex-start";s:24:"sub-menu-background-type";s:10:"background";s:15:"sub-menu-nav-bg";a:1:{s:16:"background-color";s:0:"";}s:19:"sub-nav-gradiant-bg";a:3:{s:16:"background-color";s:0:"";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:12:"sub-nav-blur";s:1:"0";s:20:"sub-nav-wrap-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:19:"sub-nav-wrap-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:15:"sub-menu-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:22:"sub-menu-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:20:"sub-nav-item-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:19:"sub-nav-item-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:19:"sub-nav-item-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:26:"sub-nav-active-item-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:26:"sub-nav-item-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:15:"sub-nav-item-bg";a:1:{s:16:"background-color";s:0:"";}s:22:"sub-nav-active-item-bg";a:1:{s:16:"background-color";s:0:"";}s:28:"sub-nav-item-icon-visibility";s:4:"show";s:26:"sub-nav-item-icon-position";s:3:"top";s:24:"sub-nav-item-icon-offset";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:28:"sub-nav-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:35:"sub-nav-active-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:28:"sub-nav-item-text-visibility";s:4:"show";s:23:"sub-nav-item-typography";a:12:{s:11:"font-family";s:0:"";s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:0:"";s:11:"line-height";s:0:"";s:14:"letter-spacing";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:30:"sub-nav-active-item-typography";a:12:{s:11:"font-family";s:0:"";s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:0:"";s:11:"line-height";s:0:"";s:14:"letter-spacing";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:14:"child-nav-grid";s:1:"6";s:19:"child-nav-alignment";s:10:"flex-start";s:26:"child-menu-background-type";s:10:"background";s:17:"child-menu-nav-bg";a:1:{s:16:"background-color";s:0:"";}s:21:"child-nav-gradiant-bg";a:3:{s:16:"background-color";s:7:"#2d2d3b";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:18:"child-nav-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:14:"child-nav-blur";s:1:"0";s:21:"main-nav-wrap-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:20:"main-nav-wrap-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:17:"child-menu-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:24:"child-menu-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:22:"child-nav-item-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:21:"child-nav-item-margin";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:21:"child-nav-item-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:28:"child-nav-active-item-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:28:"child-nav-item-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:17:"child-nav-item-bg";a:1:{s:16:"background-color";s:0:"";}s:24:"child-nav-active-item-bg";a:1:{s:16:"background-color";s:0:"";}s:30:"child-nav-item-icon-visibility";s:4:"show";s:28:"child-nav-item-icon-position";s:3:"top";s:26:"child-nav-item-icon-offset";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:30:"child-nav-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:37:"child-nav-active-item-icon-typography";a:7:{s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:9:"font-size";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:30:"child-nav-item-text-visibility";s:4:"show";s:25:"child-nav-item-typography";a:12:{s:11:"font-family";s:0:"";s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:0:"";s:11:"line-height";s:0:"";s:14:"letter-spacing";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:32:"child-nav-active-item-typography";a:12:{s:11:"font-family";s:0:"";s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:0:"";s:11:"line-height";s:0:"";s:14:"letter-spacing";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:22:"show-global-search-box";s:1:"0";s:26:"search-box-background-type";s:10:"background";s:13:"search-box-bg";a:1:{s:16:"background-color";s:0:"";}s:22:"search-box-gradiant-bg";a:3:{s:16:"background-color";s:7:"#2d2d3b";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:19:"search-box-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:18:"search-box-bg-blur";s:1:"0";s:32:"search-box-focus-background-type";s:10:"background";s:19:"search-box-focus-bg";a:1:{s:16:"background-color";s:0:"";}s:28:"search-box-focus-gradiant-bg";a:3:{s:16:"background-color";s:7:"#2d2d3b";s:25:"background-gradient-color";s:0:"";s:29:"background-gradient-direction";s:0:"";}s:25:"search-focus-box-bg-image";a:8:{s:16:"background-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:19:"background-position";s:0:"";s:17:"background-repeat";s:0:"";s:21:"background-attachment";s:0:"";s:15:"background-size";s:0:"";s:17:"background-origin";s:0:"";s:15:"background-clip";s:0:"";s:21:"background-blend-mode";s:0:"";}s:24:"search-box-focus-bg-blur";s:1:"0";s:21:"search-box-typography";a:12:{s:11:"font-family";s:0:"";s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:0:"";s:11:"line-height";s:0:"";s:14:"letter-spacing";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:27:"search-box-focus-typography";a:12:{s:11:"font-family";s:0:"";s:11:"font-weight";s:0:"";s:10:"font-style";s:0:"";s:6:"subset";s:0:"";s:10:"text-align";s:0:"";s:14:"text-transform";s:0:"";s:9:"font-size";s:0:"";s:11:"line-height";s:0:"";s:14:"letter-spacing";s:0:"";s:5:"color";s:0:"";s:4:"type";s:0:"";s:4:"unit";s:2:"px";}s:17:"search-box-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:23:"search-box-focus-border";a:6:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:5:"style";s:5:"solid";s:5:"color";s:0:"";}s:24:"search-box-border-radius";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:16:"show-search-icon";s:1:"1";s:16:"icon-search-mode";s:1:"1";s:20:"icon-search-position";s:4:"left";s:11:"search-icon";s:0:"";s:12:"search-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:17:"search-box-shadow";a:6:{s:24:"enable-search-box-shadow";s:0:"";s:28:"search-box-shadow-horizontal";s:1:"0";s:26:"search-box-shadow-vertical";s:1:"0";s:22:"search-box-shadow-blur";s:1:"5";s:24:"search-box-shadow-spread";s:1:"0";s:23:"search-box-shadow-color";s:18:"rgba(0, 0, 0, 0.1)";}s:23:"search-boxfocus--shadow";a:6:{s:30:"enable-search-boxfocus--shadow";s:0:"";s:34:"search-box-focus-shadow-horizontal";s:1:"0";s:32:"search-box-focus-shadow-vertical";s:1:"0";s:28:"search-box-focus-shadow-blur";s:1:"5";s:30:"search-box-focus-shadow-spread";s:1:"0";s:29:"search-box-focus-shadow-color";s:18:"rgba(0, 0, 0, 0.1)";}s:17:"search-box-offset";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:18:"search-box-padding";a:5:{s:3:"top";s:0:"";s:5:"right";s:0:"";s:6:"bottom";s:0:"";s:4:"left";s:0:"";s:4:"unit";s:2:"px";}s:13:"premade_skins";a:1:{s:12:"premade_skin";s:12:"skin_fifteen";}}');

        $default_available_skins_menu_data['default_skin'] = unserialize('a:10:{s:9:"hide-text";s:0:"";s:9:"show-icon";s:1:"1";s:9:"icon-mode";s:1:"1";s:13:"icon-position";s:4:"none";s:16:"icon-image-width";s:2:"24";s:21:"icon-image-offset-top";s:0:"";s:4:"icon";s:10:"fa fa-home";s:5:"image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:11:"active-icon";s:10:"fa fa-home";s:12:"active-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}}');
       
        $default_available_skins_menu_data['skin_one'] = unserialize('a:10:{s:9:"hide-text";s:0:"";s:9:"show-icon";s:1:"1";s:9:"icon-mode";s:1:"1";s:13:"icon-position";s:4:"none";s:16:"icon-image-width";s:2:"24";s:21:"icon-image-offset-top";s:0:"";s:4:"icon";s:10:"fa fa-home";s:5:"image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:11:"active-icon";s:10:"fa fa-home";s:12:"active-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}}');

        $default_available_skins_menu_data['skin_ten'] = unserialize('a:16:{s:9:"hide-text";s:1:"1";s:9:"show-icon";s:1:"1";s:9:"icon-mode";s:1:"1";s:13:"icon-position";s:4:"none";s:16:"icon-image-width";s:2:"24";s:21:"icon-image-offset-top";s:0:"";s:4:"icon";s:10:"fa fa-home";s:5:"image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:11:"active-icon";s:10:"fa fa-home";s:12:"active-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:14:"custom-content";s:0:"";s:16:"woocommerce-cart";s:0:"";s:13:"wishlist-cart";s:0:"";s:14:"search-trigger";s:0:"";s:12:"display-mode";s:9:"all-users";s:5:"roles";s:0:"";}');

        $default_available_skins_menu_data['skin_eleven'] = unserialize('a:16:{s:9:"hide-text";s:1:"1";s:9:"show-icon";s:1:"1";s:9:"icon-mode";s:1:"1";s:13:"icon-position";s:4:"none";s:16:"icon-image-width";s:2:"24";s:21:"icon-image-offset-top";s:0:"";s:4:"icon";s:10:"fa fa-home";s:5:"image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:11:"active-icon";s:10:"fa fa-home";s:12:"active-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:14:"custom-content";s:0:"";s:16:"woocommerce-cart";s:0:"";s:13:"wishlist-cart";s:0:"";s:14:"search-trigger";s:0:"";s:12:"display-mode";s:9:"all-users";s:5:"roles";s:0:"";}');

        $default_available_skins_menu_data['skin_twelve'] = unserialize('a:16:{s:9:"hide-text";s:1:"1";s:9:"show-icon";s:1:"1";s:9:"icon-mode";s:1:"1";s:13:"icon-position";s:4:"none";s:16:"icon-image-width";s:2:"24";s:21:"icon-image-offset-top";s:0:"";s:4:"icon";s:10:"fa fa-home";s:5:"image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:11:"active-icon";s:10:"fa fa-home";s:12:"active-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:14:"custom-content";s:0:"";s:16:"woocommerce-cart";s:0:"";s:13:"wishlist-cart";s:0:"";s:14:"search-trigger";s:0:"";s:12:"display-mode";s:9:"all-users";s:5:"roles";s:0:"";}');

        $default_available_skins_menu_data['skin_thirteen'] = unserialize('a:16:{s:9:"hide-text";s:1:"1";s:9:"show-icon";s:1:"1";s:9:"icon-mode";s:1:"1";s:13:"icon-position";s:4:"none";s:16:"icon-image-width";s:2:"24";s:21:"icon-image-offset-top";s:0:"";s:4:"icon";s:10:"fa fa-home";s:5:"image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:11:"active-icon";s:10:"fa fa-home";s:12:"active-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:14:"custom-content";s:0:"";s:16:"woocommerce-cart";s:0:"";s:13:"wishlist-cart";s:0:"";s:14:"search-trigger";s:0:"";s:12:"display-mode";s:9:"all-users";s:5:"roles";s:0:"";}');

        $default_available_skins_menu_data['skin_fourteen'] = unserialize('a:16:{s:9:"hide-text";s:1:"1";s:9:"show-icon";s:1:"1";s:9:"icon-mode";s:1:"1";s:13:"icon-position";s:4:"none";s:16:"icon-image-width";s:2:"24";s:21:"icon-image-offset-top";s:0:"";s:4:"icon";s:10:"fa fa-home";s:5:"image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:11:"active-icon";s:10:"fa fa-home";s:12:"active-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:14:"custom-content";s:0:"";s:16:"woocommerce-cart";s:0:"";s:13:"wishlist-cart";s:0:"";s:14:"search-trigger";s:0:"";s:12:"display-mode";s:9:"all-users";s:5:"roles";s:0:"";}');

        $default_available_skins_menu_data['skin_fifteen'] = unserialize('a:16:{s:9:"hide-text";s:1:"1";s:9:"show-icon";s:1:"1";s:9:"icon-mode";s:1:"1";s:13:"icon-position";s:4:"none";s:16:"icon-image-width";s:2:"24";s:21:"icon-image-offset-top";s:0:"";s:4:"icon";s:10:"fa fa-home";s:5:"image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:11:"active-icon";s:10:"fa fa-home";s:12:"active-image";a:8:{s:3:"url";s:0:"";s:2:"id";s:0:"";s:5:"width";s:0:"";s:6:"height";s:0:"";s:9:"thumbnail";s:0:"";s:3:"alt";s:0:"";s:5:"title";s:0:"";s:11:"description";s:0:"";}s:14:"custom-content";s:0:"";s:16:"woocommerce-cart";s:0:"";s:13:"wishlist-cart";s:0:"";s:14:"search-trigger";s:0:"";s:12:"display-mode";s:9:"all-users";s:5:"roles";s:0:"";}');

        $skins = apply_filters( 'wp_bnav_get_skins_data', $default_available_skins_data );
        $menu_skins = apply_filters( 'wp_bnav_get_skins_menu_data', $default_available_skins_menu_data );

        if ( ! $skins ) {
            $skins = $default_available_skins_data;
        }

        if ( ! $menu_skins ) {
            $menu_skins = $default_available_skins_menu_data;
        }

        // Selected skin.
        $skin = sanitize_text_field( $_POST['skin'] );

        $demo_skin = $this->set_demo_skin( $skin );

        if ( array_key_exists( $skin, $skins ) || array_key_exists( $skin, $menu_skins ) ) {
            // Set skin data
            update_option( 'wp-bnav', $skins[ $skin ] );
            $settings = get_option( 'wp-bnav' );

            $skin_formatted = ucwords( str_replace( '_', ' ', $skin ) );
            $menu_name      = $skin_formatted . ' Menu';

            //  Always fresh menu create for full import
            $menu_obj    = wp_get_nav_menu_object( $menu_name );
            $menu_exists = is_object( $menu_obj );

            if ( $menu_exists ) {
                wp_delete_nav_menu( $menu_name );
            }

            $menu_id = wp_create_nav_menu( $menu_name );

            if ( $menu_id && ! empty( $demo_skin['items'] ) ) {
                $this->add_menu_items_recursively( $menu_id, $demo_skin['items'], $skin, 0, $menu_skins );
            }

            // Assign the menu (new or existing) to location
            if ( $menu_id ) {
                $locations                      = get_theme_mod( 'nav_menu_locations' );
                $locations['bnav_bottom_nav']   = $menu_id;
                set_theme_mod( 'nav_menu_locations', $locations );

                wp_send_json_success( [
                    'status'  => true,
                    'message' => 'You have successfully imported a skin (full template).'
                ] );
            } else {
                wp_send_json_success( [
                    'status'  => false,
                    'message' => 'Failed to find or assign the menu.'
                ] );
            }
        }

    }
}
