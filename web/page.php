    <?php get_header(); ?>
    <!-- contenido page que hacemos -->
    <?php if ( is_page( 'que-hacemos' ) ) { ?>
    <div class="row contenido">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="large-12 columns ">
        <h1 class="text-center"><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
      <?php endwhile; else: ?><p>Lo sentimos, no se han encontrado entradas.</p>
      <?php endif; ?>
    </div>
    <div class="row contenido">
      <div class="large-12 columns text-center">
        <h1>Como</h1>
        <h4>Filosofía LEAN</h4>
      </div>
    </div>

    <div class="show-for-large centrar">
                <div class="row">
                  <div class="large-12 columns">
                    <a href="<?php echo site_url(); ?>/herramientas/"><div id="panela" class="triangle-up arriba" style="left:105px;margin-bottom:5px;"><p class="titu1">Herramientas</p></div></a>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <a href="<?php echo site_url(); ?>/cultura/"><div class="triangle-up abajo" style="right:0px;"><p class="titu2">Cultura</p></div></a>
                    <div class="triangle-down abajo" style="right:95px;"></div>
                    <img src="<?php echo site_url(); ?>/wp-content/themes/web/img/logo.png">
                    <a href="<?php echo site_url(); ?>/filosofia/"><div class="triangle-up abajo" style="right:190px;"><p class="titu3">Filosofía</p></div></a>
                  </div>
                </div>
              </div>


    <?php } else { ?>

    <!-- contenido page normal -->
    <div class="row contenido">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="large-5 columns mascara">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'single' ); } else { ?>
        <div class="mapax">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2352.646445079888!2d-70.61302819087281!3d-33.49761715948321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d009320fce59%3A0x7300292c905d08eb!2sMIDE+UC!5e0!3m2!1ses!2scl!4v1462889485117" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <?php } ?>
      </div>
      <div class="large-7 columns ">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
      <?php endwhile; else: ?><p>Lo sentimos, no se han encontrado entradas.</p>
      <?php endif; ?>
    </div>
    <?php } ?>
    <?php get_footer(); ?>

