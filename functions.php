<?php 
//register and enqueue the css files
function load_stylesheets() {
    wp_register_style('styles', get_template_directory_uri() . '/css/custom.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.css');

    wp_enqueue_style('styles');
   }
    
   add_action('wp_enqueue_scripts', 'load_stylesheets');
    
//register and enqueue the js files
function load_js() {
     wp_register_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
     //ska den här vara med?
     wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', array('jquery'), null, true);

     wp_enqueue_script('script');
     wp_enqueue_script('jquery');
   }

   add_action('wp_enqueue_scripts', 'load_js'); 

//creating custom menu
function custom_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'custom_menu' );

//creating custom menu (for sidebar)
function custom_sidebar_menu() {
    register_nav_menu('my-sidebar-menu',__( 'My Sidebar Menu' ));
  }
  add_action( 'init', 'custom_sidebar_menu' );

//creating custom menu (for widget)
function custom_widget_menu() {
    register_nav_menu('my-widget-menu',__( 'My Widget Menu' ));
  }
  add_action( 'init', 'custom_widget_menu' );

//creating custom menu (for widget/archive)
function custom_archive_menu() {
    register_nav_menu('my-archive-menu',__( 'My archive Menu' ));
  }
  add_action( 'init', 'custom_archive_menu' );

//creating custom menu (for widget/category)
function custom_category_menu() {
    register_nav_menu('my-category-menu',__( 'My category Menu' ));
  }
  add_action( 'init', 'custom_category_menu' );

//creating widgets
function addWidgets() {
  //widget named about us (footer)
  register_sidebar(
    array(
      'name' => 'about-us',
      'id' => 'about-us'
    )
    );
    //widget named contact us (footer)
    register_sidebar(
      array(
        'name' => 'contact-us',
        'id' => 'contact-us'
      ),
      );
      //widget named social media for social media icons (footer)
      register_sidebar(
        array(
          'name' => 'social-media',
          'id' => 'social-media'
        ),
        );
        //widget named widget menu (for a menu created as a widget)
        register_sidebar(
          array(
            'name' => 'widget-menu',
            'id' => 'widget-menu'
          ),
          );
          //widget named copyright for copyright text (footer)
          register_sidebar(
            array(
              'name' => 'copyright',
              'id' => 'copyright'
            ),
            );
            register_sidebar(
              array(
                'name' => 'front-page',
                'id' => 'front-page'
              ),
              );
}
add_action('widgets_init', 'addWidgets');

//to support thumbnails in code
add_theme_support('post-thumbnails');
?>