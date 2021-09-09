<?php 
function load_stylesheets() {
    wp_register_style('styles', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), 1, 'all');
    //wp_register_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css' );
    wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.css', array(), 1, 'all');
   

    wp_enqueue_style('styles');
    wp_enqueue_style('bootstrap');
    //wp_enqueue_style('load-fa');
    wp_enqueue_style('fontawesome');
   }
    
   add_action('wp_enqueue_scripts', 'load_stylesheets');
    
function load_js() {
     wp_register_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
     //ska den här vara med?
     wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', array('jquery'), null, true);

     wp_enqueue_script('script');
     wp_enqueue_script('jquery');
   }

   add_action('wp_enqueue_scripts', 'load_js'); 

function custom_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'custom_menu' );

  function custom_sidebar_menu() {
    register_nav_menu('my-sidebar-menu',__( 'My Sidebar Menu' ));
  }
  add_action( 'init', 'custom_sidebar_menu' );

function addWidgets() {
  register_sidebar(
    array(
      'name' => 'about-us',
      'id' => 'about-us'
    )
    );
    register_sidebar(
      array(
        'name' => 'contact-us',
        'id' => 'contact-us'
      ),
      );
      register_sidebar(
        array(
          'name' => 'social-media',
          'id' => 'social-media'
        ),
        );
}
add_action('widgets_init', 'addWidgets');
?>