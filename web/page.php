    <?php get_header(); ?>
    <!-- contenido -->
    <div class="row">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="large-12 columns"><h1><?php the_title(); ?></h1></div>
      <div class="large-5 columns">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'homepage-thumb' ); } ?>
      </div>
      <div class="large-7 columns">
        <?php the_content(); ?>
      </div>
      <?php endwhile; else: ?><p>Lo sentimos, no se han encontrado entradas.</p>
      <?php endif; ?>
    </div>
    <?php get_footer(); ?>