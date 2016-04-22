    <?php get_header(); ?>
    <!-- contenido page -->
    <div class="row contenido">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="large-5 columns mascara">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } ?>
      </div>
      <div class="large-7 columns ">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
      <?php endwhile; else: ?><p>Lo sentimos, no se han encontrado entradas.</p>
      <?php endif; ?>
    </div>
    <?php get_footer(); ?>