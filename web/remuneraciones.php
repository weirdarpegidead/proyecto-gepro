          <?php
          /*
          Template Name: remuneraciones
          */
          ?>
          <?php get_header(); ?>
          <?php if ( is_user_logged_in() ) { ?>
          <!-- contenido de seccion remuneraciones -->
          <div class="row contenido">
            <div class="large-12 columns">
              <?php wp_nav_menu(
                array(
                'container' => false,
                'items_wrap' => '<ul class="dropdown menu" data-dropdown-menu>%3$s</ul>',
                'theme_location' => 'menu_intra'
              )); ?>
            </div>
            <div class="small-12 columns">
              
              <div class="callout secondary">
                <!-- contenido -->
                <?php query_posts('category_name='.$user_identity ); while ( have_posts() ) : the_post(); ?>
                <!-- post <?php echo get_the_ID(); ?> -->
                      <h3><?php the_title(); ?></h3>
                      <p><?php the_content(); ?></p>
                <?php endwhile; wp_reset_query(); ?>
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