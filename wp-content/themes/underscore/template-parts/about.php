<?php
/*
Template Name: About Us*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>About us - IOS</title>
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
        <h2>About us</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="/home">Home</a></li>
            <li>About us</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journey.svg" alt="" />
                    </div>
                </div>
            </div>

            <!-- Tab Column -->
            <div class="about-one_content-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="about-one_content-outer">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="sec-title_title">Our Journey</div>
                        <h2 class="sec-title_heading">Empowering Your Business Through <span>Innovation</span></h2>
                    </div>
                    <p>At Intact One Solution, our journey began with a passion for digital transformation and a 
commitment to delivering cutting-edge solutions. Since our inception, we’ve embraced 
innovation and AI-driven technology, helping businesses across industries thrive in the ever evolving digital landscape. Our mission is to bridge the gap between businesses and 
technological advancements, crafting solutions that are both forward-thinking and impactful.</p>


                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End About One -->

<!-- Value One -->
<section class="value-one">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title style-four centered">
            <div class="sec-title_title">core value</div>
            <h2 class="sec-title_heading">Unveiling our <span>core values</span> <br> for lasting impact.</h2>
        </div>
        <div class="row clearfix">

            <!-- Value Block One -->
            <div class="value-block_one col-lg-4 col-md-6 col-sm-12">
                <div class="value-block_one-inner">
                    <div class="value-block_one-icon">
                        <i class="icon-users-4"></i>
                    </div>
                    <h5 class="value-block_one-title">People</h5>
                    <div class="value-block_one-text">Our clients and users are at the core of everything we do. We are committed to 
understanding their needs and delivering beyond expectations.</div>
                </div>
            </div>

            <!-- Value Block One -->
            <div class="value-block_one active col-lg-4 col-md-6 col-sm-12">
                <div class="value-block_one-inner">
                    <div class="value-block_one-icon">
                        <i class="icon-bulb1"></i>
                    </div>
                    <h5 class="value-block_one-title">Innovation</h5>
                    <div class="value-block_one-text">We continuously evolve, adopting the latest technologies and techniques to offer 
innovative solutions that drive business success.</div>
                </div>
            </div>

            <!-- Value Block One -->
            <div class="value-block_one col-lg-4 col-md-6 col-sm-12">
                <div class="value-block_one-inner">
                    <div class="value-block_one-icon">
                        <i class="fa-solid fa-bullseye fa-fw"></i>
                    </div>
                    <h5 class="value-block_one-title">Mission</h5>
                    <div class="value-block_one-text">Every project we undertake is focused on delivering results. We approach 
challenges with solutions that align with our clients’ goals.</div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Value One -->

<!-- Team One -->
<section class="team-one">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Title Column -->
            <div class="team-one_title-column col-lg-4 col-md-12 col-sm-12">
                <div class="team-one_title-outer">
                    <!-- Sec Title -->
                    <div class="sec-title style-four">
                        <div class="sec-title_title">Showcasing Our Expertise</div>
                        <h2 class="sec-title_heading">Bringing Your <span>Vision to Life</span></h2>
                        <div class="sec-title_text">At Intact One Solution, our portfolio highlights our commitment to quality and innovation. We’ve collaborated with clients from various industries, including technology, healthcare, and e-commerce, transforming their visions into successful outcomes. Explore our projects to see how our expertise can bring your ideas to life.</div>
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
                            
                            



                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Team One -->


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
                        <a href="<?php echo get_template_directory_uri(); ?>/services" class="template-btn btn-style-one">
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
                <h2 class="sec-title_heading">You can find a <span>cheap plan </span></h2>
            </div>
            <div class="pricing-tabs tabs-box">
                
                     <!-- Tab Btns -->
              
                    <ul class="tab-buttons clearfix">
                        <li data-tab="#web" class="tab-btn active-btn">Web Development</li>
                        <li data-tab="#app" class="tab-btn">App Development</li>
                          <li data-tab="#logo" class="tab-btn">Logo Design</li>
                             <li data-tab="#animation" class="tab-btn">Animation</li>
						<li data-tab="#illustration" class="tab-btn">Illustration</li>
                             <li data-tab="#branding" class="tab-btn">Branding</li>
                             <li data-tab="#saas" class="tab-btn">SaaS</li>
                             <li data-tab="#seo" class="tab-btn">SEO</li>
						     <li data-tab="#smm" class="tab-btn">SMM</li>
                    </ul>
      

                <!-- Tabs Container -->
                <div class="tabs-content">
                    
                    <!-- Tab -->
                    <div class="tab active-tab" id="web">
                        <div class="content">
                            <div class="row clearfix">
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Startup Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>249.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button call-btn" data-product_id="120">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>5-page website.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>5 stock photos.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Responsive design (Mobile-friendly).</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Basic SEO setup.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>1-month maintenance support.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                                  <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Silver Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>374.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="121">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>10-page website.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>CMS (Content Management System).</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>8 stock photos</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>On-page SEO optimization.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 months maintenance.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Gold Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>699.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="122">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>15-page custom website.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Custom forms and payment integration.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Advanced SEO setup.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>3 months support and updates.</li>
												<li><i class=""></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
								
								</div>
								</div>
							</div>
								
								
                                
                       <!-- App Tab -->
                    <div class="tab" id="app">
                        <div class="content">
                            <div class="row clearfix">
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Startup Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>749.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button call-btn" data-product_id="123">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>Basic 5-page app.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>1 platform (iOS or Android).</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>1-month post-launch support.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Basic user interface (UI).</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                                  <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Silver Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>1449.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="124">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>10-page app.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>CMS integration for content updates.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 platforms (iOS & Android).</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 months support.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Gold Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>2499.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="125">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>20-page app with admin panel.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Advanced user authentication.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Push notifications integration.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>3 months support with app updates.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
								
								</div>
								</div>
							</div>
					
					
					
					                       <!-- Logo Tab -->
                    <div class="tab" id="logo">
                        <div class="content">
                            <div class="row clearfix">
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                                                            <div class="price-block_one-title">Startup Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>29.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="126">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 logo concepts.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 rounds of revisions.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>High-resolution final files.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                                  <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Silver Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>49.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button call-btn" data-product_id="127">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>4 logo concepts.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Free icon design.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Grayscale and color formats.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Gold Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>75.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button call-btn" data-product_id="128">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                    <li><i class="fa-solid fa-check fa-fw"></i>6 concepts with unlimited revisions.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Business card design.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Social media logo assets.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
								
								</div>
								</div>
							</div>
					
		
						
					  <!-- animation Tab -->
                    <div class="tab" id="animation">
                        <div class="content">
                            <div class="row clearfix">
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                                                            <div class="price-block_one-title">Startup Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>334.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button call-btn" data-product_id="129">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>30-second animated video.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Professional scriptwriting.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>3 revisions.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                                  <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Silver Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>649.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="130">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>60-second video.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Custom storyboard development.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 rounds of revisions.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Gold Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>999.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button call-btn" data-product_id="131">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                    <li><i class="fa-solid fa-check fa-fw"></i>90-second animated video.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Unlimited revisions.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Full voiceover and sound effects.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
								
								</div>
								</div>
							</div>

					
										  <!-- illustration Tab -->
                    <div class="tab" id="illustration">
                        <div class="content">
                            <div class="row clearfix">
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                                                            <div class="price-block_one-title">Startup Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>149.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="132">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>1 illustration concept.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 revisions.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Files in multiple formats (JPEG, PNG, SVG).</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                                  <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Silver Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>179.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="133">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 illustration concepts.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>3 rounds of revisions.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Custom artwork tailored to brand style.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Gold Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>269.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                             <a class="template-btn price-one_button call-btn" data-product_id="134">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Unlimited illustration concepts.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>4 revisions.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Final files in print and digital formats</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
								
								</div>
								</div>
							</div>
					
					
					
										  <!-- branding Tab -->
                    <div class="tab" id="branding">
                        <div class="content">
                            <div class="row clearfix">
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                                                            <div class="price-block_one-title">Startup Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>49.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                                  <a class="template-btn price-one_button call-btn" data-product_id="136">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 stationery designs (Letterhead, Business card).</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 revisions.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Print-ready formats.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                                  <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Silver Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>99.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                                  <a class="template-btn price-one_button call-btn" data-product_id="137">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>Stationery + flyer/brochure design.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>4 revisions.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Custom color scheme and typography.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Gold Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>199.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                                 <a class="template-btn price-one_button call-btn" data-product_id="138">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                    <li><i class="fa-solid fa-check fa-fw"></i>Packaging design.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>T-shirt design.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Complete branding kit (logos, fonts, color codes)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
								
								</div>
								</div>
							</div>
					
					
  						<!-- saas Tab -->
                    <div class="tab" id="saas">
                        <div class="content">
                            <div class="row clearfix">
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                                                            <div class="price-block_one-title">Startup Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>899<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="140">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>1 admin user.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Up to 1,000 active users.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Basic dashboard and reporting.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                                  <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Silver Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>1424<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                             <a class="template-btn price-one_button call-btn" data-product_id="141">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 admin users.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Up to 5,000 users.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Priority technical support.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Gold Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>2999<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                            <a class="template-btn price-one_button call-btn" data-product_id="142">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                    <li><i class="fa-solid fa-check fa-fw"></i>5 admin users</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Up to 10,000 users.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>24/7 support with cloud hosting.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
								
								</div>
								</div>
							</div>
					
	
  						<!-- seo Tab -->
                    <div class="tab" id="seo">
                        <div class="content">
                            <div class="row clearfix">
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                                                            <div class="price-block_one-title">Startup Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>199.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                           <a class="template-btn price-one_button call-btn" data-product_id="143">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>Optimization for 25 keywords.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>On-page SEO (meta tags, alt text).</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Monthly performance reporting.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Basic site speed optimization.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                                  <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Silver Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>299.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                           <a class="template-btn price-one_button call-btn" data-product_id="144">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>Optimization for 35 keywords.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Guest blog outreach.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Speed and mobile optimization.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Local SEO integration.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Gold Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>349.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                            <a class="template-btn price-one_button call-btn" data-product_id="145">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>45 keywords with competitor analysis.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Blog writing and content acquisition.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Full on-page, off-page SEO.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Monthly backlink building.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
								
								</div>
								</div>
							</div>
					
					
		 						<!-- smm Tab -->
                    <div class="tab" id="smm">
                        <div class="content">
                            <div class="row clearfix">
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                                                            <div class="price-block_one-title">Startup Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>125<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="146">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>3 social media channels setup.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>1 post design.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Analytics setup.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                                  <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Silver Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>249.50<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                               <a class="template-btn price-one_button call-btn" data-product_id="148">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>2 channels.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>3 posts per week.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Editorial calendar and content strategy.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-4 col-md-6 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title">Gold Package</div>
                                        <div class="price-block_one-content">
                                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                                                <div class="price-block_one-price"><sup>$</sup>600<sub></sub></div>
                                            </div>
                                            <div class="price-block_one-button">
                                                <a class="template-btn price-one_button call-btn" data-product_id="149">Add To Cart</a>
                                            </div>
                                            <ul class="price-block_one-list">
                                                <li><i class="fa-solid fa-check fa-fw"></i>4 channels.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>3 posts per week.</li>
                                                <li><i class="fa-solid fa-check fa-fw"></i>Call-to-action (CTA) integration.</li>
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

		<!-- Team Detail Form -->
	<section class="team-detail_form">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<!-- Sec Title -->
					<div class="sec-title style-four">
						<div class="sec-title_title">CONTACT US</div>
						<h2 class="sec-title_heading">Let’s Bring Your<br><span>Ideas to Life!</span></h2>
						<div class="sec-title_text">At Intact One Solution, we’re always looking to partner with businesses that are ready to embrace digital transformation. Whether you’re looking to enhance your online presence or develop a custom solution, our team is here to help. Join us on this journey towards innovation — let’s create something amazing together.</div>
					</div>
					<!-- Social Box -->
					<div class="contact-social_box">
						<a href="https://www.facebook.com/profile.php?id=61559727491503"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="https://www.linkedin.com/company/intact-one-solution/"><i class="fa-brands fa-linkedin"></i></a>
					</div>
				</div>
				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<div class="default-form contact-form">
					<form  method="post" action="" autocomplete="off" id="contact-form">
    <div class="row clearfix">
        <!--Form Group-->
        <div class="form-group col-lg-6 col-md-6 col-sm-6">
            <input type="text" id="name" name="name" value="" placeholder="Name" required>
        </div>
        <!--Form Group-->
        <div class="form-group col-lg-6 col-md-6 col-sm-6">
            <input type="email" id="email" name="email" value="" placeholder="Email" required>
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-6">
            <input type="text" id="phone" name="phone" value="" placeholder="Phone" required>
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-6">
            <input type="text" id="company" name="company" value="" placeholder="Company Name" required>
        </div>
        <!--Form Group-->
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <input type="text" id="service" name="service" value="" placeholder="Enter Service Name" required>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
            <textarea id="message" name="message" placeholder="Type comment here*"></textarea>
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <button type="submit" name="submit" class="template-btn btn-style-one">
                <span class="btn-wrap">
                    <span class="text-one">Send now</span>
                    <span class="text-two">Send now</span>
                </span>
            </button>
        </div>
    </div>
</form>
					</div>
				</div>
			</div>
		</div>
	</section>

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
                        <a href="<?php echo get_template_directory_uri(); ?>/contact-us" class="template-btn btn-style-one">
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
                                    <div class="text">We offer a full range of digital services, including web design, SEO, app development, branding, and pay-per-click (PPC)</div>
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
            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/abc.png" alt="" /></span>
        </div>
        <div class="inner-container">
            <div class="social-one_bg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/social-one_pattern.png)"></div>
            <div class="social-one_bg-two" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/social-one_pattern-two.png)"></div>
            
            <div class="social-box_one">
                <div class="animation_mode">
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/webflow.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/html.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/css.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/js.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/react.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/php.png" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/bootstrap.png" alt="" />
                        </a>
                    </div>
					 <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ts.png" alt="" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="social-box">
                <div class="animation_mode_two">
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/social-2.png" alt="" />
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/wp.webp" alt="" />
                        </a>
                    </div>
                    <!-- Icon -->
                    <div class="social_icon-box">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/shopify.png" alt="" />
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



<?php

get_footer();
?>
