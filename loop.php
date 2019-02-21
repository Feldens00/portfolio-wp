<!-- Loop -->
<div class="container-fluid list pb-5">
	<div class="row p-0">
		<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); 
			$slug = get_post_field( 'post_name', get_post() );
		?>

		<div class="col-sm-3 py-3 px-2 grid">
			<a href="<?php echo get_post_permalink(); ?>" id="<?php echo $slug; ?>" onclick="" style="text-decoration: none;">
				<div class="img-wraper h-100" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
					<h3 class="pt-3 obj-title text-center"><?php the_title(); ?></h3>
				</div>
			</a>
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


