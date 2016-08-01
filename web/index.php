          <?php get_header(); ?>
          <!-- version 2.0 -->
          <div class="large-12 columns final">
            <div class="row">
              <div class="small-6 medium-3 columns text-center">
                <a href="<?php echo site_url(); ?>/que-hacemos/">
                  <h4>Como lo Hacemos</h4>
                  <img src="<?php bloginfo('template_directory'); ?>/img/1.jpg">
                </a>
              </div>
              <div class="small-6 medium-3 columns text-center">
                <a href="<?php echo site_url(); ?>/servicios/">
                  <h4>Servicios</h4>
                  <img src="<?php bloginfo('template_directory'); ?>/img/2.jpg">
                </a>
              </div>
              <div class="small-6 medium-3 columns text-center">
                <a href="<?php echo site_url(); ?>/mineria/">
                  <h4>Experiencia</h4>
                  <img src="<?php bloginfo('template_directory'); ?>/img/3.jpg">
                </a>
              </div>
              <div class="small-6 medium-3 columns text-center">
                <a href="<?php echo site_url(); ?>/newsletter/">
                  <h4>NewsLetter</h4>
                  <img src="<?php bloginfo('template_directory'); ?>/img/4.jpg">
                </a>
              </div>
            </div>
          </div>
          <!-- identidad separador 2 -->
          <div class="large-12 columns identidad">
            <div class="row">
              <div class="large-12 columns text-center">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('mensaje-index') ) : endif; ?>
              </div>
            </div>
          </div>
          <!-- testimonios -->
          <div class="large-12 columns testimonios">
            <div class="row">
              <h3 class="text-center">Testimonios</h3>
              <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
                <ul class="orbit-container">
                  <?php query_posts('category_name=testimonios&posts_per_page=4' ); while ( have_posts() ) : the_post(); ?>
                  <li class="orbit-slide">
                    <div class="small-4 medium-3 large-1 large-offset-2 columns text-center">
                      <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                    </div>
                    <div class="small-8 medium-9 large-7 columns end">
                      <blockquote><?php the_content(); ?><cite><?php the_title(); ?></cite></blockquote>
                    </div>
                  </li>
                  <?php endwhile; wp_reset_query(); ?>
                </ul>            
              </div>
              <!-- Using Slick slider -->
              <section class="large-8 large-offset-2 columns end" id="client-quotes">
                <div class="container clearfix">
                  <div class="section logo-bar">
                    <div id="logo-slider">
                      <div><img src="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/04/client2.jpg" width="150"></div>
                      <div><img src="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/04/client5.jpg" width="150"></div>
                      <div><img src="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/04/client3.jpg" width="150"></div>
                      <div><img src="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/04/client4.jpg" width="150"></div>
                      <div><img src="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/04/client2.jpg" width="150"></div>
                      <div><img src="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/04/client5.jpg" width="150"></div>
                      <div><img src="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/04/client3.jpg" width="150"></div>
                      <div><img src="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/04/client4.jpg" width="150"></div>
                      <div><img src="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/04/client2.jpg" width="150"></div>
                      <div><img src="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/04/client5.jpg" width="150"></div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
          <?php get_footer(); ?>