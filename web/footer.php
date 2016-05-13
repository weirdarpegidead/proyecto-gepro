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
            <div class="large-12 columns mapa">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2352.646445079888!2d-70.61302819087281!3d-33.49761715948321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d009320fce59%3A0x7300292c905d08eb!2sMIDE+UC!5e0!3m2!1ses!2scl!4v1462889485117" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                <h5>Programas 2016</h5>
                <h6>Inscríbete y te asesoraremos</h6>
              </div>
            </div>
            <div class="row container-form">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('formulario-lateral') ) : endif; ?>
            </div>
            <div class="click"><span>Dejanos Tus datos</span></div>
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
      $( "#panela" ).click(function() {
        $( "#panel1" ).removeClass( "hide" );
        $( "#panel2" ).addClass( "hide" );
        $( "#panel3" ).addClass( "hide" );
        $( "#panela" ).addClass( "active" );
        $( "#panelb" ).removeClass( "active" );
        $( "#panelc" ).removeClass( "active" );
      });
      $( "#panelb" ).click(function() {
        $( "#panel2" ).removeClass( "hide" );
        $( "#panel1" ).addClass( "hide" );
        $( "#panel3" ).addClass( "hide" );
        $( "#panelb" ).addClass( "active" );
        $( "#panela" ).removeClass( "active" );
        $( "#panelc" ).removeClass( "active" );
      });
      $( "#panelc" ).click(function() {
        $( "#panel3" ).removeClass( "hide" );
        $( "#panel1" ).addClass( "hide" );
        $( "#panel2" ).addClass( "hide" );
        $( "#panelc" ).addClass( "active" );
        $( "#panela" ).removeClass( "active" );
        $( "#panelb" ).removeClass( "active" );
      });
    </script> 
    <?php wp_footer(); ?>
  </body>
</html>
