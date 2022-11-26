<?php
function test_theme_register_styles(){
$version = wp_get_theme('test_theme')->get('Version');
wp_enqueue_style('test_theme-style',get_template_directory_uri(  )."/style.css",array('test_theme-bootstrap'),$version,'all');
wp_enqueue_style('test_theme-bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css",array(),'5.0.2','all');
wp_enqueue_style('test_theme-fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css",array(),'6.2.1','all');

}
add_action('wp_enqueue_scripts','test_theme_register_styles');

function test_theme_register_script(){

wp_enqueue_script('test_theme-jquery',"https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js",array(),'3.6.1',true);
wp_enqueue_script('test_theme-popper',"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js",array(),'2.9.2',true);
wp_enqueue_script('test_theme-bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ,array(),'5.0.2',true);
wp_enqueue_script('test_theme-main',get_template_directory_uri(  )."/assets/js/main.js",array(),'1.0',true);
}
add_action('wp_enqueue_scripts','test_theme_register_script');



?>