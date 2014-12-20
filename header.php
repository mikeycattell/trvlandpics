<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  		<script src="//use.typekit.net/mnb4izd.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		
			<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->	
	</head>
	
	<body <?php body_class(); ?>>
				
		<header role="banner" style="text-align: center;">
				

				<a class="brand_logo" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><h1 class="subtitle fancy"><span>trvl and pics</span></h1></a>
				<div class="height5"></div>

				<p class="introduction"> Pictures of my travels, friends and fun stuff using Panasonic Lumix DMC-GF3KK, PowerShot S120 and an iPhone 5s. </p>

				<hr class="header_hr">
			<div class="navbar navbar-default">
				<div class="container">
  
					
						<div class="navbar-inner">
							<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
						</div>
					

				</div> <!-- end .container -->
			</div> <!-- end .navbar -->		

		</header> <!-- end header -->

		<div class="height10"></div>


		<div class="container">
