<?php
add_action( 'wp_enqueue_scripts', function() {
    //* Child CSS
    wp_enqueue_style( 'astra-ehw', 
      get_stylesheet_directory_uri() . '/style.css', [ 'astra' ] );
} );

add_action( 'wp_enqueue_scripts', function() {

  wp_enqueue_style ( 'roboto',  'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');


});