<?php
/* Template name: about */
?>
<?php get_header(); ?>
<?php get_template_part('components/item','sidebar'); ?>
  <div class="main" id="about-page">
    <?php get_template_part('components/item','toggle-sidebar'); ?>
  	<div class="container pt-md-5 h-100">
  		<div class="row h-100">
        <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-12 offset-sm-0 h-50">
          <div class="row h-100">
            <div class="col-md-12 text-center h-50 ">
              <img src="<?php echo get_template_directory_uri(); ?>/src/img/titulo-about.png" class="mh-100 w-auto mw-100" id="head-img">
            </div>
            <div class="col-md-12 text-center h-50">
              <?php the_post(); ?>
              <?php the_content(); ?>
              <?php edit_post_link("Editar"); ?>
            </div>
          </div>
  			</div>
        <div class="col-md-12 text-center h-50">
          <img src="<?php echo get_template_directory_uri(); ?>/src/img/imagem-quem-sou-eu.png" class="mw-100 w-auto" id="footer-img">
        </div>
  		</div>
  	</div>
  </div>