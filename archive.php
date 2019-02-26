<?php get_header(); ?>
<?php get_template_part('components/item','sidebar'); ?>
	<div class="main">
			<?php 
				if (get_post_type() == "service") {
        			get_template_part('lists/item','list-service');
    			}

    			get_template_part('pagination');  
    		?>
	</div>
<?php get_footer(); ?>
