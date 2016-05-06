    <?php get_header(); ?>
    <!-- identidad -->
    <div class="row collapse">
      <div id="panela" class="small-4 medium-4 large-4 columns efecto lean active">
        <img src="<?php bloginfo('template_directory'); ?>/img/img1.jpg">
        <div class="caption text-center">
          <h2>LEAN</h2>
          <p>Mini descripción lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <i class="fi-target-two"></i>
        </div>
        <i class="fi-play"></i>
        <i class="fi-play abajo"></i>
      </div>
      <div id="panelb" class="small-4 medium-4 large-4 columns efecto serv">
        <img src="<?php bloginfo('template_directory'); ?>/img/img1.jpg">
        <div class="caption text-center">
          <h2>Servicios</h2>
          <p>Mini descripción lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <i class="fi-target-two"></i>
        </div>
        <i class="fi-play"></i>
        <i class="fi-play abajo"></i>
      </div>
      <div id="panelc" class="small-4 medium-4 large-4 columns efecto noti">
        <img src="<?php bloginfo('template_directory'); ?>/img/img1.jpg">
        <div class="caption text-center">
          <h2>Noticias</h2>
          <p>Mini descripción lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <i class="fi-target-two"></i>
        </div>
        <i class="fi-play abajo"></i>
      </div>
    </div>
    <!-- identidad -->
    <div id="panel1" class="expanded row productos">
      <?php query_posts('category_name=identidad&posts_per_page=3' ); while ( have_posts() ) : the_post(); ?>
      <div class="small-4 medium-4 large-4 columns text-center">
        <h3><?php the_title(); ?></h3>
        <hr>
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'testimonios' ); } ?>
        <?php my_excerpt(40); ?>
        <a href="<?php echo get_permalink(); ?>" class="button warning radius">LEER MÁS</a>
      </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
    <!-- servicios -->
    <div id="panel2" class="expanded row servicios hide">
      <?php query_posts('category_name=servicios&posts_per_page=6' ); while ( have_posts() ) : the_post(); ?>
      <div class="small-6 medium-4 large-4 columns text-center">
        <h4><?php the_title(); ?></h4>
        <hr>
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'testimonios' ); } ?>
        <?php my_excerpt(40); ?>
        <a href="<?php echo get_permalink(); ?>" class="button warning radius">LEER MÁS</a>
      </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
    <!-- noticias -->
    <div id="panel3" class="expanded row noticias hide">
      <?php query_posts('category_name=productos&posts_per_page=4' ); while ( have_posts() ) : the_post(); ?>
      <div class="small-6 medium-3 large-3 columns text-center mascara">
        <h3><?php the_title(); ?></h3>
        <hr>
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'testimonios' ); } ?>
        <?php my_excerpt(40); ?>
        <a href="<?php echo get_permalink(); ?>" class="button warning radius">LEER MÁS</a>
      </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
    <!-- proyectos -->
    <div class="expanded row collapse">
      <?php query_posts('category_name=areas&posts_per_page=4' ); while ( have_posts() ) : the_post(); ?>
      <div class="small-6 medium-3 large-3 columns text-center efecto2">
        <a href="<?php echo get_permalink(); ?>">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } ?>
          <div class="caption2">
            <h4><?php the_title(); ?></h4>
            <?php my_excerpt(40); ?>
          </div>
        </a>
      </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
    <!-- testimonios -->
    <div class="expanded row collapse testimonios">
      <h3 class="text-center">Nuestros clientes nos aman</h3>
    </div>
    <div class="testimonios orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
      <nav class="orbit-bullets">
        <button class="is-active" data-slide="0">
          <span><img src="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/04/client2.jpg"></span>
          <span class="current"><img src="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/04/client2.jpg"></span>
        </button>
        <button data-slide="1"><span><img src="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/04/client3.jpg"></span></button>
        <button data-slide="2"><span><img src="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/04/client4.jpg"></span></button>
        <button data-slide="3"><span><img src="http://desarrollo.ilia.cl/gepro/wp-content/uploads/2016/04/client5.jpg"></span></button>
      </nav>
      <ul class="orbit-container">
        <?php query_posts('category_name=testimonios, blog&posts_per_page=4' ); while ( have_posts() ) : the_post(); ?>
        <li class="orbit-slide text-center">
          <div>
            <blockquote class="text-center"><?php the_content(); ?><cite><?php the_title(); ?></cite></blockquote>
          </div>
        </li>
        <?php endwhile; wp_reset_query(); ?>
      </ul>
    </div>
    <?php get_footer(); ?>