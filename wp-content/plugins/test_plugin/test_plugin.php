<?php

/**
 * @package test_plugin
 */
/*
Plugin Name: Test Plugin
Plugin URI: http://test_plugin.com
Description: This plugin is made to test my first plugin.
Author: Mohamed Yehia
Version: 1.0.0
*/

defined('ABSPATH') or die('you are doing something wrong pls dont be smart');

class TestPlugin{
      function __construct(){
        add_action('init',[$this,'custom_post_type']);
    }

    function activate(){
        $this->custom_post_type();
        flush_rewrite_rules();
    }
    function deactivate(){
        flush_rewrite_rules();
    }
    function uninstall(){

    }
   function custom_post_type(){
    register_post_type('product',['public'=>true , 'label'=>'Products']);
   }
    

}
if(class_exists('TestPlugin')){
    $test_plugin = new TestPlugin();
}
register_activation_hook( __FILE__, [$test_plugin,'activate'] ); 
register_deactivation_hook(  __FILE__,[$test_plugin,'deactivate'] );