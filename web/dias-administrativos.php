          <?php
          /*
          Template Name: dias administrativos
          */
          ?>
          <?php get_header(); ?>
          <?php if ( is_user_logged_in() ) { ?>
          <!-- contenido de seccion remuneraciones -->
          <div class="row contenido">
            <div class="large-12 columns">
              <?php wp_nav_menu(
                array(
                'container' => false,
                'items_wrap' => '<ul class="dropdown menu" data-dropdown-menu>%3$s</ul>',
                'theme_location' => 'menu_intra'
              )); ?>
            </div>
            <div class="small-12 columns">
              <form data-abide action="enviar-contacto.php" method="post">

                  <div class="row">
                    <div class="large-12 columns right">
                      <input name="nombre" type="text" required pattern="[a-zA-Z]+" placeholder="Tu Nombre">
                      <small class="error">El nombre es requerido y debe contener solo letras.</small>
                    </div>
                    <div class="large-12 columns right">
                      <input name="correo" type="email" required placeholder="Tu Correo Electrónico">
                      <small class="error">El correo es requerido.</small>
                    </div>
                    <div class="large-12 columns right">
                      <input name="telefono" type="text" required placeholder="Tu Teléfono">
                      <small class="error">El Teléfono es requerido.</small>
                    </div>
                    <div class="large-12 columns">
                      <textarea name="comentario" placeholder="Tu Mensaje"></textarea>
                    </div>
                    <div class="large-12 columns end">
                      <button type="submit" class="tiny expand success">Enviar</button>
                    </div>
                  </div>

              </form>
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