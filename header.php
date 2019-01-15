<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/css/main.css">
        <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/js/main.js"> -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">

        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
