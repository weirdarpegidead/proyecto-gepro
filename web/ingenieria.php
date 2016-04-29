    <?php
    /*
    Template Name: ingenieria
    */
    ?>
    <?php get_header(); ?>
    <!-- contenido ingenieria -->
    <div class="row sub-navegacion">
      <div class="large-12 columns">
        <div class="menu-centered">
          <ul class="menu">
            <li><a href="http://desarrollo.ilia.cl/gepro/mineria/">Mineria</a></li>
            <li><a href="http://desarrollo.ilia.cl/gepro/industria/">Industria</a></li>
            <li><a href="http://desarrollo.ilia.cl/gepro/construccion/">Construccion</a></li>
            <li class="current-menu-item"><a href="http://desarrollo.ilia.cl/gepro/ingenieria/">Ingenieria</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row contenido" data-equalizer>
      <?php query_posts('category_name=productos' ); while ( have_posts() ) : the_post(); ?>
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
    <?php get_footer(); ?>