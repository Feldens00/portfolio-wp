<!-- Content - content for loop -->
<div class="col-lg-3 col-md-4 col-sm-6 col-6 p-0 post">
	<div class="hovereffect" onclick="redirect_to_post('<?php echo get_post_permalink() ?>')">
        <img class="img-fluid" src="<?php the_post_thumbnail_url('<?php echo get_post_permalink() ?>'); ?>" alt="">
        <div class="overlay">
           <div class="overlay-border">
           		<p class="info"><?php echo get_the_title(); ?></p>
           </div>
        </div>
    </div>
</div>
<!-- /Content -->
