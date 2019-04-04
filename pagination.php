<!-- pagination -->
<!-- <div class="div-pagination py-5">
	<?php //pagination(); ?>
</div> -->
<?php
	global $wp_query; // you can remove this line if everything works for you
	 
	// don't display the button if there are not enough posts
	if (  $wp_query->max_num_pages > 1 )
		echo '<div class="loadmore my-5 px-2 col-md-4 offset-md-4 col-6 offset-3">Carregar +</div>'; // you can use <a> as well
?>
<!-- /pagination -->
