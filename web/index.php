          <?php get_header(); ?>
          <!-- identidad separador -->
          <div class="large-12 columns identidad hide">
            <div class="row">
              <div class="large-12 columns text-center">
                <h3>Creamos culturas inspiradas en el cambio y la innovación</h3>
              </div>
            </div>
          </div>
          <!-- nueva seccion 2 -->
          <div class="row cosa hide">
            <div class="small-12 columns text-center">
              <h1>Nuestros Servicios</h1>
            </div>
            <a href="http://desarrollo.ilia.cl/gepro/gepro-personas/">
              <div class="small-4 columns text-center">
                <div class="contenedor">
                  <i class="fi-male-female"></i>
                </div>
                <h4>Gepro Personas</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
              </div>
            </a>
            <a href="http://desarrollo.ilia.cl/gepro/nuestro-software/">
              <div class="small-4 columns text-center">
                <div class="contenedor"><i class="fi-laptop"></i></div>
                <h4>Nuestro Software</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
              </div>
            </a>
            <a href="http://desarrollo.ilia.cl/gepro/simulacion-de-procesos/">
              <div class="small-4 columns text-center">
                <div class="contenedor"><i class="fi-foundation"></i></div>
                <h4>Simulación de Procesos</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
              </div>
            </a>
            <a href="http://desarrollo.ilia.cl/gepro/consultores-para-la-eficiencia/">
              <div class="small-4 columns text-center">
                <div class="contenedor"><i class="fi-clipboard"></i></div>
                <h4>Consultores para la Eficiencia</h4>
                <p>Herramienta para la toma de decisiones, que permite estimar el desempeño de un sistema bajo un cierto set de condiciones de operación determinados.</p>
              </div>
            </a>
            <a href="http://desarrollo.ilia.cl/gepro/gestion-integral-de-proyectos/">
              <div class="small-4 columns text-center">
                <div class="contenedor"><i class="fi-graph-trend"></i></div>
                <h4>Gestión Integral de Proyectos</h4>
                <p>Busca maximizar el resultado de los proyectos, integrando a los equipos participantes, en las fases de diseño y construcción.</p>
              </div>
            </a>
            <a href="http://desarrollo.ilia.cl/gepro/last-planner-system/">
              <div class="small-4 columns text-center">
                <div class="contenedor"><i class="fi-clipboard-notes"></i></div>
                <h4>Last Planner System</h4>
                <p>Es una metodología de planificación, seguimiento y control de proyectos que permite mejorar el cumplimiento de los plazos y costos, mediante el aumento de los compromisos entre los miembros del equipo.</p>
              </div>
            </a>
            <a href="http://desarrollo.ilia.cl/gepro/gestion-de-la-produccion/">
              <div class="small-4 columns text-center">
                <div class="contenedor"><i class="fi-clipboard-pencil"></i></div>
                <h4>Gestión de la Producción</h4>
                <p>Busca mejorar la eficiencia de diferentes procesos de la empresa, sugiriendo mejoras en la productividad.</p>
              </div>
            </a>
            <a href="http://desarrollo.ilia.cl/gepro/diseno-y-construccion-virtual/">
              <div class="small-4 columns text-center">
                <div class="contenedor"><i class="fi-database"></i></div>
                <h4>Diseño y Construcción Virtual</h4>
                <p>Consiste en el uso de modelos de productos, organización y procesos de proyectos de diseño y construcción para satisfacer objetivos explícitos de distintos actores del proyecto.</p>
              </div>
            </a>
            <a href="http://desarrollo.ilia.cl/gepro/programa-de-transformacion-lean/">
              <div class="small-4 columns text-center">
                <div class="contenedor"><i class="fi-checkbox"></i></div>
                <h4>Programa de Transformación</h4>
                <p>Acompañamos a las empresas en la transformación a una cultura LEAN, mediante implementación de metodologías y herramientas que promueven la mejora continua.</p>
              </div>
            </a>
          </div>
          <!-- nueva seccion -->
          <div class="row drop hide" data-equalizer>
            <?php query_posts('category_name=servicios&posts_per_page=9' ); while ( have_posts() ) : the_post(); ?>
            <div class="small-4 columns">
              <div class="callout secondary">
                <div class="row" data-equalizer-watch>
                  <div class="large-3 columns text-center">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'testimonios' ); } ?>
                  </div>
                  <div class="large-9 columns">
                    <h4><?php the_title(); ?></h4>
                    <?php my_excerpt(10); ?>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; wp_reset_query(); ?>
            <div class="small-4 columns hide">
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
            <div class="small-4 columns hide">
              <button class="button expanded" type="button" data-toggle="example-dropdown-2"><i class="fi-lightbulb"></i></button>
              <div class="dropdown-pane large" id="example-dropdown-2" data-dropdown data-hover="true" data-hover-pane="true">
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
            <div class="small-4 columns hide">
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
                <h3>Creamos culturas inspiradas en el cambio y la innovación</h3>
              </div>
            </div>
          </div>
          <!-- proyectos -->
          <div class="row proyectos hide">
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
          <div class="large-12 columns testimonios">
            <div class="row">
              <h3 class="text-center">Nuestros clientes nos aman</h3>
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