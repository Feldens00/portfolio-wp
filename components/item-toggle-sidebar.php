<!-- Toggle -->
<div class="container py-2 d-md-none d-xs-block">
	<div class="row p-3">
		<div class="col-3">
			<button type="button" id="btn-open-sidebar" class="btn btn-info">
			    <i class="fas fa-bars"></i>
			</button>
		</div>
		<div class="col-9 text-right">
			<?php 
				$img_mobile = Util::getWidget('img-menu-mobile');
				$xpath = new DOMXPath(@DOMDocument::loadHTML($img_mobile));
				$src_mobile = $xpath->evaluate("string(//img/@src)");
			?>
			<a href="<?php echo get_site_url() ;?>">
				<img src="<?php echo $src_mobile; ?>" class="img-fluid" width="50px">
			</a>
		</div>
	</div>
</div>
<!-- /Toggle -->