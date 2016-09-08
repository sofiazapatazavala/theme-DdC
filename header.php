<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700" rel="stylesheet">
    <style type="text/css">
      body { font-family: 'Raleway', sans-serif; }
    </style>

    <!-- Estilos de WordPress -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"><!-- Se debe usar lo sugerido por WordPress posteriormente -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>
  </head>
  <body>
    <div class="container">
      <div class="row"><!-- Header -->
        <div class="col-xs-12">
          <img src="<?php bloginfo('template_directory'); ?>/img/logoRD.svg" style="max-width: 200px;" class="img-fluid d-block m-x-auto">
          <h2 class="text-xs-center"><?php bloginfo( 'name' ); ?></h2>
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
        </div>
      </div>
      <hr style="background-color: #1D4C4F; height: 5px;" />
