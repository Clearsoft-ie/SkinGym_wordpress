<!DOCTYPE html>
<html dir="ltr" lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Skin Gym | Love the skin you are in</title>
		<meta name="description" content="" />
		<meta name="Author" content="ClearSoft" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />
		<!-- CORE CSS -->
		<link href="<?php echo get_template_directory_uri() ;?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!-- THEME CSS -->
		<link href="<?php echo get_template_directory_uri() ;?>/assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo get_template_directory_uri() ;?>/assets/css/layout.css" rel="stylesheet" type="text/css" />
		<!-- PAGE LEVEL SCRIPTS -->
		<link href="<?php echo get_template_directory_uri() ;?>/assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo get_template_directory_uri() ;?>/assets/css/color_scheme/orange.css" rel="stylesheet" type="text/css" id="color_scheme" />
        <!-- Before After Slider -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ;?>/assets/css/cocoen.min.css" />
		
		<!-- Custom CSS -->
		<link href="<?php echo get_template_directory_uri() ;?>/assets/css/custom.css" rel="stylesheet" type="text/css" />

        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <?php wp_head(); ?>
	</head>

	<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/_smarty/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">

		<!-- wrapper -->
		<div id="wrapper">

			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.b-0 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent b-0"
			-->

				<?php if ( is_front_page()) : ?>
					<div id="header" class="navbar-toggleable-md sticky transparent clearfix">
				<?php else: ?>
					<div id="header" class="navbar-toggleable-md clearfix header-md sticky b-0 disable-uppercase">
				<?php endif; ?>	

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>
							<ul class="float-right nav nav-pills nav-second-main">

							<!-- SEARCH -->
							<li class="search">
								<a href="javascript:;">
									<i class="fa fa-search"></i>
								</a>
								<div class="search-box">
									<form role="search" method="get" id="searchform" class="search-form" action="<?php echo home_url('/'); ?>">
										<div class="input-group">
											<input type="text" name="s" placeholder="Search" class="form-control" />
											<span class="input-group-btn">
												<button class="btn btn-primary" type="submit">Search</button>
											</span>
										</div>
										<!-- <button type="submit" class="search-submit"><span class="screen-reader-text">Search</span></button> -->
									</form>
								</div> 
							</li>
							<!-- /SEARCH -->

						</ul>
						<!-- Logo -->
						<a class="logo float-left" href="<?php echo get_home_url() ?>">
							<?php if ( is_front_page()) : ?>
								<img src="<?php echo get_template_directory_uri() ;?>/assets/images/logo_light.png" alt="" />
								<img src="<?php echo get_template_directory_uri() ;?>/assets/images/logo_dark.png" alt="" />
							<?php else: ?>
								<img src="<?php echo get_template_directory_uri() ;?>/assets/images/logo_dark.png" alt="" />
								<img src="<?php echo get_template_directory_uri() ;?>/assets/images/logo_dark.png" alt="" />
							<?php endif; ?>
						</a>

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse collapse float-right nav-main-collapse submenu-dark">
							<nav class="nav-main">

								<!--
									NOTE
									
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example: 

									<li>
										<a href="#">HOME</a>
									</li>
								-->
                                <ul id="topMain" class="nav nav-pills nav-main">
	                                <?php
											if ( has_nav_menu( 'primary-menu' ) ) {
												wp_nav_menu( array(
													'container' 		=> '',
													'items_wrap' 		=> '%3$s',
													'theme_location' 	=> 'primary-menu',
													'walker'  => new Child_Wrap(),
												) );
											} else {
												wp_list_pages( array(
													'container' => '',
													'title_li' 	=> '',
												) );
											}
										?>
										<li class="nav-animate-fadeIn nav-hover-animate hover-animate-bounceIn"><!-- THEMATIC -->
											<a class="dropdown-toggle noicon" href="<?php echo get_home_url() ?>/special-offers/">
												<span class="badge badge-danger float-right fs-11">Great Vlaue</span>
												<b>Special Offers</b>
											</a>
										</li>
                                </ul>
                            </nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>

			<?php if ( is_front_page()) : ?>

			<?php else: ?>
				<div class=container>
			<?php endif; ?>