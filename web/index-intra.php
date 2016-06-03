          <?php
          /*
          Template Name: escritorio
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
            <div class="small-6 medium-3 large-3 columns calendario">
              
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('calendario') ) : endif; ?>
              
              <div class="callout secondary">
                <ul class="no-bullet lista">
                  <li><span>10 - 4</span><strong>Resumen del evento un poco mas largo de lo normal.</strong></li>
                  <li><span>10 - 4</span><strong>Resumen del evento.</strong></li>
                  <li><span>10 - 4</span><strong>Resumen del evento.</strong></li>
                  <li><span>10 - 4</span><strong>Resumen del evento un poco mas largo de lo normal.</strong></li>
                  <li><span>10 - 4</span><strong>Resumen del evento.</strong></li>
                  <li><span>10 - 4</span><strong>Resumen del evento un poco mas largo de lo normal.</strong></li>
                  <li><span>10 - 4</span><strong>Resumen del evento.</strong></li>
                  <li><span>10 - 4</span><strong>Resumen del evento.</strong></li>
                  <li><span>10 - 4</span><strong>Resumen del evento un poco mas largo de lo normal.</strong></li>
                  <li><span>10 - 4</span><strong>Resumen del evento.</strong></li>
                </ul>
              </div>
            </div>
            <div class="small-6 medium-9 large-9 columns">
              <img src="http://placehold.it/1000x200">
              <div class="row">
                <div class="large-8 columns">
                  <div class="orbit" role="region" data-orbit data-orbit>
                    <ul class="orbit-container">
                      <!--<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>-->
                      <li class="orbit-slide text-center">
                        <img src="http://placehold.it/700x500">
                        <figcaption class="orbit-caption"><h3>Noticia desde el News Letter</h3></figcaption>
                      </li>
                      <li class="orbit-slide text-center">
                        <img src="http://placehold.it/700x500">
                        <figcaption class="orbit-caption"><h3>Evento importante</h3></figcaption>
                      </li>
                      <li class="orbit-slide text-center">
                        <img src="http://placehold.it/700x500">
                        <figcaption class="orbit-caption"><h3>Titulo del post</h3></figcaption>
                      </li>
                      <li class="orbit-slide text-center">
                        <img src="http://placehold.it/700x500">
                        <figcaption class="orbit-caption"><h3>Titulo del post</h3></figcaption>
                      </li>
                    </ul>
                    <nav class="orbit-bullets">
                      <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                      <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                      <button data-slide="2"><span class="show-for-sr">Second slide details.</span></button>
                      <button data-slide="3"><span class="show-for-sr">Second slide details.</span></button>
                    </nav>
                  </div>
                </div>
                <div class="large-4 columns boletin">
                  <div class="callout success">
                    <h6>Nuestra Gente</h6>
                    <div class="row collapse">
                      <div class="large-4 columns">
                        <img src="http://placehold.it/100x100">
                      </div>
                      <div class="large-8 columns">
                        <p><strong>Nombre: </strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p><strong>Cumpleaños: </strong>Sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
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