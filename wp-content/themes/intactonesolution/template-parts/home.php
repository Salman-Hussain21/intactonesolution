<?php
/*
Template Name: Home Page*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Home - IOS</title>
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

<!-- Slider One -->
<section class="slider-one">
    <div class="main-slider swiper-container">
        <div class="swiper-wrapper">

            <!-- Slide -->
            <div class="swiper-slide">
                <div class="slider-one_icon" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/icon-1.png)"></div>
                <div class="slider-one_icon-two" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/icon-1.png)"></div>
                <div class="slider-one_pattern" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/pattern-1.png)"></div>
                <div class="slider-one_pattern-two" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/pattern-2.png)"></div>
                <div class="slider-one_pattern-four" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/pattern-4.png)"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <!-- Content Column -->
                        <div class="slider-one_content col-lg-7 col-md-12 col-sm-12">
                            <div class="slider-one_content-inner">
<!--                                 <div class="slider-one_title">
                                    <i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/hand.png" alt="" /></i>
                                    AI makes content fast & easy
                                </div> -->
                                <h1 class="slider-one_heading">Empowering Your Business <span>with Innovative</span> IT Solutions</h1>
                                <div class="slider-one_text">Unlock the potential of your business with Intact One Solution’s expertise in IT services tailored for growth and efficiency.</div>
                                <div class="slider-one_button d-flex align-items-center flex-wrap">
                                    <a href="about.html" class="template-btn btn-style-one">
                                        <span class="btn-wrap">
                                            <span class="text-one">Let’s Transform Together</span>
                                            <span class="text-two">Let’s Transform Together</span>
                                        </span>
                                    </a>
<!--                                     <div class="slider-one_video">
                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-video play-box"><span class="fa fa-play"></span></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- Image Column -->
                        <div class="slider-one_image-column col-lg-5 col-md-12 col-sm-12">
                            <div class="slider-one_pattern-three" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/pattern-3.png)"></div>
                            <div class="slider-one_image-outer">
                                <!-- Slider One Author -->
<!--                                 <div class="slider-one_author">
                                    <i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/icon-2.png" alt="" /></i>
                                    <h5 class="slider-one_author-name">Sara Ven</h5>
                                    <div class="slider-one_author-text">Social media manager</div>
                                </div> -->
                                <!-- Slider One Percent -->
                                <div class="slider-one_percentage">
                                    <i class="fa-solid fa-arrow-up fa-fw"></i>
                                    <div class="slider-one_percent">90<sub>%</sub></div>
                                    <div class="slider-one_percentage-text">efficiency</div>
                                </div>
                                <div class="slider-one_image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header1.webp" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Slide -->
            <div class="swiper-slide">
                <div class="slider-one_icon" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/icon-1.png)"></div>
                <div class="slider-one_icon-two" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/icon-1.png)"></div>
                <div class="slider-one_pattern" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/pattern-1.png)"></div>
                <div class="slider-one_pattern-two" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/pattern-2.png)"></div>
                <div class="slider-one_pattern-four" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/pattern-4.png)"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <!-- Content Column -->
                        <div class="slider-one_content col-lg-7 col-md-12 col-sm-12">
                            <div class="slider-one_content-inner">
<!--                                 <div class="slider-one_title">
                                    <i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/hand.png" alt="" /></i>
                                    AI makes content fast & easy
                                </div> -->
                                <h1 class="slider-one_heading">Empowering Your Business <span>with Innovative</span> IT Solutions</h1>
                                <div class="slider-one_text">Unlock the potential of your business with Intact One Solution’s expertise in IT services tailored for growth and efficiency.</div>
                                <div class="slider-one_button d-flex align-items-center flex-wrap">
                                    <a href="about.html" class="template-btn btn-style-one">
                                        <span class="btn-wrap">
                                            <span class="text-one">Let’s Transform Together</span>
                                            <span class="text-two">Let’s Transform Together</span>
                                        </span>
                                    </a>
<!--                                     <div class="slider-one_video">
                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-video play-box"><span class="fa fa-play"></span></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- Image Column -->
                        <div class="slider-one_image-column col-lg-5 col-md-12 col-sm-12">
                            <div class="slider-one_pattern-three" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/pattern-3.png)"></div>
                            <div class="slider-one_image-outer">
                                <!-- Slider One Author -->
<!--                                 <div class="slider-one_author">
                                    <i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/icon-2.png" alt="" /></i>
                                    <h5 class="slider-one_author-name">Sara Ven</h5>
                                    <div class="slider-one_author-text">Social media manager</div>
                                </div> -->
                                <!-- Slider One Percent -->
                                <div class="slider-one_percentage">
                                    <i class="fa-solid fa-arrow-up fa-fw"></i>
                                    <div class="slider-one_percent">90<sub>%</sub></div>
                                    <div class="slider-one_percentage-text">efficiency</div>
                                </div>
                                <div class="slider-one_image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header2.webp" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide -->
            <div class="swiper-slide">
                <div class="slider-one_icon" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/icon-1.png)"></div>
                <div class="slider-one_icon-two" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/icon-1.png)"></div>
                <div class="slider-one_pattern" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/pattern-1.png)"></div>
                <div class="slider-one_pattern-two" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/pattern-2.png)"></div>
                <div class="slider-one_pattern-four" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/pattern-4.png)"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <!-- Content Column -->
                        <div class="slider-one_content col-lg-7 col-md-12 col-sm-12">
                            <div class="slider-one_content-inner">
<!--                                 <div class="slider-one_title">
                                    <i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/hand.png" alt="" /></i>
                                    AI makes content fast & easy
                                </div> -->
                                <h1 class="slider-one_heading">Empowering Your Business <span>with Innovative</span> IT Solutions</h1>
                                <div class="slider-one_text">Unlock the potential of your business with Intact One Solution’s expertise in IT services tailored for growth and efficiency.</div>
                                <div class="slider-one_button d-flex align-items-center flex-wrap">
                                    <a href="about.html" class="template-btn btn-style-one">
                                        <span class="btn-wrap">
                                            <span class="text-one">Let’s Transform Together</span>
                                            <span class="text-two">Let’s Transform Together</span>
                                        </span>
                                    </a>
<!--                                     <div class="slider-one_video">
                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-video play-box"><span class="fa fa-play"></span></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- Image Column -->
                        <div class="slider-one_image-column col-lg-5 col-md-12 col-sm-12">
                            <div class="slider-one_pattern-three" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/pattern-3.png)"></div>
                            <div class="slider-one_image-outer">
                                <!-- Slider One Author -->
<!--                                 <div class="slider-one_author">
                                    <i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/icon-2.png" alt="" /></i>
                                    <h5 class="slider-one_author-name">Sara Ven</h5>
                                    <div class="slider-one_author-text">Social media manager</div>
                                </div> -->
                                <!-- Slider One Percent -->
                                <div class="slider-one_percentage">
                                    <i class="fa-solid fa-arrow-up fa-fw"></i>
                                    <div class="slider-one_percent">90<sub>%</sub></div>
                                    <div class="slider-one_percentage-text">efficiency</div>
                                </div>
                                <div class="slider-one_image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header3.webp" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- End Main Slider Section -->

<!-- About One -->
<section class="about-one">
    <div class="about-one_pattern" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/about-pattern.png)"></div>
    <div class="about-one_icon" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/about-1.png)"></div>
    <div class="about-one_icon-two" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/about-2.png)"></div>
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Tab Column -->
            <div class="about-one_tab-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="about-one_tab-outer">
                    <div class="about-one_tab-shadow" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/tab-shadow.png)"></div>
                    <div class="about-one_tab-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.webp" alt="" />
                    </div>
                </div>
            </div>

            <!-- Tab Column -->
            <div class="about-one_content-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="about-one_content-outer">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="sec-title_title">About us</div>
                        <h2 class="sec-title_heading">Innovation-Fueled <span>Digital </span>Solutions</h2>
                    </div>
                    <p>Intact One Solution is more than just a digital services company. We help businesses grow across the
Middle East. We provide businesses with the unique solutions they need to succeed because we have
over a decade of experience and a deep understanding of the communities they serve. We specialize in
building websites, making apps, SEO, and logos. All of these skills are geared towards long-term growth
and new ideas.</p>

                    <div class="about-one_options d-flex align-items-center flex-wrap">
                        <a href="/about-us" class="template-btn btn-style-one">
                            <span class="btn-wrap">
                                <span class="text-one">Learn More About Us</span>
                                <span class="text-two">Learn More About Us</span>
                            </span>
                        </a>
                        <div class="about-one_rating-box d-flex align-items-center flex-wrap">
                            4.7
                            <div class="about-one_rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <i>Customer rating</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End About One -->



<!-- Services One -->
<section class="services-one">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="sec-title_title">Our Service</div>
            <h2 class="sec-title_heading">Our Expertise, <br> <span>Your Success</span></h2>
        </div>
        <div class="row clearfix">

            <!-- Service Block One -->
            <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                <div class="service-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="service-block_one-icon">
                        <i class="icon-speaker1"></i>
                    </div>
                    <h5 class="service-block_one-heading"><a href="<?php echo get_template_directory_uri(); ?>/service-detail.html">Website Design and Development</a></h5>
                    <div class="service-block_one-text">Our outstanding mobile websites are beautiful to look at and easy for people to use. Our website design
and creation services will help your company stand out and connect with people.</div>
                    <div class="lower-box d-flex justify-content-between align-items-center flex-wrap">
                        <div class="service-block_one-number">01</div>
                        <a class="service-block_one-join" href="<?php echo get_template_directory_uri(); ?>/service-detail.html">Join now <i class="fa-solid fa-plus fa-fw"></i></a>
                    </div>
                </div>
            </div>

            <!-- Service Block One -->
            <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                <div class="service-block_one-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="service-block_one-icon">
                        <i class="icon-marketing"></i>
                    </div>
                    <h5 class="service-block_one-heading"><a href="<?php echo get_template_directory_uri(); ?>/service-detail.html">Mobile App Development</a></h5>
                    <div class="service-block_one-text">We make personalized apps for mobile devices that are easy to use, fun, and useful. Our app creation
services help businesses succeed in a world where mobile phones are the primary way people use the
internet.</div>
                    <div class="lower-box d-flex justify-content-between align-items-center flex-wrap">
                        <div class="service-block_one-number">02</div>
                        <a class="service-block_one-join" href="<?php echo get_template_directory_uri(); ?>/service-detail.html">Join now <i class="fa-solid fa-plus fa-fw"></i></a>
                    </div>
                </div>
            </div>

<!-- Service Block One -->
            <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                <div class="service-block_one-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="service-block_one-icon">
                        <i class="icon-tag"></i>
                    </div>
                    <h5 class="service-block_one-heading"><a href="<?php echo get_template_directory_uri(); ?>/service-detail.html">Branding & Graphic Design
</a></h5>
                    <div class="service-block_one-text">
					Brand identity is the cornerstone of business success. Our branding and graphic design services offer end-to-end solutions, including brand strategy, print design, and marketing collateral. 
					</div>
                    <div class="lower-box d-flex justify-content-between align-items-center flex-wrap">
                        <div class="service-block_one-number">03</div>
                        <a class="service-block_one-join" href="<?php echo get_template_directory_uri(); ?>/service-detail.html">Join now <i class="fa-solid fa-plus fa-fw"></i></a>
                    </div>
                </div>
            </div>

            <!-- Service Block One -->
            <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                <div class="service-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="service-block_one-icon">
                        <i class="icon-copyright"></i>
                    </div>
                    <h5 class="service-block_one-heading"><a href="<?php echo get_template_directory_uri(); ?>/service-detail.html">SMM (Social Media Marketing)</a></h5>
                    <div class="service-block_one-text">Our SMM strategies help you build an online community, get more people to interact with it, and drive
more focused traffic. We create and manage materials for all your primary social media accounts to
strengthen your profiles.
</div>
                    <div class="lower-box d-flex justify-content-between align-items-center flex-wrap">
                        <div class="service-block_one-number">04</div>
                        <a class="service-block_one-join" href="<?php echo get_template_directory_uri(); ?>/service-detail.html">Join now <i class="fa-solid fa-plus fa-fw"></i></a>
                    </div>
                </div>
            </div>

			            <!-- Service Block One -->
            <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                <div class="service-block_one-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="service-block_one-icon">
                        <i class="icon-users"></i>
                    </div>
                    <h5 class="service-block_one-heading"><a href="<?php echo get_template_directory_uri(); ?>/service-detail.html">SEO & Content Writing
</a></h5>
                    <div class="service-block_one-text">
						We offer comprehensive SEO services and content writing that enhance your online visibility. Our strategies include on-page SEO, link building, technical SEO, and keyword-optimized content creation to boost your rankings.

						</div>
                    <div class="lower-box d-flex justify-content-between align-items-center flex-wrap">
                        <div class="service-block_one-number">05</div>
                        <a class="service-block_one-join" href="<?php echo get_template_directory_uri(); ?>/service-detail.html">Join now <i class="fa-solid fa-plus fa-fw"></i></a>
                    </div>
                </div>
            </div>
            

            <!-- Service Block Two -->
            <div class="service-block_two col-lg-4 col-md-6 col-sm-12">
                <div class="service-block_two-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="service-block_two-sideicon" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/service-1.png)"></div>
                    <div class="service-block_two-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/service.png" alt="" />
                    </div>
                    <h5 class="service-block_two-heading"><a href="<?php echo get_template_directory_uri(); ?>/service-detail.html">More service</a></h5>
                    <div class="service-block_two-text">Check out our all services</div>
                    <div class="service-block_two-button">
                        <a href="/services" class="template-btn btn-style-one">
                            <span class="btn-wrap">
                                <span class="text-one">learn more</span>
                                <span class="text-two">learn more</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Services One -->




<!-- Choose One -->
<section class="choose-one">
    <div class="auto-container">
        <div class="inner-container">
            <!-- Sec Title -->
            <div class="sec-title light centered">
                <div class="sec-title_title">Why choose us</div>
                <h2 class="sec-title_heading">Proven Results, <br> <span>Unmatched Expertise</span></h2>
            </div>
            <div class="row clearfix">

                <!-- Counter Block One -->
                <div class="counter-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="counter-block_one-count"><span class="odometer" data-count="99"></span><i>%</i></div>
                        <div class="counter-block_one-text"><span style="color: white; font-size: 2.5vh; font-weight: 600;">Customer Satisfaction:</span><br>
							Our customers consistently rate our service highly.</div>
                    </div>
                </div>

                <!-- Counter Block One -->
                <div class="counter-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                        <div class="counter-block_one-count"><span class="odometer" data-count="98"></span><i>%</i></div>
                        <div class="counter-block_one-text"><span style="color: white; font-size: 2.5vh; font-weight: 600;">On-time Completion:</span><br>
							We deliver results on time while maintaining quality.</div>
                    </div>
                </div>

                <!-- Counter Block One -->
                <div class="counter-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="counter-block_one-count"><span class="odometer" data-count="100"></span><i>%</i></div>
                        <div class="counter-block_one-text"><span style="color: white; font-size: 2.5vh; font-weight: 600;">Repeat Business:</span><br>
							A large portion of our business comes from repeat customers.</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Choose One -->


<!-- Answer One -->
<section class="answer-one">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Tab Column -->
            <div class="answer-one_title-column col-lg-5 col-md-12 col-sm-12">
                <div class="answer-one_title-outer">
                    <!-- Sec Title -->
                    <div class="sec-title title-anim">
                        <div class="sec-title_title">Our Proven Process:</div>
                        <h2 class="sec-title_heading">A Streamlined Approach That <span>Ensures Success</span></h2>
                    </div>
                    <ul class="answer-one_list">
                        <li><i class="fa-solid fa-check fa-fw"></i>Discovery: We truly understand your business to learn more.</li>
                        <li><i class="fa-solid fa-check fa-fw"></i>Strategy: Develop a plan that works for you.</li>
                        <li><i class="fa-solid fa-check fa-fw"></i>Design: Make forms that are easy to use and fun to use.</li>
						<li><i class="fa-solid fa-check fa-fw"></i>Development: Use cutting-edge technology to bring your ideas to life.</li>
						<li><i class="fa-solid fa-check fa-fw"></i>Optimize: Make small changes to get the best results.</li>
						<li><i class="fa-solid fa-check fa-fw"></i>Support: Help you can trust to keep your business growing.
</li>
                    </ul>
                    <div class="answer-one_button">
                        <a href="<?php echo get_template_directory_uri(); ?>/about.html" class="template-btn btn-style-one">
                            <span class="btn-wrap">
                                <span class="text-one">Know more</span>
                                <span class="text-two">Know more</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tab Column -->
            <div class="answer-one_content-column col-lg-7 col-md-12 col-sm-12">
                <div class="answer-one_content-outer">
                    <div class="answer-one_pattern" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/faq-shadow.png)"></div>
                    <div class="answer-one_image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/process.webp" alt="" />
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Answer One -->

<!-- Testimonial One -->
<section class="testimonial-one">
    <div class="auto-container">
        <div class="inner-container" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/testimonial-one_bg.png)">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">Testimonials</div>
                <h2 class="sec-title_heading">Hear From Our <br> <span>clients</span></h2>
            </div>
            <div class="three-item_carousel swiper-container">
                <div class="swiper-wrapper">

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Testimonial Block One -->
                        <div class="testimonial-block_one">
                            <div class="testimonial-block_one-inner">
                                <div class="testimonial-block_one-rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="testimonial-block_one-text">“Intact One Solution completely redesigned our website and got great SEO results.” Highly
recommended! ”</div>
                                <div class="testimonial-block_one-author_box">
                                    <div class="testimonial-block_one-author-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial1.png" alt="" />
                                    </div>
                                    Middle East <span>Business Client</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Testimonial Block One -->
                        <div class="testimonial-block_one">
                            <div class="testimonial-block_one-inner">
                                <div class="testimonial-block_one-rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="testimonial-block_one-text">Their app development exceeded our expectations and was completed on time and budget.</div>
                                <div class="testimonial-block_one-author_box">
                                    <div class="testimonial-block_one-author-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial2.png" alt="" />
                                    </div>
                                     CEO <span>Fintech Company.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <!-- Testimonial Block One -->
                        <div class="testimonial-block_one">
                            <div class="testimonial-block_one-inner">
                                <div class="testimonial-block_one-rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="testimonial-block_one-text">Our search rankings have skyrocketed due to their professional SEO strategy.</div>
                                <div class="testimonial-block_one-author_box">
                                    <div class="testimonial-block_one-author-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial3.png" alt="" />
                                    </div>
                                    E-commerce <span>Marketing Manager.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- If we need pagination -->
                <div class="three-item_carousel-pagination"></div>

            </div>

        </div>
    </div>
</section>
<!-- End Testimonial One -->




<!-- Price One -->
<section class="price-one">
    <div class="price-one_bg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/price-bg.png)"></div>
    <div class="auto-container">
        <div class="inner-container">
            <!-- Sec Title -->
            <div class="sec-title title-anim centered">
                <div class="sec-title_title">Our Pricing</div>
                <h2 class="sec-title_heading">You can find a <span>cheap plan </span>that works for your business</h2>
            </div>
            <div class="pricing-tabs tabs-box">
                
                <!-- Tab Btns -->
                <div class="buttons-outer">
                    <ul class="tab-buttons clearfix">
                        <li data-tab="#prod-monthly" class="tab-btn active-btn">Monthly</li>
                        <li data-tab="#prod-yearly" class="tab-btn">Yearly</li>
                    </ul>
                </div>

                <!-- Tabs Container -->
                <div class="tabs-content">
                    
                    <!-- Tab -->
                    <div class="tab active-tab" id="prod-monthly">
                        <div class="content">
                            <div class="row clearfix">
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Starter</div>
                                        <div class="price-block_one-subtitle">Up to 2,000 words / mo</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>3<sub>/mo</sub></div>
                                                <div class="price-block_one-text">*Get Braine tailored</div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button" href="#">Start 1 month free trial</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>Up to 10,000 words</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to basic tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to AI copywriting tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Email support only</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Advance 700+ tools</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Price Block One -->
                                <div class="price-block_one active col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-one_stars" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/price-stars.png)"></div>
                                        <div class="price-block_one-title">Professional</div>
                                        <div class="price-block_one-subtitle">Up to 10,000 words / mo</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>9<sub>/mo</sub></div>
                                                <div class="price-block_one-text">*Get Braine tailored</div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button" href="#">Start 1 month free trial</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>Up to 10,000 words</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to basic tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to AI copywriting tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Email support only</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Advance 700+ tools</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Enterprise</div>
                                        <div class="price-block_one-subtitle">Up to 10,000 words / mo</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>18<sub>/mo</sub></div>
                                                <div class="price-block_one-text">*Get Braine tailored</div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button" href="#">Start 1 month free trial</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>Up to 10,000 words</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to basic tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to AI copywriting tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Email support only</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Advance 700+ tools</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Tab -->
                    <div class="tab" id="prod-yearly">
                        <div class="content">
                            <div class="row clearfix">
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Starter</div>
                                        <div class="price-block_one-subtitle">Up to 2,000 words / mo</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>3<sub>/mo</sub></div>
                                                <div class="price-block_one-text">*Get Braine tailored</div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button" href="#">Start 1 month free trial</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>Up to 10,000 words</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to basic tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to AI copywriting tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Email support only</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Advance 700+ tools</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Price Block One -->
                                <div class="price-block_one active col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-one_stars" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/price-stars.png)"></div>
                                        <div class="price-block_one-title">Professional</div>
                                        <div class="price-block_one-subtitle">Up to 10,000 words / mo</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>9<sub>/mo</sub></div>
                                                <div class="price-block_one-text">*Get Braine tailored</div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button" href="#">Start 1 month free trial</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>Up to 10,000 words</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to basic tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to AI copywriting tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Email support only</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Advance 700+ tools</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Enterprise</div>
                                        <div class="price-block_one-subtitle">Up to 10,000 words / mo</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>18<sub>/mo</sub></div>
                                                <div class="price-block_one-text">*Get Braine tailored</div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button" href="#">Start 1 month free trial</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>Up to 10,000 words</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to basic tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Access to AI copywriting tools</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Email support only</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Advance 700+ tools</li>
                                            </ul>
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
    <!-- End Price One -->



<!-- Faq One -->
<section class="faq-one">
    <div class="faq-one_bg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/faq-bg.png)"></div>
    <div class="faq-one_icon" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/icons/step.png)"></div>
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Tab Column -->
            <div class="faq-one_title-column col-lg-5 col-md-12 col-sm-12">
                <div class="faq-one_title-outer">
                    <!-- Sec Title -->
                    <div class="sec-title title-anim">
                        <div class="sec-title_title">FAQ</div>
                        <h2 class="sec-title_heading">We’ve got your questions <span>answered</span></h2>
						<div class="sec-title_text">At Intact One Solution, we provide straightforward, easy-to-understand answers to your IT service questions. Our FAQ section is designed to empower you to make informed choices for your business with confidence. Explore our expertise, and let us help you find the right solutions to drive your business forward efficiently.</div>
                    </div>
                    <div class="faq-one_button">
                        <a href="<?php echo get_template_directory_uri(); ?>/contact.html" class="template-btn btn-style-one">
                            <span class="btn-wrap">
                                <span class="text-one">Contact now</span>
                                <span class="text-two">Contact now</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Accordion Column -->
            <div class="faq-one_accordian-column col-lg-7 col-md-12 col-sm-12">
                <div class="faq-one_accordian-outer">

                    <!-- Accordion Box -->
                    <ul class="accordion-box_two">
                        
                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>What can you offer?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">e offer a full range of digital services, including web design, SEO, app development, branding, and pay-per-click (PPC)</div>
                                </div>
                            </div>
                        </li>
                                    
                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>How long does the average job take?
</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Most projects are completed between 4 and 12 weeks, depending on the size and scope of the project.</div>
                                </div>
                            </div>
                        </li>

                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>Can I trust the content generated by AI?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Our AI copywriting tool uses sophisticated algorithms to understand context, tone, and language nuances. Users input specific details or prompts, and the AI generates high-quality content based on that input, refining.</div>
                                </div>
                            </div>
                        </li>

                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>Do you offer post-launch help?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Yes, our ongoing help ensures your digital Solution continues to run well after launch.</div>
                                </div>
                            </div>
                        </li>

                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>How do you price?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">We offer one-time and recurring prices so you can choose the option that works best for you.</div>
                                </div>
                            </div>
                        </li>
						
						<!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa-solid fa-plus fa-fw"></span></div>Can you handle enormous projects?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Of course. We know how to handle any job of any size and have the resources.</div>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Faq One -->

<!-- Social One -->
<section class="social-one">
    <div class="social-one_bg-shadow" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/social-bg.png)"></div>
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="sec-title_title">Integrations</div>
            <h2 class="sec-title_heading">Incorporate our tool into <br> <span>your everyday tasks</span></h2>
        </div>
        <div class="social-one_logo">
            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo2.svg" alt="" /></span>
        </div>
        <div class="inner-container">
            <div class="social-one_bg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/social-one_pattern.png)"></div>
            <div class="social-one_bg-two" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/social-one_pattern-two.png)"></div>
            
            <div class="social-box_one">
                <div class="animation_mode">
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-1.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-2.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-3.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-4.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-5.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-6.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-7.png" alt="" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="social-box">
                <div class="animation_mode_two">
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-8.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-9.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-10.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-11.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-12.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-13.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-14.png" alt="" />
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Social One -->

<!-- News One -->
<section class="news-one">
    <div class="news-one_shadow" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/news-shadow-1.png)"></div>
    <div class="news-one_shadow-two" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/news-shadow-2.png)"></div>
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title title-anim centered">
            <div class="sec-title_title">Our Blog</div>
            <h2 class="sec-title_heading">Stay ahead with the latest <span> digital innovations</span></h2>
        </div>
        <div class="three-item_carousel swiper-container">
            <div class="swiper-wrapper">

                <!-- Slide -->
                <div class="swiper-slide">
                    <!-- News Block One -->
                    <div class="news-block_one">
                        <div class="news-block_one-inner">
                            <div class="news-block_one-image">
                                <a href="news-detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog1.webp" alt="" /></a>
                            </div>
                            <div class="news-block_one-content">
                                <h5 class="news-block_one-title"><a href="news-detail.html">Transforming industries and shaping the future</a></h5>
                                <div class="news-block_one-text">Lorem ipsum dolor sit amet consectetur adipiscing vitae mattis tellus. Nullam quis mattis ligula consectetur.</div>
                                <div class="news-block_one-button">
                                    <a href="blog.html" class="template-btn btn-style-two">
                                        <span class="btn-wrap">
                                            <span class="text-one">Read more</span>
                                            <span class="text-two">Read more</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide">
                    <!-- News Block One -->
                    <div class="news-block_one">
                        <div class="news-block_one-inner">
                            <div class="news-block_one-image">
                                <a href="news-detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog2.webp" alt="" /></a>
                            </div>
                            <div class="news-block_one-content">
                                <h5 class="news-block_one-title"><a href="news-detail.html">Exploring the cutting-edge of artificial intelligence</a></h5>
                                <div class="news-block_one-text">Lorem ipsum dolor sit amet consectetur adipiscing vitae mattis tellus. Nullam quis mattis ligula consectetur.</div>
                                <div class="news-block_one-button">
                                    <a href="blog.html" class="template-btn btn-style-two">
                                        <span class="btn-wrap">
                                            <span class="text-one">Read more</span>
                                            <span class="text-two">Read more</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide">
                    <!-- News Block One -->
                    <div class="news-block_one">
                        <div class="news-block_one-inner">
                            <div class="news-block_one-image">
                                <a href="news-detail.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog3.webp" alt="" /></a>
                            </div>
                            <div class="news-block_one-content">
                                <h5 class="news-block_one-title"><a href="news-detail.html">Understanding the basics of artificial intelligence</a></h5>
                                <div class="news-block_one-text">Lorem ipsum dolor sit amet consectetur adipiscing vitae mattis tellus. Nullam quis mattis ligula consectetur.</div>
                                <div class="news-block_one-button">
                                    <a href="blog.html" class="template-btn btn-style-two">
                                        <span class="btn-wrap">
                                            <span class="text-one">Read more</span>
                                            <span class="text-two">Read more</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- If we need pagination -->
            <div class="three-item_carousel-pagination"></div>
        </div>
    </div>
</section>
<!-- End News One -->


<?php
get_footer();
?>
