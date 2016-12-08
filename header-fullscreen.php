<?php
  /*
   Para ordenar el código se programará el header de pantalla completa por separado, incluyendo condicionales.
   En algún momento, si es posible, se unirá todo en header.php
  */
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700" rel="stylesheet">
    <style type="text/css">
      body { font-family: 'Raleway', sans-serif; }
    </style>

    <!-- Estilos de WordPress -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"><!-- Se debe usar lo sugerido por WordPress posteriormente -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="the-big-header" <?php
      if (is_front_page()) {
        // Si es portada, muestra la imagen de portada.
        ?> style="background: url(<?php header_image(); ?>); background-repeat: cover; background-position: center;" <?php
      } else {
        // Si no es portada, muestra la respectiva imagen destacada.
        $id_foto = get_post_thumbnail_id();
        $img_fondo = wp_get_attachment_image_src( $id_foto, '12-columnas', true );
        $url_img_fondo = $img_fondo[0];
        ?> style="background: url(<?php echo $img_fondo[0]; ?>); background-position:center; background-size: cover;" <?php
      }
    ?>>
      <div class="container">
        <div class="row"><!-- Header -->
          <div class="col-md-10 offset-md-1">
            <a href="http://www.revoluciondemocratica.cl/" target="_blank"><img src="<?php echo get_parent_theme_file_uri(); ?>/img/LogoRD.svg" style="max-width: 200px;" class="img-fluid d-block mx-auto"></a>
            <h2 class="text-xs-center"><?php bloginfo( 'name' ); ?></h2>
          </div>
          <div class="col-md-1">
            <a href="https://www.facebook.com/RD.CTH/?fref=ts" target="_blank"><img src="<?php echo get_parent_theme_file_uri(); ?>/img/social/fb.png" class="d-block mx-auto my-2"></a>
          </div>
        </div>
        <div class="row"><!-- Menú -->
          <div class="col-xs-12">
            <nav class="navbar navbar-light bg-faded">
              <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
              &#9776;
              </button>
              <?php
                // Use the new walker
                wp_nav_menu( array(
                  'menu'            => 'principal',
                  'theme_location'  => 'principal',
                  'container'       => 'div',
                  'container_id'    => 'exCollapsingNavbar2',
                  'container_class' => 'collapse navbar-toggleable-sm',
                  'menu_id'         => false,
                  'menu_class'      => 'nav navbar-nav',
                  'depth'           => 2,
                  'fallback_cb'     => 'bs4navwalker::fallback',
                  'walker'          => new bs4navwalker()
                ));
              ?>
            </nav>
            <hr style="background-color: #CCC; height: 5px;" />
          </div>
        </div>
        <?php if ( is_front_page() ) { ?>
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <h1 class="text-xs-center my-1" style="font-weight: 300; color: #FFF;"><?php bloginfo('description'); ?></h1>
          </div>
        </div>
        <?php } elseif ( is_page_template('page-100vh.php') ) { ?>
          <div class="row">
            <div class="col-md-10 offset-md-1">
              <h1 class="display-4 m-t-3 p-a-1 d-inline-block" style="background-color: rgba(51,51,51,0.6); color: #FFF; text-shadow: 1px 1px 3px #333;"><?php echo get_the_title(); ?></h1>
            </div>
          </div>

        <?php } ?>
      </div>
    </div>
    <div class="container">
