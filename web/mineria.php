    <?php
    /*
    Template Name: mineria
    */
    ?>
    <?php get_header(); ?>
    <!-- contenido mineria -->
    <div class="row">
      <?php query_posts('category_name=productos' ); while ( have_posts() ) : the_post(); ?>
      <div class="large-4 columns text-center">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
        <h2><?php the_title(); ?></h2>
        <div class="row">
          <div class="large-4 columns"><?php the_time('F jS, Y') ?></div>
          <div class="large-4 columns"><?php the_author() ?></div>
          <div class="large-4 columns">comentarios</div>
        </div>
        <?php my_excerpt(55); ?>
        <a href="<?php echo get_permalink(); ?>" class="button warning">Seguir leyendo</a>
      </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
    <?php get_footer(); ?>