<!-- Single -->
<?php get_header(); ?>
<?php get_template_part('components/item','sidebar'); ?>
	<div class="main">
		<?php get_template_part('components/item','toggle-sidebar'); ?>
		<section id="single">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<div class="container-fluid p-5">
					<div class="row text-center ">
						<div class="col-md-12 pt-4 title">
							<h2><?php the_title(); ?></h2>
						</div>
						<div class="col-lg-6 offset-lg-3 col-md-12 offset-md-0 pt-3 pb-5 description">
							<?php echo get_field("description"); ?>
						</div>
						<div class="col-md-12 px-5 py-2">
							<?php the_content();?>
						</div>
					</div>
				</div>

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h1><?php _e( 'Sorry, nothing to display.', 'portfolio' ); ?></h1>

				</article>
				<!-- /article -->

			<?php endif; ?>

		</section>
	</div>
<?php get_footer(); ?>
<!-- /Single -->