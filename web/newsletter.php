    <?php
    /*
    Template Name: newsletter
    */
    ?>
    <?php get_header(); ?>
    <!-- contenido newsletter -->
    <div class="row contenido news">
      <div class="large-12 columns">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
    <div class="row contenido news">
      <div class="large-6 columns">
        <div class="row">
          <?php query_posts('category_name=newsletter' ); while ( have_posts() ) : the_post(); ?>
          <div class="large-12 columns">
            <h4><?php the_title(); ?></h4>
            <hr>
            <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'news' ); } ?></a>
            <?php my_excerpt(35); ?>
          </div>
          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
      <div class="large-6 columns">
        <div class="row">
          <?php query_posts('category_name=newsletter-lateral' ); while ( have_posts() ) : the_post(); ?>
          <div class="large-6 columns">
            <h4><?php the_title(); ?></h4>
            <hr>
            <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'news' ); } ?></a>
            <?php my_excerpt(20); ?>
          </div>
          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <h4>Archivo</h4>
        <div class="menu">
          <ul class="menu">
            <li><a href="#">Enero</a></li>
            <li><a href="#">Febrero</a></li>
            <li><a href="#">Marzo</a></li>
            <li><a href="#">Abril</a></li>
          </ul>
        </div>
        <hr>
      </div>
    </div>
    <?php get_footer(); ?>