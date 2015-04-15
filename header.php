<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(' | ', true, 'right'); ?></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

<!-- Menu Links -->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="http://maxtestdomain.com/marie-curtis/wp-content/themes/marie-curtis/menu/script.js"></script>
<link rel="stylesheet" href="http://maxtestdomain.com/marie-curtis/wp-content/themes/marie-curtis/menu/styles.css">

<!-- Google Font Links -->
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,100italic,400italic' rel='stylesheet' type='text/css'>

<!-- Slideshow Links -->
<script src="http://maxtestdomain.com/marie-curtis/wp-content/themes/marie-curtis/slideshow/responsiveslides.js"></script>
<link rel="stylesheet" href="http://maxtestdomain.com/marie-curtis/wp-content/themes/marie-curtis/slideshow/style.css">

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
					<a href='http://www.maxtestdomain.com/marie-curtis/'><img id='logo' src='http://www.maxtestdomain.com/marie-curtis/wp-content/uploads/2015/01/mcurtis-logo.png'></a>
				</div>
				<div id="header-bottom">
					<div id='cssmenu'>
					<ul>
						<li><a href='http://www.maxtestdomain.com/marie-curtis/'><span>Home</span></a></li>
						<li class='active has-sub'><a href='http://maxtestdomain.com/marie-curtis/inventory'><span>Inventory</span></a>
							<ul>
								<li><a href="http://www.maxtestdomain.com/marie-curtis/frames/">Frames</a></li>
								<li><a href="http://www.maxtestdomain.com/marie-curtis/frames/">Frames</a></li>
<!-- 								<li class='has-sub'>
									<a href='http://www.maxtestdomain.com/marie-curtis/lighting/'><span>Lighting</span></a>
									<ul>
										<li><a href='http://www.maxtestdomain.com/marie-curtis/lighting/chandeliers/'><span>Chandeliers</span></a></li>
										<li><a href='http://www.maxtestdomain.com/marie-curtis/lighting/sconces/'><span>Sconces</span></a></li>
										<li class='last'><a href='http://www.maxtestdomain.com/marie-curtis/lighting/lamps/'><span>Lamps</span></a></li>
								
									</ul>
								</li>
								
								<li><a href='http://www.maxtestdomain.com/marie-curtis/antique-and-vintage-decorative-accessories/'><span>Antique and Vintage Decorative Accessories</span></a></li>
								<li><a href='http://www.maxtestdomain.com/marie-curtis/m-curtis-custom-vintage-filigree-frames/'><span>M. Curtis Custom Vintage Filigree Frames</span></a></li>
								<li><a href='http://www.maxtestdomain.com/marie-curtis/rare-vintage-italian-murano-glass-frames/'><span>Rare Vintage Italian Murano Glass Frames</span></a></li>
								<li><a href='http://www.maxtestdomain.com/marie-curtis/wall-decor-art/'><span>Wall Decor & Art</span></a></li>
								<li><a href='http://www.maxtestdomain.com/marie-curtis/fine-french-and-italian-antiques/'><span>Fine French and Italian Antiques</span></a></li>
								<li><a href='http://www.maxtestdomain.com/marie-curtis/mirrors/'><span>Mirrors</span></a></li>
								<li><a href='http://www.maxtestdomain.com/marie-curtis/seating/'><span>Seating</span></a></li>
								<li><a href='http://www.maxtestdomain.com/marie-curtis/tables/'><span>Tables</span></a></li> -->
							</ul>
							
						<li><a href='http://www.maxtestdomain.com/marie-curtis/interior-design/'><span>Interior Design</span></a></li>
						<li><a href='http://www.maxtestdomain.com/marie-curtis/about-m-curtis/'><span>About M. Curtis</span></a></li>
						<li class='last'><a href='http://www.maxtestdomain.com/marie-curtis/contact-us/'><span>Contact</span></a></li>
					</ul>
					</div>
				</div>
			</div>
			<div style='clear: both'></div>
		</div>
	</div>