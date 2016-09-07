<?php
// Archivo de funciones de WordPress.

// Register Custom Navigation Walker
require_once('bs4navwalker.php');

// Registra el menú e incluye el uso del Walker.
register_nav_menus( array(
    'principal' => __( 'Menú Principal', 'RD-DdC' ),
) );
 ?>
