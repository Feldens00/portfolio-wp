<!-- Loop -->
<?php
	$cont = 0;
?>
<div class="container-fluid list p-0">
	<div class="row-flex pb-5">
		<?php  if ( have_posts() ) :  while ( have_posts() ) : the_post();
			$cont++;
			if($cont==1):;
		?>
				<div class="column">
			<?php endif;?>
				<a href="<?php echo get_post_permalink() ?>">
					<img src="<?php the_post_thumbnail_url(); ?>" alt="Card image" style="width:100%">
				</a>

			<?php if ($cont==3):?>
				</div>
			<?php 
				$cont = 0; 
				endif;
			?>

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



