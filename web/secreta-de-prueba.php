    <?php
    /*
    Template Name: seccion privada
    */
    ?>
    <?php get_header(); ?>
    <?php if ( is_user_logged_in() ) { ?>
    <!-- contenido de seccion privada estando logeado -->
    <div class="row contenido">
      <div class="large-9 columns">
        <h3>Titulo</h3>
        <div class="row">
          <div class="large-4 columns">
            <h5>titulo</h5>
            <div class="row">
              <div class="large-6 columns meta"><i class="fi-calendar"></i> <?php the_time('F j, Y') ?></div>
              <div class="large-6 columns meta"><i class="fi-comments"></i> <?php comments_number( '0 Comentarios', 'Un comentario', '% Comentarios' ); ?>.</div>
            </div>
            <img src="http://placehold.it/700x700">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="#" class="button warning radius float-right">LEER MÁS</a>
          </div>
          <div class="large-4 columns">
            <h5>titulo</h5>
            <div class="row">
              <div class="large-6 columns meta"><i class="fi-calendar"></i> <?php the_time('F j, Y') ?></div>
              <div class="large-6 columns meta"><i class="fi-comments"></i> <?php comments_number( '0 Comentarios', 'Un comentario', '% Comentarios' ); ?>.</div>
            </div>
            <img src="http://placehold.it/700x700">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="#" class="button warning radius float-right">LEER MÁS</a>
          </div>
          <div class="large-4 columns">
            <h5>titulo</h5>
            <div class="row">
              <div class="large-6 columns meta"><i class="fi-calendar"></i> <?php the_time('F j, Y') ?></div>
              <div class="large-6 columns meta"><i class="fi-comments"></i> <?php comments_number( '0 Comentarios', 'Un comentario', '% Comentarios' ); ?>.</div>
            </div>
            <img src="http://placehold.it/700x700">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="#" class="button warning radius float-right">LEER MÁS</a>
          </div>
          <div class="large-4 columns">
            <h5>titulo</h5>
            <div class="row">
              <div class="large-6 columns meta"><i class="fi-calendar"></i> <?php the_time('F j, Y') ?></div>
              <div class="large-6 columns meta"><i class="fi-comments"></i> <?php comments_number( '0 Comentarios', 'Un comentario', '% Comentarios' ); ?>.</div>
            </div>
            <img src="http://placehold.it/700x700">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="#" class="button warning radius float-right">LEER MÁS</a>
          </div>
          <div class="large-4 columns">
            <h5>titulo</h5>
            <div class="row">
              <div class="large-6 columns meta"><i class="fi-calendar"></i> <?php the_time('F j, Y') ?></div>
              <div class="large-6 columns meta"><i class="fi-comments"></i> <?php comments_number( '0 Comentarios', 'Un comentario', '% Comentarios' ); ?>.</div>
            </div>
            <img src="http://placehold.it/700x700">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="#" class="button warning radius float-right">LEER MÁS</a>
          </div>
          <div class="large-4 columns">
            <h5>titulo</h5>
            <div class="row">
              <div class="large-6 columns meta"><i class="fi-calendar"></i> <?php the_time('F j, Y') ?></div>
              <div class="large-6 columns meta"><i class="fi-comments"></i> <?php comments_number( '0 Comentarios', 'Un comentario', '% Comentarios' ); ?>.</div>
            </div>
            <img src="http://placehold.it/700x700">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="#" class="button warning radius float-right">LEER MÁS</a>
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