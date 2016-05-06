    <!-- footer -->
    <div class="expanded row footer">
      <div class="small-10 medium-10 large-10 small-offset-2 medium-offset-2 large-offset-2 columns logo">
        <img src="<?php bloginfo('template_directory'); ?>/img/logo.png">
      </div>
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('texto-footer') ) : endif; ?>
      <div class="small-2 medium-2 large-2 columns">
        <h4>Navegación</h4>
        <?php wp_nav_menu(
          array(
          'container' => false,
          'items_wrap' => '<ul class="menu vertical">%3$s</ul>',
          'theme_location' => 'menu_footer'
        )); ?>
      </div>
      <div class="small-2 medium-2 large-2 columns end">
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
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('disclaimer') ) : endif; ?>
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
