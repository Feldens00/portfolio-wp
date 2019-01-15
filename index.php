<?php get_header(); ?>
<?php get_template_part('components/item','sidebar'); ?>
	<div class="main">
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
	</div>
<?php get_footer(); ?>
