<?php get_header(); ?>
<?php get_template_part('components/item','sidebar'); ?>
	<div class="main">
		<?php get_template_part('components/item','toggle-sidebar'); ?>
		<?php 
			if (get_post_type() == "service") {
    			get_template_part('lists/item','list-service');
			}

			get_template_part('pagination');  
		?>
		<?php get_footer(); ?>
	</div>
