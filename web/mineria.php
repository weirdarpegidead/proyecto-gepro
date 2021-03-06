    <?php
    /*
    Template Name: mineria
    */
    ?>
    <?php get_header(); ?>
    <!-- contenido mineria -->
    <div class="row sub-navegacion">
      <div class="large-12 columns">
        <div class="menu-centered">
          <ul class="menu">
            <li class="current-menu-item"><a href="http://desarrollo.ilia.cl/gepro/mineria/">Minería</a></li>
            <li><a href="http://desarrollo.ilia.cl/gepro/industrial/">Industrial</a></li>
            <li><a href="http://desarrollo.ilia.cl/gepro/construccion/">Construcción</a></li>
            <li><a href="http://desarrollo.ilia.cl/gepro/salud/">Salud</a></li>
            <li><a href="http://desarrollo.ilia.cl/gepro/internacional/">Internacional</a></li>
            <li><a href="http://desarrollo.ilia.cl/gepro/ingenieria/">Ingeniería</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row collapse">
      <div class="medium-2 columns">
        <ul class="tabs vertical" id="example-vert-tabs" data-tabs>
          <li class="tabs-title is-active"><a href="#panel1v" aria-selected="true">Entrenamiento</a></li>
          <li class="tabs-title"><a href="#panel2v">Proyectos Especiales</a></li>
          <li class="tabs-title"><a href="#panel6v">Last Planner® System</a></li>
        </ul>
      </div>
      <div class="medium-10 columns">
        <div class="tabs-content vertical" data-tabs-content="example-vert-tabs">
          <div class="tabs-panel is-active" id="panel1v">
            <div class="row contenido">
              <div class="large-12 columns">
                <h4>Proyecto en Ejecución</h4>
                
              </div>
              <?php query_posts('category_name=min-ent-act' ); while ( have_posts() ) : the_post(); ?>
              <div class="large-4 columns text-center mascara">
                <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'blog' ); } ?></a>
                <h5><?php the_title(); ?></h5>
                <div class="row">
                  <div class="large-4 columns meta"><i class="fi-calendar"></i> <?php the_time('F j, Y') ?></div>
                  <div class="large-4 columns meta"><i class="fi-torsos"></i> <?php the_author() ?></div>
                  <div class="large-4 columns meta"><i class="fi-comments"></i> <?php comments_number( '0 Comentarios', 'Un comentario', '% Comentarios' ); ?>.</div>
                </div>
                <?php my_excerpt(30); ?>
                <a href="<?php echo get_permalink(); ?>" class="button warning">Seguir leyendo</a>
              </div>
              <?php endwhile; wp_reset_query(); ?>
              <div class="large-12 columns">
                <h4>Proyectos ejecutados</h4>
                
              </div>
              <div class="large-12 columns">
                <ul class="no-bullet">
                <?php query_posts('category_name=min-ent-term' ); while ( have_posts() ) : the_post(); ?>
                  <li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>                
                <?php endwhile; wp_reset_query(); ?>
                </ul>
              </div>
              
            </div>
          </div>
          <div class="tabs-panel" id="panel2v">
            <div class="row contenido">
              <div class="large-12 columns">
                <h4>Proyecto en Ejecución</h4>
                
              </div>
              <?php query_posts('category_name=min-esp-act' ); while ( have_posts() ) : the_post(); ?>
              <div class="large-4 columns text-center mascara">
                <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'blog' ); } ?></a>
                <h5><?php the_title(); ?></h5>
                <div class="row">
                  <div class="large-4 columns meta"><i class="fi-calendar"></i> <?php the_time('F j, Y') ?></div>
                  <div class="large-4 columns meta"><i class="fi-torsos"></i> <?php the_author() ?></div>
                  <div class="large-4 columns meta"><i class="fi-comments"></i> <?php comments_number( '0 Comentarios', 'Un comentario', '% Comentarios' ); ?>.</div>
                </div>
                <?php my_excerpt(30); ?>
                <a href="<?php echo get_permalink(); ?>" class="button warning">Seguir leyendo</a>
              </div>
              <?php endwhile; wp_reset_query(); ?>
              <div class="large-12 columns">
                <h4>Proyectos ejecutados</h4>
                
              </div>
              <div class="large-12 columns">
                <ul class="no-bullet">
                <?php query_posts('category_name=min-esp-term' ); while ( have_posts() ) : the_post(); ?>
                  <li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>                
                <?php endwhile; wp_reset_query(); ?>
                </ul>
              </div>
              
            </div>
          </div>
          
          <div class="tabs-panel" id="panel6v">
            <div class="row contenido">
              <div class="large-12 columns">
                <h4>Proyecto en Ejecución</h4>
<<<<<<< Updated upstream
                
=======
<<<<<<< HEAD
                <hr>
>>>>>>> Stashed changes
              </div>
              <?php query_posts('category_name=min-lp-act' ); while ( have_posts() ) : the_post(); ?>
              <div class="large-4 columns text-center mascara">
                <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'blog' ); } ?></a>
                <h5><?php the_title(); ?></h5>
                <div class="row">
                  <div class="large-4 columns meta"><i class="fi-calendar"></i> <?php the_time('F j, Y') ?></div>
                  <div class="large-4 columns meta"><i class="fi-torsos"></i> <?php the_author() ?></div>
                  <div class="large-4 columns meta"><i class="fi-comments"></i> <?php comments_number( '0 Comentarios', 'Un comentario', '% Comentarios' ); ?>.</div>
                </div>
                <?php my_excerpt(30); ?>
                <a href="<?php echo get_permalink(); ?>" class="button warning">Seguir leyendo</a>
              </div>
              <?php endwhile; wp_reset_query(); ?>
<<<<<<< Updated upstream
              <div class="large-12 columns">
                <h4>Proyectos ejecutados</h4>
                
              </div>
              <div class="large-12 columns">
=======
              <div class="large-12 columns">
                <h4>Proyectos ejecutados</h4>
                <hr>
              </div>
              <div class="large-12 columns">
>>>>>>> Stashed changes
                <ul class="no-bullet">
                <?php query_posts('category_name=min-lp-term' ); while ( have_posts() ) : the_post(); ?>
                  <li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>                
                <?php endwhile; wp_reset_query(); ?>
                </ul>
<<<<<<< Updated upstream
              </div>
=======
              </div>
=======
                
              </div>
              <?php query_posts('category_name=min-lp-act' ); while ( have_posts() ) : the_post(); ?>
              <div class="large-4 columns text-center mascara">
                <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'blog' ); } ?></a>
                <h5><?php the_title(); ?></h5>
                <div class="row">
                  <div class="large-4 columns meta"><i class="fi-calendar"></i> <?php the_time('F j, Y') ?></div>
                  <div class="large-4 columns meta"><i class="fi-torsos"></i> <?php the_author() ?></div>
                  <div class="large-4 columns meta"><i class="fi-comments"></i> <?php comments_number( '0 Comentarios', 'Un comentario', '% Comentarios' ); ?>.</div>
                </div>
                <?php my_excerpt(30); ?>
                <a href="<?php echo get_permalink(); ?>" class="button warning">Seguir leyendo</a>
              </div>
              <?php endwhile; wp_reset_query(); ?>
              <div class="large-12 columns">
                <h4>Proyectos ejecutados</h4>
                
              </div>
              <div class="large-12 columns">
                <ul class="no-bullet">
                <?php query_posts('category_name=min-lp-term' ); while ( have_posts() ) : the_post(); ?>
                  <li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>                
                <?php endwhile; wp_reset_query(); ?>
                </ul>
              </div>
>>>>>>> origin/master
>>>>>>> Stashed changes
              
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <?php get_footer(); ?>