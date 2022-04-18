<?php
/**
 * Header
 * This file is the global header
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>

	<!-- add other files -->
	<link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/project/assets/bootstrap/css/bootstrap.min.css')) ?>">
	<!-- link to custom css file -->
	<link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/project/assets/css/custom-css.css'))?>">
	<!-- bootstrap js -->
	<script type="text/javascript" src="<?php echo esc_url(home_url('wp-content/themes/project/assets/bootstrap/js/bootstrap.js')) ?>"></script>
</head>

<body <?php body_class(); ?>>
	<header class="row row-header">
		<nav class="navbar navbar-expand-lg">
			<div class="container-fluid">
				<a href="<?php echo esc_url( home_url() );?>">
				<!-- Logo used is a free image from Logopond -->
					<img class="header-img"  src="<?php echo esc_url( home_url('wp-content/uploads/2022/04/quick-coffee-logopond.png') );?>" alt="logo">
				</a>
					<?php
						wp_nav_menu(array(
							'menu'           => 'main',
							'theme_location' => '',
							'depth'          => 2,
							'fallback_cb'       => false,
							'container'      => 'ul',
							'menu_class'     => 'navbar'
						));
					?>
			</div>
		</nav>
	</header>
