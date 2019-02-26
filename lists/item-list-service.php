<!-- list-service -->
<?php
	$query_args = array(
	  'post_type' => 'service',
	  'post_status' => 'publish',
	);
	$the_query = new WP_Query($query_args);
?>

<div class="container pt-5">
	<div class="row">
		<div class="col-sm-12 text-center">
			<h2 class="title">SERVIÇOS</h2>
		</div>
		<?php if (have_posts()): while ($the_query->have_posts()) : $the_query->the_post(); ?>
			<div class="col-sm-6 text-center p-5">
				<div class="row p-5 box">
					<div class="col-sm-12">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid">
					</div>
					<div class="col-sm-12 py-2">
						<h2 class="title"><?php the_title(); ?></h2>
					</div>
					<div class="col-sm-12">
						<?php the_content();?>
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
<!-- /list-service -->