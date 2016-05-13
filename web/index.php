          <?php get_header(); ?>
          <!-- nueva seccion -->
          <div class="row drop">
            <div class="large-4 columns">
              <button class="button expanded" type="button" data-toggle="example-dropdown-1"><i class="fi-widget"></i></button>
              <div class="dropdown-pane large" id="example-dropdown-1" data-dropdown data-hover="true" data-hover-pane="true">
                <!-- que hacemos -->
                <div id="panel1" class="row productos">
                  <?php query_posts('category_name=identidad&posts_per_page=3' ); while ( have_posts() ) : the_post(); ?>
                  <div class="large-12 columns">
                    <div class="row">
                      <div class="small-3 columns">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'testimonios' ); } ?>
                      </div>
                      <div class="small-9 columns">
                        <h6><?php the_title(); ?></h6>
                        <?php my_excerpt(10); ?>
                        <a href="<?php echo get_permalink(); ?>" class="button tiny warning">LEER MÁS</a>
                      </div>
                      <div class="small-12 columns"><hr></div>
                    </div>
                  </div>
                  <?php endwhile; wp_reset_query(); ?>
                </div>
              </div>
            </div>
            <div class="large-4 columns">
              <button class="button expanded" type="button" data-toggle="example-dropdown-2"><i class="fi-lightbulb"></i></button>
              <div class="dropdown-pane large" id="example-dropdown-2" data-dropdown data-hover="true" data-hover-pane="true">
                <!-- servicios -->
                <!-- servicios -->
                <div id="panel2" class="row servicios">
                  <?php query_posts('category_name=servicios&posts_per_page=4' ); while ( have_posts() ) : the_post(); ?>
                  <div class="large-12 columns">
                    <div class="row">
                      <div class="small-3 columns">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'testimonios' ); } ?>
                      </div>
                      <div class="small-9 columns">
                        <h6><?php the_title(); ?></h6>
                        <?php my_excerpt(10); ?>
                        <a href="<?php echo get_permalink(); ?>" class="button tiny warning">LEER MÁS</a>
                      </div>
                      <div class="small-12 columns"><hr></div>
                    </div>
                  </div>
                  <?php endwhile; wp_reset_query(); ?>                  
                </div>
              </div>
            </div>
            <div class="large-4 columns">
              <button class="button expanded" type="button" data-toggle="example-dropdown-3"><i class="fi-trophy"></i></button>
              <div class="dropdown-pane large" id="example-dropdown-3" data-dropdown data-hover="true" data-hover-pane="true">
              <!-- noticias -->
                <div id="panel3" class="row noticias">
                  <?php query_posts('category_name=productos&posts_per_page=4' ); while ( have_posts() ) : the_post(); ?>
                  <div class="large-12 columns">
                    <div class="row">
                      <div class="small-3 columns">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'testimonios' ); } ?>
                      </div>
                      <div class="small-9 columns">
                        <h6><?php the_title(); ?></h6>
                        <?php my_excerpt(10); ?>
                        <a href="<?php echo get_permalink(); ?>" class="button tiny warning">LEER MÁS</a>
                      </div>
                      <div class="small-12 columns"><hr></div>
                    </div>
                  </div>
                  <?php endwhile; wp_reset_query(); ?>
                </div>
              </div>
            </div>
          </div>
          <!-- identidad -->
          <div class="row collapse hide">
            <div id="panela" class="small-4 medium-4 large-4 columns efecto lean active">
              <img src="<?php bloginfo('template_directory'); ?>/img/img1.jpg">
              <div class="caption text-center">
                <h2>LEAN</h2>
                <p>Mini descripción lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <i class="fi-target-two"></i>
              </div>
              <i class="fi-play"></i>
              <i class="fi-play abajo"></i>
            </div>
            <div id="panelb" class="small-4 medium-4 large-4 columns efecto serv">
              <img src="<?php bloginfo('template_directory'); ?>/img/img1.jpg">
              <div class="caption text-center">
                <h2>Servicios</h2>
                <p>Mini descripción lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <i class="fi-target-two"></i>
              </div>
              <i class="fi-play"></i>
              <i class="fi-play abajo"></i>
            </div>
            <div id="panelc" class="small-4 medium-4 large-4 columns efecto noti">
              <img src="<?php bloginfo('template_directory'); ?>/img/img1.jpg">
              <div class="caption text-center">
                <h2>Noticias</h2>
                <p>Mini descripción lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <i class="fi-target-two"></i>
              </div>
              <i class="fi-play abajo"></i>
            </div>
          </div>
          <!-- identidad -->
          <div id="panel1" class="expanded row productos hide">
            <?php query_posts('category_name=identidad&posts_per_page=3' ); while ( have_posts() ) : the_post(); ?>
            <div class="small-4 medium-4 large-4 columns text-center">
              <h3><?php the_title(); ?></h3>
              <hr>
              <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'testimonios' ); } ?>
              <?php my_excerpt(40); ?>
              <a href="<?php echo get_permalink(); ?>" class="button warning radius">LEER MÁS</a>
            </div>
            <?php endwhile; wp_reset_query(); ?>
          </div>
          <!-- identidad separador -->
          <div class="row identidad">
            <div class="large-12 columns text-center">
              <h3>Creamos culturas inspiradas en el cambio y la innovación</h3>
            </div>
            <div class="medium-4 large-4 columns text-center">
              <h5>Filosofía</h5>
              <img src="http://placehold.it/50x50">
              <p>Nuestra escencia se sustenta en LEAN Management</p>
              <a href="#" class="button warning radius hollow">LEER MÁS</a>
            </div>
            <div class="medium-4 large-4 columns text-center">
              <h5>Herramientas</h5>
              <img src="http://placehold.it/50x50">
              <p>Creemos que las personas son un pilar fundamental</p>
              <a href="#" class="button warning radius hollow">LEER MÁS</a>
            </div>
            <div class="medium-4 large-4 columns text-center">
              <h5>Cultura</h5>
              <img src="http://placehold.it/50x50">
              <p>Utilizamos herramientas innovadoras para una gestión LEAN</p>
              <a href="#" class="button warning radius hollow">LEER MÁS</a>
            </div>
          </div>
          <!-- proyectos -->
          <div class="row proyectos">
            <?php query_posts('category_name=areas&posts_per_page=4' ); while ( have_posts() ) : the_post(); ?>
            <div class="small-6 medium-3 large-3 columns text-center efecto2">
              <a href="<?php echo get_permalink(); ?>">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } ?>
                <div class="caption2">
                  <h4><?php the_title(); ?></h4>
                  <?php my_excerpt(40); ?>
                </div>
              </a>
            </div>
            <?php endwhile; wp_reset_query(); ?>
          </div>
          <!-- testimonios -->
          <div class="expanded row testimonios">
            <h3 class="text-center">Nuestros clientes nos aman</h3>
            <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
              <ul class="orbit-container">
                <?php query_posts('category_name=testimonios&posts_per_page=4' ); while ( have_posts() ) : the_post(); ?>
                <li class="orbit-slide">
                  <div class="large-1 large-offset-2 columns text-center">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                  </div>
                  <div class="large-7 columns end">
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
          <?php get_footer(); ?>