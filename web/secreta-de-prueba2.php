    <?php
    /*
    Template Name: seccion privada 2
    */
    ?>
    <?php get_header(); ?>
    <?php if ( is_user_logged_in() ) { ?>
    <!-- contenido de seccion privada estando logeado -->
    <div class="row contenido">
      <div class="large-9 columns">
        <h2>DESCARGA DE ARCHIVOS INTERNOS</h2>
        <div class="row">
          <div class="large-12 columns">
            <ul class="accordion" data-accordion>
              <li class="accordion-item" data-accordion-item>
                <a href="#" class="accordion-title">Accordion 1</a>
                <div class="accordion-content" data-tab-content>
                  I would start in the open state, due to using the `is-active` state class.
                </div>
              </li>
              <li class="accordion-item" data-accordion-item>
                <a href="#" class="accordion-title">Accordion 1</a>
                <div class="accordion-content" data-tab-content>
                  2
                </div>
              </li>
              <li class="accordion-item" data-accordion-item>
                <a href="#" class="accordion-title">Accordion 1</a>
                <div class="accordion-content" data-tab-content>
                  3
                </div>
              </li>
              <li class="accordion-item" data-accordion-item>
                <a href="#" class="accordion-title">Accordion 1</a>
                <div class="accordion-content" data-tab-content>
                  4
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="large-3 columns">
        <h1>Titulo</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <?php } else { ?>
    <!-- contenido de seccion privada sin estar logeado -->
    <div class="row">
      <div class="large-12 columns text-center">
        <p>Ud no tiene permisos ver esta sección</p>
      </div>
    </div>
    <?php } ?>
    <?php get_footer(); ?>