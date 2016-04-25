    <?php
    /*
    Template Name: seccion privada 2
    */
    ?>
    <?php get_header(); ?>
    <?php if ( is_user_logged_in() ) { ?>
    <!-- contenido de seccion privada estando logeado -->
    <div class="row contenido">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="large-9 columns">
        <h2><?php the_title(); ?></h2>
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