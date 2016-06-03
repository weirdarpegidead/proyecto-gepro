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
    <?php if ( is_page( 'que-hacemos' ) ) { ?>
    <div class="large-12 columns identidad page">
      <div class="row">
        <?php query_posts('category_name=identidad&posts_per_page=3' ); while ( have_posts() ) : the_post(); ?>
        <div class="medium-4 columns">
          <div class="callout">
            <h5><?php the_title(); ?></h5>
            <?php my_excerpt(10); ?>
            <a href="<?php echo get_permalink(); ?>" class="button warning radius hollow">LEER MÁS</a>
          </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
    <?php } ?>
    <?php get_footer(); ?>

