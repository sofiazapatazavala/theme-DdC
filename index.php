<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
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
          <h2 class="text-xs-center">Comisión Desafíos del Conocimiento</h2>
        </div>
      </div>
      <div class="row"><!-- Menú -->
        <div class="col-xs-12">
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
        </div>
      </div>
      <div class="row">
      <div class="content-area col-xs-12">

   		<?php if ( have_posts() ) : ?>

  			<?php
  			// Start the loop.
  			while ( have_posts() ) : the_post();
  			if ( in_array( $post->ID, array($do_not_duplicate) ) ) continue;

  				/*
  				 * Include the Post-Format-specific template for the content.
  				 * If you want to override this in a child theme, then include a file
  				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
  				 */
          get_template_part( 'content', get_post_format() );


  			if ( is_home() && ! is_front_page() ) : ?>
              <hr />
  			<?php endif;

  			// End the loop.
  			endwhile;

  			// Previous/next page navigation.
  			the_posts_pagination( array(
  				'prev_text'          => __( 'Previous page', 'cs2015' ),
  				'next_text'          => __( 'Next page', 'cs2015' ),
  				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'cs2015' ) . ' </span>',
  			) );

  		// If no content, include the "No posts found" template.
  		else : ?>
  			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
              <?php

  		endif;
  		?>



  	</div><!-- .content-area -->
    </div>
    </div>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
    <?php wp_footer(); ?>
  </body>
</html>
