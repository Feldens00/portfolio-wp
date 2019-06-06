<?php
/* Template name: service */
?>
<?php get_header(); ?>
<?php get_template_part('components/item','sidebar'); ?>
  <div class="main page p-0">
    <?php get_template_part('components/item','toggle-sidebar'); ?>
  	<div class="container-fluid p-0 m-0" id="service-page">
  		<div class="row p-0 m-0 h-100">

  			<div class="col-xl-4 col-md-12 col-sm-12 p-0 text-center h-100 grey-bg">
          <div class="h-15">
          </div>
          <div class="h-85">
            <?php $service1 = Util::getFirstWidgetObj('service1');?>
            <div class="p-xl-5 p-md-5 h-50">
              <h3><?php echo $service1['title'];?></h3>
              <p><?php echo $service1['content']; ?></p>
            </div>
            <div class="h-50 d-xl-flex d-block align-items-end text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/src/img/sites.png" class="img-site">
            </div>
          </div>
  			</div>

        <div class="col-xl-4 col-md-12 col-sm-12 p-0 h-100 text-center">
          <div class="h-25 text-left">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/design-grafico.png" class="mh-100 w-auto">
          </div>
          <div class="h-75">
            <?php $service2 = Util::getFirstWidgetObj('service2');?>
            <div class="p-xl-5 p-md-5 h-75 text-middle">
              <h3><?php echo $service2['title'];?></h3>
              <p><?php echo $service2['content']; ?></p>
            </div>
            <div class="h-25 text-right footer-block">
              <img src="<?php echo get_template_directory_uri(); ?>/src/img/design-grafico-2.png" class="img-fluid">
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-md-12 col-sm-12 p-0 text-center h-100 grey-bg">
          <div class="h-15">
          </div>
          <div class="h-85">
            <?php $service3 = Util::getFirstWidgetObj('service3');?>
            <div class="p-xl-5 p-md-5 h-50">
              <h3><?php echo $service3['title'];?></h3>
              <p><?php echo $service3['content']; ?></p>
            </div>
            <div class="h-50 text-right footer-block">
              <img src="<?php echo get_template_directory_uri(); ?>/src/img/midias-sociais.png" class="img-fluid">
            </div>
          </div>
        </div>

  		</div>
  	</div>
  </div>
