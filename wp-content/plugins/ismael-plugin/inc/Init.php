<?php


/**
 * @package IsmaelPlugin
 */
namespace Inc;

final class Init
{
    /**
     * Store all the classes inside an array 
     * @return array full list of classes
     */

    public static function get_services(){
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLinks::class
        ];
    }

     /**
     * Loop through the classes, initialize them, and call the register () method if it exists
     * @return
     */

   public static  function register_services(){
        foreach ( self::get_services() as $class ) {
            $service  = self:: instantiate( $class );
            if ( method_exists ($service, 'register')) {
                $service->register();
            }
        } 
    }

 /**
     * Initialize the class
     * @param class $class class from the services array 
     * @return class instance new instance of the class 
     */

    private static function instantiate($class) {
        $service = new $class();
        return $service;
    }



}




// use Inc\Activate;
// use Inc\Deactivate;
// use Inc\Admin\AdminPages;

// // require_once plugin_dir_path(__FILE__). 'inc/Admin/AdminPages.php';

// if ( !class_exists ( 'IsmaelPlugin' ) ) {
   
// class IsmaelPlugin 
// {

//      public $plugin;

//     function __construct(){
//       $this->plugin =  plugin_basename( __FILE__ );
//     }


//    function register() {
//     add_action( 'admin_enqueue_scripts', array( $this, 'enqueue') );
  

//     add_action( 'admin_menu', array($this, 'add_admin_pages' ) );

//     add_filter( "plugin_action_links_$this->plugin", array( $this, 'settings_link') );  
   

//   }

 
//       public function admin_index(){
//     // require template
//     require_once plugin_dir_path(__FILE__). 'templates/admin.php';   
//     }
  
//   protected function create_post_type() {
//     add_action( 'init', array ( $this, 'custom_post_Type') );
  
//   }
//   public function add_admin_pages() {
//     add_menu_page('Ismael Plugin', 'Ismael', 'manage_options', 'ismael_plugin', array($this, 'admin_index'), '
// dashicons-admin-site', 110);

//   }

//    public function settings_link( $links ){
    
//     $settings_link = '<a href="admin.php?page=ismael_plugin">Settings</a>';
//     array_push( $links, $settings_link );
//     return $links;
//   }

//    function custom_post_type() {
//     register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
//   }

//    function enqueue() {
//     // enqueue all our scripts
//     wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/mystyle.css', __FILE__ ) );
//     wp_enqueue_script( 'mypluginsscript', plugins_url( '/assets/myscript.js', __FILE__ ) );

//   }

// function activate(){
  
//   Activate::activate();
// }

// }

//   $ismaelPlugin = new IsmaelPlugin();
//   $ismaelPlugin->register();
  

// //activation

// register_activation_hook( __FILE__, array( $ismaelPlugin, 'activate') );

// //deactivation

// register_deactivation_hook( __FILE__, array('Deactivate', 'deactivate') );


 
// }