<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package intactonesolution
 */

?>

<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/meanmenu.min.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

<body>

<div class="page-wrapper">
	
	<!-- Cursor -->
	<div class="cursor"></div>
	<div class="cursor-follower"></div>
	<!-- Cursor End -->
 	

	
	<!-- Main Header -->
	<header class="main-header header-style-one">
		
		<!-- Header Lower -->
		<div class="header-lower">
			<div class="auto-container">
				<div class="inner-container">
					<div class="d-flex justify-content-between align-items-center flex-wrap">
						
						<div class="logo-box">
							<div class="logo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo2.svg" alt="" title="" ></a></div>
						</div>
						
						<div class="nav-outer d-flex flex-wrap">
							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md">
								<div class="navbar-header">
									<!-- Toggle Button -->    	
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								
								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li><a href="/home">Home</a></li>
										<li><a href="/about-us">About</a></li>
										<li class="dropdown"><a href="/services">Services</a>
											<ul>
												<li><a href="/website-development">Web Design and Development</a></li>
												<li><a href="/mobile-development">Mobile Application Development</a></li>
												<li><a href="/search-engine-optimization">SEO & Content Writing</a></li>
												<li><a href="/logo-and-illustration">Logo & Illustration</a></li>
												<li><a href="/branding">Branding & Graphic Design</a></li>
												<li><a href="/animation">Animation</a></li>
												<li><a href="/social-media-marketing">Social media marketing</a></li>
												<li><a href="/saas">Saas</a></li>
											</ul>
										</li>
										<li><a href="/pricings">Pricing</a></li>
										<li><a href="/blogs">Blogs</a></li>
										<li><a href="/contact-us">Contact</a></li>
									</ul>
								</div>
							</nav>
						</div>

						<!-- Main Menu End-->
						<div class="outer-box d-flex align-items-center flex-wrap">


							<!-- Button Box -->
							<div class="main-header_buttons">
								<a href="#" class="template-btn btn-style-two">
									<span class="btn-wrap">
										<span class="text-one">Calendly</span>
										<span class="text-two">Calendly</span>
									</span>
								</a>
								<a href="/pricings" class="template-btn btn-style-one">
									<span class="btn-wrap">
										<span class="text-one">Get Started</span>
										<span class="text-two">Get Started</span>
									</span>
								</a>
							</div>

							<!-- Mobile Navigation Toggler -->
							<div class="mobile-nav-toggler">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l16 0" /><path d="M4 12l16 0" /><path d="M4 18l16 0" /></svg>
							</div>

						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!--End Header Lower-->
		
		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<div class="close-btn"><span class="icon fa-solid fa-xmark fa-fw"></span></div>
			
			<nav class="menu-box">
				<div class="nav-logo"><a href="index.html"><img src="assets/images/mobile-logo.svg" alt="" title=""></a></div>
				<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
			</nav>
		</div>
		<!-- End Mobile Menu -->
	
	</header>
	<!-- End Main Header -->
	
