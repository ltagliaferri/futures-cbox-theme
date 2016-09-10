<?php
/**
 * Infinity Theme: theme functions
 *
 * @author Marshall Sorenson <marshall@presscrew.com>
 * @link http://infinity.presscrew.com/
 * @copyright Copyright (C) 2010-2011 Marshall Sorenson
 * @license http://www.gnu.org/licenses/gpl.html GPLv2 or later
 * @package Infinity
 * @since 1.0
 */

/**
 * To Infinity, and beyond! (sorry, had to do it)
 */

//
// At this point, Infinity is fully loaded and initialized,
// and your includes/setup.php has been loaded if applicable.
//
// So... get to work! (Unless you don't roll on Shabbos)
//
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'responsive-style', get_template_directory_uri() . '/assets/css/responsive.css' );
    wp_enqueue_style( 'cbox-style', get_template_directory_uri() . '/assets/css/cbox.css' );
    wp_enqueue_style( 'wordpress-style', get_template_directory_uri() . '/assets/css/wordpress.css' );
    wp_enqueue_style( 'design-style', get_template_directory_uri() . '/assets/css/design.css' );
    wp_enqueue_style( 'layout-style', get_template_directory_uri() . '/assets/css/layout.css' );
    wp_enqueue_style( 'typography-style', get_template_directory_uri() . '/assets/css/typography.css' );
    wp_enqueue_style( 'icons-style', get_template_directory_uri() . '/assets/css/icons.css' );
    wp_enqueue_style( 'grid-style', get_template_directory_uri() . '/assets/css/grid.css' );
    wp_enqueue_style( 'global-style', get_template_directory_uri() . '/assets/css/global.css' );
    wp_enqueue_style( 'flexslider-style', get_template_directory_uri() . '/assets/css/flexslider/flexslider.css' );
    wp_enqueue_style( 'jquery-bxslider-style', get_template_directory_uri() . '/assets/css/bxslider/jquery.bxslider.css' );
    wp_enqueue_style( 'buttons-style', get_template_directory_uri() . '/assets/css/buttons.css' );
    wp_enqueue_style( 'buddypress-style', get_template_directory_uri() . '/assets/css/buddypress.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array('parent-style')  );
    wp_enqueue_script( 'script-superfish', get_template_directory_uri() . '/assets/js/superfish.js', array(), false, true);
    wp_enqueue_script( 'script-jquery-flexslider-min', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array(), false, true);
    wp_enqueue_script( 'script-jquery-bxslider-min', get_template_directory_uri() . '/assets/js/jquery.bxslider.min.js', array(), false, true);
    wp_enqueue_script( 'script-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), false, true);
    wp_enqueue_script( 'script-base', get_template_directory_uri() . '/assets/js/base.js', array(), false, true);
}
?>
