<?php
/*
Template Name: Portfolio*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Portfolio - IOS</title>
<!-- Stylesheets -->
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/meanmenu.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,600;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

		<!-- Preloader -->
	<div class="loader-wrap">
		<div class="preloader">
			<div class="preloader-close">x</div>
			<div id="handle-preloader" class="handle-preloader">
				<div class="animation-preloader">
					<div class="txt-loading">
						<span data-text-preloader="L" class="letters-loading">L</span>
						<span data-text-preloader="O" class="letters-loading">O</span>
						<span data-text-preloader="A" class="letters-loading">A</span>
						<span data-text-preloader="D" class="letters-loading">D</span>
						<span data-text-preloader="I" class="letters-loading">I</span>
						<span data-text-preloader="N" class="letters-loading">N</span>
						<span data-text-preloader="G" class="letters-loading">G</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Preloader End -->

<?php

get_header();
?>


<!-- Page Title -->
<section class="page-title">
    <div class="page-title-icon" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/icons/page-title_icon-1.png')"></div>
    <div class="page-title-icon-two" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/icons/page-title_icon-2.png')"></div>
    <div class="page-title-shadow" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/background/page-title-1.png')"></div>
    <div class="page-title-shadow_two" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/background/page-title-2.png')"></div>
    <div class="auto-container">
        <h2>Portfolio</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="/home">Home</a></li>
            <li>Portfolio</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->


<!-- Website portfolio -->
<section class="team-one">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Title Column -->
            <div class="team-one_title-column col-lg-4 col-md-12 col-sm-12">
                <div class="team-one_title-outer">
                    <!-- Sec Title -->
                    <div class="sec-title style-four">
                        <div class="sec-title_title">Website Design</div>
                        <h2 class="sec-title_heading">Tailored Websites for Seamless <span>User Experience</span></h2>
                        <div class="sec-title_text">
                            
                            At Intact One Solution, we specialize in website design that combines aesthetics 
and functionality. Our custom web development ensures a mobile-friendly and SEO-optimized
experience, aligning with your brand's identity to enhance user experience. We create digital 
platforms that not only improve business growth but also turn visitors into loyal customers.
                            
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="team-one_arrows">
                        <div class="team_carousel-prev fa-solid fa-angle-left fa-fw"></div>
                        <div class="team_carousel-next fa-solid fa-angle-right fa-fw"></div>
                    </div>
                </div>
            </div>

            <!-- Team Column -->
            <div class="team-one_team-column col-lg-8 col-md-12 col-sm-12">
                <div class="team-one_team-outer">
                    <div class="team-carousel swiper-container">
                        <div class="swiper-wrapper">
                            
                            
                                                                                                             <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/web1.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                                                                                 <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/web2.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                                              <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/web3.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                                 <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/web4.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                             <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/web5.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                        <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/web6.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- logo portfolio -->
<section class="team-one">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Team Column -->
            <div class="team-one_team-column col-lg-8 col-md-12 col-sm-12">
                <div class="team-one_team-outer">
                    <div class="team-carousel swiper-container">
                        <div class="swiper-wrapper">
                            
                            
                                                                                                             <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/logo1.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                                                                                 <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/logo2.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                                              <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/logo3.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                                 <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/logo4.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                             <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/logo5.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                        <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/logo6.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                                                 <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/logo7.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>

                </div>
            </div>

            <!-- Title Column -->
            <div class="team-one_title-column col-lg-4 col-md-12 col-sm-12">
                <div class="team-one_title-outer">
                    <!-- Sec Title -->
                    <div class="sec-title style-four">
                        <div class="sec-title_title">Logo Design & Branding</div>
                        <h2 class="sec-title_heading">Logos & Branding That Define <span>Your Business</span></h2>
                        <div class="sec-title_text">
                            
First impressions matter, and our logo design and branding solutions at Intact One 
Solution ensure your business stands out. We deliver custom logos that capture your business 
identity, and develop brand strategies to maintain a consistent brand voice across all 
platforms. Elevate your brand with our comprehensive design services.
                            
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="team-one_arrows">
                        <div class="team_carousel-prev fa-solid fa-angle-left fa-fw"></div>
                        <div class="team_carousel-next fa-solid fa-angle-right fa-fw"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- packaging portfolio -->
<section class="team-one">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Title Column -->
            <div class="team-one_title-column col-lg-4 col-md-12 col-sm-12">
                <div class="team-one_title-outer">
                    <!-- Sec Title -->
                    <div class="sec-title style-four">
                        <div class="sec-title_title">Packaging Designs</div>
                        <h2 class="sec-title_heading">Innovative Packaging Designs That <span>Elevate Your Products</span></h2>
                        <div class="sec-title_text">
                            
At Intact One Solution, we design custom packaging that enhances product appeal
and reflects your brand ethos. Our packaging designs not only protect your products but also 
maximize their presence on the shelf. With our innovative and aesthetic packaging solutions, 
your product becomes irresistible.
                            
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="team-one_arrows">
                        <div class="team_carousel-prev fa-solid fa-angle-left fa-fw"></div>
                        <div class="team_carousel-next fa-solid fa-angle-right fa-fw"></div>
                    </div>
                </div>
            </div>

            <!-- Team Column -->
            <div class="team-one_team-column col-lg-8 col-md-12 col-sm-12">
                <div class="team-one_team-outer">
                    <div class="team-carousel swiper-container">
                        <div class="swiper-wrapper">
                            
                            
                                                                                                             <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/packaging1.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                                                                                 <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/packaging2.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                                              <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/packaging3.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                                 <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/packaging4.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                             <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/packaging5.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                        <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/packaging6.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- illustrations portfolio -->
<section class="team-one">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Team Column -->
            <div class="team-one_team-column col-lg-8 col-md-12 col-sm-12">
                <div class="team-one_team-outer">
                    <div class="team-carousel swiper-container">
                        <div class="swiper-wrapper">
                            
                            
                                                                                                             <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/illustration1.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                                                                                 <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/illustration2.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                                              <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/illustration3.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                                 <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/illustration4.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                             <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/illustration5.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                        <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/illustration6.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                                                 <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/illustration7.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                                                 <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/illustration8.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>

            <!-- Title Column -->
            <div class="team-one_title-column col-lg-4 col-md-12 col-sm-12">
                <div class="team-one_title-outer">
                    <!-- Sec Title -->
                    <div class="sec-title style-four">
                        <div class="sec-title_title">Illustrations</div>
                        <h2 class="sec-title_heading">Captivating Illustrations That Tell Your <span>Brand Story</span></h2>
                        <div class="sec-title_text">
                            
Our custom illustrations bring your ideas to life, visually communicating your 
brand message. Whether for digital media or print, our creative illustrations offer a unique and 
engaging touch, ensuring your brand connects with your audience on a deeper level
                            
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="team-one_arrows">
                        <div class="team_carousel-prev fa-solid fa-angle-left fa-fw"></div>
                        <div class="team_carousel-next fa-solid fa-angle-right fa-fw"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Social Media Posts portfolio -->
<section class="team-one">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Title Column -->
            <div class="team-one_title-column col-lg-4 col-md-12 col-sm-12">
                <div class="team-one_title-outer">
                    <!-- Sec Title -->
                    <div class="sec-title style-four">
                        <div class="sec-title_title">Social Media Posts</div>
                        <h2 class="sec-title_heading">Engaging Social Media Designs to Boost Your <span>Online Presence</span></h2>
                        <div class="sec-title_text">
                            
At Intact One Solution, we design custom packaging that enhances product appeal
and reflects your brand ethos. Our packaging designs not only protect your products but also 
maximize their presence on the shelf. With our innovative and aesthetic packaging solutions, 
your product becomes irresistible.
                            
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="team-one_arrows">
                        <div class="team_carousel-prev fa-solid fa-angle-left fa-fw"></div>
                        <div class="team_carousel-next fa-solid fa-angle-right fa-fw"></div>
                    </div>
                </div>
            </div>

            <!-- Team Column -->
            <div class="team-one_team-column col-lg-8 col-md-12 col-sm-12">
                <div class="team-one_team-outer">
                    <div class="team-carousel swiper-container">
                        <div class="swiper-wrapper">
                            
                            
                                                                                                             <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm1.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                                                                                 <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm2.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                                              <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm3.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                                 <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm4.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                             <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm5.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                        <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/sm6.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- Infographics portfolio -->
<section class="team-one">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Team Column -->
            <div class="team-one_team-column col-lg-8 col-md-12 col-sm-12">
                <div class="team-one_team-outer">
                    <div class="team-carousel swiper-container">
                        <div class="swiper-wrapper">
                            
                            
                                                                                                             <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/info1.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                                                                                 <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/info2.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                                              <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/info3.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                                 <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/info4.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                             <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/info5.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                        <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/info6.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                                                 <!-- Slide -->
                            <div class="swiper-slide">
                                <!-- Team Block One -->
                                <div class="team-block_one">
                                    <div class="team-block_one-inner">
                                        <div class="team-block_one-image">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/info7.svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>

                </div>
            </div>

            <!-- Title Column -->
            <div class="team-one_title-column col-lg-4 col-md-12 col-sm-12">
                <div class="team-one_title-outer">
                    <!-- Sec Title -->
                    <div class="sec-title style-four">
                        <div class="sec-title_title">Infographics</div>
                        <h2 class="sec-title_heading">Data-Driven Infographics for <span>Clear & Impactful Communication</span></h2>
                        <div class="sec-title_text">
                            
Simplify complex data with our engaging infographics. Intact One Solution designs 
clear and concise visuals that effectively communicate your message. Whether for 
presentations, websites, or social media, our infographics are the perfect tool for visual 
communication
                            
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="team-one_arrows">
                        <div class="team_carousel-prev fa-solid fa-angle-left fa-fw"></div>
                        <div class="team_carousel-next fa-solid fa-angle-right fa-fw"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php

get_footer();
?>