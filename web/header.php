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
    <div class="expanded row collapse">
      <div class="large-12 columns text-center head">
        <img src="<?php bloginfo('template_directory'); ?>/img/logo.png">
      </div>
      <div class="large-12 columns">
        <div>
          <img src="<?php bloginfo('template_directory'); ?>/img/s1.jpg">
        </div>
      </div>
    </div>
    <!-- navegacion -->
    <div class="expanded row collapse navegacion" data-sticky-container>
      <div class="large-12 columns" data-sticky data-options="marginTop:0;" style="width:100%" data-btm-anchor="content:bottom">
        <div class="top-bar">
          <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
              <li class="menu-text"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png"></li>
            </ul>
          </div>
          <div class="top-bar-right">
            <?php wp_nav_menu(
              array(
              'container' => false,
              'items_wrap' => '<ul class="dropdown menu" data-dropdown-menu><li class="menu-text"><img src="http://placehold.it/150x50"></li>%3$s</ul>',
              'theme_location' => 'menu_principal'
              )); ?>
          </div>
        </div>
      </div>
    </div>
