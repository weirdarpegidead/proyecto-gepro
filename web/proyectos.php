    <?php
    /*
    Template Name: proyectos
    */
    ?>
    <?php get_header(); ?>
    <!-- contenido proyectos -->
    <div class="rown">
      <div class="large-12 columns text-center">
        <h2>Proyectos en Ejecución</h2>
      </div>
    </div>
    <div class="row contenido" data-equalizer>
      <?php query_posts('category_name=productos&posts_per_page=3' ); while ( have_posts() ) : the_post(); ?>
      <div class="large-4 columns text-center mascara" data-equalizer-watch>
        <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'blog' ); } ?></a>
        <h5><?php the_title(); ?></h5>
        <div class="row">
          <div class="large-4 columns meta"><i class="fi-calendar"></i> <?php the_time('F j, Y') ?></div>
          <div class="large-4 columns meta"><i class="fi-torsos"></i> <?php the_author() ?></div>
          <div class="large-4 columns meta"><i class="fi-comments"></i> <?php comments_number( '0 Comentarios', 'Un comentario', '% Comentarios' ); ?>.</div>
        </div>
        <?php my_excerpt(30); ?>
        <a href="<?php echo get_permalink(); ?>" class="button warning">Seguir leyendo</a>
      </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
    <div class="row">
      <div class="large-12 columns text-center">
        <h2>Proyectos Ejecutados</h2>
      </div>
    </div>
    <div class="row contenido" data-equalizer>
      <?php query_posts('category_name=productos&posts_per_page=8' ); while ( have_posts() ) : the_post(); ?>
      <div class="large-3 columns text-center mascara" data-equalizer-watch>
        <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'blog' ); } ?></a>
        <h5><?php the_title(); ?></h5>
        <div class="row">
          <div class="large-4 columns meta"><i class="fi-calendar"></i> <?php the_time('F j, Y') ?></div>
          <div class="large-4 columns meta"><i class="fi-torsos"></i> <?php the_author() ?></div>
          <div class="large-4 columns meta"><i class="fi-comments"></i> <?php comments_number( '0 Comentarios', 'Un comentario', '% Comentarios' ); ?>.</div>
        </div>
        <?php my_excerpt(30); ?>
        <a href="<?php echo get_permalink(); ?>" class="button warning">Seguir leyendo</a>
      </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
    <?php get_footer(); ?>