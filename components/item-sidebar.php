<!-- Sidebar -->
	<div id="sidebar" class="bg-grey">
		<div class="container">
			<div class="row py-md-2 py-3">
				<div class="col-sm-12 text-right d-md-none d-xs-block">
					<button type="button" id="btn-close-sidebar" class="btn">
					    <i class="fas fa-times"></i>
					</button>
				</div>
				<div class="col-sm-12 text-center py-5">
					<?php 
						$img = Util::getWidget('img-menu');
						$xpath = new DOMXPath(@DOMDocument::loadHTML($img));
						$src = $xpath->evaluate("string(//img/@src)");
					?>
					<a href="<?php echo get_site_url() ;?>">
						<img src="<?php echo $src; ?>" class="img-icone">
					</a>
				</div>
				<div class="col-sm-12 p-md-5 py-sm-2">

					<?php html5blank_nav(); ?>
				</div>
			</div>
			<div class="row p-md-2 p-sm-2 text-center" id="sidebar-footer">
				<div class="col-md-8 offset-md-2 col-10 offset-1">
					<div class="row p-2">
						<div class="col">
							<a href="https://wa.me/5551992306664?text=Olá!%20Tudo%20bem?%20Entro%20em%20contato%20através%20do%20site%20AlexandreGBK!" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/src/img/whats.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/src/img/whats-cor.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/src/img/whats.png'" class="img-fluid">
							</a>
						</div>
						<div class="col">
							<a href="https://www.facebook.com/alexandregbk" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/src/img/face.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/src/img/face-cor.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/src/img/face.png'" class="img-fluid">
							</a>
						</div>
						<div class="col">
							<a href="https://www.instagram.com/xandygbk/" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/src/img/insta.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/src/img/insta-cor.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/src/img/insta.png'" class="img-fluid">
							</a>
						</div>
						<div class="col">
							<a href="https://www.linkedin.com/in/alexandre-kuhn-3638085a/" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/src/img/linkedim.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/src/img/linkedim-cor.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/src/img/linkedim.png'" class="img-fluid">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="container py-3" id="sidebar-footer">
			
		</div> -->
	</div>
<!-- /Sidebar -->