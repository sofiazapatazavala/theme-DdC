<?php
/* Template name: Portada */
get_template_part('header', 'fullscreen');
 ?>

<div class="row">
  <div class="col-md-12">
    <h1 class="my-2">Noticias</h1>
  </div>
</div>
<div class="row the-content">
  <?php
    $my_query = new WP_Query( 'post_type=post&posts_per_page=3' );
    while ( $my_query->have_posts() ) : $my_query->the_post();
    $do_not_duplicate[] = $post->ID;
  ?>

  <div class="col-sm-4">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">
        <div align="center">
          <?php echo get_the_post_thumbnail( $page->ID, 'portada', array( 'class' => 'img-responsive' ) ); ?>
        </div>
        <h6 class="text-center categoria-portada"><?php the_category('&bull;'); ?></h6>
        <?php the_title( sprintf( '<h3 class="text-center"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ) ?>
      </header>
      <p><?php the_excerpt(); ?></p>
      <footer class="entry-footer">
        <?php edit_post_link( __( 'Editar', 'RD-DdC' ), '<span class="edit-link btn btn-default btn-block" style="margin-bottom:10px;">', '</span>' ); ?>
      </footer><!-- .entry-footer -->
    </article>
  </div><!-- #post-## -->

  <?php endwhile; ?>
</div>

<div class="row">
  <div class="col-md-12">
    <h1 class="my-2">Documentos</h1>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <h1 class="my-2">Agenda</h1>
  </div>
</div>

<?php get_footer(); ?>
