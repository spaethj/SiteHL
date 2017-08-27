<?php
/**
 * Plugin Name: SiteHL
 * Description: Advanced functionalities for "Héritage Lupovicen" website.
 * Author: Jeremy SPAETH
 * Author URI: https://github.com/spaethj/SiteHL.git
 * Version: 1.0
 * License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/* Register all custom sidebars */
include_once 'sidebars/sidebar-alternative.php';
include_once 'sidebars/sidebar-header.php';

add_action( 'widgets_init', 'alt_sidebar');
add_action( 'widgets_init', 'header_sidebar');

// Register all custom widgets
include_once 'widgets/widget-call-to-action.php';
add_action( 'widgets_init', function(){
	register_widget( 'Call_To_Action' );
});