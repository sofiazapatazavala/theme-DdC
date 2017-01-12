<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
    if ( is_singular() && ! is_page() ) { ?>
    <!-- Entradas y Equipo -->
    <?php
        $id_foto = get_post_thumbnail_id();
        $img_fondo = wp_get_attachment_image_src( $id_foto, '12-columnas', true );
        $url_img_fondo = $img_fondo[0];
    ?>
    <div style="background-image: url(<?php echo $img_fondo[0]; ?>);" class="titulo-single">
        <?php the_title( '<h3 class="titular fondo-gris">', '</h3>' );	?>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <?php the_date('','<h6 class="texto-naranjo">','</h6>'); ?>
        </div>
        <div class="col-sm-4">
            <?php edit_post_link( 'Editar', '<h6 class="text-right editar">', '</h6>' ); ?>
        </div>
    </div>
    <hr class="sep-gris-claro">
    <?php } elseif ( is_page() && ! is_page_template('page-100vh.php') ) { ?>
    <!-- Páginas -->
    <?php the_post_thumbnail('12-columnas', array( 'class' => 'img-responsive' )); ?>
    <?php the_title( '<h2 class="text-center">', '</h2>' );	?>
    <?php edit_post_link( 'Editar', '<h6 class="text-right editar">', '</h6>' ); ?>
    <hr class="sep-gris-claro">
    <?php } elseif ( is_page_template('page-100vh.php') ) { ?>
      <div class="py-4"></div>
    <?php } else { ?>
    <!-- Archivos -->
    <div class="row">
        <div class="col-sm-12">
            <header class="entry-header">
                <?php
                    the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
                ?>
	         </header><!-- .entry-header -->
            <hr class="sep-gris-claro">
        </div>
    </div>
    <?php } ?>

	<div class="row">
	<div class="col-sm-12 entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'RD-DdC' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'RD-DdC' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'RD-DdC' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content --></div>

</article><!-- #post-## -->
