    <?php get_header(); ?>
    <!-- contenido single -->
    <div class="row contenido single">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="large-3 columns mascara">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } ?>
      </div>
      <div class="large-9 columns">
        <h3><?php the_title(); ?></h3>
        <div class="row">
          <div class="large-4 columns meta"><i class="fi-calendar"></i> <?php the_time('F j, Y') ?></div>
          <div class="large-4 columns meta"><i class="fi-torsos"></i> <?php the_author() ?></div>
          <div class="large-4 columns meta"><i class="fi-comments"></i> <?php comments_number( '0 Comentarios', 'Un comentario', '% Comentarios' ); ?>.</div>
        </div>
        <?php the_content(); ?>
      </div>
      <div class="large-12 columns"><?php comments_template(); ?></div>
      <?php endwhile; else: ?><p>Lo sentimos, no se han encontrado entradas.</p>
      <?php endif; ?>
    </div>
    <?php get_footer(); ?>