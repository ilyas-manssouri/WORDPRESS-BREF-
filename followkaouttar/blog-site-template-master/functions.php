<?php

  function followkaouttar_theme_support(){
   //Adds dynamic title tag support
   add_theme_support('title_tag');
   add_theme_support('custom-logo');
   add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','followkaouttar_theme_support');


  function followkaouttar_menus(){

    $location=array(
        'primary'=>"desktop Primary left sidebar",
        'footer'=>"footer menu items"
    );
    register_nav_menus($location);
  }
  add_action('init','followkaouttar_menus');





  function followkaouttar_register_styles(){
      $version= wp_get_theme()->get('version');



      wp_enqueue_style('followkaouttar-style', get_template_directory_uri()."/style.css",array('followkaouttar-boostrap'),$version,'all');

      wp_enqueue_style('followkaouttar-boostrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",array(),'4.4.1','all');


      wp_enqueue_style('followkaouttar-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",array(),'5.13.0','all');

  }

  add_action('wp_enqueue_scripts','followkaouttar_register_styles');



  function followkaouttar_register_scripts(){
    
    wp_enqueue_script('followkaouttar-jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js',array(),'3.4.1',true);

    wp_enqueue_script('followkaouttar-popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',array(),'1.16.0',true);

    wp_enqueue_script('followkaouttar-boostrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',array(),'4.4.1',true);

   wp_enqueue_script('followkaouttar-main',get_template_directory_uri()."/assets/js/main.js",array(),'1.0',true);

}


add_action('wp_enqueue_scripts','followkaouttar_register_scripts');


function followkaouttar_widget_areas(){

    register_sidebar(
      array(
        'before_title ' => '',
        'after_title ' => '',
        'before_widget ' => '<ul class="social-list list-inline py-3 mx-auto">',
        'after_widget ' => '</ul>',

      ),
      array(
          'name' => 'sidebar area',
          'id' => 'sidebar-1',
          'descripton' => 'sidebar widget area'
      )

    );

    register_sidebar(
        array(
          'before_title ' => '',
          'after_title ' => '',
          'before_widget ' => '<ul class="social-list list-inline py-3 mx-auto">',
          'after_widget ' => '</ul>',
          'name' => 'footer area',
          'id' => 'footer-1',
          'descripton' => 'footer widget area'
        )
  
    );
}

add_action( 'widgets_init', 'followkaouttar_widget_areas');


?>