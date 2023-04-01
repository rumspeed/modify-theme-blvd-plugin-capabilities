<?php


//	TODO - add "Editor Capabilities" section to Theme Options "Configuration" tab
//	TODO - add checkboxes to enable: Builder, Slider, Widget Areas, Theme Options
//	TODO - modify rum_modify_theme_blvd_module_caps() to retrieve Theme Option data and enable accordingly




// set cababilities for editors to use theme-blvd plugins
function rum_modify_theme_blvd_module_caps( $module_caps ) {

	// Layout Builder
	$module_caps['builder'] = 'edit_pages';

	// Slider Manager
	$module_caps['sliders'] = 'edit_pages';

	// Theme Options
        $module_caps['options'] = 'edit_pages';

	// Widget Area Manager
//	TODO - further research required; sidebars area not display in Editor menu
//	$module_caps['sidebars'] = 'edit_pages';

	return $module_caps;
     
}
add_filter( 'themeblvd_admin_module_caps', 'rum_modify_theme_blvd_module_caps' );

