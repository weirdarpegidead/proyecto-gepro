    <?php
    /*
    Template Name: intra-acordion
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
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="large-9 columns">
        <h2><?php the_title(); ?></h2>
        <div class="row">
          <div class="large-12 columns">
            <ul class="accordion" data-accordion>
              <li class="accordion-item" data-accordion-item>
                <a href="#" class="accordion-title">Documento 1</a>
                <div class="accordion-content" data-tab-content>
                  Link a documento por bajar, mas descripcion sobre su uso.
                </div>
              </li>
              <li class="accordion-item" data-accordion-item>
                <a href="#" class="accordion-title">Documento 2</a>
                <div class="accordion-content" data-tab-content>
                  Link a documento por bajar, mas descripcion sobre su uso.
                </div>
              </li>
              <li class="accordion-item" data-accordion-item>
                <a href="#" class="accordion-title">Documento 3</a>
                <div class="accordion-content" data-tab-content>
                  Link a documento por bajar, mas descripcion sobre su uso.
                </div>
              </li>
              <li class="accordion-item" data-accordion-item>
                <a href="#" class="accordion-title">Documento 4</a>
                <div class="accordion-content" data-tab-content>
                  Link a documento por bajar, mas descripcion sobre su uso.
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <?php endwhile; else: ?><p>Lo sentimos, no se han encontrado entradas.</p>
      <?php endif; ?>
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