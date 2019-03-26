<!-- Sidebar -->
	<div id="sidebar">
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
					<img src="<?php echo $src; ?>" class="img-icone">
				</div>
				<div class="col-sm-12 p-md-5 py-sm-2">

					<?php html5blank_nav(); ?>
				</div>
			</div>
			<div class="row p-md-2 p-sm-2 text-center" id="sidebar-footer">
				<div class="col-md-8 offset-md-2 col-xs-12">
					<div class="row p-2">
						<div class="col"><i class="fab fa-facebook-square fa-2x"></i></div>
						<div class="col"><i class="fab fa-instagram fa-2x"></i></i></div>
						<div class="col"><i class="fab fa-linkedin fa-2x"></i></div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="container py-3" id="sidebar-footer">
			
		</div> -->
	</div>
<!-- /Sidebar -->