    <?php
    /*
    Template Name: nosotros
    */
    ?>
    <?php get_header(); ?>
    <!-- contenido nosotros -->
    <div class="row contenido">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="large-12 columns">
        <h2><?php the_title(); ?></h2>
      </div>
      <?php the_content(); ?>
      <?php endwhile; else: ?><p>Lo sentimos, no se han encontrado entradas.</p>
      <?php endif; ?>
    </div>
    <?php get_footer(); ?>