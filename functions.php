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

// Títulos
function theme_slug_setup() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );

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

// Custom Post Types para Documentos y Equipo (el calendario se usará con un plugin)
add_action( 'init', 'create_posttype' );
function create_posttype() {
  register_post_type( 'ddc_documentos',
    array(
      'labels' => array(
        'name' => __( 'Documentos' ),
        'singular_name' => __( 'Documento' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'documentos'),
      'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions'),
      //'taxonomies' => array('org_provincias'),
    )
  );
  register_post_type( 'ddc_equipo',
    array(
      'labels' => array(
        'name' => __( 'Equipo DdC' ),
        'singular_name' => __( 'Miembro' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'organizacion'),
      'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions'),
      //'taxonomies' => array('org_provincias'),
    )
  );
}

 ?>
