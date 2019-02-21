<!-- Single -->
<?php get_header(); ?>
<?php get_template_part('components/item','sidebar'); ?>
	<div class="main">
		<section id="single">
			<?php if (have_posts()): while (have_posts()) : the_post(); 

				$img1[] = get_field("project-img-1");
				$img2[] = get_field("project-img-2");
				$img3[] = get_field("project-img-3");
				$img4[] = get_field("project-img-4");
				// echo "<pre>";
				// var_dump($img1);
			?>
				<div class="container ">
					<div class="row text-center ">
						<div class="col-md-12 py-2">
							<h2><?php the_title(); ?></h2>
							<?php the_content();?>
						</div>
						<div class="col-md-12 py-2 gallery" style="height: 80vh">
							<div class="row h-100">
								<div class="col-md-6 col-sm-12 h-100 p-0">
									<div class="row h-50">
										<div class="col-md-6 col-sm-12 h-100 p-1">
												<div class="col-md-12 h-100 p-0">
													<a href="#" id="<?php echo $img1[0]['id'];?>" onclick="oppen_lightbox('<?php echo $img1[0]['id']; ?>','<?php echo $img1[0]['title']; ?>')" >
														<img src="<?php echo $img1[0]['url']; ?>" alt="<?php echo $img1[0]['description']; ?>" class="img-fluid">
													</a>												
												</div>
										</div>
										<div class="col-md-6 col-sm-12 h-100">
											<div class="row h-50 p-1">
												<div class="col-md-12 h-100 p-0">
													<a href="#" id="<?php echo $img2[0]['id'];?>" onclick="oppen_lightbox('<?php echo $img2[0]['id']; ?>','<?php echo $img2[0]['title']; ?>')" >
														<img src="<?php echo $img2[0]['url']; ?>" alt="<?php echo $img2[0]['description']; ?>" class="img-fluid">
													</a>
												</div>
											</div>
											<div class="row h-50 p-1">
												<div class="col-md-12 col-sm-12 h-100 p-0">
													<a href="#" id="<?php echo $img3[0]['id'];?>" onclick="oppen_lightbox('<?php echo $img3[0]['id']; ?>','<?php echo $img3[0]['title']; ?>')" >
														<img src="<?php echo $img3[0]['url']; ?>" alt="<?php echo $img3[0]['description']; ?>" class="img-fluid">
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="row h-50 p-1">
										<div class="col-md-12 col-sm-12 h-100 p-0">
											<a href="#" id="<?php echo $img4[0]['id'];?>" onclick="oppen_lightbox('<?php echo $img4[0]['id']; ?>','<?php echo $img4[0]['title']; ?>')" >
												<img src="<?php echo $img4[0]['url']; ?>" alt="<?php echo $img4[0]['description']; ?>" class="img-fluid">
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-6 h-100 p-0">
									<div class="row h-100 p-1">
										<div class="col-md-12 col-sm-12 h-100">
											 <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid">
										</div>
									</div>
								</div>
							</div>
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