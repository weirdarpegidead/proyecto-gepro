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
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/home.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/foundation-icons.css" />
    <!-- wordpress -->
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="off-canvas-wrapper">
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
          <!-- Close button -->
          <button class="close-button" aria-label="Close menu" type="button" data-close>
            <span aria-hidden="true">&times;</span>
          </button>
          <!-- Menu -->
          <?php wp_nav_menu(
            array(
            'container' => false,
            'items_wrap' => '<ul class="vertical menu">%3$s</ul>',
            'theme_location' => 'menu_principal'
            )); ?>
          <!-- menu privado -->
          <ul class="vertical menu">
            <?php if ( is_user_logged_in() ) { ?>
            <li><a href="http://desarrollo.ilia.cl/gepro/escritorio/">Escritorio</a></li>
            <li><a href="http://desarrollo.ilia.cl/gepro/prueba/">Link 1</a></li>
            <li><a href="http://desarrollo.ilia.cl/gepro/descarga-de-archivos-internos/">Link 2</a></li>
            <li><a href="http://desarrollo.ilia.cl/gepro/eventos-y-actividades-2/">Link 3</a></li>
            <li><a href="http://desarrollo.ilia.cl/gepro/pagina-de-prueba/">Link 4</a></li>
            <li><a href="<?php echo wp_logout_url( get_permalink() ); ?>">Cerrar Sesión</a></li>
            <?php } else { ?>
            <li><a href="http://desarrollo.ilia.cl/gepro/prueba/">Ingresar</a></li>
            <?php } ?>
          </ul>
        </div>
        <div class="off-canvas-content" data-off-canvas-content>
          <!-- navegacion tablets y smartphones -->
          <div class="expanded row collapse navegacion hide-for-large">
            <div class="large-12 columns">
              <div class="top-bar">
                <div class="top-bar-left">
                  <ul class="dropdown menu" data-dropdown-menu>
                    <li class="menu-text">
                      <a href="<?php echo site_url(); ?>" style="padding:0;"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>
                    </li>
                  </ul>
                </div>
                <div class="top-bar-right show-for-medium-only">
                  <ul class="dropdown menu" data-dropdown-menu>
                    <li class="menu-text"><img src="http://placehold.it/150x50"></li>
                    <li><a href="#" data-toggle="offCanvasRight"><i class="fi-align-justify"></i></a></li>
                  </ul>
                </div>
                <div class="top-bar-right show-for-small-only">
                  <ul class="dropdown menu align-right" data-dropdown-menu>
                    <li><a href="#" data-toggle="offCanvasRight"><i class="fi-align-justify"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- navegacion pc -->
          <div class="expanded row collapse navegacion show-for-large">
            <div class="large-12 columns">
              <?php if ( is_user_logged_in() ) { ?>
              <div class="top-bar">
                <div class="top-bar-left">
                  <ul class="dropdown menu" data-dropdown-menu>
                    <li class="menu-text">
                      <a href="<?php echo site_url(); ?>" style="padding:0;"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>
                      <li><a href="<?php echo wp_logout_url( get_permalink() ); ?>">Cerrar Sesión</a></li>
                      <li><a href="http://desarrollo.ilia.cl/gepro/escritorio/">Intranet</a></li>
                    </li>
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
              <?php }  else { ?>
              <div class="top-bar">
                <div class="top-bar-left">
                  <ul class="dropdown menu" data-dropdown-menu>
                    <li class="menu-text">
                      <a href="<?php echo site_url(); ?>" style="padding:0;"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>
                    </li>
                    <li><a href="http://desarrollo.ilia.cl/gepro/escritorio/">Ingresar</a></li>
                  </ul>
                </div>
                <div class="top-bar-right show-for-large">
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
          <!-- header -->
          <?php// if ( is_page( array( 'prueba', 'descarga-de-archivos-internos', 'eventos-y-actividades-2', 'pagina-de-prueba' ) ) ) { ?>
          <?php if ( is_home( ) ) { ?>
          <div class="row show-for-large hide">
            <div class="large-12 columns text-center head">
              <a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>
            </div>
          </div>
          <div class="row slide show-for-large">
            <div class="large-12 columns">
              <div class="orbit" role="region" data-orbit data-orbit>
                <ul class="orbit-container">
                  <?php query_posts('category_name=slide&posts_per_page=4' ); while ( have_posts() ) : the_post(); ?>
                  <li class="orbit-slide text-center">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                    <figcaption class="orbit-caption">
                      <h4><?php the_title(); ?></h4>
                      <?php the_content(); ?>
                    </figcaption>
                  </li>
                  <?php endwhile; wp_reset_query(); ?>
                </ul>
              </div>
            </div>
          </div>
          <?php } else { ?>
          <!-- sin nada porque no es el home -->
          <?php } ?>

