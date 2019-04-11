<?php get_header(); ?>
<?php get_template_part('components/item','sidebar'); ?>
	<div class="main" id="page-error">
			<div class="container pt-5">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1>Erro 404</h1>
						<p>O endereço que você digitou não existe!</p>
						<img src="<?php echo get_template_directory_uri(); ?>/src/img/error-404.png">
					</div>
				</div>
			</div>
	</div>

<?php get_footer(); ?>
