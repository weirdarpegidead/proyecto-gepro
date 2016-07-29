          <?php
          /*
          Template Name: Herramientas personales
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
                <li><a href="<?php echo site_url(); ?>/herramientas-personales/solicitud-de-vacaciones/">Solicitud de Vacaciones</a></li>
                <li><a href="<?php echo site_url(); ?>/herramientas-personales/dias-administrativos/">Solicitud de dias Administrativos</a></li>
                <li><a href="<?php echo site_url(); ?>/herramientas-personales/remuneraciones/">Liquidaciones de Sueldo</a></li>
                <li><a href="#">Beneficios</a>
                  <ul class="menu">
                    <li><a href="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/07/Poliza-275.210-3-Salud.pdf" target="_blank">Euroamérica - Poliza Salud</a></li>
                    <li><a href="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/07/Póliza-275.209-5-Catastrófico.pdf" target="_blank">Euroamérica - Poliza Catastrófico</a></li>
                    <li><a href="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/07/Seguro-euroamerica-DENTAL.pdf" target="_blank">Seguro Euroamérica Dental</a></li>
                    <li><a href="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/07/Reembolso-Médico-Euroamérica.pdf" target="_blank">Reembolso Médico Euroamérica</a></li>
                    <li><a href="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/07/Beneficios-Gepro-Euroamérica.pdf" target="_blank">Beneficios Gepro-Euroamérica</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo site_url(); ?>/herramientas-personales/HH">HH</a></li>
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