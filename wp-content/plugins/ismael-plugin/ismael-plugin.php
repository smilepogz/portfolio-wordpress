<?php
/**
 * @package IsmaelPlugin
 */
/**
 Plugin Name: Ismael Plugin
   Plugin URI: http://ismael.com/plugin
   description: This is my first attempt on writing a custom plugin for this amazing tutorial series.
   Version: 1.0.0
   Author: Ismael "Smiley" Sarunay
   Author URI: http://ismael.com
   License: GPL2 or later
   Text Domain: ismael-plugin
 */

// If this files is called firectly abort!!!
defined( 'ABSPATH' ) or die ( 'Hey, you can\t access this file, you silly human!' );

// require once the composer autoload 
    if ( file_exists( dirname( __FILE__) . '/vendor/autoload.php' ) ) {
  require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}
/**
 *  The code that runs during plugin activation
 */
function activate_ismael_plugin ()
{
  Inc\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_ismael_plugin' );

/**
 *  The code that runs during plugin deactivation
 */

function deactivate_ismael_plugin ()
{
  Inc\Base\Deactivate::deactivate();
}

register_deactivation_hook( __FILE__, 'deactivate_ismael_plugin' );

/**
 *  Initialize all the core classes of the plugin
 */

if (class_exists ( 'Inc\\Init' )) {
  Inc\Init::register_services();
}