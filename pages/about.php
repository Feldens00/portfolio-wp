<?php
/* Template name: about */
?>
<?php get_header(); ?>
<?php get_template_part('components/item','sidebar'); ?>
<?php get_template_part('components/item','toggle-sidebar'); ?>
  <div class="main page">
  	<div class="container">
  		<div class="row">
        <div class="col-sm-6 p-md-0 py-5">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-about">
        </div>
  			<div class="col-sm-6 text-center px-5 pt-about">
  				<h2 class="title text-left py-5"><?php echo get_the_title(); ?></h2>
  				<?php the_post(); ?>
  				<?php the_content(); ?>
  				<?php edit_post_link("Editar"); ?>
  			</div>
  		</div>
  	</div>
  </div>
<?php get_footer(); ?>