<?php get_header(); ?>

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

    <?php get_footer(); ?>
