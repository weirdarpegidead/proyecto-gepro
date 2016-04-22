    <?php
    /*
    Template Name: page full width
    */
    ?>
    <?php get_header(); ?>
    <!-- contenido page-full -->
    <div class="row contenido">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="large-12 columns">
        <div class="row">
          <div class="large-6 large-push-3 columns mascara text-center"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } ?></div>
        </div>
        <h1 class="text-center"><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
      <?php endwhile; else: ?><p>Lo sentimos, no se han encontrado entradas.</p>
      <?php endif; ?>
    </div>
    <?php get_footer(); ?>