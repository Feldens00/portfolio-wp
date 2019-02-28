<!-- Loop -->
<?php $cont = 0;  ?>
<div class="container-fluid list p-5">
	<div class="row">
		
	<?php  if ( have_posts() ) :  while ( have_posts() ) : the_post(); 
		$cont++;
	?>
		<div class="col-lg-3 col-md-4 col-sm-6 col-12 p-2">
			<div class="hovereffect">
		        <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
		        <div class="overlay">
		           <div class="overlay-border">
		           		<a class="info" href="<?php echo get_post_permalink() ?>"><?php echo get_the_title(); ?></a>
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