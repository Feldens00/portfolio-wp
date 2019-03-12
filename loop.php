<!-- Loop -->
<div class="container-fluid list pb-5">
	<div class="row">
		
	<?php  if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
		<div class="col-lg-3 col-md-4 col-sm-6 col-6 p-0">
			<div class="hovereffect" onclick="redirect_to_post('<?php echo get_post_permalink() ?>')">
		        <img class="img-fluid" src="<?php the_post_thumbnail_url('<?php echo get_post_permalink() ?>'); ?>" alt="">
		        <div class="overlay">
		           <div class="overlay-border">
		           		<p class="info"><?php echo get_the_title(); ?></p>
		           </div>
		        </div>
		    </div>
		</div>

	<?php endwhile; ?>
	<?php else: ?>

		<!-- article -->
		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</article>
		<!-- /article -->

	<?php endif;  ?>
</div>
</div>
<!-- /Loop -->