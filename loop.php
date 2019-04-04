<!-- Loop -->
<div class="container-fluid list">
	<div class="row" id="content"> 
		<?php  if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
			
			<?php get_template_part('content'); ?>

		<?php endwhile; ?>

		<div class="d-none">
			<?php 

				the_posts_pagination(
					array(
						'prev_text'          => '<span class="screen-reader-text">' . __( 'Previous page') . '</span>',
						'next_text'          => '<span class="screen-reader-text">' . __( 'Next page' ) . '</span>',
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page') . ' </span>',
					)
				);

			?>
		</div>

		<?php else: ?>

			<div class="col-sm-12">
				<h2>Nada para Mostrar</h2>
			</div>

		<?php endif;  ?>
		<?php get_template_part('pagination'); ?>

	</div>
</div>
<!-- /Loop -->