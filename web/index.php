    <?php get_header(); ?>
    <!-- identidad -->
    <div class="expanded row collapse">
      <div id="panela" class="large-4 columns efecto">
        <img src="<?php bloginfo('template_directory'); ?>/img/img1.jpg">
        <div class="caption text-center">
          <h4>LEAN</h4>
          <p>Mini descripción lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
      </div>
      <div id="panelb" class="large-4 columns efecto">
        <img src="<?php bloginfo('template_directory'); ?>/img/img1.jpg">
        <div class="caption text-center">
          <h4>Servicios</h4>
          <p>Mini descripción lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
      </div>
      <div id="panelc" class="large-4 columns efecto">
        <img src="<?php bloginfo('template_directory'); ?>/img/img1.jpg">
        <div class="caption text-center">
          <h4>Noticias</h4>
          <p>Mini descripción lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
      </div>
    </div>
    <!-- productos -->
    <div id="panel1" class="expanded row productos">
      <?php query_posts('category_name=productos, blog&posts_per_page=4' ); while ( have_posts() ) : the_post(); ?>
      <div class="large-3 columns text-center">
        <h3><?php the_title(); ?></h3>
        <hr>
        <img src="http://placehold.it/150x150">
        <?php my_excerpt(55); ?>
        <a href="<?php echo get_permalink(); ?>" class="button warning radius">LEER MÁS</a>
      </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>

    <div id="panel2" class="expanded row productos hide">
      <div class="large-3 columns text-center">
        <h3>Servicio 1</h3>
        <hr>
        <img src="http://placehold.it/150x150">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="#" class="button warning radius">LEER MÁS</a>
      </div>
      <div class="large-3 columns text-center">
        <h3>Servicio 2</h3>
        <hr>
        <img src="http://placehold.it/150x150">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="#" class="button warning radius">LEER MÁS</a>
      </div>
      <div class="large-3 columns text-center">
        <h3>Servicio 3</h3>
        <hr>
        <img src="http://placehold.it/150x150">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="#" class="button warning radius">LEER MÁS</a>
      </div>
      <div class="large-3 columns text-center">
        <h3>Servicio 4</h3>
        <hr>
        <img src="http://placehold.it/150x150">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="#" class="button warning radius">LEER MÁS</a>
      </div>
    </div>

    <div id="panel3" class="expanded row productos hide">
      <div class="large-3 columns text-center">
        <h3>Noticia 1</h3>
        <hr>
        <img src="http://placehold.it/150x150">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="#" class="button warning radius">LEER MÁS</a>
      </div>
      <div class="large-3 columns text-center">
        <h3>Noticia 2</h3>
        <hr>
        <img src="http://placehold.it/150x150">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="#" class="button warning radius">LEER MÁS</a>
      </div>
      <div class="large-3 columns text-center">
        <h3>Noticia 3</h3>
        <hr>
        <img src="http://placehold.it/150x150">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="#" class="button warning radius">LEER MÁS</a>
      </div>
      <div class="large-3 columns text-center">
        <h3>Noticia 4</h3>
        <hr>
        <img src="http://placehold.it/150x150">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="#" class="button warning radius">LEER MÁS</a>
      </div>
    </div>

    <!-- proyectos -->
    <div class="expanded row collapse">
      <div class="large-3 columns text-center efecto2">
        <a href="<?php echo get_site_url(); ?>/mineria">
          <img src="<?php bloginfo('template_directory'); ?>/img/img1.jpg">
          <div class="caption2">
            <h4>Mineria</h4>
            <p>Pequeño resumen excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </a>
      </div>
      <div class="large-3 columns text-center efecto2">
        <a href="#">
          <img src="<?php bloginfo('template_directory'); ?>/img/img1.jpg">
          <div class="caption2">
            <h4>Industria</h4>
            <p>Pequeño resumen excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </a>
      </div>
      <div class="large-3 columns text-center efecto2">
        <a href="#">
          <img src="<?php bloginfo('template_directory'); ?>/img/img1.jpg">
          <div class="caption2">
            <h4>Construcción</h4>
            <p>Pequeño resumen excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </a>
      </div>
      <div class="large-3 columns text-center efecto2">
        <a href="#">
          <img src="<?php bloginfo('template_directory'); ?>/img/img1.jpg">
          <div class="caption2">
            <h4>Ingeniería</h4>
            <p>Pequeño resumen excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </a>
      </div>
    </div>
    <!-- testimonios -->
    <div class="expanded row collapse testimonios">
      <h3 class="text-center">Nuestros clientes nos aman</h3>
    </div>
    <div class="testimonios orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
      <ul class="orbit-container">
        <!--<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>-->
        <?php query_posts('category_name=testimonios, blog&posts_per_page=4' ); while ( have_posts() ) : the_post(); ?>
        <li class="orbit-slide text-center">
          <div>
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'testimonios' ); } ?>
            <blockquote class="text-center"><?php the_content(); ?><cite><?php the_title(); ?></cite></blockquote>
          </div>
        </li>
        <?php endwhile; wp_reset_query(); ?>
      </ul>
      <nav class="orbit-bullets">
        <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
        <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
        <button data-slide="2"><span class="show-for-sr">Second slide details.</span></button>
        <button data-slide="3"><span class="show-for-sr">Second slide details.</span></button>
      </nav>
    </div>
    <?php get_footer(); ?>