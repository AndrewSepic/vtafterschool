<?php
// Register menus
register_nav_menus(
	array(
		'main-nav'		=> __( 'The Main Menu', 'jointswp' ),		// Main nav in header
		'offcanvas-nav'	=> __( 'The Off-Canvas Menu', 'jointswp' ),	// Off-Canvas nav
		'footer-links'	=> __( 'Footer Links', 'jointswp' ), // Secondary nav in footer
		'utility-links' => __( 'Header Utility Links'),	// located to the right side of logo
		'conference-nav' => __( 'Navigation for Conference page'), // Conference Nav
		'vyp-nav' => __( 'Navigation for Vermont Youth Project pages')
	)
);

// The Top Menu
function joints_top_nav() {
	wp_nav_menu(array(
		'container'			=> false,						// Remove nav container
		'menu_id'			=> 'main-nav',					// Adding custom nav id
		'menu_class'		=> 'medium-horizontal menu',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
		'theme_location'	=> 'main-nav',					// Where it's located in the theme
		'depth'				=> 5,							// Limit the depth of the nav
		'fallback_cb'		=> false,						// Fallback function (see below)
		'walker'			=> new Topbar_Menu_Walker()
	));
}

// Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker
class Topbar_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = Array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"menu\">\n";
	}
}

// The Off Canvas Menu
function joints_off_canvas_nav() {
	wp_nav_menu(array(
		'container'			=> false,							// Remove nav container
		'menu_id'			=> 'offcanvas-nav',					// Adding custom nav id
		'menu_class'		=> 'vertical menu accordion-menu',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',
		'theme_location'	=> 'offcanvas-nav',					// Where it's located in the theme
		'depth'				=> 5,								// Limit the depth of the nav
		'fallback_cb'		=> false,							// Fallback function (see below)
		'walker'			=> new Off_Canvas_Menu_Walker()
	));
}

class Off_Canvas_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = Array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"vertical menu\">\n";
	}
}

// The Footer Menu
function joints_footer_links() {
	wp_nav_menu(array(
		'container'			=> 'false',				// Remove nav container
		'menu_id'			=> 'footer-links',		// Adding custom nav id
		'menu_class'		=> 'menu',				// Adding custom nav class
		'theme_location'	=> 'footer-links',		// Where it's located in the theme
		'depth'				=> 0,					// Limit the depth of the nav
		'fallback_cb'		=> ''					// Fallback function
	));
} /* End Footer Menu */

// The Utility Menu
function vtas_utility_links() {
	wp_nav_menu(array(
		'container'			=> 'false',				// Remove nav container
		'menu_id'			=> 'utility-links',		// Adding custom nav id
		'menu_class'		=> 'menu',				// Adding custom nav class
		'theme_location'	=> 'utility-links',		// Where it's located in the theme
		'depth'				=> 0,					// Limit the depth of the nav
		'fallback_cb'		=> ''					// Fallback function
	));
} /* End Utility Menu */

// The Conference Nav location
function vtas_conference_nav() {
	wp_nav_menu(array(
		//'container'			=> 'false',				// Remove nav container
		'menu_id'			=> 'conference-nav',		// Adding custom nav id
		'menu_class'		=> 'menu',				// Adding custom nav class
		'theme_location'	=> 'conference-nav',		// Where it's located in the theme
		'depth'				=> 0,					// Limit the depth of the nav
		'fallback_cb'		=> ''					// Fallback function
	));
} /* End conference nav Menu */

// The Nav for the VYP
function vyp_nav() {
	wp_nav_menu(array(
		//'container'			=> 'false',				// Remove nav container
		'menu_id'			=> 'vyp-nav',		// Adding custom nav id
		'menu_class'		=> 'menu',				// Adding custom nav class
		'theme_location'	=> 'vyp-nav',		// Where it's located in the theme
		'depth'				=> 0,					// Limit the depth of the nav
		'fallback_cb'		=> ''					// Fallback function
	));
} /* End vyp nav Menu */

/* Add Search Form to Utility Menu */
add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);
function add_search_form($items, $args) {
	if( $args->theme_location == 'utility-links' )
	        $items .= '<li class="search"><form role="search" method="get" id="searchform" action="'.home_url( '/' ).'"><input type="search" placeholder="Search..." name="s" id="s" /><i class="fi-magnifying-glass"></i><input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" /></form></li>';
	        return $items;
}

// Header Fallback Menu
function joints_main_nav_fallback() {
	wp_page_menu( array(
		'show_home'		=> true,
		'menu_class'	=> '',		// Adding custom nav class
		'include'		=> '',
		'exclude'		=> '',
		'echo'			=> true,
		'link_before'	=> '',		// Before each link
		'link_after'	=> ''		// After each link
	));
}

// Footer Fallback Menu
function joints_footer_links_fallback() {
	/* You can put a default here if you like */
}

// Add Foundation active class to menu
function required_active_nav_class( $classes, $item ) {
	if ( $item->current == 1 || $item->current_item_ancestor == true ) {
		$classes[] = 'active';
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'required_active_nav_class', 10, 2 );
