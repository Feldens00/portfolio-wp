<!-- Loop -->
<?php
	$query_args = array(
	'post_type' => 'project',
	'post_status' => 'publish',
	'posts_per_page' => 9
	);

	$the_query = new WP_Query($query_args);
	$cont = 0;
?>
<div class="container-fluid list p-0">
	<div class="row-flex p-0">
		<?php if (have_posts()): while ($the_query->have_posts()) : $the_query->the_post(); 
			$cont++;

			if($cont==1):?>
				<div class="column">
			<?php endif;?>

				<img src="<?php the_post_thumbnail_url(); ?>" alt="Card image" style="width:100%">

			<?php if ($cont==3): ?>
				</div>
			<?php
				$cont = 0; 
				endif;
		endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>
				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			</article>
			<!-- /article -->

		<?php endif; ?>
	</div>
</div>
<!-- /Loop -->

