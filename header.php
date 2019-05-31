<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
	<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
</head>

<body <?php body_class(); ?>>
<header id="header" class="header">
<div class="header-group">
<div class="site-branding">

		<div class="logo">
			<img src="<?php bloginfo('template_directory'); ?>/img/mklogo-01.svg" class="db">
			<p>Maxwell Kirwin</p>
		</div>

		<nav>
			<!-- <p>Home</p>
			<p>Work</p> -->
			<a href="mailto:hello@maxwellkirwin.co.uk"><p>Contact</p></a>
		</nav>
	</div>
</div>
</header>

