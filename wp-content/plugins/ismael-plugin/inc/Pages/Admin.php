<?php
/**
 * @package IsmaelPlugin
 */

 namespace Inc\Pages;
use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;
/**
 * 
*/
class Admin extends BaseController
 {
public $settings;
public $pages = array();
public function __construct()
{
    $this->settings = new SettingsApi();
    $this->pages = array (
       array (
        'page_title' => 'Ismael Plugin',
        'menu_title' => 'Ismael',
        'capability'=> 'manage_options',
        'menu_slug' => 'ismael_plugin',
        'callback' => function() { echo  '<h1>Ismael Plugin</h1>'; },
        'icon_url' => 'dashicons-admin-site',
        'position' => 110

    )
    // array(
    //         'page_title' => 'Test Plugin',
    //         'menu_title' => 'Test',
    //         'capability'=> 'manage_options',
    //         'menu_slug' => 'test_plugin',
    //         'callback' => function() { echo  '<h1>External</h1>'; },
    //         'icon_url' => 'dashicons-store',
    //         'position' => 9
    
    // )
        );
}

public function register()
{
    $this->settings->addPages( $this->pages)->withSubPage('Dashboard')->register();
}
 }

