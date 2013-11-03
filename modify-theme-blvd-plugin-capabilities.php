<?php
/*
Plugin Name: Modify Theme Blvd Plugin Capabilities
Description: Modify capabilities to allow Editors access to Theme Blvd plugins
Version: 0.3.1
Author: Scot Rumery
Author URI: http://rumspeed.com/scot-rumery/
*/




define( 'RUM_MODIFY_CAPS_PLUGIN_VERSION', '0.3.1' );
define( 'RUM_MODIFY_CAPS_PLUGIN_DIR', dirname( __FILE__ ) );
define( 'RUM_MODIFY_CAPS_PLUGIN_URI', plugins_url( '' , __FILE__ ) );




// include files - these are simply to organize functions into logical areas
include_once( 'includes/modify-caps.php' );

