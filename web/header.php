<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      <?php if ( is_author() ) { ?><?php bloginfo('name'); ?> | Archivo por autor<?php } ?>
      <?php if ( is_month() ) { ?><?php bloginfo('name'); ?> | Archivo por Mes | <?php the_time('F'); ?><?php } ?>
      <?php if ( is_search() ) { ?><?php bloginfo('name'); ?> | Resultados<?php } ?>
      <?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?> | Archivo por Tag | <?php  single_tag_title("", true); } } ?>
      <?php if (is_home () ) { echo bloginfo('name'); echo ' | '; bloginfo('description'); }   elseif ( is_category() ) { single_cat_title(); echo ' | ' ; echo bloginfo('name'); }  elseif (is_single() || is_page()) { single_post_title(); echo ' | ' ; echo bloginfo('name'); }  else { wp_title('',true); } ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/styles.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/foundation-icons.css" />
  </head>
  <body>
    <!-- header -->
    <?php// if ( is_page( array( 'prueba', 'descarga-de-archivos-internos', 'eventos-y-actividades-2', 'pagina-de-prueba' ) ) ) { ?>
    <?php if ( is_home( ) ) { ?>
    <div class="expanded row collapse slide">
      <div class="large-12 columns text-center head">
        <a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>
      </div>
      <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-orbit>
        <ul class="orbit-container">
          <!--<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
          <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>-->
          <?php query_posts('category_name=slide&posts_per_page=4' ); while ( have_posts() ) : the_post(); ?>
          <li class="orbit-slide text-center">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
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
    </div>
    
    <?php } else { ?>
    <!-- sin nada -->
    <?php } ?>
    <!-- navegacion -->
    <div class="expanded row collapse navegacion" data-sticky-container>
      <div class="large-12 columns" data-sticky data-options="marginTop:0;" style="width:100%" data-btm-anchor="content:bottom">
        <?php if ( is_user_logged_in() ) { ?>
        <div class="top-bar">
          <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
              <li class="menu-text">
                <a href="<?php echo site_url(); ?>" style="padding:0;"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>
                
              </li>
            </ul>
          </div>
          <div class="top-bar-right">
            <ul class="dropdown menu" data-dropdown-menu>
              <li class="menu-text"><img src="http://placehold.it/205x52"></li>
              <li><a href="http://desarrollo.ilia.cl/gepro/prueba/">Link 1</a></li>
              <li><a href="http://desarrollo.ilia.cl/gepro/descarga-de-archivos-internos/">Link 2</a></li>
              <li><a href="http://desarrollo.ilia.cl/gepro/eventos-y-actividades-2/">Link 3</a></li>
              <li><a href="http://desarrollo.ilia.cl/gepro/pagina-de-prueba/">Link 4</a></li>
              <li><a href="<?php echo wp_logout_url( get_permalink() ); ?>">Cerrar Sesión</a></li>
            </ul>
          </div>
        </div>
        <?php }  else { ?>
        <div class="top-bar">
          <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
              <li class="menu-text">
                <a href="<?php echo site_url(); ?>" style="padding:0;"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>
              </li>
              <li><a href="http://desarrollo.ilia.cl/gepro/prueba/">Ingresar</a></li>
            </ul>
          </div>
          <div class="top-bar-right">
            <?php wp_nav_menu(
              array(
              'container' => false,
              'items_wrap' => '<ul class="dropdown menu" data-dropdown-menu><li class="menu-text"><img src="http://placehold.it/205x52"></li>%3$s</ul>',
              'theme_location' => 'menu_principal'
              )); ?>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
