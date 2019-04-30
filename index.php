<?php get_header(); ?>
<?php get_template_part('components/item','sidebar'); ?>
	<div class="main bg-grey" id="main">
			<?php get_template_part('components/item','toggle-sidebar'); ?>
			<?php get_template_part('loop'); ?>
	</div>
<?php get_footer(); ?>
