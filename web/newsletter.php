    <?php
    /*
    Template Name: newsletter
    */
    ?>


<?php get_header(); ?>

<?php// query_posts('category_name=productos&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
<?php// if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } ?>
<?php// the_category(' '); ?>
<?php// the_title(); ?>
<?php// the_content(); ?>
<?php// my_excerpt(10); ?>
<?php// echo get_permalink(); ?>
<?php// endwhile; wp_reset_query(); ?>


    <!-- contenido newsletter -->
    <div class="row contenido news">
      <div class="large-12 columns">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
    <div class="row contenido news">
      <div class="large-6 columns">
        <div class="row">
          <?php query_posts('category_name=productos&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
          <div class="large-12 columns">
            <h6><?php the_category(' '); ?></h6>
            <hr>
            <h4><?php the_title(); ?></h4>
            <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } ?></a>
            <?php my_excerpt(20); ?>
          </div>
          <?php endwhile; wp_reset_query(); ?>
          <?php query_posts('category_name=productos&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
          <div class="large-12 columns">
            <h6><?php the_category(' '); ?></h6>
            <hr>
            <h4><?php the_title(); ?></h4>
            <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } ?></a>
            <?php my_excerpt(20); ?>
          </div>
          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
      <div class="large-3 columns">
        <div class="row">
          <?php query_posts('category_name=productos&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
          <div class="large-12 columns">
            <h6><?php the_category(' '); ?></h6>
            <hr>
            <h4><?php the_title(); ?></h4>
            <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } ?></a>
            <?php my_excerpt(20); ?>
          </div>
          <?php endwhile; wp_reset_query(); ?>
          <?php query_posts('category_name=productos&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
          <div class="large-12 columns">
            <h6><?php the_category(' '); ?></h6>
            <hr>
            <h4><?php the_title(); ?></h4>
            <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } ?></a>
            <?php my_excerpt(20); ?>
          </div>
          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
      <div class="large-3 columns">
        <div class="row">
          <?php query_posts('category_name=productos&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
          <div class="large-12 columns">
            <h6><?php the_category(' '); ?></h6>
            <hr>
            <h4><?php the_title(); ?></h4>
            <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } ?></a>
            <?php my_excerpt(20); ?>
          </div>
          <?php endwhile; wp_reset_query(); ?>
          <?php query_posts('category_name=productos&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
          <div class="large-12 columns">
            <h6><?php the_category(' '); ?></h6>
            <hr>
            <h4><?php the_title(); ?></h4>
            <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } ?></a>
            <?php my_excerpt(20); ?>
          </div>
          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
    </div>
    <div class="row contenido news">
      <div class="large-3 columns">
        <div class="row">
          <?php query_posts('category_name=productos&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
          <div class="large-12 columns">
            <h6><?php the_category(' '); ?></h6>
            <hr>
            <h4><?php the_title(); ?></h4>
            <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } ?></a>
            <?php my_excerpt(20); ?>
          </div>
          <?php endwhile; wp_reset_query(); ?>
          <?php query_posts('category_name=productos&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
          <div class="large-12 columns">
            <h6><?php the_category(' '); ?></h6>
            <hr>
            <h4><?php the_title(); ?></h4>
            <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } ?></a>
            <?php my_excerpt(20); ?>
          </div>
          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
      <div class="large-3 columns">
        <div class="row">
          <?php query_posts('category_name=productos&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
          <div class="large-12 columns">
            <h6><?php the_category(' '); ?></h6>
            <hr>
            <h4><?php the_title(); ?></h4>
            <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } ?></a>
            <?php my_excerpt(20); ?>
          </div>
          <?php endwhile; wp_reset_query(); ?>
          <?php query_posts('category_name=productos&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
          <div class="large-12 columns">
            <h6><?php the_category(' '); ?></h6>
            <hr>
            <h4><?php the_title(); ?></h4>
            <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } ?></a>
            <?php my_excerpt(20); ?>
          </div>
          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
      <div class="large-3 columns">
        <div class="row">
          <?php query_posts('category_name=productos&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
          <div class="large-12 columns">
            <h6><?php the_category(' '); ?></h6>
            <hr>
            <h4><?php the_title(); ?></h4>
            <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } ?></a>
            <?php my_excerpt(20); ?>
          </div>
          <?php endwhile; wp_reset_query(); ?>
          <?php query_posts('category_name=productos&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
          <div class="large-12 columns">
            <h6><?php the_category(' '); ?></h6>
            <hr>
            <h4><?php the_title(); ?></h4>
            <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } ?></a>
            <?php my_excerpt(20); ?>
          </div>
          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
      <div class="large-3 columns">
        <div class="row">
          <?php query_posts('category_name=productos&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
          <div class="large-12 columns">
            <h6><?php the_category(' '); ?></h6>
            <hr>
            <h4><?php the_title(); ?></h4>
            <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } ?></a>
            <?php my_excerpt(20); ?>
          </div>
          <?php endwhile; wp_reset_query(); ?>
          <?php query_posts('category_name=productos&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
          <div class="large-12 columns">
            <h6><?php the_category(' '); ?></h6>
            <hr>
            <h4><?php the_title(); ?></h4>
            <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } ?></a>
            <?php my_excerpt(20); ?>
          </div>
          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <hr>
    </div>
    <?php get_footer(); ?>