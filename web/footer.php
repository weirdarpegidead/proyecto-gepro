    <!-- footer -->
    <div class="expanded row footer">
      <div class="large-10 large-offset-2 columns logo">
        <img src="<?php bloginfo('template_directory'); ?>/img/logo.png">
      </div>
      <div class="large-4 large-offset-2 columns">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="large-2 columns">
        <h4>Navegación</h4>
        <ul class="menu vertical">
          <li><a href="#">HOME</a></li>
          <li><a href="#">NOSOTROS</a></li>
          <li><a href="#">BLOG</a></li>
          <li><a href="#">CONTACTO</a></li>
        </ul>
      </div>
      <div class="large-2 columns end">
        <h4>Síguenos</h4>
        <ul class="menu vertical social">
          <li><a href="#"><i class="fi-social-facebook"></i></a></li>
          <li><a href="#"><i class="fi-social-google-plus"></i></a></li>
          <li><a href="#"><i class="fi-social-linkedin"></i></a></li>
          <li><a href="#"><i class="fi-social-twitter"></i></a></li>
          <li><a href="#"><i class="fi-social-youtube"></i></a></li>
        </ul>
      </div>
    </div>
    <!-- disclaimer -->
    <div class="expanded row collapse disclaimer">
      <div class="large-12 columns text-center">
        <p>Diseño y Desarrollo Web <a href="#">Ilia Consultores, Ingenieria y Capacitacion</a></p>
      </div>
    </div>
    <!-- formulario -->
    <div class="container-fluid visible invisible2" id="formulario">
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
    <!-- scripts -->
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/what-input.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/foundation.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>
    <script>
      $( ".click" ).click(function() {
        $( "#formulario" ).toggleClass( "invisible2" );
      });
      $( "#panela" ).click(function() {
        $( "#panel1" ).removeClass( "hide" );
        $( "#panel2" ).addClass( "hide" );
        $( "#panel3" ).addClass( "hide" );
      });
      $( "#panelb" ).click(function() {
        $( "#panel2" ).removeClass( "hide" );
        $( "#panel1" ).addClass( "hide" );
        $( "#panel3" ).addClass( "hide" );
      });
      $( "#panelc" ).click(function() {
        $( "#panel3" ).removeClass( "hide" );
        $( "#panel1" ).addClass( "hide" );
        $( "#panel2" ).addClass( "hide" );
      });
    </script> 
    <?php wp_footer(); ?>
  </body>
</html>
