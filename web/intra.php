    <?php
    /*
    Template Name: intra-blog
    */
    ?>
    <?php get_header(); ?>
    <?php if ( is_user_logged_in() ) { ?>
    <!-- contenido de seccion privada estando logeado -->
    <div class="row contenido">
      <div class="large-12 columns">
        <?php wp_nav_menu(
          array(
          'container' => false,
          'items_wrap' => '<ul class="dropdown menu" data-dropdown-menu>%3$s</ul>',
          'theme_location' => 'menu_intra'
        )); ?>
      </div>
      <div class="large-9 columns">
        <h3><?php the_title(); ?></h3>
        <div class="row">
          <?php query_posts('category_name=productos' ); while ( have_posts() ) : the_post(); ?>
          <div class="large-4 columns">
            <h5><?php the_title(); ?></h5>
            <div class="row">
              <div class="large-6 columns meta"><i class="fi-calendar"></i> <?php the_time('F j, Y') ?></div>
              <div class="large-6 columns meta"><i class="fi-comments"></i> <?php comments_number( '0 Comentarios', 'Un comentario', '% Comentarios' ); ?>.</div>
            </div>
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'blog' ); } ?>
            <?php my_excerpt(30); ?>
            <a href="<?php echo get_permalink(); ?>" class="button warning radius float-right">LEER MÁS</a>
          </div>
          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
      
      <div class="large-3 columns sidebar">
        <div class="row">

          <div class="large-12 columns">
            <div class="callout secondary text-center">
              <h5>Proximos eventos</h5>
              <p>calendario de actividades</p>
            </div>
          </div>

          <div class="large-12 columns">
            <div class="callout primary">
              <div class="row">
                <div class="large-3 columns text-center">
                  <h5>30 Abr</h5>
                </div>
                <div class="large-9 columns">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a href="#">Detalles</a>
                </div>
              </div>
              
            </div>
          </div>

          <div class="large-12 columns">
            <div class="callout primary">
              <div class="row">
                <div class="large-3 columns text-center">
                  <h5>30 Abr</h5>
                </div>
                <div class="large-9 columns">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a href="#">Detalles</a>
                </div>
              </div>
            </div>
          </div>

          <div class="large-12 columns">
            <div class="callout primary">
              <div class="row">
                <div class="large-3 columns text-center">
                  <h5>30 Abr</h5>
                </div>
                <div class="large-9 columns">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a href="#">Detalles</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <?php } else { ?>
    <!-- contenido de seccion privada sin estar logeado -->
    <div class="row">
      <div class="large-4 columns end">
        <?php wp_login_form(); ?>
      </div>
    </div>
    <?php } ?>
    <?php get_footer(); ?>