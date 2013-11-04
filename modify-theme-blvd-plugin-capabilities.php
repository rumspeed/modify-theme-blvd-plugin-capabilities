<?php
/*
Plugin Name: Modify Theme Blvd Plugin Capabilities
Description: Modify capabilities to allow Editors access to Theme Blvd plugins
Version: 0.3.1
Author: Scot Rumery
Author URI: http://rumspeed.com/scot-rumery/
License: GPLv2
*/

/*  Copyright 2013  Scot Rumery (email : scot@rumspeed.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/





define( 'RUM_MODIFY_CAPS_PLUGIN_VERSION', '0.3.1' );
define( 'RUM_MODIFY_CAPS_PLUGIN_DIR', dirname( __FILE__ ) );
define( 'RUM_MODIFY_CAPS_PLUGIN_URI', plugins_url( '' , __FILE__ ) );




// include files - these are simply to organize functions into logical areas
include_once( 'includes/modify-caps.php' );

