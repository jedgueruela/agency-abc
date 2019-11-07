<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?> <?php if( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">
		<div class="container">
			<a class="navbar-brand" href="#"><?php echo bloginfo('name'); ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php
	            wp_nav_menu( array(
	                'theme_location'  => 'primary',
	                'depth'           => 2,
	                'container'       => 'div',
	                'container_class' => 'collapse navbar-collapse',
	                'container_id'    => 'navbarSupportedContent',
	                'menu_class'      => 'navbar-nav ml-auto',
	                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
	                'walker'          => new WP_Bootstrap_Navwalker(),
	            ) );
        	?>
		</div>
	</nav>