    <?php
    /*
    Template Name: seccion privada 3
    */
    ?>
    <?php get_header(); ?>
    <?php if ( is_user_logged_in() ) { ?>
    <!-- contenido de seccion privada estando logeado -->
    <div class="row contenido">
      <div class="large-9 columns">
        <h2>EVENTOS Y ACTIVIDADES</h2>
        <div class="row">
          <div class="large-12 columns">
            <div class="callout secondary">
              <div class="row">
                <div class="large-2 columns">
                  <img src="http://placehold.it/150x150">
                </div>
                <div class="large-10 columns">
                  <h5>Evento de prueba</h5>
                  <p>Resumen</p>
                  <a href="#">Ver Evento Completo</a>
                </div>
              </div>
            </div>
            <div class="callout secondary">
              <div class="row">
                <div class="large-2 columns">
                  <img src="http://placehold.it/150x150">
                </div>
                <div class="large-10 columns">
                  <h5>Evento de prueba</h5>
                  <p>Resumen</p>
                  <a href="#">Ver Evento Completo</a>
                </div>
              </div>
            </div>
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