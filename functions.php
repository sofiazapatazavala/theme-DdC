<?php
// Archivo de funciones de WordPress.

// Register Custom Navigation Walker
require_once('bs4navwalker.php');

// Registra el menú e incluye el uso del Walker.
register_nav_menus( array(
    'principal' => __( 'Menú Principal', 'RD-DdC' ),
) );

if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

// Tamaños adicionales
add_image_size( '4-columnas', 360, 300, true  );
add_image_size( '6-columnas', 550, 320, true  );
add_image_size( '8-columnas', 740, 370, true  );
add_image_size( '12-columnas', 1170, 400, true  );
add_image_size( 'portada', 390, 260, true  );
add_image_size( 'equipo', 360, 360, true  );
}

// Título para portada

add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Portada' ) . ' | ' . get_bloginfo( 'name' );
  }
  return $title;
}

// Custom header para mostrar en la portada (en noticias se usará la imagen destacada).
if ( function_exists( 'add_theme_support' ) ) {
$defaults = array(
	'default-image'          => '',
	'random-default'         => false,
	'width'                  => 1920,
	'height'                 => 1080,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '',
	'header-text'            => true,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );
}

 ?>
