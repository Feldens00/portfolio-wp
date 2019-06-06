<?php
// if ( !is_user_logged_in() ) {
//    Header( "location:wp-admin/" );
// }
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script> -->

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/css/main.css">
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  		
  		<!-- Open graph facebook -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta charset="utf-8">
		<meta property="og:locale" content="en_US">
		<meta property="og:url" content="<?php bloginfo('url'); ?>"/>
		<meta property="og:title" content="<?php bloginfo('name'); ?>" />
		<meta property="og:description" content="<?php bloginfo('description'); ?>" />
		<meta property="og:image" content="<?php  echo get_template_directory_uri() . "/screenshot.png"; ?>" />
		<meta property="og:image:type" content="image/png"/>
		<meta property="og:image:width" content="414">
		<meta property="og:image:height" content="428">
		<meta property="og:type" content="website" />
		<meta property="fb:app_id" content="882345505430593">
		<!-- /Open graph facebook -->

		<?php wp_head(); ?>	
	</head>
	<body <?php body_class(); ?>>
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '882345505430593',
	      xfbml      : true,
	      version    : 'v3.3'
	    });
	    FB.AppEvents.logPageView();
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "https://connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>