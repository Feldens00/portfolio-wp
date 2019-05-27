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

        
  		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta property="og:locale" content="pt_BR">
		<?php 
			if(is_home()){
			 
			    $url = get_bloginfo("url");
			    
			}elseif(is_single() || is_page()){
			 
			    global $post;
			    $url = get_permalink($post->ID);
			}
		?>

		<meta property="og:url" content="<?php echo $url; ?>">

		<meta property="og:title" content="the_title()">
		<meta property="og:site_name" content="AlexandreGBK">

		<meta property="og:description" content="<?php bloginfo('description'); ?>">
		<?php 
			if(is_home()){
			 
			    $img = get_template_directory_uri().'/img/logo2.jpg';
			    $img_type = 'image/jpeg';
			}elseif(is_single() || is_page()){
			 
			    global $post;
			    $img = get_the_post_thumbnail_url($post->ID);
			    $img_type = 'image/png';
			 
			}
		?>
		<meta property="og:image" content="<?php echo $img;?>">
		<meta property="og:image:type" content="<?php echo $img_type;?>">
		<meta property="og:type" content="website">


		<?php wp_head(); ?>	
	</head>
	<body <?php body_class(); ?>>
