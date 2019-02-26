<!-- Sidebar -->
	<div class="sidebar">
		<div class="container py-md-2 py-sm-5 my-md-3 my-sm-0 container-border">
			<div class="row py-5">
				<div class="col-sm-12 text-center">
					<?php 
						$img = Util::getWidget('img-menu');
						$xpath = new DOMXPath(@DOMDocument::loadHTML($img));
						$src = $xpath->evaluate("string(//img/@src)");
					?>
					<img src="<?php echo $src; ?>" class="img-icone">
				</div>
				<div class="col-sm-12 div-menu">

					<?php html5blank_nav(); ?>
				</div>
			</div>
			<div class="row p-5 text-center" id="sidebar-footer">
				<div class="col"><i class="fab fa-facebook-f fa-2x"></i></div>
				<div class="col"><i class="fab fa-facebook-f fa-2x"></i></div>
				<div class="col"><i class="fab fa-facebook-f fa-2x"></i></div>
			</div>
		</div>
		<!-- <div class="container py-3" id="sidebar-footer">
			
		</div> -->
	</div>
<!-- /Sidebar -->