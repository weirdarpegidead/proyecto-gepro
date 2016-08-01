          <?php
          /*
          Template Name: escritorio
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
            <div class="small-6 medium-3 large-3 columns calendario">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('calendario') ) : endif; ?>
            </div>
            <div class="small-6 medium-9 large-9 columns">
              <img src="<?php echo site_url(); ?>/wp-content/uploads/2016/08/Collage-1.jpg" style="margin-bottom:1rem;">
              <div class="row">
                <div class="large-8 columns">
                  <div class="orbit" role="region" data-orbit data-orbit>
                    <ul class="orbit-container">
                      <!--<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>-->
                      <?php query_posts('category_name=noti-intra&posts_per_page=4' ); while ( have_posts() ) : the_post(); ?>
                      <li class="orbit-slide text-center">
                        <!--<img src="http://placehold.it/700x500">-->
                        <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } ?></a>
                        <figcaption class="orbit-caption"><h3 style="color:white !important;"><?php the_title(); ?></h3></figcaption>
                      </li>
                      <?php endwhile; wp_reset_query(); ?>
                    </ul>
                  </div>
                </div>
                <div class="large-4 columns boletin">
                  <div class="callout success">
                    <h6>Nuestra Gente</h6>
                    <div class="orbit" role="region" data-orbit data-orbit>
                      <ul class="orbit-container">
                        <?php query_posts('category_name=nuestra-gente&posts_per_page=4' ); while ( have_posts() ) : the_post(); ?>
                          <li class="orbit-slide">
                            <div class="row">
                              <div class="large-4 columns">
                                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(  ); } ?>
                              </div>
                              <div class="large-8 columns">
                                <p><strong>Nombre: </strong><?php the_title(); ?></p>
                                <?php the_content(); ?>
                              </div>
                            </div>
                          </li>
                        <?php endwhile; wp_reset_query(); ?>
                      </ul>
                    </div>
                  </div>
                  <div class="callout success">
                    <h6>Nuestra Gente</h6>
                    <div class="orbit" role="region" data-orbit data-orbit>
                      <ul class="orbit-container">
                        <?php query_posts('category_name=cumple&posts_per_page=4' ); while ( have_posts() ) : the_post(); ?>
                          <li class="orbit-slide">
                            <div class="row">
                              <div class="large-4 columns">
                                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(  ); } ?>
                              </div>
                              <div class="large-8 columns">
                                <p><strong>Nombre: </strong><?php the_title(); ?></p>
                                <?php the_content(); ?>
                              </div>
                            </div>
                          </li>
                        <?php endwhile; wp_reset_query(); ?>
                      </ul>
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