          <?php
          /*
          Template Name: herramientas de trabajo
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
                <li><a href="#">Propuesta de trabajo</a></li>
                <li><a href="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/07/Inducción-Gepro.pdf">PDF Induccion</a></li>
                <li><a href="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/07/plantilla-GEPRO-4.pptx">PPT Estandarizada</a></li>
                <li><a href="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/07/logo-gepro_03.png">Logo</a></li>
                <li><a href="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/07/Acta_Gepro.doc">Acta de Reuniones</a></li>
                <li><a href="#">Proceso</a>
                  <ul class="menu">
                    <li><a href="">Proceso 1</a></li>
                    <li><a href="">Proceso 2</a></li>
                    <li><a href="">Proceso 3</a></li>
                    <li><a href="">Proceso 4</a></li>
                    <li><a href="">Proceso 5</a></li>
                  </ul>
                </li>
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