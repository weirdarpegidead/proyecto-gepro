          <?php
          /*
          Template Name: Solicitudes
          */
          ?>
          <?php get_header(); ?>
          <?php if ( is_user_logged_in() ) { ?>
          <!-- contenido de seccion privada estando logeado -->
          <div class="row contenido">
            <div class="large-12 columns separacion">
              <?php wp_nav_menu(
                array(
                'container' => false,
                'items_wrap' => '<ul class="dropdown menu" data-dropdown-menu>%3$s</ul>',
                'theme_location' => 'menu_intra'
              )); ?>
            </div>
            <div class="large-12 columns">
              <ul class="dropdown menu" data-dropdown-menu>
                <li><a href="<?php echo site_url(); ?>/solicitudes/taxi/">Taxi</a></li>
                <li><a href="<?php echo site_url(); ?>/solicitudes/vuelo/">Vuelo</a></li>
                <li><a href="<?php echo site_url(); ?>/solicitudes/hotel/">Hotel</a></li>
                <li><a href="<?php echo site_url(); ?>/solicitudes/materiales/">Materiales</a></li>
              </ul>
            </div>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="small-12 columns">
              <h2><?php the_title(); ?></h2>
              <?php the_content(); ?>
            </div>
            <?php endwhile; else: ?><p>Lo sentimos, no se han encontrado entradas.</p>
            <?php endif; ?>
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