<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- Modificar desde aquí... -->
    <?php if ( ! is_single() ) { ?>
            <div class="row breadcrumb">
				<div class="col-sm-10 col-sm-offset-1">
	<header class="entry-header">
                <h6><a href="<?php echo home_url(); ?>">Portada</a> /</h6>
		<?php
            the_title( '<h2 class="entry-title">', '</h2>' );
			/* if ( is_single() ) :
				the_title( '<h2 class="entry-title">', '</h2>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif; */
		?>
	</header><!-- .entry-header -->
    </div></div>

    <?php } else { ?>
    	<div class="row breadcrumb">
        <div class="col-sm-7 col-sm-offset-1">
	<header class="entry-header">
                <h6><a href="<?php echo home_url(); ?>">Portada</a> /</h6>
		          <?php the_title( '<h2 class="entry-title">', '</h2>' );	?>
                <small><?php the_date(); ?></small>
	</header>
        </div>
        <div class="col-sm-3"><?php echo get_the_post_thumbnail( $post->ID, 'portada', array( 'class' => 'img-responsive' ) ); ?></div>
        </div>
    <?php } ?>
		<!-- ...hasta aquí. -->


	<div class="row">
	<div class="col-sm-8 col-sm-offset-2 entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content --></div>

</article><!-- #post-## -->
