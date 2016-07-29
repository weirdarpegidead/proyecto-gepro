          <!-- footer -->
          <div class="expanded row collapse footer">
            <div class="large-12 columns items">
              <div class="row">
                <div class="large-6 columns">
                  <img src="<?php bloginfo('template_directory'); ?>/img/logo.png">
                </div>
                <div class="large-6 columns">
                  <ul class="menu social align-right">
                    <li><a href="#"><i class="fi-social-facebook"></i></a></li>
                    <li><a href="#"><i class="fi-social-google-plus"></i></a></li>
                    <li><a href="#"><i class="fi-social-linkedin"></i></a></li>
                    <li><a href="#"><i class="fi-social-twitter"></i></a></li>
                    <li><a href="#"><i class="fi-social-youtube"></i></a></li>
                  </ul>
                  <ul class="menu contacto align-right">
                    <li><a href="tel://+56223547050"><i class="fi-telephone"></i>Telefono: (+56 2) 2354 7050</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- disclaimer -->
          <div class="expanded row disclaimer">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('disclaimer') ) : endif; ?>
          </div>
          <!-- formulario -->
          <div class="container-fluid visible invisible2 show-for-large" id="formulario">
            <div class="row header-pestana">
              <div class="large-12 columns text-center">
                <h5>Te asesoraremos</h5>
              </div>
            </div>
            <div class="row container-form">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('formulario-lateral') ) : endif; ?>
            </div>
            <div class="click"><span>Contáctanos</span></div>
          </div>

        </div>
      </div>
    </div>
    <!-- scripts -->
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/what-input.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/foundation.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/application.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/slick.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/home.js" type="text/javascript"></script>
    <script>
      $( ".click" ).click(function() {
        $( "#formulario" ).toggleClass( "invisible2" );
      });
      $( "#panela" ).mouseover(function() {
        $( "#panel1" ).removeClass( "esconder" );
        $( "#panel2" ).addClass( "esconder" );
        $( "#panel3" ).addClass( "esconder" );
      });
      $( "#panelb" ).mouseover(function() {
        $( "#panel2" ).removeClass( "esconder" );
        $( "#panel1" ).addClass( "esconder" );
        $( "#panel3" ).addClass( "esconder" );
      });
      $( "#panelc" ).mouseover(function() {
        $( "#panel3" ).removeClass( "esconder" );
        $( "#panel1" ).addClass( "esconder" );
        $( "#panel2" ).addClass( "esconder" );
      });
    </script>
    <!-- worpress -->
    <?php wp_footer(); ?>
  </body>
</html>
