<!DOCTYPE html>
<?php if( is_front_page() ) { ?>
<html <?php language_attributes(); ?> class="home-html">
<?php } else { ?> 
<html <?php language_attributes(); ?>>

<?php } ?>
<head>
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title(' | ', true, 'right'); ?></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/lightbox.css">

 <!-- Include Sidr bundled CSS theme -->
 <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/sidr/jquery.sidr.dark.css">
<!-- Menu Links -->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="http://maxtestdomain.com/marie-curtis/wp-content/themes/marie-curtis/menu/script.js"></script>
<link rel="stylesheet" href="http://maxtestdomain.com/marie-curtis/wp-content/themes/marie-curtis/menu/styles.css">

<!-- Google Font Links -->
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,100italic,400italic' rel='stylesheet' type='text/css'>

<!-- Slideshow Links -->
<script src="http://maxtestdomain.com/marie-curtis/wp-content/themes/marie-curtis/slideshow/responsiveslides.js"></script>
<link rel="stylesheet" href="http://maxtestdomain.com/marie-curtis/wp-content/themes/marie-curtis/slideshow/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

<script>
  $(function() {
	$(".rslides").responsiveSlides({
		auto: true,		// Boolean: Animate automatically, true or false
		speed: 1000		// Integer: Speed of the transition, in milliseconds
	});
  });
</script>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page">
	<div class="header">
		<div class="container">
			<div id="head">
				<div id="header-top">
					<a href='http://www.maxtestdomain.com/marie-curtis/' class="logo-link"><img id='logo' src='http://www.maxtestdomain.com/marie-curtis/wp-content/uploads/2015/01/mcurtis-logo.png'></a>
					<a id="simple-menu" href="#sidr">&#8801;</a>	
				</div>
			<?php wp_nav_menu( array('container_id' => 'sidr') ); ?>
		</div>

	</div>
	<div id="header-bottom">
				
            <?php wp_nav_menu( array('container_id' => 'desktop-nav')); ?>

			<div style="clear: both;"></div>	
		</div>
	</div>
	<div style='clear: both'></div>